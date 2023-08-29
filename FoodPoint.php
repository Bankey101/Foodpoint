<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>FoodPoint.com</title>
    <style type="text/css">
     .ifr{
      position: relative;
      top: 50px;
      width: 87%;
     }
     div.abc{
       position: fixed;
       top: 0;
       right: 0;
       background-color: white;
       height: 40px;
       width: 300px;
       border-bottom-left-radius: 20px;
       z-index: 11;
       overflow: hidden;
     }
     div.abc > .register{
    position: relative;
    width: 50px;
    height: 38px;
    background-color: rgb(25, 255, 255);
    top: 0px;
    left: 5px;
    border-bottom-left-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(128, 128, 128, 0.449);
}
#clock{
  position: relative;
  top: 5px;
  left: 59px;
  font-size: 25px;
  font-weight: bolder;
}

    </style>
    <link rel="stylesheet" href="/FoodPoint_CSS/header.css">
    <link rel="stylesheet" href="/FoodPoint/FoodPoint_CSS/cart.css">
    <link rel="stylesheet" href="/FoodPoint/FoodPoint_CSS/register.css">
    <link rel="stylesheet" href="/FoodPoint_CSS/foodcontainer/foodcontainer.css">
    <link rel="stylesheet" href="/FoodPoint_CSS/foodcontainer/foodcontainer_toporder.css">
</head>
<body style="background-image: url(/FoodPoint/FoodPoint_IMG/222.jpg);background-attachment: fixed;background-size: cover;">
<?php include("FoodPoint_header/header.html") ?>
   

<?php include("FoodPoint_Body/top_order.php") ?>



<div class="abc">
   <a href="/FoodPoint/FoodPoint_Sign/Login.html">
     <span class="register" style="position: absolute;left:0px;box-shadow: 0 0 10px rgba(128, 128, 128, 0.449);width:19%;height:96%;border-bottom-left-radius: 20px;">
      <img src="/FoodPoint/FoodPoint_IMG/profile-icon-design-free-vector.jpg" alt="" style="position: relative;left:15px;width:60%;height:100%;">
     </span>
   </a>

   <div id="clock"><?php echo date(" h:i, Y-m-d"); ?></div>

   <button id="myBtn" class="myBtn">
  <img src="/FoodPoint/FoodPoint_IMG/cart1.jpg" alt="">
</button>
</div>



<!--cart-->
<!--cart-->
<!--cart-->
<!--cart-->
<!--cart-->


<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content" style="overflow-y: scroll;height:98%">
      <span class="cartheader">Cart...</span>
      <span class="close" style="position: relative;right: 10px;top: 2px;">&times;</span>
      <iframe src="/FoodPoint/FoodPoint_Cart/cart.php" frameborder="0" class="ifr" style="width: 100%;"></iframe>
  </div>
</div>

    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 7000); // Change image every 2 seconds
        }
        </script>  
        <script>
          // Get the modal
          var modal = document.getElementById("myModal");
          
          // Get the button that opens the modal
          var btn = document.getElementById("myBtn");
          
          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];
          
          // When the user clicks the button, open the modal 
          btn.onclick = function() {
            modal.style.display = "block";
          }
          
          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>  
          <script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>    
</body>
</html>