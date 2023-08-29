<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localfoods</title>
</head>
<body>
    <h1>LIST OF LOCAL FOODS</h1>
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","foodpoint");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM local_food";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>FOOD_NAME</td>
                <td>FOOD_PRICE</td>
                <td>UPDATE_FOOD_NAME</td>
                <td>UPDATE_FOOD_PRICE</td>
            </tr>
        </thead>
        <tbody>
   <form action="updatelocalfoods.php" method="post">
    <input type="id" hidden>
    <button>rgy</button>
   </form>
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                    <tr>
                        <td>'.$rows["id"].'</td>
                        <td>'.$rows["food_name"].'</td>
                        <td><span>&#8358;</span>'.$rows["food_price"].'</td>
                        
                        <td>
                          <form action="updatelocalfoods.php" method="post">
                             <input type="text" name="txt">
                             <input type="hidden"  value="'.$rows["id"].'" name="id">
                                <button>Enter</button>
                          </form>
                        </td>
                        <td>
                          <form action="updatelocalfoods_price.php" method="post">
                              <input type="hidden"  value="'.$rows["id"].'" name="ida">
                              <input type=" number" name="num">
                                 <button>Enter</button>
                          </form>
                         
                        </td>
                    </tr>';
               }
            }
            ?>
        </tbody>
    </table>
    <?php 
echo "<br>";
echo  '<a href="foreignfoods.php">Check Foreign Foods</a>'; 
     echo "<br>";
echo  '<a href="beverages.php">Check Beverages</a>'; 
     echo "<br>";
echo  '<a href="toporder.php">Check Top Order</a>'; 
     echo "<br>";
echo  '<a href="MyUser.php">Check Web Users Profile</a>'; 
?>
</body>
</html>