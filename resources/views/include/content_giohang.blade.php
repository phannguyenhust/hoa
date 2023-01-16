<?php require_once "../database/dbconnect.php";
function getPro_id($id)
{
    $db =new dbconnect();
    $result = $db->getData("SELECT * FROM `san_pham` WHERE `id` = $id");
        $r = mysqli_fetch_assoc($result);
        return $r;
                                                    

}
?>
<?php 
        session_start(); 
        //session_destroy();
        if (isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $r = getPro_id($id);
            // echo "<pre>";
            // print_r($r);
            // echo "</pre>";
            //$_SESSION['carts']; biến lưu sản phẩm khách hàng muốn mua
            if(!isset($_SESSION['carts'])|| empty($_SESSION['carts'])){
                $_SESSION['carts']=array();
                $_SESSION['carts'][$id] = $r;
                $_SESSION['carts'][$id]['qty'] = 1;
             }else{
                if(array_key_exists($id,$_SESSION['carts'])){
                    $_SESSION['carts'][$id]['qty'] += 1;
                }else{
                    $_SESSION['carts'][$id] = $r;
                $_SESSION['carts'][$id]['qty'] = 1;
                }
             }
            // echo "<pre>";
            // print_r($_SESSION['carts']);
            // echo "</pre>";
        }
        if(isset($_GET['action'])){
            switch($_GET['action']){
                case "delete":
                    if(isset($_GET['id'])){
                        unset($_SESSION['carts'][$_GET['id']]);
                    }
                    break; 
            }
        }
        
?>
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
     <!-- End Page title area -->
    <div class="single-product-area">
    <?php   $_SESSION['sum_price'] = 0;
         if(isset($_SESSION['carts']) && !empty($_SESSION['carts'])){ ?>
        <div class="zigzag-bottom"></div>
        <div class="container">             
                <div class="col-md-12">
                    <div class="product-content-right" >
                        <div class="woocommerce" >
                           
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr >
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Ảnh</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Giá </th>
                                            <th class="product-quantity">Số Lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      
                                
                                        foreach($_SESSION['carts'] as $key => $value){
                                    ?>
                                    
                                        <tr class="cart_item">
                                            <td class="product-remove" >
                                                <a title="Remove this item" class="remove" href="giohang?action=delete&id=<?=$value['id']?>" onclick="return confirm(' Bạn muốn xóa sản phẩm này ?')" >×</a> 
                                            </td>

                                            <td class="product-thumbnail">
											<a ><img class="img-responsive" alt="product"
                                                            src="../upload/sanpham/<?=$value['anh']?>" alt="#"/></a>                                            
                                            </td>

                                            <td class="product-name">
                                                <?=$value['tensp']?><?=$value['mausac']?>
                                             
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?=number_format($value['dongia'])?>đ</span> 
                                       
                                            </td>
                                     
                                            <td class="product-quantity">
                                            
                                                <input type="number" class="minus" value="<?=$value['qty']?>" min="1" max="5">
                                    
                                                
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">
                                                    <?php 
                                                   
                                                        $item_sum = $value['dongia']*$value['qty'];
                                                        $_SESSION['sum_price'] += $item_sum;
                                                        echo number_format($item_sum);
                                                    ?>
                                                </span> 
                                            </td>
                                            
                                        </tr>
                                        <?php 
                                           
                                        }
                                    ?>
                                    
                                        <tr>
                                            <td class="actions" colspan="12">
                                           
                                                    <input type="submit" value="Cập nhật giỏ hàng" name="update_cart" class="button"/>
                                                <input type="submit" value="Thanh Toán" name="proceed" class="checkout-button button alt wc-forward"/>
                                             
                                            </td>
                                        </tr>
                                        
                                        <a href="/user/index" style="font-size: 20px" ><i class="fa fa-shopping-cart"></i> Tiếp tục mua sắm </a>   
                                    </tbody>
                                   
                                </table>
                                </form>
                                <div class="cart_totals ">
                                <h2>Tổng Tiền </h2>

                                <table cellspacing="0">
                                    <tbody>
                             

                                        <tr class="order-total">
                                            <th>Tổng đơn đặt hàng</th>
                                            <td><strong><span class="amount"><?php  echo number_format($_SESSION['sum_price']) ?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-collaterals">
                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                               

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                            
                        

                            </div>
                        </div>                        
                    </div>   
             
                    </form>
											              
                </div>
            </div>
        </div>
        <?php }else{
            ?>
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading"></h4>
              <p class="mb-0">Giỏ hàng trống!</p>
            </div>
            <a href="/user/index">Tiếp tục mua sắm</a>
            <?php
        } ?>
    </div>