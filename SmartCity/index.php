<?php
session_start();
if (! isset($_SESSION['pol'])) {
    $_SESSION['pol'] = false;
}
if ($_SESSION['pol'] == false) {
        header('location: login.php');
    exit();
}


include "includes/db.php";

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Риком</title>
      <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">




    <!-- inject:css -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/lnr-icon.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/trumbowyg.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body class="home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
<?php
include "includes/header.php";

?>



   
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="images/hero_area_bg1.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->

                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">Строим ваши желания</span>
                                    <span class="bold">Самые удобные и уютные дома</span>
                                </h1>
                                <p class="tagline">Ваши дети будут рады нашим дворам!</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="timeline.php" class="btn btn--round btn--lg">История компании</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->

                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>

    <section class="features section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature1.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Самые выгодные цены</h3>
                        </div>
                        <div class="feature__desc">
                            <p>У нас самые выгодные цены среди других строительных фирм.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature2.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Эксклюзивы</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Скоро в городе Стерлитамамк появятся 25-ти этажные дома.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature3.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Партнеры</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Если вы имеете свою фирму по производству строительных элементов, мы с радостью будем с вами сотрудничать.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Последние обсуждения</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
<?php

$result = mysqli_query($connection,"SELECT * FROM `ob` ORDER BY `id` DESC LIMIT 10");

?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                        <?php
                        while ($art = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="<?php echo $art['Img']; ?>" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="all-products-list.php" class="transparent btn--sm btn--round">Обсуждения</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.php?id=<?php echo  $art['id']; ?>" class="product_title">
                                       <h4><?php echo  $art['Headline']; ?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="#"><?php echo  $art['author']; ?></a>
                                            </p>
                                        </li>

                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p><?php echo  $art['Text']; ?></p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">

                                    <!-- end /.tags -->
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <?php
                        }


                        ?>
                        
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>

<?php
include "includes/footer.php";
?>
</body>

</html>