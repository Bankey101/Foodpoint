<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <style type="text/css">

form > button.fbtn {
    position: relative;
    top: 25px;
    left: 106px;
    width: 94px;
    height: 22px;
    border: 1px solid black;
    background-color: red;
    color: black;
    text-align: center;
    z-index: 11;
}
div.imgbord{
  border: 1px solid black;
  height: 172px;
  overflow: hidden;
  border-top-right-radius: 10px;
}
.top_order_label > .prod1price{
    position: absolute;
    bottom: 8px;
    width: 100px;
    height: 20px;
    border-bottom-left-radius: 10px;
    border: 1px solid black;
    text-align: center;
}
.foodcont > div.top_order{
    position: absolute;
    margin: 10px;
    height: 237px;
    width: 97.8%;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.373);
}
span.gd{
    color: red;
  }
.foodcont > .top_order > .top_order_prod{
    margin-left: 13px;
    margin-top: 8px;
    margin-right:8px;
    height: 220px;
    width: 200px;
    display: inline-block;
    border:1px solid black;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    overflow: hidden;
    background-color: rgb(255, 255, 255);
}
.foodcont > .top_order_name{
  position: absolute; 
  top:-13px;
  left:-40px;
  padding-bottom: 5px;
  background-color: red; 
  font-weight: bolder;
  color: white;
  z-index: 1;
}

.top_order_label > .prod1name{
    position: absolute;
    top: 180px;
    bottom: 30px;
    width: 198.5px;
    height: 17px;
    margin: auto;
    text-align: center;
    border: 1px solid black;
    margin:auto;
    padding: auto;
}
.imgbord > .top_order_label > .prod1price{
    position: absolute;
    bottom: 8px;
    width: 100px;
    height: 20px;
    border-bottom-left-radius: 10px;
    border: 1px solid black;
    text-align: center;
}
.imgbord >.top_order_label > form > button.fbtn {
    position: absolute;
    top: 207px;
    left: 120px;
    width: 94px;
    height: 22px;
    border: 1px solid black;
    background-color: red;
    color: black;
    text-align: center;
    
}
.foodcont > .top_order > .top_order_prod > img{
    position: relative;
    top: 0px;
    height: 172px;
    width: 100%;
    border-top-right-radius: 10px;
    overflow: hidden;
}
<?php  include("FoodPoint_CSS\foodcontainer\foodcontainer_toporder.css");
?>
    </style>
    <link rel="stylesheet" href="FoodPoint/FoodPoint_CSS/foodcontainer/foodcontainer.css">
    <link rel="stylesheet" href="FoodPoint/FoodPoint_CSS/foodcontainer/foodcontainer_toporder.css">
</head>
<body>
<div class="foodcont" style="background-image: url(/FoodPoint/FoodPoint_IMG/bgforfood.jpg);">  
       <div class="top_order_name">Top Orders</div>
  <div class="top_order">
     <div class="top_order_prod">
        
        <?php  
         $var = 1;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM toporder where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod1name">'.$rows["toporder_name"].'</span>';
                echo '<span class="prod1price"><span>&#8358;</span>'.$rows["price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["toporder_name"].'" name="nam">
              <input type="hidden" value="'.$rows["price"].'">
               <button class="fbtn">ORDER</button>
            </form>';
             }
              ?>  
        </div>
       </div>




       <div class="top_order_prod">
       <?php  
         $var = 2;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM toporder where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod1name">'.$rows["toporder_name"].'</span>';
                echo '<span class="prod1price"><span>&#8358;</span>'.$rows["price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["toporder_name"].'" name="nam">
              <input type="hidden" value="'.$rows["price"].'">
               <button class="fbtn">ORDER</button>
            </form>';
             }
              ?>  
        </div>
      </div>

      <div class="top_order_prod">
      <?php  
         $var = 3;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM toporder where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod1name">'.$rows["toporder_name"].'</span>';
                echo '<span class="prod1price"><span>&#8358;</span>'.$rows["price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["toporder_name"].'" name="nam">
              <input type="hidden" value="'.$rows["price"].'">
               <button class="fbtn">ORDER</button>
            </form>';
             }
              ?>  
      </div>
            </div>

      
      <div class="top_order_prod">
      <?php  
         $var = 4;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM toporder where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod1name">'.$rows["toporder_name"].'</span>';
                echo '<span class="prod1price"><span>&#8358;</span>'.$rows["price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["toporder_name"].'" name="nam">
              <input type="hidden" value="'.$rows["price"].'">
               <button class="fbtn">ORDER</button>
            </form>';
             }
              ?>  
        </div>
      </div>

</div>








  <div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img class="slideimg" src="/FoodPoint/FoodPoint_IMG/R.jfif" >
 
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img class="slideimg" src="/FoodPoint/FoodPoint_IMG/R (1).jfif" >
 
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img class="slideimg" src="/FoodPoint/FoodPoint_IMG/R (2).jfif" >
 
</div>

</div>
<br>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for available foods.." title="Type in a food name">

<ul id="myUL">
  <li><a href="#">Jollof Rice</a></li>
  <li><a href="#">Fried Rice</a></li>
  <li><a href="#">Fried Chicken</a></li>
  <li><a href="#">Spagetti</a></li>
  <li><a href="#">White Rice</a></li>
  <li><a href="#">Indomie</a></li>
  <li><a href="#">Egusi & Efo</a></li>
  <li><a href="#">Pounded yam</a></li>
  <li><a href="#">Meat</a></li>
  <li><a href="#">Fish</a></li>
  <li><a href="#">Okro soup</a></li>
  <li><a href="#">Ponmo</a></li>
  <li><a href="#">Vegetables Soup</a></li>
  <li><a href="#">Pupuru</a></li>
  <li><a href="#">Fufu</a></li>
  <li><a href="#">Amala</a></li>
  <li><a href="#">Water</a></li>
  <li><a href="#">Coke</a></li>
  <li><a href="#">Fanta</a></li>
  <li><a href="#">Bread</a></li>
  <li><a href="#">Maltina</a></li>
  <li><a href="#">Pepsi</a></li>
  <li><a href="#">Fearless</a></li>
  <li><a href="#">Meat Pie</a></li>
  <li><a href="#">Fish Pie</a></li>
  <li><a href="#">Burger</a></li>
  <li><a href="#">Chin Chin</a></li>
  <li><a href="#">Tea</a></li>
</ul>



<?php include("FoodPoint_Body/localfoods.php"); ?>
<?php include("FoodPoint_Body/foreignfoods.php"); ?>
<?php include("FoodPoint_Body/Beverages.php"); ?>


</div>
</body>
</html>