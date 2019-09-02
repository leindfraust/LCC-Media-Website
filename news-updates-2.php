<?php
    include 'scripts/config.php';

    $query = mysqli_query($con, "SELECT * FROM news03 ORDER BY ID DESC LIMIT 1");
    $news_last = mysqli_fetch_row($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>LCC MEDIA</title>
    <meta charset="utf-8">
    <meta name="keywords" content="LCC, LCC INFO MEDIA, LCC MEDIA, La Consolacion College, LCC-Bais">
    <meta name="description" content="LCC- INFO MEDIA, the media to all LCCians">
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?=v.2123">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #night-mode {
            color: #f1f1f1;
        }

        #night-mode:hover {
            color: white;
        }

        /* image of the article */
        .news-012 {
            background: url(css/img/news03/bgimg/news03bgimg.jpg) no-repeat center center;
            background-size: cover;
        }

        h1 {
            background-color: skyblue;
            width: 42.7%;
            border-top-right-radius: 12px;
        }

    </style>
</head>

<body>
    <div class="hero is-medium news-012">
        <div class="hero-body">
            <div class="container">
                <!-- the title of the article -->
                <h1 class="title"> <?php echo ''.$news_last[6].''?> </h1>
                <a class="night-mode" onclick="nightMode()"> Night Mode </a>
            </div>
        </div>
    </div>
    <br>
    <!-- the body of the article-->
    <div class="container para-news"><br>
        <p class="subtitle"><?php echo''.$news_last[7].'' ?></p>
        <p class="subtitle has-text-centered"><?php echo ''.$news_last[3].''; ?>
        <br><br><?php echo ''.$news_last[4].''; ?>
        <br><br><?php echo ''.$news_last[5].''; ?>
        </p><br>
    </div>

    <br>
    <div class="container">
        <div class="columns">
            <div class="column is-3"><img src="css/img/authors/news03/news03author.jpg">
                <!-- here change the name of the author -->
                <p style="font-size: 15px;" class="subtitle">Author: <?php echo ''.$news_last[1].''; ?></p>
            </div>
            <!-- the intro of the author -->
            <div class="column is-4">
                <div id="author" style="margin-top: 25%; position: relative;">
                    <p style="font-size: 15px;" class="subtitle"> <?php echo ''.$news_last[2].''; ?></p>
                </div>
            </div>
        </div>
    </div>
    <br>

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
    
    <script src="scripts/functionjs.js"></script>
</body>

</html>
