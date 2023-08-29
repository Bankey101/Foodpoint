<?php
$ida = $_POST["ida"];
$pric = $_POST["num"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE local_food SET food_price = '$pric' WHERE id =$ida";
mysqli_query($connection,$sql);
echo "Food Price updated  successfully";

echo "<br>";
echo  '<a href="localfoods.php">Go back</a>'; 
?>