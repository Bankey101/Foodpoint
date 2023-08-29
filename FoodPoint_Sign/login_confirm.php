<?php 
$mail = $_POST["email"];
$pswa = $_POST["psw1"];
$pswb = $_POST["psw2"];
echo "$mail";
echo "<br>";
echo "$pswa";
echo "<br>";
echo "$pswb";
echo "<br>";

$dbconnect = mysqli_connect("localhost","root","","foodpoint");
// if($dbconnect){
//     echo "database connection successful";
// }

$query = "SELECT * FROM users WHERE user_email='".$mail."' AND user_psw ='".$pswa."' AND user_psw ='".$pswb."'";
$result = mysqli_query($dbconnect,$query);
$num = mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "<br>";
if($num == 1){
    header("location:/FoodPoint/FoodPointMain.php");
}else{
   echo ' <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>';
}
?>