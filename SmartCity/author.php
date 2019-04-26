<?php
session_start();
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


    <title>Профиль пользователя</title>

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

<body>

<?php
include "includes/header.php";
?>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Начало</a>
                            </li>
                            <li class="active">
                                <a href="#">Профиль пользователя</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Профиль пользователя</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
<?php
$result = mysqli_query($connection,"SELECT * FROM `users` WHERE `id`=".$_SESSION['pol2']);
$res = mysqli_fetch_assoc($result);

?>
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim($res['Email']) ) ) ?>" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4><?php echo $res['login'] ; ?></h4>
                                    <p><?php echo $res['Time'] ; ?></p>
                                    <p><?php echo $res['Email'] ; ?></p>
                                </div>
                                <!-- end /.author -->
                                <!-- end /.author-badges -->

                               
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <!-- end /.author-menu -->

                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- end /.col-md-4 -->

                    
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">

                            <div class="author_module about_author">
                                <h2>
                                    <span<?php echo $res['Name'] ; ?></span> о себе:
                                </h2>
                                <p><?php echo $res['text'] ; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->

                    
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

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