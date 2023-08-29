<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/FoodPoint/FoodPoint_CSS/foodcontainer/foodcontainer.css">
    <style type="text/css">
      .top_order2{
        position: relative;
        margin-top: -90px;
    margin-left: 10px;
    margin-bottom: 40px;
    width: 97.8%;
    display: inline-block;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.373);
      }
      .top_order_prod2{
        margin-left: 13px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-right:8px;
    height: 220px;
    width: 200px;
    display: inline-block;
    border:1px solid black;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    background-color: rgb(255, 255, 255);
      }
      .top_order2 > .top_order_prod2 > img{
    position: relative;
    top: 0px;
    height: 172px;
    width: 200px;
    border-top-right-radius: 10px;
    overflow: hidden;
}
.top_order2_name{
  position: absolute; 
  top:600px;
  left:-40px;
  display: inline-block;
  padding-bottom: 5px;
  background-color: red; 
  font-weight: bolder;
  z-index: 1;
}
.top_order_label > .prod2name{
    position: relative;
    top: 0px;
    width: 198.5px;
    height: 20px;
    text-align: center;
    border: 1px solid black;
    display: inline-block;
}
.top_order_label > .prod2price{
    position: relative;
    top: 1px;
    width: 100px;
    height: 20px;
    border-bottom-left-radius: 10px;
    border: 1px solid black;
    text-align: center;
    display: inline-block;
}
button.fbtn2 {
    position: relative;
    top: -20px;
    left: 106px;
    width: 94px;
    height: 21px;
    border: 1px solid black;
    background-color: red;
    color: black;
    text-align: center;
    z-index: 11;
}
    </style>
</head>
<body>
    <div class="top_order2_name">Local Foods</div>
  <div class="top_order2">
     <div class="top_order_prod2">
     <?php  
         $var = 1;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?>  
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 2;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?>  
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 3;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?>  
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 4;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?>  
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 5;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 6;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 7;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 8;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 9;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>

       <div class="top_order_prod2">
       <?php  
         $var = 10;
             
            $dbconnect = mysqli_connect("localhost","root","","foodpoint");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM local_food where id=$var";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               echo '<img src="/FoodPoint/FoodPoint_IMG/'.$rows["image_lct"].'" alt="">';
                 
              echo '<div class="top_order_label">';
                echo '<span class="prod3name">'.$rows["food_name"].'</span>';
                echo '<span class="prod3price"><span>&#8358;</span>'.$rows["food_price"].'</span>';
      
            echo '<form action="/FoodPoint/FoodPoint_Cart/cart.php" method="get">
              <!--hidden name and price for submiting prod1 order if the user wants to buy...-->
              <input type="hidden" value="'.$rows["food_name"].'" name="name">
              <input type="hidden" value="'.$rows["food_price"].'">
               <button class="fbtn3">ORDER</button>
            </form>';
             }
              ?> 
        </div>
       </div>


      



</div>

</body>
</html>