<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <title> Create Souls | Services </title>
         <!-- og -->
    <meta name="image" content="http://createsouls.com/images/share.png">
    <meta name="robots" content="index">
    <link rel="canonical" href="http://createsouls.com/">
    <meta name="author" content="A soulful approach to UI/UX, Web,Web App,Mobile App,Brand Design">
    <meta property="og:site_name" content="Create Souls">
    <meta property="og:title" content="A soulful approach to UI/UX, Web,Web App,Mobile App,Brand Design">
    <meta property="og:url" content="http://createsouls.com/">
    <meta property="og:description" content="A soulful approach to UI/UX, Web,Web App,Mobile App,Brand Design">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://createsouls.com/images/share.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Create Souls">
    <meta name="twitter:url" content="http://createsouls.com/">
    <meta name="twitter:description" content="A soulful approach to UI/UX, Web,Web App,Mobile App,Brand Design">
    <meta name="twitter:image" content="http://createsouls.com/images/share.png">
     <!-- fav -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/custom-styles.css?v=50758" />
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <main class="o-scroll" id="js-scroll" data-scroll-container>
        <div class="page-title">
            <div class="container">
                <h1>The things <b>we do</b> with <span>Lots of love</span></h1>
                
            </div>
        </div>
        <section class="services-list">
            <div class="container">
                <div class="row justify-content-between services-row">
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/ui-ux-design-icon.svg" alt="">
                                <h4 class="title">UI/UX Design</h4>
                            </div>
                            <img class="bg" src="images/services-design.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/services-mobile-app-icon.svg" alt="">
                                <h4 class="title">Mobile App Development</h4>
                            </div>
                            <img class="bg" src="images/services-mobile-app.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/services-ecommerce-icon.svg" alt="Ecommerce">
                                <h4 class="title">Ecommerce</h4>
                            </div>
                            <img class="bg" src="images/services-ecommerce.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/services-branding-icon.svg" alt="Brandiing">
                                <h4 class="title">Branding</h4>
                            </div>
                            <img class="bg" src="images/services-branding.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/services-design-graphic-icon.svg" alt="Graphic Design">
                                <h4 class="title">Graphic Design</h4>
                            </div>
                            <img class="bg" src="images/services-grapic-design.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <div class="service-item">
                            <div class="content">
                                <img src="images/services-ad-films-icon.svg" alt="Ad Films">
                                <h4 class="title">Ad Films</h4>
                            </div>
                            <img class="bg" src="images/services-ad-films.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Footer/ -->
        <?php include "includes/footer.php"; ?>
    </main>
    <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js"
        crossorigin="anonymous"></script>
    <script nomodule
        src="https://polyfill.io/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        var container = $('.service-item');
        $(container).bind("webkitAnimationEnd mozAnimationEnd animationEnd", function () {
            $(this).removeClass("animated")
        })
        $(container).hover(function () {
            $(this).addClass("animated");
        })
    </script>
</body>
</html>