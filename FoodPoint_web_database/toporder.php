<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localfoods</title>
</head>
<body>
    <h1>LIST OF TOP ORDER</h1>
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","foodpoint");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM toporder";
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
                <td>ADD IMAGE</td>
                <td>UPDATE_FOOD_NAME</td>
                <td>UPDATE_FOOD_PRICE</td>
                
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
                        <td>'.$rows["toporder_name"].'</td>
                        <td><span>&#8358;</span>'.$rows["price"].'</td>
                        <td>'.$rows["image_lct"].'</td>
                        <td>
                          <form action="" method="post"><input type="text"><button>Enter</button></form>
                        </td>
                        <td>
                          <form action="" method="post"><input type="text"><button>Enter</button></form>
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
echo  '<a href="localfoods.php">Check Local Foods</a>'; 
?>
</body>
</html>