<!DOCTYPE html>
<html>
    <head>
        <title>Sản phẩm chi tiết</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ========================================================================================== -->
        <!-- CSS -->
        <!-- ========================================================================================== -->
        <?php require "include/style.php" ?>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <!-- Header -->
                <div id="header-wp">
                <?php require "include/header-top.php" ?>
                <?php require "include/header.php" ?>
                <?php require "include/navbar.php" ?>
                </div>
                <!-- End header -->

                <!-- Content -->
                <div id="main-content-wp" class="home-page clearfix">
                    <div class="wp-inner">
                        <div class="secion" id="breadcrumb-wp">
                            <div class="secion-detail">
                                <ul class="list-item clearfix">
                                    <li>
                                        <a href="" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="" title="" class="bread-crumb" style="color: red">Sản phẩm chi tiết</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                            require "include/sidebar-left1.php"
                        ?>
                        <div class="main-content fl-right">
                            <?php foreach ($dispid as $row): ?>
                            <div class="section" id="detail-product-wp">
                                <div class="section-detail clearfix">
                                    <div class="thumb-wp fl-left">
                                        <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="width: 350px;height: 350px" />
                                            </a>
                                        <div id="list-thumb">
                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>
                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>
                                            
                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>
                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>

                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>
                                            <a href="" data-image="<?php echo base_url('img/'.$row['anh']) ?>" data-zoom-image="<?php echo base_url('img/'.$row['anh']) ?>">
                                                <img id="zoom" src="<?php echo base_url('img/'.$row['anh']) ?>" style="height: 63px;width: 63px"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="thumb-respon-wp fl-left">
                                        <img src="<?php echo base_url('img/'.$row['anh']) ?>" alt="">
                                    </div>
                                    <div class="info fl-right">
                                        <h3 class="product-name"><?php echo $row['ten_sp'] ?></h3>
                                        <div class="desc">
                                            <p>Thương hiệu: <?php echo $row['id_ncc'] ?></p>
                                            <p>Mã SP: <?php echo $row['id_sp'] ?></p>
                                            <p><img src="<?php echo base_url('image/star_0.png') ?>" id="star"> Có 0 người đánh giá</p>
                                            <p>
                                                <img src="<?php echo base_url('image/icon-qua.png')?>" id="gift"><span class="gift-text">Quà tặng kèm</span>
                                                <ul>
                                                    <li>Giảm còn  637.000 đ  số lượng có hạn.</li>
                                                    <li>Chỉ áp dụng khi mua online.</li>
                                                </ul>                        
                                            </p>
                                        </div>
                                        <div class="num-product">
                                            <span class="title">Sản phẩm: </span>
                                            <?php if ( $row['so_luong'] ==NULL): ?>
                                                <span class="status">Hết hàng</span>
                                            <?php else: ?>
                                                <span class="status">Còn hàng</span>
                                            <?php endif ?>
                                            
                                        </div>
                                        <p class="price"><?php echo $row['gia_giam'] ?></p>
                                        <div id="num-order-wp">
                                            <a title="" id="minus"><i class="fa fa-minus"></i></a>
                                            <input type="text" name="num-order" value="1" id="num-order">
                                            <a title="" id="plus"><i class="fa fa-plus"></i></a>
                                        </div>
                                        <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart">Thêm giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section" id="post-product-wp">
                                <div class="section-head">
                                    <h3 class="section-title">Mô tả sản phẩm</h3>
                                </div>
                                <div class="section-detail">
                                    <?php echo $row['mo_ta'] ?>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
                        
                            <div class="section" id="same-category-wp">
                                <div class="section-head">
                                    <h3 class="section-title">Cùng chuyên mục</h3>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item">
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
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                                <a href="cart.html" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                                <a href="checkout.html" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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