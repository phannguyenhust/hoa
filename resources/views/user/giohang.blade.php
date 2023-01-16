<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/assets/user/css/cart.css"/>
    <link rel="shortcut icon" href="/assets/user/images/3.png" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/user/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/jquery.bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/owl.carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/lib/fancyBox/source/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/stylexd.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/green.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/css/style_frm_dkdn.css"/>
    <link rel="stylesheet" href="/assets/user/css/switcher.css">


    <title>Kyo Shop</title>
</head>
<body class="green">
<!-- HEADER -->
<div id="header" class="header">

<!-- MAIN HEADER -->
<div class="container main-header">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
            <a href="index.html"><img alt="Kyo Shop" src="/assets/user/images/5.jpg"/></a>
        </div>
        <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4 header-search-box">
            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 group-button-header">
            <a title="Compare" href="#" class="btn-compare">So sánh</a>
            <a title="My wishlist" href="#" class="btn-heart">Tim</a>

            <div class="btn-cart" id="cart-block">
                <a title="SignIn" href="" data-toggle="modal" data-target="#myModal">Đăng nhập</a>


            </div>
        </div>
    </div>
</div>
<!-- END MANIN HEADER -->
<div id="nav-top-menu" class="nav-top-menu">
    <div class="container">
        <div class="row">

            <div id="main-menu" class="col-sm-12 main-menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="#">MENU</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="http://127.0.0.1:8000/user/index"><span class="fa fa-home"></span> TRANG CHỦ</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle"
                                       data-toggle="dropdown">DANH SÁCH LOẠI SẢN PHẨM</a>
                                    <ul class="dropdown-menu container-fluid">
                                        <li class="block-container">
                                            <ul class="block">
                                                <?php 
                                                    require "../database/dbconnect.php";
                                                
                                                    $db =new dbconnect();
                                                    $result = $db->getData("SELECT * FROM `loai_sp` ");
                        
                                                    while ($r = mysqli_fetch_assoc($result)) 
                                                    {
                                                        ?>
                                                            
                                                            <li class="link_container"><a href="/user/loaisp/<?=$r['id']?>"><?=$r['tenloai']?></a></li>
                                            
                                                                
                                                            
                                                        <?php
                                                    }
                        
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!--<li><a href="#">Promotion</a></li>-->
                                <li><a href="http://127.0.0.1:8000/user/gioithieu">GIỚI THIỆU</a></li>
                                <li><a href="http://127.0.0.1:8000/user/lienhe">LIÊN HỆ</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- userinfo on top-->
        <div id="form-search-opntop">
        </div>
        <!-- userinfo on top-->
        <div id="user-info-opntop">
        </div>
        <!-- CART ICON ON MMENU -->
        <div id="shopping-cart-box-ontop">
            <i class="fa fa-user" data-toggle="modal" data-target="#myModal"></i>

            <div class="shopping-cart-box-ontop-content"></div>
        </div>
    </div>
</div>
</div>
<!-- end header -->

<!-- Home slideder-->
    @include('include.slide') 
<!-- END Home slideder-->
           
    @include('include.content_giohang') 

<!-- POPUP LOGIN-REGISTER -->
    @include('include.modal') 
<!--EN LOGIN REGISTER-->

<!--PEOPLE SAY-->


<!--END PEOPLE SAY-->

<!-- Footer -->
    @include('include.footer') 

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->

<script type="text/javascript" src="/assets/user/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/assets/user/lib/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/assets/user/lib/fancyBox/source/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/assets/user/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/user/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="/assets/user/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/assets/user/lib/owl.carousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="/assets/user/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="/assets/user/js/theme-script.js"></script>
<script type="text/javascript" src="/assets/user/js/shoppingCart.js"></script>

<script type="text/javascript" src="/assets/user/js/layout.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        // Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Layout.initSliderRange();
    });
</script>
</body>

</html>