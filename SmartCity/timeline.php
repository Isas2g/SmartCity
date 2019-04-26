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


    <title>История компании</title>

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

<body class="timeline-page">


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
                                <a href="#">история</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Небольшая история</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <section class="section--padding">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="timeline">
                            <li class="happening">
                                <div class="happening--period">
                                    <p>1999 год</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Начало великого</h4>
                                    <p> Группа компаний «Риком» берет свое начало как предприятие, выполняющее строительные и отделочные работы. За долгие годы специалистами компании "Риком" были проведены масштабные работы по реконструкции, ремонту, благоустройству и сдачи в эксплуатацию многих объектов.  </p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>2013 год</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Открытие</h4>
                                    <p>«Риком» выступил в качестве застройщика, начав строительство первого многоквартирного дома в Стерлитамаке.</p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>2015 год</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Строительство</h4>
                                    <p>Многоквартирный дом был сдан в мае 2015 года. Дома от застройщика "Риком" сразу вызвали повышенный интерес не только у горожан, но и у экспертов в области строительства. Так, первый дом получил диплом третьей степени Смотра конкурса лучших жилых домов в республике, который ежегодно проводит Комитет по строительству и архитектуре.  </p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>2018 год</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Полноценная работа</h4>
                                    <p>В эксплуатацию сданы четыре многоквартирных дома застройщика. Запуск строительства еще одного дома по красной линии пр. Октября, а также "Риком" достроил один из городских долгостроев, который находится в одном из старых районов города. </p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>Наше время</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Успешное дело</h4>
                                    <p>Группа компаний «Риком» имеет собственную производственную базу, автопарк строительной спецтехники и автомобили для персонала. В здании гостиницы "Ашкадар" работает современный офис продаж, где осуществляется полный цикл сделки с покупкой новостроек, включая оформление ипотеки. Рядом со строящимися объектами "Риком" в прошлом году был открыт демонстрационный офис - здесь регулярно проводятся экскурсии, позволяющие наглядно показать, как и из чего строятся дома "Риком". </p>
                                </div>
                            </li>

                        </ul>
                        <!-- end /.timeline -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
            </div>
            <!-- end .container -->
        </div>
    </section>
<?php
include "includes/footer.php";
?>
</body>

</html>