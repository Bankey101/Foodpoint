<?php
$idn = $_POST["id"];
$tbevb = $_POST["tbevb"];
$connection = mysqli_connect("Localhost","root","","foodpoint");
$sql = "UPDATE beverages SET drink_price = '$tbevb' WHERE id =$idn";
mysqli_query($connection,$sql);
echo "Food Price updated  successfully";

echo "<br>";
echo  '<a href="beverages.php">Go back</a>'; 
?>