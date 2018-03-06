
<!DOCTYPE html>
<html lang="en">
<head>
    <title>malli market</title>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Solar Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Required-js -->

    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

            jQuery('#responsive').change(function(){
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->

    <!-- scriptfor smooth drop down-nav -->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //script for smooth drop down-nav -->
</head>
<body>


<!-- header -->
<header>
    <div class="w3layouts-top-strip">
        <div class="container">
            <div class="logo">
                <h1><a href="index.php"><span>Malli </span>Market</a></h1>
            </div>





            <div class="w3ls-social-icons">
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="agileits-contact-info text-right">
                <ul>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mallimarket@gmail.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>011 264 995</li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- navigation -->

    <!-- header -->

    <!-- navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a <?php if ($x==1){echo "class=\"active\"";} ?> href="index.php">Home</a></li>
                    <li><a <?php if ($x==2){echo "class=\"active\"";} ?> href="about.php">About</a></li>
                    <li><a <?php if ($x==3){echo "class=\"active\"";} ?> href="services.php">Services</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="Latte_Machine.php">Latte Machine</a></li>
                            <li><a href="Milk_Can.php">Milk Can</a></li>
                            <li><a href="Woodwork_machine.php">Woodwork machine</a></li>
                            <li><a href="PVC_Doors.php">PVC Doors</a></li>
                            <li><a href="Poultry_Incubator.php">Poultry Incubator</a></li>
                            <li><a href="Pvc_green_hose.php"> Pvc green hose</a></li>
                            <li><a href="Concrete_mixer.php">Concrete mixer</a></li>

                        </ul>
                    </li>
                    <li><a <?php if ($x==4){echo "class=\"active\"";} ?> href="contact.php">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- //navigation -->
</header>
<!-- //header -->
<!-- banner -->





















