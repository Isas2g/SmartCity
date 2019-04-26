<div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <div class="author-area">

                            
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim($_SESSION['pol3']) ) ) ?>" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        <?php
                                        if ( $_SESSION['pol'] ) {
                                            echo $_SESSION['pol1'];
                                            $res = true;
                                        }else{
                                            echo '<a href="signup.php">Вы еще не авторизованы! Зарегистрируйтесь или зайдите.</a>';
                                        }

                                        ?>
                                    </p>
                                    
                                </div>

                                <div class="dropdown dropdown--author">
                                    <ul>
                                        <?php
                                        if ($res) {
                                                                                        ?>
                                        <li>
                                            <a href="author.php">
                                                <span class="lnr lnr-user"></span>Профиль</a>
                                        </li>
                                        <li>
                                            <a href="login.php?exit=1">
                                                <span class="lnr lnr-exit"></span>Выход</a>
                                        </li>
                                            <?php
                                        }else{
                                        ?>
                                        <li>
                                            <a href="login.php">
                                                <span class="lnr lnr-exit"></span>Авторизация</a>
                                        </li>
                                        <li>
                                            <a href="signup.php">
                                                <span class="lnr lnr-exit"></span>Регистрация</a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim($_SESSION['pol3']) ) ) ?>" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                     <?php
                                        if ( $_SESSION['pol'] ) {
                                            echo $_SESSION['pol1'];
                                            $res = true;
                                        }else{
                                            echo '<a href="signup.php">Вы еще не авторизованы! Зарегистрируйтесь или зайдите.</a>';
                                        }

                                        ?>
                                        </p>
                                        
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                
                                <!--start .author__notification_area -->

                                <div class="dropdown dropdown--author">
                                    <ul>
                                        <?php
                                        if ($res) {
                                            ?>
                                        <li>
                                            <a href="author.php">
                                                <span class="lnr lnr-user"></span>Профиль</a>
                                        </li>
                                                                                <li>
                                            <a href="#">
                                                <span class="lnr lnr-exit"></span>Выход</a>
                                        </li>
                                            <?php
                                        }else{
                                        ?>
                                        <li>
                                            <a href="login.php">
                                                <span class="lnr lnr-exit"></span>Авторизация</a>
                                        </li>
                                        <li>
                                            <a href="signup.php">
                                                <span class="lnr lnr-exit"></span>Регистрация</a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->

                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="has_dropdown">
                                        <a href="index.php">Главная</a>
                                    </li>
                                    <li class="has_dropdown">
                                        <a href="all-products-list.php">Обсуждения</a>
                                    </li>
                                    <li class="has_dropdown">
                                        <a href="timeline.php">История компании</a>
                                    </li>


                                    <li>
                                        <a href="contact.php">Связаться с нами</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>