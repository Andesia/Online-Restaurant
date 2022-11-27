
<?php

require_once("connect.php");

if(isset($_POST['submitImage']))
{

$food_image= $_FILES["food-image"];
$foodname= $_POST["FoodName"];
$foodtype = $_POST["FoodType"];
$foodprice = $_POST["FoodPrice"];

echo "<pre>";
print_r ($food_image);
echo "</pre>";

//read image attributes
$original_file_name= $_FILES["food-image"] ["name"];
$file_tmp_location= $_FILES["food-image"] ["tmp_name"];

//read file location
$file_type= substr($original_file_name, strpos($original_file_name, '.'), strlen($original_file_name));

echo "<br>";
echo $original_file_name; echo "<br>";
echo $file_type; echo "<br>";
echo $file_tmp_location ; echo "<br>";

//define upload folder
$file_path= "images/";
$new_file_name= time().$file_type;

if(move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){

$sql6= "INSERT INTO product (originalname, file_path, food_name, food_type, price)VALUES ('$original_file_name','$new_file_name','$foodname','$foodtype', '$foodprice')";
echo $sql6;

mysqli_query($link, $sql6);
header("Location: admin_food.php");
  
}
}

?>

