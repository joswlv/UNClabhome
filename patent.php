<?php /**

@filesource
@author SeungwanJo <wh7923@gmail.com>
@copyright 2016 UNClab
@version [ 1.0.0 ]
 */
class index {

}

include_once $_SERVER['DOCUMENT_ROOT'].'/templete/common.php';
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <? Basicpage::render()?>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="css/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Template Javascript Files
    ================================================== -->
    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- bootstrap js -->

    <script src="js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- slider js -->
    <script src="js/slider.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <!-- template main js -->
    <script src="js/main.js"></script>
</head>
<body>
<!--
==================================================
Header Section Start
================================================== -->
<? Header::render()?>

<!--
==================================================
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>patent</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
    Company Description Section Start
================================================== -->
<section class="blankpage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block" style="text-align:justify">
                    <h3 class="count">patent :  </h3>
                    <ul>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!--
==================================================
Footer Section Start
================================================== -->
<? Footer::render(); ?>
<!-- /#footer -->

<!--
   ==================================================
   user javascript
   ================================================== -->
<script>
    $(".count").text(function() {
        $(this).append($(this).next("ul").children("li").size());
    });
</script>
</body>
</html>