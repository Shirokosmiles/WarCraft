<? require_once '../include/config.php'; ?>
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: cabinet.php');
    }
?>

<html lang="ru" class="js">
<head>
<?php include"../include/main.php" ?>
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
    <header class="header header--start">
        <div class="content-area">
            <div class="auth">

                                <div class="auth__box">
                    <div class="auth__box-border">
                        <img class="auth__box-border-top" src="../template/indra/images/border-icon-top.png" alt="">
                    </div>
                    <h2 class="auth__box-title">Создайте аккаунт</h2>
                    <div class="auth__box-content">
                
                <form class="form" method="POST">                
                    <div class="form__group">
                        <label>E-mail</label>
                        <div class="form__group-input">
                                    <input type="text" id="name" name="username" placeholder="Введите свой логин" required>
                                </div>
                                    
                                            </div>

                    <div class="form__group">
                        <label>NightHoldTag</label>
                                <small>( NightHoldTag - ваше публичное имя (никнейм), используется на форуме и виден всем другим игрокам. )</small>
                        <div class="form__group-input">
                        <input type="text" class="form-control form-control-lg "
                               id="NightHoldTag" name="NightHoldTag" placeholder="NightHoldTag" value="">
                                            </div>
                    </div>
                    <div class="form__group">
                        <label>E-mail</label>
                        <div class="form__group-input">
                        <input type="text" class="form-control form-control-lg "
                               id="email" name="email" placeholder="Введите E-Mail" value="">
                                            </div>
                    </div>

                    <div class="form__group">
                        <label>Пароль</label>
                                <small>( используйте латинские буквы и введите не менее 8 символов )</small>
                        <div class="form__group-input">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch is-hidden" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" id="password" name="password" placeholder="Введите пароль">
                                                    </div>
                    </div>

                    <div class="form__group">
                                <label>Подтвердите пароль</label>
                                <small>( используйте латинские буквы и введите не менее 8 символов )</small>
                        <div class="form__group-input">
                            <a tabindex="-1" href="#" data-target="password_confirmation">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password"
                                   id="password_confirmation" name="password_confirmation"
                                   placeholder="Введите пароль ещё раз">
                                                    </div>
                                                    <br />
                            <div class="checkbox-block">
                                <input name="ok" type="checkbox" value="1" checked="checked" id="privacy-policy" required>
                                <label class="checked" for="privacy-policy">
                                    <div class="square"></div>
                                    Я согласен с <a tabindex="-1" href="../terms.php">пользовательским соглашением</a> &amp;
                                <a tabindex="-1" href="../policy.php">политикой конфиденциальности</a>.
                                </label>
                            </div>                        </div>
                            <div class="form__group">
                                <div class="form__links">
                                    У Вас уже есть аккаунт? <a href="./">Авторизоваться</a><br></div>
                            </div>
                         <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block register-btn"><span>Зарегистрироваться</span></button>
                        </div>
                         <p class="msg none"></p>

                         
                </form>
                        

                    </div>
                </div>
                
                <div class="auth__box">
                    <div class="auth__box-border">
                        <img class="auth__box-border-top" src="../template/indra/images/border-icon-top.png" alt="">
                    </div>
                    <h2 class="auth__box-title">Скачай файлы</h2>
                    <div class="auth__box-content">
                        <div class="download">
                            <a class="download__button" href="https://files.keltir.com/files/updater/Keltir_v2.0.exe">
                                <img src="/img/icons/start__item-download.png">
                                <div>
                                    <span>Игровой Лаунчер v2.0</span>
                                    <span>Размер: 1.5 MB</span>
                                </div>
                            </a>
                            <a class="download__button" href="https://files.keltir.com/files/client/Lineage%202%20C4%20Live.zip">
                                <img src="/img/icons/start__item-download.png">
                                <div>
                                    <span>Скачать клиент игры</span>
                                    <span>Размер: 2.33 Gb</span>
                                </div>
                            </a>
                            <p class="download__mirror-group">
                                <a class="download__mirror" href="https://files.keltir.com/files/Keltir%20C4%20Live.zip.torrent">
                                    <span>Торрент</span>
                                </a>
                                /
                                <a class="download__mirror" href="https://drive.google.com/file/d/16k2vuou0RqXIqA_8_BQoXjukqVkA3_Eo/view?usp=sharing">
                                    <span>Зеркало 2</span>
                                </a>
                            </p>

                            <h3>КАК НАЧАТЬ ИГРАТЬ В LINEAGE 2?</h3>

<ol>
    <li>Создайте мастер аккаунт и подтвердите его при помощи письма, отправленного на вашу почту</li>
    <li>Войдите в личный кабинет и создайте игровой аккаунт</li>
    <li>Скачайте Updater и распакуйте его в папку, где будет находиться игра</li>
    <li>Запустите Updater и нажмите &laquo;Полная проверка&raquo;</li>
    <li>После завершения полной проверки нажмите &laquo;Начать игру&raquo;. Также войти в игру <span>можно запустив файл L2.exe из папки system</span></li>
</ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END HEADER -->
    


    



                    </div>
                    
                <?php include"../include/footer.php" ?>

    

</body>
</html>
