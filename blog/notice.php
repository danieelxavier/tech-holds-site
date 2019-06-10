
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Portfolio & Agency Template is a simple Smooth Personal Portfolio and Agency Based Template" />
    <meta name="keywords" content="Personal, Portfolio, Agency, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>TECH-HOLDS - Notice</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="../img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/stellarnav.min.css">
    <link rel="stylesheet" href="../css/progressbar.css">
    <link rel="stylesheet" href="../css/loader-spinner.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->


    <!--====== MAIN STYLESHEETS ======-->
    <link href="../style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fas fa-long-arrow-alt-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">

        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="../" class="navbar-brand"><img src="../img/logo.png" alt="Tech Holds Maritime Services Vessel Cleaning" width="160"></a>

                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="../">Back to Site</a></li>
                                <li><a href="index.php">Show all posts</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->


    <!--ABOUT AREA-->
    <section class="notice-screen-area padding-100-50 gray-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="notice-header mb50 wow fadeIn" id="notice-header">

                    </div>
                </div>

                <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="about-content mb50 wow fadeIn">
                        <div class="notice-image wow fadeIn" id="notice-image">

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="notice-content mb50 wow fadeIn" id="notice-text">

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->




    <!--FOOER AREA-->

    <?php  include("../footer.html");  ?>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="../js/vendor/jquery.easing.1.3.js"></script>
    <script src="../js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/vendor/jquery.appear.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/stellar.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/stellarnav.min.js"></script>
    <script src="../js/contact-form.js"></script>
    <script src="../js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="../js/main.js"></script>
    <!--    <script src="js/maps.active.js"></script>-->


    <script type="text/javascript">

        var objNotice = JSON.parse(localStorage.getItem('notice'));
        // console.log(objNotice);

        var header = document.getElementById("notice-header");

        var date = header.appendChild(document.createElement("p"));
        var title = header.appendChild(document.createElement("h1"));
        date.innerHTML = "Last modified: "+timeConverter(parseInt(objNotice.modifiedDate));
        title.innerHTML = objNotice.title;

        var image = document.getElementById("notice-image");
        var imagePath;
        if(objNotice.image){
            imagePath = '../uploads/'+objNotice.image;
            var img = image.appendChild(document.createElement("img"));
            img.setAttribute("src", imagePath);
            img.setAttribute("alt", objNotice.title);
        }

        var text = document.getElementById("notice-text");
        var txt = text.appendChild(document.createElement("p"));
        txt.innerHTML = objNotice.body;

        document.title = "TECH-HOLDS - " + objNotice.title.substring(0,10) + "...";

        function timeConverter(UNIX_timestamp){
            var a = new Date(UNIX_timestamp * 1000);
            var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
            var year = a.getFullYear();
            var month = months[a.getMonth()];
            var date = a.getDate();
            var hour = a.getHours();
            var min = a.getMinutes();
            var sec = a.getSeconds();
            var time = date.toString().padStart(2,0) + '/' + month + '/' + year + ' - ' + hour.toString().padStart(2,0) + ':' + min.toString().padStart(2,0) ;
            return time;
        }

    </script>



</body>

</html>
