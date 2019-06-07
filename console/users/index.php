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
    <title>TECH-HOLDS Admin - Users</title>

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
                                <li><a href="../notices">Notices</a></li>
                                <li class="active"><a href="../users/">Users</a></li>
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

    <div class="modal" id="modal-load" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header center">
                    <h4 class="modal-title">loading...</h4>
                </div>
                <div class="center load-modal-spinner" id="load-modal-spinner">
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
                    <p id="modal-message">User deleted successful.</p>
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
                    <p id="modal-message">Fail to delete user.</p>
                </div>
                <div class="modal-footer"">
                    <button type="button" class="btn btn-default" id="modal-error-ok-button" data-dismiss="modal-error">OK</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal" id="modal-delete" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header center">
                    <h4 class="modal-title" id="modal-title">Delete user</h4>
                </div>
                <div class="modal-body center">
                    <p id="modal-message">do you really want to delete the user?</p>
                    <p>This action can not be undone.</p>
                </div>
                <div class="modal-footer"">
                <button type="button" class="btn btn-danger" id="modal-delete-cancel" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" id="modal-delete-confirm" data-dismiss="modal">Confirm</button>
                </div>
            </div>

        </div>
    </div>

    <!--SERVICE TOP AREA-->
    <section class="about-area padding-100-50 gray-bg" id="features">
        <div class="container">

            <h1 class="col-md-12 col-lg-12 col-sm-12 col-xs-12">Users</h1>

            <div class="actions-notice right col-md-4 col-lg-4 col-sm-12 col-xs-12" id="actions">
                <button type="button" class="btn btn-success" id="btn-create-user">Create a new user</button>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="notices">

                <!-- news be here  -->

            </div>


            <div class="center load-notices-spinner" id="load-spinner">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
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
    <script src="../../js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="../../js/main.js"></script>
    <!--    <script src="js/maps.active.js"></script>-->


    <script type="text/javascript">

        var users = document.getElementById("notices");

        var idDeleteUser = -1;

        var newUser = function(objUser){
            var newUser = users.appendChild(document.createElement("div"));
            newUser.setAttribute("class", "single-notice wow fadeIn");


            newUser.appendChild(document.createElement("p")).innerHTML = "<b>ID:<\/b> " + objUser.id;
            newUser.appendChild(document.createElement("p")).innerHTML = "<b>Name:<\/b> " + objUser.name;
            newUser.appendChild(document.createElement("p")).innerHTML = "<b>Email:<\/b> " + objUser.email;


            var options = newUser.appendChild(document.createElement("div"));
            options.setAttribute("class", "notice-options");
            var buttonEdit = options.appendChild(document.createElement("button"));
            buttonEdit.setAttribute("class", "btn-edit-link btn btn-warning");
            buttonEdit.setAttribute("id", ""+objUser.id);
            buttonEdit.innerText = "Edit";
            var buttonDelete = options.appendChild(document.createElement("button"));
            buttonDelete.setAttribute("class", "btn-delete-link btn btn-danger");
            buttonDelete.setAttribute("id", ""+objUser.id);
            buttonDelete.innerText = "Delete";
        };

        var loadUsersByDB = function(){

            var dictUsers = {};
            $.ajax({
                type: "GET",
                url: "../../php/users-process.php",
                dataType:'JSON',
                success: function(response){
                    // console.log(response);

                    $('#load-spinner').hide();


                    for (objUser of response){
                        // console.log(objUser.title);

                        newUser(objUser);

                        dictUsers[objUser.id] = objUser;
                    }

                    $("button.btn-edit-link").click(function() {
                        let id = this.getAttribute("id");
                        localStorage.setItem('user', JSON.stringify(dictUsers[id]));
                        location.href='edit-user.php';
                    });

                    $("button.btn-delete-link").click(function() {
                        idDeleteUser = this.getAttribute("id");
                        $('#modal-delete').show();
                    });

                }
            });

        };


        $("#btn-create-user").click( function () {
            location.href='create-user.php';
        });


        $('#modal-sucess-ok-button').click(function () {
            location.reload();
        });
        $('#modal-error-ok-button').click(function () {
            $('#modal-error').hide();
        });
        $('#modal-delete-cancel').click(function () {
            $('#modal-delete').hide();
            idDeleteUser = -1;
        });
        $('#modal-delete-confirm').click(function () {
            $('#modal-delete').hide();
            if (idDeleteUser !== -1){
                $("#modal-load").show();

                $.post("../../php/delete-user-process.php",
                {
                    id: idDeleteUser
                },
                function(data, status){
                    $("#modal-load").hide();

                    var res = JSON.parse(data);

                    if (res.status === 'success'){
                        // console.log(res.message);
                        $('#modal-sucess').show();


                    } else{
                        $('#modal-error').show();
                    }
                });
            }
        });


        loadUsersByDB();

    </script>



</body>

</html>
