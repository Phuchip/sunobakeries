<!DOCTYPE html>
<html>
    <head>
        <title>Đồ nấu ăn</title>
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
                <?php require "include/navbar2.php" ?>
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
                                        <a href="" title="" class="bread-crumb" style="color: red">Đồ nấu ăn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-content fl-right">
                            <div class="section" id="list-product-wp">
                                <div class="section-head clearfix">
                                    
                                    <div class="filter-wp fl-right">
                                        <div class="form-filter">
                                            <form method="POST" action="">
                                                <label for="select">Sắp xếp:</label>
                                                <select name="select">
                                                    <option value="0">Mặc định</option>
                                                    <option value="1">Từ A-Z</option>
                                                    <option value="2">Từ Z-A</option>
                                                    <option value="3">Giá tăng dần</option>
                                                    <option value="4">Giá giảm dần</option>
                                                    <option value="5">Hàng mới nhất</option>
                                                    <option value="6">Hàng cũ nhất</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item clearfix">
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
                        <div class="sidebar fl-left">
                            <?php
                                require "include/sidebar-left2.php"
                            ?>
                            <div class="section" id="filter-product-wp">
                                <div class="section-head">
                                    <h3 class="section-title">Bộ lọc</h3>
                                </div>
                                <div class="section-detail">
                                    <form method="POST" action="">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Giá</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>Dưới 500.000đ</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>500.000đ - 1.000.000đ</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>1.000.000đ - 5.000.000đ</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>5.000.000đ - 10.000.000đ</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>Trên 10.000.000đ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Hãng</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>7 Dental Effect</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>8in1 (USA)</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>ABC</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>Absorb plus</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>AFP (Pháp)</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-brand"></td>
                                                    <td>Bio-Pharmachemie</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Loại</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>Đồ nấu ăn</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="r-price"></td>
                                                    <td>Đồ pha chế</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="section" id="banner-wp">
                                <div class="section-detail">
                                    <a href="san_pham_chi_tiet.php" title="" class="thumb">
                                        <img src="public/images/banner.png" alt="">
                                    </a>
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