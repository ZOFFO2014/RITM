<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RITM gallery</title>
    <link href="dist/css/lightgallery.css" rel="stylesheet">
    <script type="text/javascript" src="../js/lazyload.js">
    </script>
    <style type="text/css">

    @charset="UTF-8"
    body {
        margin: 0;

        background-color: #152836
    }

    .demo-gallery>ul {
        margin-bottom: 0;
        list-style: none;
    }

    .demo-gallery>ul>li {
        float: left;
        margin-bottom: 15px;
        margin-right: 20px;
        width: 200px;
    }

    .demo-gallery>ul>li a {
        border: 3px solid #FFF;
        border-radius: 3px;
        display: block;
        overflow: hidden;
        position: relative;
        float: left;
    }

    .demo-gallery>ul>li a>img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 135px;
        width: 100%;
    }

    .demo-gallery>ul>li a:hover>img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }

    .demo-gallery>ul>li a:hover .demo-gallery-poster>img {
        opacity: 1;
    }

    .demo-gallery>ul>li a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }

    .demo-gallery>ul>li a .demo-gallery-poster>img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }

    .demo-gallery>ul>li a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .demo-gallery .justified-gallery>a>img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
    }

    .demo-gallery .justified-gallery>a:hover>img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }

    .demo-gallery .justified-gallery>a:hover .demo-gallery-poster>img {
        opacity: 1;
    }

    .demo-gallery .justified-gallery>a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }

    .demo-gallery .justified-gallery>a .demo-gallery-poster>img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }

    .demo-gallery .justified-gallery>a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .demo-gallery .video .demo-gallery-poster img {
        height: 48px;
        margin-left: -24px;
        margin-top: -24px;
        opacity: 0.8;
        width: 48px;
    }

    .demo-gallery.dark>ul>li a {
        border: 3px solid #04070a;
    }

    .home .demo-gallery {
        padding-bottom: 80px;
    }

    .lg-on {
        overflow: hidden;
    }
  

    /* .home h2 {
        text-align: center;
        color: #fff;
        padding: 30px;
        font-size: 32px;
        text-transform: uppercase;
    } */

    @media screen and (max-width: 420px) {
        .demo-gallery>ul>li a>img{
            height: 100%!important;
        }
        
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body class="home">
    <!--  <h2>это мы</h2> -->
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row">

  

            <?php
            $dir = 'img/';
            $scan = scandir($dir);

            for ($i=0; $i<count($scan); $i++) {
             if ($scan[$i] != '.' && $scan[$i] != '..') {
             echo '
<li class="col-xs-6 col-sm-4 col-md-3 
"data-src="'. $dir . $scan[$i] . '"  data-sub-html="">
<a href="">
<img class="img-responsive "  src="load/load.gif" alt="'. $scan[$i] . '"  data-src="'. $dir . $scan[$i] . '"  />
</a>
</li>';
             }
            }
        ?>
            
              
        </ul>
    </div>
    <script>
    let images = document.querySelectorAll("img");
    lazyload(images);
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });
    </script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="dist/js/lightgallery.min.js"></script>
    <script src="dist/js/lg-fullscreen.min.js"></script>
    <script src="dist/js/lg-thumbnail.min.js"></script>
    <script src="dist/js/lg-video.min.js"></script>
    <script src="dist/js/lg-autoplay.min.js"></script>
    <script src="dist/js/lg-zoom.min.js"></script>
    <script src="dist/js/lg-hash.min.js"></script>
    <script src="dist/js/lg-pager.min.js"></script>
    <!--  <script src="lib/jquery.mousewheel.min.js"></script> -->
</body>

</html>