<?php
$idy = $_POST["id"];
$nqty = $_POST["txt"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE local_food SET food_name = '$nqty' WHERE id =$idy";
mysqli_query($connection,$sql);
echo "Food Name updated  successfully";

echo "<br>";
echo  '<a href="localfoods.php">Go back</a>'; 
?>