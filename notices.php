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
    <title>TECH-HOLDS Admin - Notices</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/progressbar.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->


    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="Tech Holds Maritime Services Vessel Cleaning" width="160"></a>

                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="/tech">Site</a></li>
                                <li class="active"><a href="#">Notices</a></li>
                                <li><a href="#logout">Users</a></li>
                                <li><a href="#logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->



    <!--SERVICE TOP AREA-->
    <section class="about-area padding-100-50 gray-bg" id="features">
        <div class="container">

            <h1>TECH-HOLDS Notices</h1>

            <div class="row actions-notice right col-md-4 col-lg-4 col-sm-12 col-xs-12" id="actions">
                <button type="button" class="btn btn-success" id="btn-create-notice">Create a notice</button>
            </div>

            <div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12" id="notices">

                <!-- news be here  -->

            </div>
        </div>
    </section>
    <!--SERVICE TOP AREA END-->




    <!--FOOER AREA-->

    <?php  include("footer.html");  ?>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
    <!--    <script src="js/maps.active.js"></script>-->


    <script type="text/javascript">


        var notices = document.getElementById("notices");

        var newNotice = function(objNotice){
            var newNotice = notices.appendChild(document.createElement("div"));
            newNotice.setAttribute("class", "single-notice wow fadeIn");

            var imagePath;
            if(objNotice.image){
                imagePath = 'uploads/'+objNotice.image;
            }
            else{
                imagePath = 'img/slider/slide-1.jpg';
            }

            var image = newNotice.appendChild(document.createElement("img"));
            image.setAttribute("src", imagePath);
            image.setAttribute("alt", objNotice.title);

            newNotice.appendChild(document.createElement("h3")).innerHTML = objNotice.title;
            newNotice.appendChild(document.createElement("p")).innerHTML = objNotice.body;

            var options = newNotice.appendChild(document.createElement("div"));
            options.setAttribute("class", "notice-options");
            var buttonShow = options.appendChild(document.createElement("button"));
            buttonShow.setAttribute("class", "btn btn-info");
            buttonShow.innerText = "Show";
            var buttonEdit = options.appendChild(document.createElement("button"));
            buttonEdit.setAttribute("class", "btn btn-warning");
            buttonEdit.innerText = "Edit";
            var buttonDelete = options.appendChild(document.createElement("button"));
            buttonDelete.setAttribute("class", "btn btn-danger");
            buttonDelete.innerText = "Delete";
        };

        $.ajax({
            type: "GET",
            url: "php/notices-process.php",
            dataType:'JSON',
            success: function(response){
                console.log(response);
                
                for (objNotice of response){
                    console.log(objNotice.title);

                    newNotice(objNotice);
                }
                
            }
        });

        document.getElementById("btn-create-notice").onclick = function () {
            location.href='create-notice.php';
        };

        
        // document.getElementById("comentar").onclick = function () {
        //
        //     var text = String(document.getElementById("comentario").value);
        //
        //     if(text != ""){
        //         var newcomentario = comentarios.appendChild(document.createElement("div"));
        //
        //         newcomentario.setAttribute("class", "single-service text-center wow fadeIn");
        //
        //         var imageContent = newcomentario.appendChild(document.createElement("div"));
        //         imageContent.setAttribute("class", "service-icon");
        //         var image = imageContent.appendChild(document.createElement("div"));
        //         image.setAttribute("class", "i fa fa-tools");
        //
        //         newcomentario.appendChild(document.createElement("h3")).innerHTML = text;
        //     }
        // };

    </script>



</body>

</html>
