<?
require_once 'include/config.php';
?>
<html lang="ru">
<?php include"include/main.php" ?>
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

    

    <link rel="shortcut icon" href="template/indra/images/favicon.png">
    <link rel="apple-touch-icon" sizes="256x256" href="template/indra/images/favicon.png">

    <link rel="stylesheet" href="template/indra/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="template/indra/css/main.min.css">
    <link rel="stylesheet" type="template/indra/text/css" href="css/slick.css">
    <link rel="stylesheet" type="template/indra/text/css" href="css/slick-theme.css">

    <link rel="stylesheet" type="template/indra/text/css" href="css/addition.css">

</head>
<body>

<div class="wrapper">

    <!-- NAVIGATION -->
<nav class="nav">
    <div class="content-area">

        <a href="/" class="nav__logo">
            <img src="template/indra/images/logo.png" alt="logo">
        </a>

        <div class="nav__links">

    <?php include "include/menu.php"?>

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

        <a href="./cp" class="nav__auth flex-cc">
        <i class="fas fa-sign-in-alt"></i>
        <span>Кабинет</span>
    </a>
    <a href="./cp/register.php" class="gray-btn nav__account-btn">
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
<header class="header">
<!-- <video loop="" muted="" autoplay="" poster="images/illidan-still.html" id="bgvid">
        <source src="images/bg.webm" type="video/webm">
    </source></video> -->
    <div class="content-area flex-сс">
        <div class="header__content flex-sbe">
            <!-- INFORMATION -->
            <div class="header__info">
                <!-- LOGO -->
                <a href="#" class="header__logo flex-cc">
                    <img src="template/indra/images/logo.png" alt="logotype">
                </a>
                <!-- END LOGO -->

                                                                                                                    
                                    <div class="header__info-title">Добро пожаловать
                        <span>на Aviasales!</span>
                    </div>
                    <a href="./cp/cabinet.php" class="header__link">
                        <span>Начать играть</span>
                    </a>
                
            </div>
            <!-- END INFORMATION -->

             <!-- SERVERS -->
            <div class="header__server">
                                                    <div class="header__server-item-position">
                    <div class="header__server-item">
                        <div class="header__server-item-icon">
                            <img src="template/indra/images/tn1bZ9rL7z8g3W75oqTy7QMPhYeBEVkA8yfUkY3Y.png" alt="server icon">
                        </div>
                        <div class="header__server-item-description">
                    <div class="header__server-item-info">
                        <div class="header__server-item-name">Alterac <span>GM</span></div>
                        <div class="header__server-item-text">в игре: <span><?php include"include/gm.php"?></span></div>
                    </div>
                 <!--   <div class="header__server-item-online">
                        <div>
                            <div class="header__server-item-online-item">
                                Онлайн персонажи: <span>2</span>
                            </div>
                            <div class="header__server-item-online-item">
                                Персонажей 70 уровня: <span>2</span>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
                            </div>
            <!-- END SERVERS -->

      <!--  </div> -->

        <div class="header__news">
                        <?php include"include/news.php"?>
            </div>
            </div>

    </div>
</header>
<!-- END HEADER -->

    <!-- MAIN -->
    <main class="main">

        <section class="server-section">
    <div class="content-area flex-es">

        <div class="server-section-sliders">

            

            <div class="server-section-slider-for">

                                    <div class="server-section-slider-for-item">
                        <div class="server-section-slider-for-item-border">
                            <img class="border-icon-top" src="template/indra/images/server-section-slider-for-item-border-top.png" alt="">
                        </div>
                        <div class="server-section-slider-for-item-info-line flex-sbe">
                            <?php include"include/server-info.php"?>
                    </div>
                            </div>
        </div>
    </div>
</section>

        <div class="main__bottom">

         <!--   <section class="streams">
    <div class="content-area flex-sbe">
        <div class="streams-slider">

                        
                                        
        </div>
    </div>
</section> -->

            <?php include"include/raiting.php" ?>
        </div>

    </main>
    <!-- END MAIN -->


    <?php include"include/footer.php" ?>




</body></html>