
<?php

require_once("connect.php");

if(isset($_POST['register']))
{

$first_name= $_POST["fname"];
$second_name = $_POST["sname"];
$Type = $_POST["user_type"];
$Username = $_POST["uname"];
$Password= $_POST["pass"];
$Email_address = $_POST["email_address"];


$sql= "INSERT INTO users(FirstName, SecondName, UserType, Username, Password, Email)VALUES ('$first_name', '$second_name', '$Type', '$Username', '$Password', '$Email_address');";

mysqli_query($link, $sql);
header("Location: login.php");
        exit();

}

else if(isset($_POST['del']))
{

$first_name= $_POST["fname"];
$second_name = $_POST["sname"];
$Type = $_POST["user_type"];
$Username = $_POST["uname"];
$Password= $_POST["pass"];
$Email_address = $_POST["email_address"];
echo"Record has been deleted succesfully";
echo "<br><br>";

$sql4= "DELETE FROM users WHERE Username= $Username";

// $query= "SELECT FirstName, SecondName, UserType, Username, Password, Email FROM users";

mysqli_query($link, $sql4);
header("Location: view_users.php");
        exit();


}	       

else if(isset($_GET['Edit'])){
	echo "Data edited";
	echo "<br></br>";

	$sql3= "UPDATE users SET first_name= '$first_name', second_name=
	'$second_name', user_type= '$Type', Username= '$Username', Password= 
	'$Password', phone_number = '$Phone', email= '$Email_address', Date_of_Birth= '$DOB', Gender = '$Gender'";

	$query = "SELECT first_name, second_name, user_type, Username, Password, phone_number, email, Date_of_Birth, Gender FROM users";

	mysqli_query($link, $sql3);

	$result= mysqli_query($link, $query);

	while ($row= $result->fetch_assoc()) {
		echo "<tr> <td>".$row["first_name"]."</td> <td>".$row["second_name"]."</td> <td>".$row["user_type"]."</td> <td>".$row["Username"]."</td> <td>".$row["Password"]."</td> <td>".$row["phone_number"]."</td> <td>".$row["email"]."</td> <td>".$row["Date_of_Birth"]."</td> <td>".$row["Gender"]."</td> </tr>";
	}
	echo "</table>";
}





?>

