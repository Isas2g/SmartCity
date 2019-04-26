<?php
session_start();
$connection = mysqli_connect('localhost','root','','hakaton');
if (isset($_POST['submit'])) {
    if ($_POST['pass1'] == $_POST['pass2']) {
        $us = "Вы успешно зарегистрированы";
        mysqli_query($connection,"INSERT INTO `users` (`id`, `login`, `Name`,`text`, `Email`, `Password`, `Time`) VALUES (NULL, '".$_POST['login']."','".$_POST['text']."', '".$_POST['email']."', '".$_POST['pass1']."', 'NOW()');");
        $_SESSION['pol'] = true;
        $_SESSION['pol1'] = $_POST['login'];
        $result1 = mysqli_query($connection,"SELECT * FROM `users` ORDER BY `id` DESC LIMIT 1");
        $res2 = mysqli_fetch_assoc($result1);
        $_SESSION['pol2'] = $res2['id'];
        header('location: author.php');
        exit();
        
        }else{
                $error = 'Ошибка! Пароли не совпадают';
        }
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


    <title>sign up</title>

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

<body class="signup-page">

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            
                            <li class="active">
                                <a href="login.php">Войти</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Регистрация</h1>
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

    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                        <form method="POST" action="">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Создайте аккаунт!</h3>
                                <p>Пожалуйста, запомните следующие поля, чтобы создать аккаунт
                                </p>
                            </div>
<?php 
echo @$error ;
echo @$us;
?>
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="urname">Ваше имя(используется при входе)</label>
                                    <input id="urname" type="text" class="text_field" placeholder="Введите имя..." name="login" required>
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">Email адрес</label>
                                    <input id="email_ad" type="email" class="text_field" placeholder="Email адрес..." name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input id="password" type="password" class="text_field" placeholder="Введите пароль..." name="pass1" required>
                                </div>

                                <div class="form-group">
                                    <label for="con_pass">Подтвердите пароль</label>
                                    <input id="con_pass" type="password" class="text_field" placeholder="Подтвердите пароль..." name="pass2" required>
                                </div>
                                <textarea placeholder="Напишите о себе" name="text"></textarea>
                                <button class="btn btn--md btn--round register_btn" type="submit" name="submit">Регистрация</button>

                                <div class="login_assist">
                                    <p>Уже есть
                                        <a href="login.php">аккаунт?</a>
                                    </p>
                                </div>
                            </div>
                        </form>
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