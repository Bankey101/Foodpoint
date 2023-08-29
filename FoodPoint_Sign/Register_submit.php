<?php 
$tmail =  $_POST["mail"];
$psw =  $_POST["psw"];
$text =  $_POST["lct"];
echo "<br>";

$dbconnect = mysqli_connect("localhost","root","","foodpoint");
// if($dbconnect){
//     echo "database connection successful";
// }
$dte = date("Y-m-d, h:i:sa");
$query  = "INSERT INTO users(user_email,user_psw,lct,date_registered) values('$tmail','$psw','$text','$dte')";
mysqli_query($dbconnect,$query);
echo "<br>";

echo '<div class="registeredalert" style="border:10px solid white;position:absolute ;margin:auto;width:30%;height:40%;box-shadow:0 0 20px black; left:35%;top:20%;border-top-left-radius: 20px;border-bottom-right-radius: 20px;overflow:hidden;">
    <p style="font-size:20px;font-weight:bolder;text-align:center;color:black;text-shadow:0 0 1px white;">You have successfully signed up</p>
      <a href="/FoodPoint/FoodPoint.php" style="text-align:center;font-size:20px;padding:10px;background-color: white;text-decoration:none;margin-left:160px;border-radius:15px;">Start Shopping</a>
    <p style="margin-bottom:500px;margin-top:50px;font-size:60px;font-weight:bolder;color: white;text-align: center;text-shadow:0 0 1px black">Welcome to FoodPoint</p>
     
</div>';
?>
