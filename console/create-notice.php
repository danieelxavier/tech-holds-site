<?php
session_start();

if (empty($_SESSION['user_email'])) {

    header('Location: index.php');
    exit();
}
?>

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
    <title>TECH-HOLDS - Quality and eficience in vessel cleaning</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="../img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/stellarnav.min.css">
    <link rel="stylesheet" href="../css/progressbar.css">
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
    <script src="../js/create-notice-form.js"></script>
    <script src="../js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="../js/main.js"></script>
    <!--    <script src="js/maps.active.js"></script>-->



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
                            <a href="#home" class="navbar-brand"><img src="../img/logo.png" alt="Tech Holds Maritime Services Vessel Cleaning" width="160"></a>

                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="/tech">Site</a></li>
                                <li><a href="notices.php">Notices</a></li>
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

    <div class="modal show" id="myModal" role="dialog">
        <div class="modal-dialog">

            <div class="center load-notices-spinner" id="load-spinner">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            </div>
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="sss" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!--SERVICE TOP AREA-->
    <section class="create-notice-area padding-top gray-bg" id="create-notice">
        <div class="create-notice-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-3 col-lg-8 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="create-notice-form mb50 wow fadeIn">

                            <h1>New Notice</h1>

                            <form action="#" id="create-notice-form" method="post" enctype="multipart/form-data">

                                <div class="form-group" id="title-field">
                                    <div class="form-input">
                                        <label for="form-title">Title:</label>
                                        <input type="text" class="form-control" id="form-title" name="form-title" placeholder="Title.." required>
                                    </div>
                                </div>

                                <div class="form-group" id="body-field">
                                    <div class="form-input">
                                        <label for="form-body">Notice text body:</label>
                                        <textarea type="text" class="form-control" id="form-body" name="form-body" rows="15" placeholder="Write the notice here.."></textarea>
<!--                                        <textarea class="form-control" id="form-body"  >-->
                                    </div>
                                </div>

                                <div class="form-group" id="image-field">
                                    <label for="form-image">Select image to upload:</label>
                                    <input class="input-image" type="file" name="form-image" id="form-image">
                                </div>

                                <div class="form-group">
                                    <button type="button" id="release-notice">Release</button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--SERVICE TOP AREA END-->

<!--    <div>-->
<!--        <!-- Trigger the modal with a button -->-->
<!--        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

        <!-- Modal -->


<!--    </div>-->



    <!--FOOER AREA-->

    <?php  include("../footer.html");  ?>
    <!--FOOER AREA END-->




    <script type="text/javascript">

        // $(window).on('load',function(){
        //     $('#myModal').modal('show');
        // });

        $('#sss').click(function () {
            console.log("asdasdasdasdsa");
            $('#myModal').hide();
        });


        $('#release-notice').click(function(){


            var formdata = new FormData();

            var files =  $('#form-image').prop('files');

            if(files.length > 0)
            {
                var file = files[0];
                formdata.append("form-image", file);
            }

            var title = $('#form-title').val();
            var body = $('#form-body').val();

            formdata.append("form-title", title);
            formdata.append("form-body", body);

            console.log(formdata);
            console.log(title);
            console.log(body);
            console.log(files[0]);

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                data: formdata,
                url: "../php/create-notice-process.php",
                processData: false,
                contentType:false,
                dataType:"json",
                success: function(response){
                    console.log(response);

                    if (response.status === 'success'){
                        console.log(response.message);

                    } else{
                        console.log(response.message);
                    }


                }
            });



            // $.ajax({
            //     type: "POST",
            //     data: { name: name,
            //         email : email,
            //         subject: subject,
            //         message: message,},
            //     url: "mail.php",
            //     dataType: "json",
            //     complete: function (xhr, status,) {
            //         console.log(xhr);
            //         if(status === 'error' || xhr.responseJSON['status'] === 'error'){
            //
            //         }
            //         else{
            //
            //         }
            //     }
            //
            // });
        });

    </script>



</body>

</html>
