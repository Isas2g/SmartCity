<?php
session_start();
$connection = mysqli_connect('localhost','root','','hakaton');
if (isset($_GET['exit'])) {
    $_SESSION['pol'] = false;
    unset($_SESSION['pol1']);
}

$result = mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='".$_POST['login']."' AND `password` ='".$_POST['password']."'");
$res3 = mysqli_fetch_assoc($result);                           
if($res3 == 0){
    $error = 'Логин или пароль введены неверно';

}else{

    $_SESSION['pol'] = true;
    $_SESSION['pol1'] = $res3['login'];
    $_SESSION['pol2'] = $res3['id'];
    $_SESSION['pol3'] = $res3['Email'];
    header('location: author.php');
    exit();
        
}


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


    <title>login</title>

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

<body class="login-page">
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Вход</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>


    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="" method="Post">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Добро пожаловать!</h3>
                                <p>Вы можете войти, используя имя</p>
                            </div>
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Ваше имя</label>
                                    <input id="user_name" type="text" class="text_field" placeholder="Введите ваше имя..." name="login">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Пароль</label>
                                    <input id="pass" type="password" class="text_field" placeholder="Введите ваш пароль..." name="password">
                                </div>
                                <button class="btn btn--md btn--round" type="submit">Войти</button> Нет  <a href="signup.php">аккаунта?</a>
                                </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
<?php

include "includes/footer.php";
?>

</body>

</html>