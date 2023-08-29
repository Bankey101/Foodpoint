<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localfoods</title>
</head>
<body>
    <h1>LIST</h1>
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","foodpoint");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM users";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>EMAIL</td>
                <td>PHONE NUMBER</td>
                <td>LOCATION</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                    <tr>
                        <td>'.$rows["id"].'</td>
                        <td>'.$rows["user_email"].'</td>
                        <td>'.$rows["phone_number"].'</td>
                        <td>'.$rows["lct"].'</td>
                    </tr>';
               }
            }
            ?>
        </tbody>
    </table>
    <?php
    echo "<br>";
echo  '<a href="localfoods.php">Check Local Foods</a>'; 
     echo "<br>";
echo  '<a href="foreignfoods.php">Check Foreign Foods</a>'; 
     echo "<br>";
echo  '<a href="toporder.php">Check Top Order</a>'; 
     echo "<br>";
echo  '<a href="MyUser.php">Check Web Users Profile</a>'; 
?>
</body>
</html>