<!DOCTYPE html>
<html>
    <head>
        <title>Giỏ hàng</title>
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
                                        <a href="" title="" class="bread-crumb">Giỏ hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="wrapper" class="wp-inner clearfix">
                        <div class="section" id="info-cart-wp">
                            <div class="section-detail table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Mã sản phẩm</td>
                                            <td>Ảnh sản phẩm</td>
                                            <td>Tên sản phẩm</td>
                                            <td>Giá sản phẩm</td>
                                            <td>Số lượng</td>
                                            <td>Thành tiền</td>
                                            <td class="del-product"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PETFC370</td>
                                            <td>
                                                <a href="" title="" class="thumb">
                                                    <img src="image/pro-img-16.jpg" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" title="" class="name-product">Moderna - Nhà vệ sinh bầu dục</a>
                                            </td>
                                            <td>681.000đ</td>
                                            <td>
                                                <input type="text" name="num-order" value="1" class="num-order">
                                            </td>
                                            <td>681.000đ</td>
                                            <td>
                                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PETMY197</td>
                                            <td>
                                                <a href="" title="" class="thumb">
                                                    <img src="image/pro-img-16.jpg" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" title="" class="name-product">Petstar - Túi xách chân chó nhựa trong</a>
                                            </td>
                                            <td>560.000đ</td>
                                            <td>
                                                <input type="text" name="num-order" value="1" class="num-order">
                                            </td>
                                            <td>560.000đ</td>
                                            <td>
                                                <a href="" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="clearfix">
                                                    <p id="total-price" class="fl-right">Tổng giá: <span>1.241.000đ</span></>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7">
                                                <div class="clearfix">
                                                    <div class="fl-right">
                                                        <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                                        <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="section" id="action-cart-wp">
                            <div class="section-detail">
                                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                                <a href="" title="" id="delete-cart">Xóa giỏ hàng</a>
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