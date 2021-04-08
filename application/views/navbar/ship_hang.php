<!DOCTYPE html>
<html>
    <head>
        <title>Ship Hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ========================================================================================== -->
        <!-- CSS -->
        <!-- ========================================================================================== -->
        <link href="../public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../boostrap/js/boostrap.min.css">
        <link rel="stylesheet" type="text/css" href="../public/css/new/style.css">
        <!-- ========================================================================================== -->
        <!-- JAVACRIPT -->
        <!-- ========================================================================================== -->
        <script src="../public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="../public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="../public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="../public/js/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="../boostrap/js/boostrap.min.js"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <!-- Header -->
                <div id="header-wp">
                <?php require "include/header-top.php" ?>
                <?php require "include/header.php" ?>
                <?php require "include/navbar4.php" ?>
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
                                        <a href="" title="" class="bread-crumb" style="color: red">Ship hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        require "include/sidebar-left1.php"
                        ?>
                        <div class="main-content fl-right">
                            <div class="section" id="support-wp">
                            </div>
                            <div class="section" id="feature-product-wp">
                                
                                <div class="section-detail">
                                    <div class="clear"></div>
                                    <div class="h-box-news nomar-l">
                                        <div class="h-title-box-news" id="box2">
                                          <h2 class="h-title"><a class="txt_pink" href="ship_hn.php">Ship Hà Nội</a></h2></div>
                                        <div class="h-content-box-news" id="getA11">
                                            <div class="box-top">
                                                <a href="#" class="img">
                                                        <img src="../image/pro-img-16.jpg" width="200px" height="auto">
                                                </a>
                                                <div class="right-side">
                                                    <a href=""><font color="red">Ship Hà Nội</font></a>
                                                    <br>
                                                    <span class="summary">Phạm vi vận chuyển Abby giao hàng trong phạm vi 12 quận nội thành Hà Nội đối với các đơn hàng giá trị từ 100,000đ.12 quận nội thành Hà Nội bao gồm: Ba Đình, Bắc Từ Liêm, Cầu Giấy, Đống Đa, Hà Đông, Hai Bà Trưng, Hoàn Kiếm, Hoàng Mai, Long Biên, Nam Từ Liêm, Tây Hồ, Thanh Xuân. Các quận huyện khác xin vui lòng xem trang Ship hàng tại tỉnh khác. Abby sẽ sử dụng dịch vụ của bưu điện (Nhận được hàng sau 1-2 ngày).</span>
                                                    <a href="#" class="more"><span>»</span>Xem tiếp</a>
                                                </div>
                                            </div>
                                            <ul class="ul">
                                                
                                            </ul>
                                        </div>
                                        <script>getArticleList("/ajax/get_json.php?action=article&action_type=list&type=article&catId=11&show=6&sort=order",'#getA11',6)</script>
                                    </div>
                                    <div class="h-box-news ">
                                        <div class="h-title-box-news" id="box1">
                                          <h2 class="h-title"><a class="txt_pink" href="ship_tk.php">Ship tỉnh khác</a></h2></div>
                                        <div class="h-content-box-news" id="getA10">
                                            <div class="box-top">
                                                <a href="" class="img">
                                                        <img src="../image/petstar.jpg" width="180px" height="auto">
                                            </a>
                                                <div class="right-side">
                                                    <a href="#"><font color="red">Ship Tỉnh Khác</font></a>
                                                    <br>
                                                    <span class="summary">Phạm vi vận chuyển Abby giao hàng trong phạm vi 12 quận nội thành Hà Nội đối với các đơn hàng giá trị từ 100,000đ.12 quận nội thành Hà Nội bao gồm: Ba Đình, Bắc Từ Liêm, Cầu Giấy, Đống Đa, Hà Đông, Hai Bà Trưng, Hoàn Kiếm, Hoàng Mai, Long Biên, Nam Từ Liêm, Tây Hồ, Thanh Xuân. Các quận huyện khác xin vui lòng xem trang Ship hàng tại tỉnh khác. Abby sẽ sử dụng dịch vụ của bưu điện (Nhận được hàng sau 1-2 ngày).</span>
                                                    <a href="#" class="more"><span>»</span>Xem tiếp</a>
                                                </div>
                                            </div>
                                            <ul class="ul">
                                            </ul>
                                        </div>
                                        <script>getArticleList("/ajax/get_json.php?action=article&action_type=list&type=article&catId=10&show=6&sort=order",'#getA10',6)</script>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="h-box-news nomar-l">
                                        <div class="h-title-box-news" id="box2">
                                          <h2 class="h-title"><a class="txt_pink" href="ship_nx.php">Ship nhà xe</a></h2></div>
                                        <div class="h-content-box-news" id="getA11">
                                            <div class="box-top">
                                                <a href="#" class="img">
                                                        <img src="../image/pro-img-12.jpg" width="180px" height="auto">
                                                </a>
                                                <div class="right-side">
                                                    <a href=""><font color="red">Ship nhà xe</font></a>
                                                    <br>
                                                    <span class="summary">Phạm vi vận chuyển Abby giao hàng trong phạm vi 12 quận nội thành Hà Nội đối với các đơn hàng giá trị từ 100,000đ.12 quận nội thành Hà Nội bao gồm: Ba Đình, Bắc Từ Liêm, Cầu Giấy, Đống Đa, Hà Đông, Hai Bà Trưng, Hoàn Kiếm, Hoàng Mai, Long Biên, Nam Từ Liêm, Tây Hồ, Thanh Xuân. Các quận huyện khác xin vui lòng xem trang Ship hàng tại tỉnh khác. Abby sẽ sử dụng dịch vụ của bưu điện (Nhận được hàng sau 1-2 ngày).</span>
                                                    <a href="#" class="more"><span>»</span>Xem tiếp</a>
                                                </div>
                                            </div>
                                            <ul class="ul">
                                                
                                            </ul>
                                        </div>
                                        <script>getArticleList("/ajax/get_json.php?action=article&action_type=list&type=article&catId=11&show=6&sort=order",'#getA11',6)</script>
                                    </div>
                                    <div class="h-box-news ">
                                        <div class="h-title-box-news" id="box3">
                                          <h2 class="h-title"><a class="txt_pink" href="stk.php">Tài khoản ngân hàng</a></h2></div>
                                        <div class="h-content-box-news" id="getA6">
                                            <div class="box-top">
                                                <a href="#" class="img">
                                                        <img src="../image/anh1.jpg" width="180px" height="auto">
                                            </a>
                                                <div class="right-side">
                                                    <a href="#"><font color="red">Tài khoản ngân hàng</font></a>
                                                    <br>
                                                    <span class="summary">Phạm vi vận chuyển Abby giao hàng trong phạm vi 12 quận nội thành Hà Nội đối với các đơn hàng giá trị từ 100,000đ.12 quận nội thành Hà Nội bao gồm: Ba Đình, Bắc Từ Liêm, Cầu Giấy, Đống Đa, Hà Đông, Hai Bà Trưng, Hoàn Kiếm, Hoàng Mai, Long Biên, Nam Từ Liêm, Tây Hồ, Thanh Xuân. Các quận huyện khác xin vui lòng xem trang Ship hàng tại tỉnh khác. Abby sẽ sử dụng dịch vụ của bưu điện (Nhận được hàng sau 1-2 ngày).</span>
                                                    <a href="#" class="more"><span>»</span>Xem tiếp</a>
                                                </div>
                                            </div>
                                            <ul class="ul">
                                            </ul>
                                        </div>
                                        <script>getArticleList("/ajax/get_json.php?action=article&action_type=list&type=article&catId=6&show=6&sort=order",'#getA6',6)</script>
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