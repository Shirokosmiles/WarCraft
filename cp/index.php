<?
require_once '../include/config.php'; 
?>
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: cabinet.php');
    }
?>
<?php include"../include/main.php" ?>
<html lang="ru" class="js">
<head>

<meta charset="utf-8">
    <title><?php echo"$row[title]";?></title>
    <meta property="og:title" content="><?php echo"$row[title]";?>">
    <meta property="robots" content="index,follow">
    <meta property="og:site_name" content="KELTIR">
    <meta property="og:locale" content="ru">
    <meta property="og:type" content="website">
    <meta property="og:author" content="АВТОР">
    <meta property="og:url" content="https://..">
    <meta property="og:description" content="<?php echo"$row[description]";?>">
    <meta name="keywords" content="">
    <meta property="og:image" content="https://keltir.comimages/logos/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="536">
    <meta name="author" content="АВТОР">
    <meta name="viewport" content="width=device-width">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="LA2">
    <meta property="twitter:description" content="jgbcfybt">

    

    <link rel="shortcut icon" href="../template/indra/images/favicon.png">
    <link rel="apple-touch-icon" sizes="256x256" href="../template/indra/images/favicon.png">

    <link rel="stylesheet" href="../template/indra/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="../template/indra/css/main.min.css">
    <link rel="stylesheet" type="../template/indra/text/css" href="css/slick.css">
    <link rel="stylesheet" type="../template/indra/text/css" href="css/slick-theme.css">

    <link rel="stylesheet" type="../template/indra/text/css" href="css/addition.css">

</head>
<body>

<div class="wrapper">

<!-- NAVIGATION -->
<nav class="nav">
    <div class="content-area">

        <a href="/" class="nav__logo">
            <img src="../template/indra/images/logo.png" alt="logo">
        </a>

        <div class="nav__links">

    <?php include "../include/menu.php"?>

</div>


        <div class="langs flex-cc">
   <!-- <div class="langs__content">
        <div class="langs__content-arrow"></div>
        <div class="langs__content-current flex-cc"><img src="images/en.png" alt="en"></div>
        <ul class="langs__content-stroke">
                            <li><a href="https://keltir.com/setlocale/ru" class="flex-cc"><img src="images/ru.png" alt="ru"></a></li>
                                </ul>
    </div> -->
</div>

        <a href="./" class="nav__auth flex-cc">
        <i class="fas fa-sign-in-alt"></i>
        <span>Кабинет</span>
    </a>
    <a href="./register.php" class="gray-btn nav__account-btn">
        <i class="fas fa-user-plus"></i>
        <span>Создать аккаунт</span>
    </a>

        <div class="open-main-menu">
            <div class="open-main-menu__item"></div>
        </div>

    </div>
</nav>
<!-- END NAVIGATION -->



<!-- HEADER -->
    <header class="header header--auth">
        <div class="content-area">
            <div class="auth">
                <div class="auth__box auth__box--big">
                    <div class="auth__box-border">
                        <img class="auth__box-border-top" src="../template/indra/images/border-icon-top.png" alt="">
                    </div>
                    <h2 class="auth__box-title">Вход в аккаунт</h2>
                    <div class="auth__box-content">

                        <form class="form" method="POST">                                        
                                            <div class="form-group">
                                                <div class="form__group">
                                                    <label>Логин</label>
                                                <div class="form__group-input">
                                                <input type="text" class="form-control form-control-lg"
                                                       id="username" name="username" placeholder="Введите Логин" value="">
                                            </div>
                                            </div>
                                           <br />
                                            <div class="form__group">
                                                <div class="form-label-group">
                                                    <label>Пароль</label>
                                                    <small>( используйте латинские буквы и введите не менее 8 символов )</small>
                                                <div class="form__group-input">
                                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch is-hidden" data-target="password">
                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                    </a>
                                                    <input type="password" name="password" placeholder="Введите свой пароль" required>
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            <br />
                                                <div class="form__group">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-block login-btn"><span>Авторизоваться</span></button>
                                                </div>
                                                <br />
                                                <div class="form__group">
                                <div class="form__links">
                                    Нет аккаунта? <a href="register.php">Зарегистрироваться</a><br>
                                    Забыли пароль? <a class="link link-primary link-sm" tabindex="-1" href="reset.php">Восстановить</a><br>
                                </div>
                            </div>
                            <p class="msg none"></p>
                                        </form>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->                
    <?php include"../footer.php" ?>
</body>
</html>