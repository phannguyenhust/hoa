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
    @include('include.content')

<!-- POPUP LOGIN-REGISTER -->
    @include('include.modal') 
<!--EN LOGIN REGISTER-->

<!--PEOPLE SAY-->

<div id="owl-demo-ppsay">
    <div class="container">
        <div class="ppsay-title">Bình luận của khách hàng</div>
        <div id="customer-item-carousel" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#customer-item-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#customer-item-carousel" data-slide-to="1"></li>
                <li data-target="#customer-item-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner hidden-sm hidden-xs">
                <div class="item active">
                    <div class="ppsaydiv">
                        <div class="ppsaycontent hidden-xs col-sm-6 col-md-6">
                            <div class="ppsayavt col-md-3 col-sm-3">
                                <img src="../assets/user/images/khachang1.jpg"" alt="Ms. Huong Nguyen">
                            </div>
                            <div class="ppsayauthor col-md-9 col-sm-9">
                                <div class="ppsaycontentcmt">
                                    <p style="text-align: justify"><span>“ </span>Tôi hài lòng về chất lượng sản phẩm và chất lượng dịch vụ của Kyo Shop. Những lời chúc tốt đẹp nhất đến cửa hàng của bạn. Tôi hy vọng rằng có thêm nhiều sản phẩm mới tốt nhất và dịch vụ của bạn luôn bền vững.<span>”</span></p>
                                </div>
                                <p><span>Khách hàng:</span> <span class="name">Ms. Huong Nguyen</span></p>
                            </div>
                        </div>
                        <div class="ppsaycontent col-xs-12 col-sm-6 col-md-6">
                            <div class="ppsayavt col-md-3 col-sm-3">
                                <img src="../assets/user/images/khachang2.jpg" alt="Ms. Linh Pham">
                            </div>
                            <div class="ppsayauthor col-md-9 col-sm-9">
                                <div class="ppsaycontentcmt">
                                    <p style="text-align: justify"><span>“ </span>Tôi rất bận nên không có thời gian đi chợ. Vì vậy, mua thực phẩm trực tuyến là lựa chọn tốt nhất của tôi. Sản phẩm của bạn luôn tươi ngon. Tôi sẽ tiếp tục mua thực phẩm tại cửa hàng trực tuyến của bạn. <span>”</span></p>
                                </div>
                                <p><span>Khách hàng:</span> <span class="name">Ms. Linh Pham</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ppsaydiv">
                        <div class="ppsaycontent col-xs-12 col-sm-6 col-md-6">
                            <div class="ppsayavt col-md-3 col-sm-3">
                                <img src="../assets/user/images/khachhang3.jpg" alt="Ms. Hoang Tran">
                            </div>
                            <div class="ppsayauthor col-md-9 col-sm-9">
                                <div class="ppsaycontentcmt">
                                    <p style="text-align: justify"><span>“ </span> Tôi đánh giá cao chất lượng sản phẩm và dịch vụ của bạn. Bây giờ tôi thực sự tin tưởng vào thương hiệu của bạn. <span>”</span></p>
                                </div>
                                <p><span>Khách hàng:</span> <span class="name">Ms. Hoang Tran</span></p>
                            </div>
                        </div>
                        <div class="ppsaycontent col-xs-12 col-sm-6 col-md-6">
                            <div class="ppsayavt col-md-3 col-sm-3">
                                <img src="../assets/user/images/khachhang4.png" alt="Ms. Thu Phan">
                            </div>
                            <div class="ppsayauthor col-md-9 col-sm-9">
                                <div class="ppsaycontentcmt">
                                    <p><span style="text-align: justify">“ </span> Tôi là một bà mẹ trẻ và phải làm việc. Tôi tốn thời gian và tiền bạc để truy cập trang web của bạn và mua sản phẩm. <span>”</span></p>
                                </div>
                                <p><span>Khách hàng:</span> <span class="name">Ms.Thu Phan</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ppsaydiv">
                        <div class="ppsaycontent col-xs-12 col-sm-6 col-md-6">
                            <div class="ppsayavt col-md-3 col-sm-3">
                            <img src="../assets/user/images/khachang1.jpg" alt="Ms. Hoang Tran">
                            </div>
                            <div class="ppsayauthor col-md-9 col-sm-9">
                                <div class="ppsaycontentcmt">
                                    <p style="text-align: justify"><span>“ </span>Khi tôi tìm kiếm cửa hàng tự nhiên và hữu cơ, bạn bè của tôi đã giới thiệu cửa hàng của bạn cho tôi. Lần đầu tiên đến cửa hàng của bạn, tôi rất hài lòng vì sự chăm sóc khách hàng của bạn.<span>”</span></p>
                                </div>
                                <p><span>Khách hàng:</span> <span class="name">Ms. Lan Tran</span></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="customer-item-carousel" class="carousel slide hidden-md hidden-lg" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#customer-item-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#customer-item-carousel" data-slide-to="1"></li>
                <li data-target="#customer-item-carousel" data-slide-to="2"></li>
                <li data-target="#customer-item-carousel" data-slide-to="3"></li>
                <li data-target="#customer-item-carousel" data-slide-to="4"></li>
                <li data-target="#customer-item-carousel" data-slide-to="5"></li>
            </ol>
        </div>
    </div>
</div>

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