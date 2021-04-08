<!DOCTYPE html>
<html>
    <head>
        <title>Khách kinh doanh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ========================================================================================== -->
        <!-- CSS -->
        <!-- ========================================================================================== -->
        <?php require "include/style.php" ?>
        <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <!-- Header -->
                <div id="header-wp">
                <?php require "include/header-top.php" ?>
                <?php require "include/header.php" ?>
                <?php require "include/navbar6.php" ?>
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
                                        <a href="" title="" class="bread-crumb" style="color: red">Khách kinh doanh</a>
                                    </li>
                                </ul>
                                <div style="vertical-align:middle;">
                                    <!-- <h1>Trở thành đối tác của chúng tôi</h1> -->
                                </div>
                            </div>
                        </div>
                        <?php
                        require "include/sidebar-left1.php"
                        ?>
                        <div class="main-content fl-right">

                            <div class="section" id="feature-product-wp">
                                
                                <div class="section-detail">
                                    <h1 style="font-size: 20px;">1. Khách kinh doanh về Suno</h1>
                                    <div style="margin: 15px;width: auto;border: 5px">
                                        Ngành F&B đang dần trở thành xu hướng nghề nghiệp hàng đầu bởi sự phát triển của ngành dịch vụ cũng như đánh trúng vào nhu cầu ăn uống thiết yếu của con người. <br>

                                        Với sự bùng nổ của xu hướng thương mại điện tử, thị trường F&B ngày càng nở rộ, kéo theo nhu cầu tìm nguồn nguyên liệu đầu vào ổn định,  giá cả cạnh tranh được đặt lên hàng đầu. <br>

                                        Tự hào là đối tác của nhiều nhà sản xuất, nhà phân phối lớn trong và ngoài nước, Suno tự tin có thể trở thành nguồn cung cấp nguyên liệu, dụng cụ làm bánh, nấu ăn, pha chế phù hợp với mọi quy mô kinh doanh. <br>

                                        Dù bạn là doanh nghiệp F&B lớn hay hộ kinh doanh đang ấp ủ dự định, Suno luôn cam kết: <br>
                                        – Cung cấp đa dạng sản phẩm <br>
                                        – Sản lượng ổn định <br>
                                        – Giá chiết khấu cao <br>
                                        – Freeship nội thành Hà Nội, hỗ trợ phí ship đi các tỉnh <br>
                                        – Hỗ trợ đổi trả trong vòng 3 ngày kể từ khi nhận hàng <br>
                                        – Tư vấn công thức kinh doanh, cách sử dụng sản phẩm để được lãi cao <br>

                                        Suno rất mong được hợp tác với các quý công ty, tiệm bánh, shop kinh doanh, CTV từ các tỉnh thành, cùng nhau phát triển cùng nhau thành công! <br>

                                        Tham khảo thêm các sản phẩm TẠI LINK <br>

                                        Hotline tư vấn bán sỉ: 0912.870.820 (Ms Xương) <br>

                                        <br>
                                        <h1 style="font-size: 20px;">2. Thông tin liên hệ</h1>
                                    <div class="container">
                                      <form action="/action_page.php">
                                        <label for="fname">Tên của bạn *</label>
                                        <input type="text" id="fname" name="firstname" placeholder="Tên của bạn..">

                                        <label for="lname">Số điện thoại *</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Số điện thoại..">

                                        <label for="lname">Email (không bắt buộc)</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Email..">
                                        
                                        <label for="lname">Số điện thoại *</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Số điện thoại..">

                                        <label for="lname">Địa chỉ *</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Địa chỉ..">

                                        <label for="lname">Tên thương hiệu *</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Tên thương hiệu..">
                                        <label for="lname">Sản phẩm muốn mua *</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Sản phẩm muốn mua..">
                                        <label for="lname">Sản lượng dự kiến</label>
                                        <input type="text" id="lname" name="lastname" placeholder="Sản lượng dự kiến..">
                                        <input type="submit" value="Submit">
                                      </form>
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