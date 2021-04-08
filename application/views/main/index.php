<!DOCTYPE html>
<html>
    <head>
        <title>Đồ làm bánh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ========================================================================================== -->
        <!-- CSS -->
        <!-- ========================================================================================== -->
        <?php require "include/style1.php" ?>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <!-- Header -->
                <div id="header-wp">
                <?php require "./include/header-top.php" ?>
                <?php require "./include/header.php" ?>
                <?php require "./include/navbar.php" ?>
                </div>
                
                <!-- End header -->

                <!-- Content -->
                <div id="main-content-wp" class="home-page clearfix">
                    <div class="wp-inner">
                        <?php
                        require "include/sidebar-left.php"
                        ?>
                        
                        <div class="main-content fl-right">
                            <div class="section" id="slider-wp">
                                <div class="section-detail">
                                    <div class="item">
                                        <img src="image/slide1.jpg" alt="" style="height: 375px;width: 878px">
                                    </div>
                                    <div class="item">
                                        <img src="image/banner6.jpg" alt="" style="height: 375px;width: 878px">
                                    </div>
                                    <div class="item">
                                        <img src="image/banner3.jpg" alt="" style="height: 375px;width: 878px">
                                    </div>
                                    <div class="item">
                                        <img src="image/banner4.jpg" alt="" style="height: 375px;width: 878px">
                                    </div>
                                    <div class="item">
                                        <img src="image/banner5.jpg" alt="" style="height: 375px;width: 878px">
                                    </div>
                                </div>
                            </div>
                            <div class="section" id="support-wp">
                                <div class="section-detail">
                                    <ul class="list-item clearfix">
                                        <li>
                                            <div class="thumb">
                                                <img src="image/icon-1.png">
                                            </div>
                                            <h3 class="title">Miễn phí vận chuyển</h3>
                                            <p class="desc">Tới tận tay khách hàng</p>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="image/icon-2.png">
                                            </div>
                                            <h3 class="title">Tư vấn 24/7</h3>
                                            <p class="desc">0912.870.820</p>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="image/icon-3.png">
                                            </div>
                                            <h3 class="title">Tiết kiệm hơn</h3>
                                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="image/icon-4.png">
                                            </div>
                                            <h3 class="title">Thanh toán nhanh</h3>
                                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="image/icon-5.png">
                                            </div>
                                            <h3 class="title">Đặt hàng online</h3>
                                            <p class="desc">Thao tác đơn giản</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section" id="feature-product-wp">
                                <div class="section-head line">
                                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item">
                                        <?php foreach ($data as $row): ?>
                                            <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="<?php echo base_url('img/'.$row->anh); ?>">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name"><?php echo $row->ten_sp; ?></a>
                                            <div class="price">
                                                <span class="new"><?php echo $row->gia_giam; ?></span>
                                                <span class="old"><?php echo $row->gia_ban; ?></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                        
                                    </ul>
                                </div>
                                <div class="section-head line">
                                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item">
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="section-head line">
                                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item">
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Davis</a>
                                            <div class="price">
                                                <span class="new">433.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Natural Core</a>
                                            <div class="price">
                                                <span class="new">250.000đ</span>
                                                <span class="old"></span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Royal canin Medium Puppy</a>
                                            <div class="price">
                                                <span class="new">320.000đ</span>
                                                <span class="old">350.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                                <img src="image/pro-img-16.jpg">
                                            </a>
                                            <a href="san_pham_chi_tiet.php" title="" class="product-name">Ferplast Ergoflex</a>
                                            <div class="price">
                                                <span class="new">579.000đ</span>
                                                <span class="old">579.000đ</span>
                                            </div>
                                            <div class="action clearfix">
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                            </div>
                                        </li>
                                    </ul>
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
        
    </body>
</html>