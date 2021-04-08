<!DOCTYPE html>
<html>
    <head>
        <title>Thanh toán</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ========================================================================================== -->
        <!-- CSS -->
        <!-- ========================================================================================== -->
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="boostrap/js/boostrap.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/import/search.css">
        <!-- ========================================================================================== -->
        <!-- JAVACRIPT -->
        <!-- ========================================================================================== -->
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="boostrap/js/boostrap.min.js"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <!-- Header -->
                <div id="header-wp">
                <?php require "include/header-top.php" ?>
                <hr>
                <?php require "include/header.php" ?>
                <?php require "include/navbar.php" ?>
                </div>
                <!-- End header -->

                <!-- Content -->
                <div id="main-content-wp" class="home-page clearfix">
                    <div class="section" id="breadcrumb-wp">
                        <div class="wp-inner">
                            <div class="section-detail">
                                <ul class="list-item clearfix">
                                    <li>
                                        <a href="?page=home" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="" title="" class="bread-crumb">Thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="wrapper" class="wp-inner clearfix">
                        <div class="section" id="customer-info-wp">
                            <div class="section-head">
                                <h1 class="section-title">Thông tin khách hàng</h1>
                            </div>
                            <div class="section-detail">
                                <form method="POST" action="" name="form-checkout">
                                    <div class="form-row clearfix">
                                        <div class="form-col fl-left">
                                            <label for="lastname">Họ</label>
                                            <input type="text" name="lastname" id="lastname">
                                        </div>
                                        <div class="form-col fl-left">
                                            <label for="name">Tên</label>
                                            <input type="text" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="form-row clearfix">    
                                        <div class="form-col">
                                            <label for="address">Địa chỉ</label>
                                            <input type="email" name="address" id="address">
                                        </div>

                                    </div>
                                    <div class="form-row clearfix">
                                        <div class="form-col fl-left">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email">
                                        </div>
                                        <div class="form-col fl-right">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="text" name="phone" id="phone">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-col">
                                            <label for="notes">Ghi chú</label>
                                            <textarea name="note"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="section" id="ship-pay-wp">
                            <div class="section-head">
                                <h1 class="section-title">Phương thức thanh toán</h1>
                            </div>
                            <div id="payment-checkout-wp">
                                    <ul id="payment_methods">
                                        <li>
                                            <input type="radio" id="direct-payment" name="payment-method" value="direct-payment">
                                            <label for="direct-payment">Thanh toán tại cửa hàng</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                                            <label for="payment-home">Thanh toán tại nhà</label>
                                        </li>
                                    </ul>
                                </div>
                            <div class="section-detail">
                                
                            </div>
                        </div>
                        <div class="section" id="order-review-wp">
                            <div class="section-head">
                                <h1 class="section-title">Thông tin đơn hàng</h1>
                            </div>
                            <div class="section-detail">
                                <table class="shop-table">
                                    <thead>
                                        <tr>
                                            <td>Sản phẩm</td>
                                            <td>Tổng</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="product-name">Moderna - Nhà vệ sinh bầu dục<strong class="product-quantity">x 1</strong></td>
                                            <td class="product-total">681.000đ</td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="product-name">Petstar - Túi xách chân chó nhựa trong<strong class="product-quantity">x 1</strong></td>
                                            <td class="product-total">560.000đ</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="order-total">
                                            <td>Tổng đơn hàng:</td>
                                            <td><strong class="total-price">1.241.000đ</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div id="sales-code" class="clearfix">
                                    <div class="fl-left">
                                        <input type="text" name="sales_code" id="sales_code" placeholder="Nhập mã khuyến mãi">
                                    </div>
                                    <div class="fl-right sales-sm">
                                        <input type="submit" id="sales-now" value="Áp dụng">
                                    </div>
                                    
                                </div>
                                <div class="place-order-wp clearfix">
                                    <input type="submit" id="order-now" value="Đặt hàng">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>

            <!-- Footer -->
            <?php
            require "include/footer.php"
            ?>
            <!-- End footer -->
        </div>
    </body>
</html>