<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font yang bagus sesuai minat kalian pakai link -->
     <link rel = "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

     <!-- kustom css file link-->
      <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">
    <a herf="home.php" class="logo">Travel Nusantara</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>



    

<!-- header section ends -->


<!-- home section ends -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class ="swiper-slide" style="background:url(gambar/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span> explore, discover, travel</span>
                    <h3> travel arround the wolrd</h3>
                    <a href="package.php" class="btn">dicover more</a>
                </div>
            </div>

            <div class ="swiper-slide" style="background:url(gambar/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span> explore, discover, travel</span>
                    <h3> discover the new places</h3>
                    <a href="package.php" class="btn">dicover more</a>
                </div>
            </div>

            <div class ="swiper-slide" style="background:url(gambar/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span> explore, discover, travel</span>
                    <h3> make your tour worth while</h3>
                    <a href="package.php" class="btn">dicover more</a>
                </div>
            </div>


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>





<!-- home section ends -->
<!--service section starts -->

<section class="services">

<h1 class="heading-title"> our service </h1>

<div class="box-container">

    <div class="box">
        <img src="gambar/icon-1.png" alt="">
        <h3> adventure</h3>
    </div>

    <div class="box">
        <img src="gambar/icon-2.png" alt="">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src="gambar/icon-3y.png" alt="">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src="gambar/icon-4.png" alt="">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src="gambar/icon-5y.png" alt="">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src="gambar/icon-6y.png" alt="">
        <h3>camping</h3>
    </div>
</div>

<!--services sectin ends-->

<!-- home about section starts-->
<section class="home-about">
    <div slass="gambar">
        <img src="gambar/about-us.jpg" alt="">
    </div>

    <div class="content">
        <h3> about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat odio similique 
            possimus error impedit, officia asperiores labore natus praesentium perferendis! Tempore eveniet, 
            sequi inventore quaerat facilis veritatis exercitationem provident asperiores!</p>
        <a herf="about.php" class="btn">read more</a>
    </div>
</section>
<!-- home about section end-->

<!-- home packages section starts-->
 




    





         




















<!-- footer section starts -->

<section class="footer">
    
    <div class="box-container">

        <div class="box">
            <h3>quick link</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"> </i> book</a>
        </div>

        <div class="box">
            <h3>extra links </h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info </h3>
            <a href="#"> <i class="fas fa-phone"></i> +62-1234-5678 </a>
            <a href="#"> <i class="fas fa-phone"></i> +62-8765-4321</a>
            <a href="#"> <i class="fas fa-envelope"></i> lidyatravel@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Jogja, Indonesia - 55190</a>
        </div>

        <div class="box">
            <h3> follow us </h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>

</div>

        <div class="credit"> create by <span> lidya cantika </span> | all rights reserved!</div>



</section>



<!-- swiper js libk -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link--> 
 <script src="js/script.js"></script>

</body>
</html>