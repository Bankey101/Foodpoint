<?php
$idn = $_POST["id"];
$tbev = $_POST["tbev"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE beverages SET drink_name = '$tbev' WHERE id =$idn";
mysqli_query($connection,$sql);
echo "Drink Name updated  successfully";

echo "<br>";
echo  '<a href="beverages.php">Go back</a>'; 
?>