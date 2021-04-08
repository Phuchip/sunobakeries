<!DOCTYPE html>
<html>
    <head>
        <title>Tìm kiếm</title>
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
                <div id="main-content-wp" class="clearfix category-product-page">
                    <div class="wp-inner">
                        <div class="secion" id="breadcrumb-wp">
                            <div class="secion-detail">
                                <ul class="list-item clearfix">
                                    <li>
                                        <a href="" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="" title="" class="bread-crumb" style="color: red">Tìm kiếm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-content fl-right">
                            <div class="section" id="list-product-wp">
                                <?php
                                        // 0. Lấy dữ liệu mã ID tin tức để thực hiện câu lệnh truy vấn
                                        $s = $_POST["search_key"];
                                    ;?>
                                    <?php { ?>
                                <div class="section-head clearfix">
                                    Bạn đang tìm kiếm từ khóa : <b style="color: red"><?php  echo $s?></b>

                                    <p>Có <b>1</b> sản phẩm.
                                    <?php } ?>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item clearfix">
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-9.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis - Sữa tắm ngứa do nhiễm nấm Miconazole 355ml</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-10.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core - Thức ăn hữu cơ cho chó con vị thịt cừu (7kg)</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-15.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy (10kg) - Thức ăn cho chó</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-4.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex - Dây dắt 1.8/110cm (xanh lá)</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-9.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis - Sữa tắm ngứa do nhiễm nấm Miconazole 355ml</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-10.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core - Thức ăn hữu cơ cho chó con vị thịt cừu (7kg)</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-15.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy (10kg) - Thức ăn cho chó</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-4.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex - Dây dắt 1.8/110cm (xanh lá)</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-9.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis - Sữa tắm ngứa do nhiễm nấm Miconazole 355ml</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-10.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core - Thức ăn hữu cơ cho chó con vị thịt cừu (7kg)</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-15.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy (10kg) - Thức ăn cho chó</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-4.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex - Dây dắt 1.8/110cm (xanh lá)</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-9.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis - Sữa tắm ngứa do nhiễm nấm Miconazole 355ml</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-10.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core - Thức ăn hữu cơ cho chó con vị thịt cừu (7kg)</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-15.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy (10kg) - Thức ăn cho chó</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-4.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex - Dây dắt 1.8/110cm (xanh lá)</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-9.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis - Sữa tắm ngứa do nhiễm nấm Miconazole 355ml</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-10.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core - Thức ăn hữu cơ cho chó con vị thịt cừu (7kg)</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-15.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy (10kg) - Thức ăn cho chó</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/img-pro-4.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex - Dây dắt 1.8/110cm (xanh lá)</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section" id="paging-wp">
                                <div class="section-detail">
                                    <ul class="list-item clearfix">
                                        <li>
                                            <a href="" title="">1</a>
                                        </li>
                                        <li>
                                            <a href="" title="">2</a>
                                        </li>
                                        <li>
                                            <a href="" title=""><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php require "include/sidebar-left.php" ?>
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