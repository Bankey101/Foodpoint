<?php
$idt = $_POST["id"];
$textb = $_POST["txtb"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE foreign_food SET food_name = '$textb' WHERE id =$idt";
mysqli_query($connection,$sql);
echo "Food Name updated  successfully";

echo "<br>";
echo  '<a href="foreignfoods.php">Go back</a>'; 
?>