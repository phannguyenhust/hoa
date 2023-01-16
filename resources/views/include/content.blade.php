<?php require_once "../database/dbconnect.php";?>
<?php 
session_start();
ob_start();
// session_destroy();
    if(isset($_SESSION['noti_cart']) && $_SESSION['noti_cart'] == 1){ ?>
       <div class="alert alert-primary" role="alert">
           <strong>Sản phẩm đã được thêm!</strong><buttom><a class="add_to_cart_button" href="cart"> Xem </a></buttom>
       </div> 
       <?php
       unset($_SESSION['noti_cart']);
    }
 ?>

<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title"><img alt="fashion" src="../assets/user/images/commerce-tag.png"/> KHUYẾN MÃI</span>
                </h2>
                <div class="latest-deals-product">
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                        data-margin="10" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                        data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <?php 
												
							$db =new dbconnect();
							$result = $db->getData("SELECT * FROM `san_pham` Limit 8");
	
							while ($r = mysqli_fetch_assoc($result)) 
							{
								?>
									<li>
                                        <div class="left-block">
                                            <a ><img class="img-responsive" alt="product"
                                                            src="../upload/sanpham/<?=$r['anh']?>" alt="#"/></a>

                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" href="../upload/sanpham/<?=$r['anh']?>" alt="#" class="search fancybox-button"></a>

                                            </div>
                                            <div class="add-to-cart">
                                            <a href="giohang?id=<?=$r['id']?>">Thêm vào giỏ hàng</a>
 
                                            </div>
                                            <div class="price-percent-reduction2">
                                                -30% OFF
                                            </div>
                                        </div>
                                        <div class="right-block">
                                        <h5 class="product-name"><a href="/user/chitiet/<?=$r['id']?>"><?=$r['tensp']?><?=$r['mausac']?></a></h5>

                                            <div class="content_price">
                                                <br><span style="color: black"><?=number_format($r['dongia'])?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php
							}

						?>
                                                       

                            
                            
                       
                      
                      
                       
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!---->
<div class="content-page">
    <div class="container">
        <!-- featured category  -->
        <div class="category-featured Vegetables">
            <nav class="navbar nav-menu show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="#"> <img  src="../assets/user/images/icon_like.png"/> BÁN CHẠY</a></div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->

            </nav>
            <div class="product-featured clearfix">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="box-right">
                            <!--&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->
                            <ul class="product-list">
                            <?php 
												
                                $db =new dbconnect();
                                $result = $db->getData("SELECT * FROM `san_pham` WHERE id>10 ");
        
                                while ($r = mysqli_fetch_assoc($result)) 
                                {
                                    ?>
                                        <li class="col-sm-4 product-item">
                                            <div class="left-block">
                                                <a><img class="img-responsive" alt="product"
                                                                src="../upload/sanpham/<?=$r['anh']?>" alt="#"/></a>

                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" href="../upload/sanpham/<?=$r['anh']?>" alt="#" class="search fancybox-button"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                <a href="giohang?id=<?=$r['id']?>">Thêm vào giỏ hàng</a>
                                            </div>
                                                <div class="bestseller"></div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="/user/chitiet/<?=$r['id']?>"><?=$r['tensp']?><?=$r['mausac']?></a></h5>

                                                <div class="content_price">
                                                    <span class="price product-price"><span style="color: black"><?=number_format($r['dongia'])?></span></span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                }

                            ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- end featured category -->
        </div>
</div>
