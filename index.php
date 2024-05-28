
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img class="logo" src="assets/imgs/logo.png" />
            <h2 class="brand">Orange</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <!--Home-->
    <section id="home">
        <div class="container">
            <h5>
                NEW ARRIVALS
            </h5>
            <h1><span>Best Price</span> This Season</h1>
            <p>Eshop offers the best products for the affordable prices</p>
            <button>Shop Now</button>
        </div>
    </section>



    <!--Brand-->
    <section id="brand" class="container">
        <div class="row">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.webp" />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.jpg" />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.png" />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.png" />
        </div>
    </section>

    <!--New-->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!--One-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/1.jpg" />
                <div class="details">
                    <h2>Extreamely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--Two-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/2.avif" />
                <div class="details">
                    <h2>Awesome Jacket</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--Three-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/3.jpg" />
                <div class="details">
                    <h2>50% OFF Watches</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>

    </section>


    <!--Featrured-->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr>
            <p>Here you can check out our featured products </p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php include('server/get_featured_products.php') ?>
            <?php while ($row = $featured_products->fetch_assoc()) { ?>
                <div class="product col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>" />
                    <div class="star">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <i class="fas fa-star"></i>
                        <?php } ?>
                    </div>
                    <div class="p-name"><?php echo $row['product_name'] ?></div>
                    <h4 class="p-price"><?php echo $row['product_price'] ?></h4>
                    <a href="singel_product.php?product_id=<?php echo $row['product_id']; ?>">
                        <button class="buy-btn">Buy Now</button>
                    </a>

                </div>
            <?php } ?>


        </div>
    </section>



    <!--Banner-->
    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection <br> Up to 30% OFF</h1>
            <button class="text-uppercase">shop now</button>
        </div>
    </section>

    <!--Clothes-->
    <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Dress & Coats</h3>
            <hr>
            <p>Here you can check out our amazing clothes </p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php include('server/get_coats.php') ?>
            <?php while ($row = $coats_products->fetch_assoc()) { ?>
                <div class="product col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>" />
                    <div class="star">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <i class="fas fa-star"></i>
                        <?php } ?>
                    </div>
                    <div class="p-name"><?php echo $row['product_name'] ?></div>
                    <h4 class="p-price"><?php echo $row['product_price'] ?></h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
            <?php } ?>

        </div>
    </section>

    <!--WAtches-->
    <section id="watches" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Best watches</h3>
            <hr>
            <p>Here you can check out unique watches </p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php include('server/get_watches.php') ?>
            <?php while ($row = $watches_products->fetch_assoc()) { ?>
                <div class="product col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>" />
                    <div class="star">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <i class="fas fa-star"></i>
                        <?php } ?>
                    </div>
                    <div class="p-name"><?php echo $row['product_name'] ?></div>
                    <h4 class="p-price"><?php echo $row['product_price'] ?></h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
            <?php } ?>

        </div>
    </section>

    <!--Shoes-->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Shoes</h3>
            <hr>
            <p>Here you can check out our amazing shoes </p>
        </div>
        <div class="row mx-auto container-fluid">
            <?php include('server/get_shoes.php') ?>
            <?php while ($row = $shoes_products->fetch_assoc()) { ?>
                <div class="product col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>" />
                    <div class="star">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <i class="fas fa-star"></i>
                        <?php } ?>
                    </div>
                    <div class="p-name"><?php echo $row['product_name'] ?></div>
                    <h4 class="p-price"><?php echo  $row['product_price'] ?></h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
            <?php } ?>



        </div>
    </section>

    <!--Footer-->
    <footer class="mt-5 py-5 ">
        <div class="row container mx-auto pt-5">
            <!--1-->
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="assets/imgs/logo.jpg" />
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
                    <img src="assets/imgs/" class="img-fluid w-25 h-100 m-2" />
                    <img src="assets/imgs/" class="img-fluid w-25 h-100 m-2" />
                    <img src="assets/imgs/" class="img-fluid w-25 h-100 m-2" />
                    <img src="assets/imgs/" class="img-fluid w-25 h-100 m-2" />
                    <img src="assets/imgs/" class="img-fluid w-25 h-100 m-2" />
                </div>
            </div>

        </div>


        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets/imgs/payment.png" />
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>