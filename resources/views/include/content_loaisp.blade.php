<!-- -&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->
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
    <div class="container" id="columns">
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block"><span class="fa fa-pagelines"></span> SẢN PHẨM</p>

                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                   
                                    <?php 
                                        require_once "../database/dbconnect.php";      
                                        $db =new dbconnect();
                                        $result = $db->getData("SELECT * FROM `loai_sp` ");
            
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
                <!-- ./block category  -->
                <!-- block best sellers -->
                <!--<div class="block left-module">-->
                    <!--<p class="title_block">VIDEO</p>-->

                    <!--<div class="block_content">-->
                        <!--<iframe width="255" height="300" src="https://www.youtube.com/embed/oFuC0URYKqU" frameborder="0"-->
                                <!--allowfullscreen=""></iframe>-->
                    <!--</div>-->
                <!--</div>-->
                <!-- ./block best sellers  -->

                <!-- left silide -->
                <!--????????????????-->
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <?php 
                    require_once "../database/dbconnect.php"; 
                                                                    
                    $db =new dbconnect();
                    $result = $db->getData("SELECT * FROM `loai_sp` where id=$id");
                    $r=mysqli_fetch_array($result);
                    
                ?>
                <h2 class="page-heading">
                    
                    <span class="page-heading-title" ><?=$r['tenloai']?></span>
                
                    
                </h2>
                <!-- ../page heading-->
                <!-- Product -->
                <div id="product">
                    <!-- box product -->
                    <div class="category-featured Vegetables">
                        <div class="product-featured clearfix">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box-right">
                                        <!--&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->
                                        <ul class="product-list">
                              
                                            <?php 
                                                
												
                                                $db =new dbconnect();
                                                $result = $db->getData("SELECT * FROM `san_pham` WHERE  maloai=$id LIMIT 10 ");

                                                while ($r = mysqli_fetch_assoc($result)) 
                                                {
                                                    ?>
                                                        <li class="col-sm-4 product-item" style="width: 280px;">
                                                        <div class="left-block">
                                                            <a><img class="img-responsive" alt="product"
                                                                    src="/upload/sanpham/<?=$r['anh']?>"/></a>

                                                            <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" href="/upload/sanpham/<?=$r['anh']?>" class="search fancybox-button"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                            <a href="../giohang?id=<?=$r['id']?>">Thêm vào giỏ hàng</a>                                                            </div>
                                                        
                                                        </div>
                                                        <div class="right-block">
                                                            <h5 class="product-name"><a href="/user/chitiet/<?=$r['id']?>"><?=$r['tensp']?><?=$r['mausac']?></a></h5>

                                                            <div class="content_price">
                                                                <span class="price product-price"><span style="color: black">Giá:</span><?=number_format($r['dongia'])?>đ</span>
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
                    <!-- ./box product -->
                </div>
                <!-- Product -->
              
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
