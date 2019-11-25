<?php
function clearBrowserCache() {
    header("Pragma: no-cache");
    header("Cache: no-cache");
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 9 Jul 1995 05:00:00 GMT");
}
clearBrowserCache();
?>
<?php 
    include 'scripts/config.php';
?>
<?php
    $query = mysqli_query($con, "SELECT * FROM news01 ORDER BY ID DESC LIMIT 1");
    $news_last = mysqli_fetch_row($query);
?>
<?php
    $query02 = mysqli_query($con, "SELECT * FROM news02 ORDER BY ID DESC LIMIT 1");
    $news_last02 = mysqli_fetch_row($query02);
?>
<?php
    $query03 = mysqli_query($con, "SELECT * FROM news03 ORDER BY ID DESC LIMIT 1");
    $news_last03 = mysqli_fetch_row($query03);
?>
<?php
    $query04 = mysqli_query($con, "SELECT * FROM featuredevent ORDER BY ID DESC LIMIT 1");
    $featured = mysqli_fetch_row($query04);
?>
<!DOCTYPE html>
<html>

<head>
    <title>LCC MEDIA</title>
    <meta charset="utf-8">
    <meta name="keywords" content="LCC, LCC INFO MEDIA, LCC MEDIA, La Consolacion College, LCC-Bais, Bais College">
    <meta name="description" content="LCC- INFO MEDIA, the media to all LCCians">
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogos/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?=v.2.8988">
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

</head>

