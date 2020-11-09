<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Города</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">

    <script>
        var renderPage = true;

        if(navigator.userAgent.indexOf('MSIE')!==-1
            || navigator.appVersion.indexOf('Trident/') > 0){
            /* Microsoft Internet Explorer detected in. */
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>
</head>

<body>
<!-- Загрузчик -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<div class="container-fluid tm-main">
    <div class="row tm-main-row">

        <!-- Меню -->
        <div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

            <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

            <div class="inner">
                <nav id="tmMainNav" class="tm-main-nav">
                    <ul>
                        <li>
                            <a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
                                <i class="fas fa-home tm-nav-fa-icon"></i>
                                <span>Главная</span>
                            </a>
                        </li>
                        <li>
                            <a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2" data-page-type="carousel">
                                <i class="fas fa-map tm-nav-fa-icon"></i>
                                <span>Города</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
                                <i class="fas fa-comments tm-nav-fa-icon"></i>
                                <span>Добавить город</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

            <!-- section 1 -->
            <section id="tm-section-1" class="tm-section">
                <div class="ml-auto">
                    <header class="mb-4"><h1 class="tm-text-shadow">Список городов</h1></header>
                    <?php include"include/data.php";?>
                    <p class="mb-5 tm-font-big">Здесь можно смотреть и добавлять города</p>
                    <a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Приступить</a>
                </div>
            </section>

            <!-- section 2 -->
            <section id="tm-section-2" class="tm-section tm-section-carousel">
                <div>
                    <header class="mb-4"><h2 class="tm-text-shadow">Города</h2></header>
                    <div class="tm-img-container">
                        <div class="tm-img-slider">

                            <?php echo "$section2";?>

                        </div>
                    </div>
                </div>
            </section>

            <!-- section 4 -->
            <section id="tm-section-4" class="tm-section">
                <div class="tm-bg-transparent-black tm-contact-box-pad">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <header><h2 class="tm-text-shadow">Добавить город</h2></header>
                        </div>
                    </div>
                    <div class="row tm-page-4-content">
                        <div class="col-md-12 col-sm-12 tm-contact-col">
                            <div class="contact_message">
                                <form action="include/add.php" id="adding_form" method="post" class="contact-form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <p>Название города</p>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Название города" required="">
                                    </div>
                                    <div class="form-group">
                                        <p>Добавить фото</p>
                                        <input type="file" size="10" accept="image/jpeg,image/png" id="foto" name="foto" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <p>Добавить превью фото (300х400)</p>
                                        <input type="file" accept="image/jpeg,image/png" id="foto_prev" name="foto_prev" class="form-control" required="">
                                    </div>
                                    <button type="submit" id="sbt_btn" class="btn tm-btn-submit tm-btn ml-auto">Добавить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer-link">

        </footer>
    </div>
</div>
<div id="preload-01"></div>
<div id="preload-02"></div>
<div id="preload-03"></div>
<div id="preload-04"></div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->
<script type="text/javascript" src="js/footer.js"></script>

</body>
</html>