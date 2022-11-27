<?php 
    //how to get values passed from signinform.html
    $username=$_POST['username'];
    $password=$_POST['password'];
    //connecting to the database
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"rameyeon");
    //how to prevent mysql injection
    // $username=stripcslashes($username);
    // $password=stripcslashes($password);
    // $email=stripcslashes($email);
    // $username=mysqli_real_escape_string($con,$username);
    // $password=mysqli_real_escape_string($con,$password);
    // $email=mysqli_real_escape_string($con,$email);

    //Query database for the user and if query failed display error message in case where username has been used to log in
    $result=mysqli_query( $con,"select * from users where Username ='$username'")
             or die("Failed to query database".mysqli_error($con));
             //Query database for the user and if query failed display error message in case where email has been used to log in
    
    $row=mysqli_fetch_array($result);
    
    if ($row['Username']==$username && $row['Password']==$password) 
             {
                $result3=mysqli_query( $con,"select * from users where Username='$username'")or die("Failed to query database".mysqli_error($con));
                while($row3=mysqli_fetch_array($result3))
                {
                    $result5=mysqli_query( $con,"select * from users where Username='$username'")or die("Failed to query database".mysqli_error($con)); 
             while($row5=mysqli_fetch_array($result5))
                {
                    $user_id=$row5[4];
                    $role= $row5[3];
                    session_start();
                    $_SESSION['user_id']=$user_id;

                    if ($role=="Average") {
                        header('Location:user_profile.php?username='.$username);
                    }
                    else{
                         header('Location:view_users.php?username='.$username);
                    exit();
                    }

                   
                } 

                    
                }
             } 
    else 
             {
             	echo"Access denied!!!";
             }
             
?> 