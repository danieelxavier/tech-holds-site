<?php
session_start();

if (empty($_SESSION['user_email'])) {

    header('Location: ../index.php');
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
    <link rel="shortcut icon" type="image/ico" href="../../img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/stellarnav.min.css">
    <link rel="stylesheet" href="../../css/progressbar.css">
    <link rel="stylesheet" href="../../css/loader-spinner.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->


    <!--====== MAIN STYLESHEETS ======-->
    <link href="../../style.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">

    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
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
                            <a href="#home" class="navbar-brand"><img src="../../img/logo.png" alt="Tech Holds Maritime Services Vessel Cleaning" width="160"></a>

                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="/tech">Site</a></li>
                                <li><a href="../">Notices</a></li>
                                <li><a href="../users">Users</a></li>
                                <li><a href="../../php/logout-process.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->

    <div class="modal" id="loadModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header center">
                    <h4 class="modal-title">loading...</h4>
                </div>
                <div class="center load-notices-spinner" id="load-spinner">
                    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                </div>
                <div class="modal-body center">
                    <p>Please wait.</p>
                </div>
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" id="sss" data-dismiss="modal">Close</button>-->
<!--                </div>-->
            </div>

        </div>
    </div>

    <div class="modal" id="modal-sucess" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header center">
                    <h4 class="modal-title" id="modal-title">Sucess</h4>
                </div>
                <div class="modal-body center">
                    <p id="modal-message">Notice updated successful.</p>
                </div>
                <div class="modal-footer"">
                    <button type="button" class="btn btn-default" id="modal-sucess-ok-button" data-dismiss="modal">OK</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal" id="modal-error" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header center">
                    <h4 class="modal-title" id="modal-title">Error</h4>
                </div>
                <div class="modal-body center">
                    <p id="modal-message">You have to set title and notice text body.</p>
                </div>
                <div class="modal-footer"">
                <button type="button" class="btn btn-default" id="modal-error-ok-button" data-dismiss="modal-error">OK</button>
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

                            <h1>Edit Notice</h1>

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



    <!--FOOER AREA-->

    <?php  include("../../footer.html");  ?>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="../../js/vendor/jquery.easing.1.3.js"></script>
    <script src="../../js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../js/vendor/jquery.appear.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/stellar.js"></script>
    <script src="../../js/imagesloaded.pkgd.min.js"></script>
    <script src="../../js/isotope.pkgd.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/stellarnav.min.js"></script>
    <script src="../../js/create-notice-form.js"></script>
    <script src="../../js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="../../js/main.js"></script>
    <!--    <script src="js/maps.active.js"></script>-->



    <script type="text/javascript">
        // $("#myModal").hide();

        // $(window).on('load',function(){
        //     $('#myModal').modal('show');
        // });

        var objNotice = JSON.parse(localStorage.getItem('notice'));
        // console.log(objNotice);

        $('#form-body').val(objNotice.body.replace(/<\/br>/g,"\n"));
        $('#form-title').val(objNotice.title);


        $('#modal-sucess-ok-button').click(function () {
            location.href='../';
        });
        $('#modal-error-ok-button').click(function () {
            $('#modal-error').hide();
        });


        var processNewNotice = function (data){
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                data: data,
                url: "../../php/edit-notice-process.php",
                processData: false,
                contentType:false,
                dataType:"json",
                success: function(response){
                    $("#loadModal").hide();
                    // console.log(response);

                    if (response.status === 'success'){
                        // console.log(response.message);
                        $('#modal-sucess').show();


                    } else{
                        $('#modal-error').show();
                    }


                }
            });
        };


        $('#release-notice').click(function(){
            $("#loadModal").show();

            var error = false;
            var message = "";

            var formdata = new FormData();

            var files =  $('#form-image').prop('files');
            var title = $('#form-title').val().trim();
            var body = $('#form-body').val().trim();

            body = body.replace(/\r\n|\r|\n/g,"</br>");

            if(title.length === 0){
                error = true;
                message = "You have to set the title."
            }else if(body.length === 0){
                error = true;
                message = "You have to set the body post."
            }

            if (error){
                $("#loadModal").hide();
                $('#modal-error').show();
            } else{
                if(files.length > 0) {
                    var file = files[0];
                    formdata.append("form-image", file);
                }else {
                    formdata.append("form-image", "");
                }

                formdata.append("form-title", title);
                formdata.append("form-body", body);
                formdata.append("notice-id", objNotice.id);

                // console.log(formdata);
                // console.log(title);
                // console.log(body);
                // console.log(files[0]);


                processNewNotice(formdata)
            }


        });

    </script>



</body>

</html>
