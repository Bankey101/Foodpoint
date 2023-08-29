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
    $sql = "SELECT * FROM beverages";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>PRICE</td>
                <td>UPDATE_DRINK_NAME</td>
                <td>UPDATE_DRINK_PRICE</td>
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
                        <td>'.$rows["drink_name"].'</td>
                        <td><span>&#8358;</span>'.$rows["drink_price"].'</td>
                        <td>
                          <form action="updatebeverages.php" method="post">
                          <input type="text" name="tbev">
                          <input type="hidden"  value="'.$rows["id"].'" name="id">
                          <button>Enter</button></form>
                        </td>
                        <td>
                          <form action="updatebeverages_price.php" method="post">
                          <input type="text" name="tbevb">
                          <input type="hidden"  value="'.$rows["id"].'" name="id">
                          <button>Enter</button></form>
                        </td>
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