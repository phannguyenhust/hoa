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
<!---->
<div class="columns-container">
    <?php require_once "../database/dbconnect.php"; ?>
    <div class="container" id="columns">
        <!-- row -->
        <div class="row">
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block"><span class="fa fa-pagelines"></span>DANH SÁCH SẢN PHẨM</p>

                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">

                                    <?php 

                                        
                                                    
                                        $db =new dbconnect();
                                        $result = $db->getData("SELECT * FROM `loai_sp`");
            
                                        while ($r = mysqli_fetch_assoc($result)) 
                                        {
                                            ?>
                                                <li class="active">
                                                    <span></span><a href="/user/loaisp/<?=$r['id']?>"><?=$r['tenloai']?></a>
                                                    
                                                </li>
                                            <?php
                                        }
           
                                    ?>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                
                <div id="product">
                    <?php 
                                
                        require_once "../database/dbconnect.php"; 
                                                                        
                        $db =new dbconnect();
                        $result = $db->getData("SELECT * FROM `san_pham` where id=$id");
                        $r=mysqli_fetch_array($result);

                    ?>
                    <div class="primary-box row">
                        
                        <div class="pb-left-column col-xs-12 col-sm-6">
                            <!-- product-imge-->
                            <div class="product-image">
                                <div class="product-full">
                                    <img id="product-zoom" src="/upload/sanpham/<?=$r['anh']?>"
                                         data-zoom-image="/upload/sanpham/<?=$r['anh']?>"/>
                                </div>
                               
                            </div>
                            <!-- product-imge-->
                        </div>
                        <div class="pb-right-column col-xs-12 col-sm-6">
                            <h1 class="product-name"><?=$r['tensp']?><?=$r['mausac']?></h1>

                            <div class="product-price-group">
                                 <span class="price product-price"><span
                                         style="color: black">Giá:</span><?=number_format($r['dongia'])?></span>
                            </div>
                            
                            <div class="product-desc">
                                <?=$r['mota']?>
                            </div>
                            <div class="form-option">

                                <div class="attributes">
                                    <div class="attribute-label">Số Lượng:</div>
                                    <div class="attribute-list product-qty">
                                        <div class="qty">
                                            <input id="option-product-qty" type="text" value="1">
                                        </div>
                                        <div class="btn-plus">
                                            <a href="#" class="btn-plus-up">
                                                <i class="fa fa-caret-up"></i>
                                            </a>
                                            <a href="#" class="btn-plus-down">
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-action">
                                <div class="button-group">
                                <a href="../giohang?id=<?=$r['id']?>">Thêm vào giỏ hàng</a>                                                            </div>
                                </div>
                                <div class="button-group">
                                    <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Tim</a>
                                    <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>
                                        So Sánh</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="product-tab">
                        <ul class="nav-tab" style="margin-bottom: 0px;">
                            <li class="active">
                                <a aria-expanded="false" data-toggle="tab" href="#product-detail">Chi Tiết</a>
                            </li>
                            <li>
                                <a aria-expanded="true" data-toggle="tab" href="#comment">Bình Luận</a>
                            </li>

                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                <p>
                                    <?=$r['mota']?>
								</p>
                            </div>
                            <div id="comment" class="tab-panel">
                                <div class="fb-comments" data-href="https://www.facebook.com/hungdng.92"
                                     data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- ./tab product -->
                    <!-- box product -->
                    
                   
                    
                </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>