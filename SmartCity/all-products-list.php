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
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>Жалобы и предложения</title>

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

<body class="home3">

<?php
include "includes/header.php";
?>
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-md-12">
                    <?php
                        $result = mysqli_query($connection,"SELECT * FROM `ob` ORDER BY `id` DESC");
                        while ($art = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="product product--list">

                        <div class="product__thumbnail">
                            <img src="<?php echo $art['Img']; ?>" alt="Product Image">
                            <div class="prod_btn">
                                <div class="prod_btn__wrap">
                                    <a href="single-product.php?id=<?php echo $art['id']; ?>" class="transparent btn--sm btn--round">Подробнее</a>
                                </div>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <div class="product__details">
                            <div class="product-desc">
                                <a href="single-product.php?id=<?php echo  $art['id']; ?>" class="product_title">
                                    <h4><?php echo  $art['Headline']; ?></h4>
                                </a>
                                <p><?php echo  $art['Text']; ?></p>

                                
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                    <p>
                                        <a href="#"><?php echo  $art['author']; ?></a>
                                    </p>
                                </div>

                                <div class="love-comments">
                                    <p>
                                        <span class="lnr lnr-heart"></span><?php echo  $art['pon']; ?> понрав. </p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span><?php echo  $art['comment'] ?>
                                </div>

                            </div>
                            <!-- end product-meta -->

                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                        <?php
                        }
                        ?>
                    
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->

            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
<?php
include "includes/footer.php";
?>
</body>

</html>