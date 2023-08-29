<?php
$idb = $_POST["id"];
$pri = $_POST["numb"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE foreign_food SET food_price = '$pri' WHERE id =$idb";
mysqli_query($connection,$sql);
echo "Food Price updated  successfully";

echo "<br>";
echo  '<a href="localfoods.php">Go back</a>'; 
?>