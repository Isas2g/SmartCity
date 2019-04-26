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


    <title>Детская площадка</title>

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
$result = mysqli_query($connection,"SELECT * FROM `ob` WHERE `id` =".$_GET['id']);

$art = mysqli_fetch_assoc($result);
?>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Главная</a>
                            </li>
                            <li>
                                <a href="all-products-list.html">Обсуждения</a>
                            </li>
                            <li class="active">
                                <a href="#"><?php echo  $art['Headline']; ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title"><?php echo  $art['Headline']; ?></h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            <div class="prev-slide">
                                <img style="width: 100%; height: 100%;" src="<?php echo  $art['Img']; ?>" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Подробности:</a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Комментарии </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <h3><?php echo  $art['Text']; ?></h3>
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                         <?php
                                         if (isset($_POST['sign'])) {
                                         $rrr = mysqli_query($connection,"INSERT INTO `comments` (`id`, `name`, `email`, `Text`, `name_id`) VALUES (NULL, '".$_SESSION['pol1']."', '".$_SESSION['pol3']."', '".$_POST['text']."', '".$_GET['id']."');");
                                         mysqli_query($connection,"UPDATE `ob` SET `comment` = `comment` + 1 WHERE `id` =".$_GET['id']);
                                            }
                                            ?>
                                            <?php
                                            $rr = mysqli_query($connection,"SELECT * FROM `comments` WHERE `name_id` =".$_GET['id']);
                                            while ($rr1 = mysqli_fetch_assoc($rr)) {
                                         ?>
                                             <li>Автор: <?php echo $rr1['name'] ; ?></li>
                                             <li>Текст: <?php echo $rr1['Text'] ; ?></li>
                                             <hr>
                                        <?php
                                            }
                                        ?>
                                         </ul>
                                    <div class="comment-form-area">
                                        <h4>Оставьте комментарий</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                                <a href="author.html">
                                                    <img class="media-object" src="images/m7.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form class="comment-reply-form" method="post">
                                                    <textarea placeholder="Напишите свой комментарий..." name="text"></textarea>
                                                    <button type="submit" class="btn btn--sm btn--round" name="sign">Отправить</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>
                                    <!-- end /.comment-form-area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->

                
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
<?php
include "includes/footer.php";
?>
</body>

</html>