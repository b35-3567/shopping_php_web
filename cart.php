<?php 
session_start();
if(isset($_POST['add_to_cart)'])){
  //if user has already added a product to cart
 if(isset($_SESSION['cart'])){   
   $product_array_ids=array_column($_SESSION['cart'],"product_id");//[2,3,4]
   //if product has already been added to cart or not
   if(!in_array($_POST['product_id'],$product_array_ids)  ){
 
    $product_array=array(
       'product_id'=>$_POST['product_id'],
        'product_name'=>$_POST['product_name'],
        'product_price'=>$_POST['product_price'],
        'product_image'=>$_POST['product_image'],
        'product_quantity'=>$_POST['product_quantity'],
    );
    $_SESSION['cart'][$product_id]=$product_array;
//product haass already been added
   }else{
     echo '<script>
     alert("Product was already to cart")
     </script>';
     echo '<script>
     window.location="index.php"
     </script>';
   }



  //if this is the first prodcut
 }else{ 
     $product_id= $_POST['product_id'];
     $product_name=   $_POST['product_name'];
     $product_price= $_POST['product_price'];
     $product_image=   $_POST['product_image'];
     $product_quantity= $_POST['product_quantity'];

     $product_array=array(
        'product_id'=>$product_id,
         'product_name'=>$product_name,
         'product_price'=>$product_price,
         'product_image'=>$product_image,
         'product_quantity'=>$product_quantity,
     );
     $_SESSION['cart'][$product_id]=$product_array;
     //[  2=>[]  ]
 } 
}else{
//  header('location:index.php');
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
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
          <li class="nav-item">
           <a href="cart.html"><i class="fas fa-shopping-bag"></i></a> 
           <a href="account.html"> <i class="fas fa-user"></i></a>
          </li>


        </ul>

      </div>
    </div>
  </nav>
    
    <!--Cart-->
 <section class="cart container my-5 py-5 ">
  <div class="container mt-5">
    <h2 class="font-weight-bolde">Your Cart</h2>
    <hr>
  </div>


  <table class="mt-5 pt-5">
  <tr>
    <th>Product</th>
    <th>Quanity</th>
    <th>Subtotal</th>
  </tr>




  <tr>
    <td>
        <div class="product-info">
            <img src="assets/imgs/featured1.webp"/>
            <div>
                <p>White Shoes</p>
               <small><span>$</span>155</small>
               <br>
               <a class="remove-btn" href="#">Remove</a>
            </div>
        </div>
    </td>



    <td>
       <input  type="number" value="1"/>
       <a class="edit-btn">Edit</a>

    </td>

    <td>
      <span>$</span>
      <span class="product-price">155</span>
    </td>
  </tr>

  <tr>
    <td>
        <div class="product-info">
            <img src="assets/imgs/featured1.webp"/>
            <div>
                <p>White Shoes</p>
               <small><span>$</span>155</small>
               <br>
               <a class="remove-btn" href="#">Remove</a>
            </div>
        </div>
    </td>



    <td>
       <input  type="number" value="1"/>
       <a class="edit-btn">Edit</a>

    </td>

    <td>
      <span>$</span>
      <span class="product-price">155</span>
    </td>
  </tr>

  <tr>
    <td>
        <div class="product-info">
            <img src="assets/imgs/featured1.webp"/>
            <div>
                <p>White Shoes</p>
               <small><span>$</span>155</small>
               <br>
               <a class="remove-btn" href="#">Remove</a>
            </div>
        </div>
    </td>



    <td>
       <input  type="number" value="1"/>
       <a class="edit-btn">Edit</a>

    </td>

    <td>
      <span>$</span>
      <span class="product-price">155</span>
    </td>
  </tr>

  </table>


<div class="cart-total">
  <table>
   <tr>
    <td>Subtotal</td>
    <td>$155</td>
   </tr>
   <tr>
    <td>Total</td>
    <td>$155</td>
   </tr>
  </table>
</div>


<div class="checkout-container">
  <button class="checkout-btn">Checkout</button>
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
</body>

</html>