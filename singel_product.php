<?php
include('server/connection.php');
if(isset($_GET['product_id'])){
  //no prodcut id was given
  $product_id =$_GET['product_id'];
  $stmt =$conn->prepare("SELECT * FROM products WHERE product_id=?");
  $stmt ->bind_param("i",$product_id);

$stmt->execute();

$products= $stmt->get_result();
}else{
  header('location:index.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>

  <!--NavBar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <img class="logo" src="assets/imgs/logo.png"  />
     <h2 class="brand">Orange</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <i class="fas fa-shopping-bag"></i>
            <i class="fas fa-user"></i>
          </li>


        </ul>

      </div>
    </div>
  </nav>
<!--Single Product-->
<section class="container single-product my-5 pt-5">
 <div class="row mt-5">
  <?php  while($row=$products->fetch_assoc()){?>

  

 <div class="col-lg-5 col-md-6 col-sm-12">
    <img  class="img-fluid w-100 pb-1"
    src="assets/imgs/<?php echo $row['product_image'];?>" id="mainImg"/>
    <div class="small-img-group">
        <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image'];?>" width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image'];?>" width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image'];?>"  width="100%" class="small-img"/>
        </div>
        <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image'];?>" width="100%" class="small-img"/>
        </div>
    </div>
 </div>


 <div class="col-lg-6 col-md-12 col-sm-12">
    <h6>Men/Shoes</h6>
    <h3 class="py-4"><?php echo $row['product_name'] ?></h3>
    <h2><?php echo $row['product_price'] ?></h2>
    <form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>"/>
      <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>"/>
      <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>"/>
      <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>"/>
      <input type="number"  name="product_quantity" value="1"/>
      <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
      </form>

  

   <h4 class="mt-5 mb-5">Product details</h4>
   <span><?php echo $row['product_description'] ?></span>
 </div>




 <?php } ?>

 </div>
</section>






  <!--Related products-->
  <section id="related-products" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Related products</h3>
      <hr>
        <p>Here you can check out our featured products </p>
    </div>
<div class="row mx-auto container-fluid">


  <div class="product col-lg-3 col-md-4 col-sm-12">
    <img  class="img-fluid mb-3" src="assets/imgs/featured1.webp"/>
   <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
   </div>
    <div class="p-name">Sports Shoes</div>
    <h4 class="p-price">$199.8</h4>
    <button class="buy-btn">Buy Now</button>
  </div>


  <div class="product col-lg-3 col-md-4 col-sm-12">
    <img  class="img-fluid mb-3" src="assets/imgs/featured2.webp"/>
   <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
   </div>
    <div class="p-name">Sports Shoes</div>
    <h4 class="p-price">$199.8</h4>
    <button class="buy-btn">Buy Now</button>
  </div>

  <div class="product col-lg-3 col-md-4 col-sm-12">
    <img  class="img-fluid mb-3" src="assets/imgs/featured3.webp"/>
   <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
   </div>
    <div class="p-name">Sports Shoes</div>
    <h4 class="p-price">$199.8</h4>
    <button class="buy-btn">Buy Now</button>
  </div>


  <div class="product col-lg-3 col-md-4 col-sm-12">
    <img  class="img-fluid mb-3" src="assets/imgs/featured4.jpg"/>
   <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
   </div>
    <div class="p-name">Sports Shoes</div>
    <h4 class="p-price">$199.8</h4>
    <button class="buy-btn">Buy Now</button>
  </div>

</div>
  </section>



<!--Footer-->
<footer class="mt-5 py-5 ">
    <div class="row container mx-auto pt-5">
  <!--1-->
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src="assets/imgs/logo.jpg"/>
        <p class="pt-3">we provide the best products for the most affordable prices</p>
      </div>
  <!--2-->
   <div class="footer-one col-lg-3 col-md-6 col-sm-12">
      <h5 class="pb-2">Featured</h5>
      <ul class="text-uppercase">
        <li><a href="#">men</a></li>
        <li><a href="#">women</a></li>
        <li><a href="#">boys</a></li>
        <li><a href="#">girl</a></li>
        <li><a href="#">new arrival</a></li>
        <li><a href="#">clothes</a></li>
      </ul>
      </div>
  <!--3-->
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
       <h5 class="pb-2">Contact us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>Ho chi MInh, Thu Duc, Hipe BInh Phuoc</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p>0987654321</p>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>danhluong2k4@gmail.com</p>
          </div>
        </div>
      </div>
  <!--4-->
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
      <h5 class="pb-2">Intasgram</h5>
      <div class="row">
        <img  src="assets/imgs/" class="img-fluid w-25 h-100 m-2"/>
        <img  src="assets/imgs/" class="img-fluid w-25 h-100 m-2"/>
        <img  src="assets/imgs/" class="img-fluid w-25 h-100 m-2"/>
        <img  src="assets/imgs/" class="img-fluid w-25 h-100 m-2"/>
        <img  src="assets/imgs/" class="img-fluid w-25 h-100 m-2"/>
      </div>
      </div>
  
    </div>
  
  
    <div class="copyright mt-5">
       <div class="row container mx-auto">
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <img  src="assets/imgs/payment.png"/>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap">
          <p>eComerce @ 2025 All Right</p>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
         <a href="#"><i class="fab fa-facebook"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
       </div>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    var mainImg = document.getElementById("mainImg");
    var smallImg = document.getElementsByClassName("small-img");
 for(let i=0;i<smallImg.length;i++){
   smallImg[i].onclick=function(){
    mainImg.src=smallImg[i].src;
   }
 }

  </script>
</body>

</html>