<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/user/images/3.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/user/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/jquery.bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/owl.carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/lib/fancyBox/source/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/css/green.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/user/css/style_frm_dkdn.css"/>
    <link rel="stylesheet" href="../assets/user/css/switcher.css">
    <title>Kyo Shop</title>
</head>
<body class="green">
<!-- HEADER -->
@include('include.header') 
<!-- end header -->

<!-- Home slideder-->
@include('include.slide') 
<!-- END Home slideder-->
@include('include.content_gioithieu') 
<!-- POPUP LOGIN-REGISTER -->
@include('include.modal') 

<!--EN LOGIN REGISTER-->

<!--PEOPLE SAY-->

<!--END PEOPLE SAY-->

<!-- Footer -->
@include('include.footer') 

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->

<script type="text/javascript" src="../assets/user/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../assets/user/lib/jquery-migrate.min.js"></script>
<script type="text/javascript" src="../assets/user/lib/fancyBox/source/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="../assets/user/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/user/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="../assets/user/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../assets/user/lib/owl.carousel/owl.carousel.min.js"></script>



<script type="text/javascript" src="../assets/user/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="../assets/user/js/theme-script.js"></script>
<script type="text/javascript" src="../assets/user/js/shoppingCart.js"></script>

<script type="text/javascript" src="../assets/user/js/layout.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Layout.initSliderRange();
    });
</script>
</body>

</html>