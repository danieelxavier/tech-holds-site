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
                                <li class="active"><a href="../users">Users</a></li>
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
                    <p id="modal-message">User created successful.</p>
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
                    <p id="modal-error-message">Some error ocurred.</p>
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

                            <h1>Edit User</h1>

                            <form action="#" id="create-notice-form" method="post" enctype="multipart/form-data">

                                <div class="form-group" id="title-field">
                                    <div class="form-input">
                                        <label for="form-name">Name:</label>
                                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                    </div>
                                </div>

                                <div class="form-group" id="title-field">
                                    <div class="form-input">
                                        <label for="form-email">Email:</label>
                                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                    </div>
                                </div>

                                <div class="form-group" id="title-field">
                                    <div class="form-input">
                                        <label for="form-password"></br><b>Change password</b> </br></br>New password:</label>
                                        <input type="password" class="form-control" id="form-password" name="form-password" placeholder="New password.." required>
                                    </div>
                                </div>

                                <div class="form-group" id="title-field">
                                    <div class="form-input">
                                        <label for="form-confirm-password">Confirm new password:</label>
                                        <input type="text" class="form-control" id="form-confirm-password" name="form-confirm-password" placeholder="Conform new password.." required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="button" id="release-notice">Create</button>
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

        var objUser = JSON.parse(localStorage.getItem('user'));
        // console.log(objNotice);

        $('#form-name').val(objUser.name);
        $('#form-email').val(objUser.email);


        $('#modal-sucess-ok-button').click(function () {
            location.href='../users/';
        });
        $('#modal-error-ok-button').click(function () {
            $('#modal-error').hide();
        });


        var processEditUser = function (data){
            $.ajax({
                type: "POST",
                data: data,
                url: "../../php/edit-user-process.php",
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

        var validateEmail = function(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        };

        var MD5 = function(d){result = M(V(Y(X(d),8*d.length)));return result.toLowerCase()};function M(d){for(var _,m="0123456789ABCDEF",f="",r=0;r<d.length;r++)_=d.charCodeAt(r),f+=m.charAt(_>>>4&15)+m.charAt(15&_);return f}function X(d){for(var _=Array(d.length>>2),m=0;m<_.length;m++)_[m]=0;for(m=0;m<8*d.length;m+=8)_[m>>5]|=(255&d.charCodeAt(m/8))<<m%32;return _}function V(d){for(var _="",m=0;m<32*d.length;m+=8)_+=String.fromCharCode(d[m>>5]>>>m%32&255);return _}function Y(d,_){d[_>>5]|=128<<_%32,d[14+(_+64>>>9<<4)]=_;for(var m=1732584193,f=-271733879,r=-1732584194,i=271733878,n=0;n<d.length;n+=16){var h=m,t=f,g=r,e=i;f=md5_ii(f=md5_ii(f=md5_ii(f=md5_ii(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_ff(f=md5_ff(f=md5_ff(f=md5_ff(f,r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+0],7,-680876936),f,r,d[n+1],12,-389564586),m,f,d[n+2],17,606105819),i,m,d[n+3],22,-1044525330),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+4],7,-176418897),f,r,d[n+5],12,1200080426),m,f,d[n+6],17,-1473231341),i,m,d[n+7],22,-45705983),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+8],7,1770035416),f,r,d[n+9],12,-1958414417),m,f,d[n+10],17,-42063),i,m,d[n+11],22,-1990404162),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+12],7,1804603682),f,r,d[n+13],12,-40341101),m,f,d[n+14],17,-1502002290),i,m,d[n+15],22,1236535329),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+1],5,-165796510),f,r,d[n+6],9,-1069501632),m,f,d[n+11],14,643717713),i,m,d[n+0],20,-373897302),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+5],5,-701558691),f,r,d[n+10],9,38016083),m,f,d[n+15],14,-660478335),i,m,d[n+4],20,-405537848),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+9],5,568446438),f,r,d[n+14],9,-1019803690),m,f,d[n+3],14,-187363961),i,m,d[n+8],20,1163531501),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+13],5,-1444681467),f,r,d[n+2],9,-51403784),m,f,d[n+7],14,1735328473),i,m,d[n+12],20,-1926607734),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+5],4,-378558),f,r,d[n+8],11,-2022574463),m,f,d[n+11],16,1839030562),i,m,d[n+14],23,-35309556),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+1],4,-1530992060),f,r,d[n+4],11,1272893353),m,f,d[n+7],16,-155497632),i,m,d[n+10],23,-1094730640),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+13],4,681279174),f,r,d[n+0],11,-358537222),m,f,d[n+3],16,-722521979),i,m,d[n+6],23,76029189),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+9],4,-640364487),f,r,d[n+12],11,-421815835),m,f,d[n+15],16,530742520),i,m,d[n+2],23,-995338651),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+0],6,-198630844),f,r,d[n+7],10,1126891415),m,f,d[n+14],15,-1416354905),i,m,d[n+5],21,-57434055),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+12],6,1700485571),f,r,d[n+3],10,-1894986606),m,f,d[n+10],15,-1051523),i,m,d[n+1],21,-2054922799),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+8],6,1873313359),f,r,d[n+15],10,-30611744),m,f,d[n+6],15,-1560198380),i,m,d[n+13],21,1309151649),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+4],6,-145523070),f,r,d[n+11],10,-1120210379),m,f,d[n+2],15,718787259),i,m,d[n+9],21,-343485551),m=safe_add(m,h),f=safe_add(f,t),r=safe_add(r,g),i=safe_add(i,e)}return Array(m,f,r,i)}function md5_cmn(d,_,m,f,r,i){return safe_add(bit_rol(safe_add(safe_add(_,d),safe_add(f,i)),r),m)}function md5_ff(d,_,m,f,r,i,n){return md5_cmn(_&m|~_&f,d,_,r,i,n)}function md5_gg(d,_,m,f,r,i,n){return md5_cmn(_&f|m&~f,d,_,r,i,n)}function md5_hh(d,_,m,f,r,i,n){return md5_cmn(_^m^f,d,_,r,i,n)}function md5_ii(d,_,m,f,r,i,n){return md5_cmn(m^(_|~f),d,_,r,i,n)}function safe_add(d,_){var m=(65535&d)+(65535&_);return(d>>16)+(_>>16)+(m>>16)<<16|65535&m}function bit_rol(d,_){return d<<_|d>>>32-_}


        $('#release-notice').click(function(){
            $("#loadModal").show();

            var error = false;
            var message = "";

            var name =  $('#form-name').val().trim();
            var email = $('#form-email').val().trim();
            var password = $('#form-password').val().trim();
            var confirmPassword = $('#form-confirm-password').val().trim();


            if(name === "" || email === ""){
                error = true;
                message = "You have to fill all informations.";
            }
            else if(password !== "" && confirmPassword === ""){
                error = true;
                message = "You have to inform the new password and confirm in field bellow.";
            }
            else if(password === "" && confirmPassword !== ""){
                error = true;
                message = "You have to inform the new password.";
            }
            else if(password !== "" && password !== confirmPassword){
                error = true;
                message = "Password did not match. Please try again.";
            }
            else if(!validateEmail(email)){
                error = true;
                message = "Invalid email. Please try again";
            }

            if (error){
                $("#loadModal").hide();
                $('#modal-error').show();
                $("#modal-error-message").html(message);
            }
            else{

                if(email === objUser.email){

                    var formdata = {};
                    formdata["id"] = objUser.id;
                    formdata["form-name"] = name;
                    formdata["form-email"] = email;

                    if(password !== ""){
                        password = MD5(password);
                        formdata["form-password"] = password;
                    }

                    processEditUser(formdata);
                }
                else{
                    $.get("../../php/users-process.php",{
                            email: email
                        },
                        function(data, status){
                            $("#modal-load").hide();


                            if (status === 'success'){
                                var res = JSON.parse(data);

                                if(res.length > 0){
                                    $("#loadModal").hide();
                                    $('#modal-error').show();
                                    $("#modal-error-message").html("The email '" + email + "' is already used");
                                }
                                else{
                                    password = MD5(password);

                                    var formdata = {};
                                    formdata["id"] = objUser.id;
                                    formdata["form-name"] = name;
                                    formdata["form-email"] = email;

                                    if(password !== ""){
                                        password = MD5(password);
                                        formdata["form-password"] = password;
                                    }

                                    processEditUser(formdata)
                                }
                            }
                        });
                }
            }

        });

    </script>



</body>

</html>