<body>
    <nav class="navbar is-hidden-mobile">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <span><img src="css/img/lcclogos/IMLogo.png"></span>
            </a>
            <div class="navbar-burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a class="navbar-item" href="#home">
                    <h2 class="has-text-white"> Home </h2>
                </a>
                <a class="navbar-item" href="#news-updates">
                    <h2 class="has-text-white"> News and Events </h2>
                </a>
                <a class="navbar-item" href="#galleryFeatures">
                    <h2 class="has-text-white"> Featured Photos and Merchandise</h2>
                </a>
            </div>
            <div class="navbar-end">
                <!--<a class="modal-button navbar-item" data-target=".modal" style="cursor: pointer;">
                    <h2>Faculty Member of the month!</h2>
                </a>-->
                <a class="navbar-item" onclick="nightMode()">
                    <h2 class="night-mode">Night Mode </h2>
                </a>
            </div>
        </div>
    </nav>
    <div id="home">

        <div id="nav-burger" class="overlay">
            <a class="closebtn" onclick="closeNav()">&times;</a>
            <a id="night-mode" class="night-mode" onclick="nightMode()">Night Mode</a>
            <!-- modal<button class="modal-button button is-warning" data-target=".modal" onclick="closeNav()">
                <p>Faculty member of the month!</p>
            </button>-->
            <div class="overlay-content">
                <p class="subtitle"><a onclick="closeNav()" href="#home">Home</a></p>
                <p class="subtitle"><a onclick="closeNav()" href="#news-updates">News and Events</a></p>
                <p class="subtitle"><a onclick="closeNav()" href="#galleryFeatures">Featured Photos and Merchandise</a></p>
            </div>
        </div>

        <div id="nav-man" class="is-hidden-desktop">
            <span onclick="openNav()"><button style="font-size:26px;cursor:pointer; border-radius: 5px; padding: 5px; background-color: #4FD5D6; border-color: transparent;">
                    <p><strong>MENU☰</strong></p>
                </button></span>
        </div>
        <div class="hero is-fullheight">
            <div class="hero-body">
                <div class="container" id="landing-page">
                    <h1 style="color: white !important;" class="title" id="arrayExceptTitle"> LCC-Bais InfoMedia <span><img src="css/img/lcclogos/lcclogo.png" width="10%"></span></h1>
                    <p style="color:    skyblue;" class="subtitle" id="arrayExceptSubtitle"><i> the media to all LCCians-Bais</i> </p>
                    <div id="img-logo">
                        <span><img src="css/img/lcclogos/visual.png" width="5%"></span>
                        <span><img src="css/img/lcclogos/IMLogoW.png" width="5%"></span>
                        <span><img src="css/img/lcclogos/mazu.png" width="5%"></span>
                        <span><img src="css/img/lcclogos/SGLCC.jpg" width="5%"></span>
                    </div>
                    <!--<div id="modal" class="modal is-active">
                        <div class="modal-background">
                        </div>
                        <div class="modal-content" style="overflow: hidden !important">
                            <div class="columns is-mobile">
                                <div class="column">
                                    <p class="subtitle has-text-centered" style="color: white;">FACULTY MEMBER OF THE MONTH</p>
                                    <img src="css/img/sample.jpg">
                                </div>
                                <div class="column">
                                    <p style="font-size: 15px; margin-top: 35%; color: white;" class="subtitle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis mauris, suscipit non ligula eget, ultricies suscipit turpis. Nullam volutpat, mi ac auctor gravida, leo nunc tincidunt eros, et pulvinar
                                        magna quam eu nulla.</p>
                                </div>
                            </div>
                        </div>
                        <button class="modal-close is-large" aria-label="close"></button>
                    </div>-->
                </div>
            </div>
        </div>
    </div><br>

    <div id="news-updates" class="container innerNoPadding"><br>
        <p class="title has-text-centered"> News and Events <span><img src="css/img/medialogos/news-logo.png" width="7%"></span> </p><br>
        <div class="columns">
            <p class="column subtitle has-text-centered"><b><?php echo ''.$featured[1].''?></b><br><br><?php echo ''.$featured[2].''?></p>
            <div class="column" id="featuredbg">
            </div>
        </div><br>
        <div class="container">
            <div class="inner">
                <div class="columns">
                    <div class="column">
                        <a href="news-updates-0.php"><img src="css/img/news01/banner/news01img.jpg"></a>
                        <p class="has-text-centered subtitle"><?php echo ''.$news_last[6].''?></p>
                    </div>
                    <div class="column">
                        <a href="news-updates-1.php"><img src="css/img/news02/banner/news02img.jpg"></a>
                        <p class="has-text-centered subtitle"><?php echo ''.$news_last02[6].''?></p>
                    </div>
                    <div class="column">
                        <a href="news-updates-2.php"><img src="css/img/news03/banner/news03img.jpg"></a>
                        <p class="has-text-centered subtitle"><?php echo ''.$news_last03[6].''?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns inner" id="galleryFeatures">
        <div class="column innerNoPadding">
            <h1 class="title has-text-centered">FEATURED PHOTOS<span><img src="css/img/medialogos/gallery-logo-1.png" width="7%"></span></h1>
            <div>
                <br>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="css/img/carousel/1.jpg"></div>
                    <div class="item"><img src="css/img/carousel/2.jpg"></div>
                    <div class="item"><img src="css/img/carousel/3.jpg"></div>
                    <div class="item"><img src="css/img/carousel/4.jpg"></div>
                    <div class="item"><img src="css/img/carousel/5.jpg"></div>
                    <div class="item"><img src="css/img/carousel/6.jpg"></div>
                    <div class="item"><img src="css/img/carousel/7.jpg"></div>
                    <div class="item"><img src="css/img/carousel/8.jpg"></div>
                </div>
            </div>
        </div>
        <div class="column">
            <h1 class="title has-text-centered">MERCHANDISE<span><img src="css/img/medialogos/merch-logo.png" width="7%"></span></h1>
            <img id="img-shirt" src="css/img/merchandise/shirt01.jpg" width="98%">
            <button class="button is-medium" onclick="window.location.href='requestForm.php'">
                ORDER NOW </button><br>
        </div>
    </div><br>

    <section class="footer">
        <center>
            <p class="subtitle">Made by <strong><a href="https://www.facebook.com/INFO-MEDIA-LCC-1880646818710214/">LCC-Bais InfoMedia</a></strong></p>
        </center>
        <br>
        <center>
            <a href="https://www.facebook.com/INFO-MEDIA-LCC-1880646818710214/"><span><img src="css/img/medialogos/fb.png" width="3%"></span></a>
            <a href="#"><span><img src="css/img/medialogos/insta.png" width="3%"></span></a>
            <a href="#"><span><img src="css/img/medialogos/twitter.png" width="3%"></span></a>
            <a href="infomedialcc@gmail.com"><span><img src="css/img/medialogos/gmail.png" width="3%"></span></a>
        </center>
    </section>

    <script src="scripts/functionjs.js?v.1.6">
    </script>
    <script src="scripts/anchorlink.js">
    </script>
    <script src="owlcarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="scripts/vue.js"></script>
    <script src="scripts/function-vuejs.js"></script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                autoplay: true,
                center: true,
                item: 8,
                loop: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.modal-button').click(function() {
                $('.modal').addClass("is-active");
            });
            $('.modal-close').click(function() {
                $('.modal').removeClass("is-active");
            });
        });

    </script>
</body>

</html>
