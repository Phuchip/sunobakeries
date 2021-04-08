<!DOCTYPE html>
<html>
    <head>
        <title>Giới thiệu</title>
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
                <?php require "include/navbar5.php" ?>
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
                                        <a href="" title="" class="bread-crumb" style="color: red">Giới thiệu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        require "include/sidebar-left1.php"
                        ?>
                        <div class="main-content fl-right">
                            
                            <div class="section" id="feature-product-wp">
                                
                                <div class="section-detail">
                                    <h1 style="font-size: 20px;">1. Giới thiệu về Suno</h1>
                                    <div style="margin: 15px;width: auto;border: 5px">
                                        Suno là chuỗi cửa hàng cung cấp đồ làm bánh, đồ nấu ăn và pha chế. Các sản phẩm của Suno sẽ giúp bạn nấu các món ăn, đồ uống ngon như ngoài hàng, với chi phí tiết kiệm hơn. <br>

                                        Suno is a retailer specialising in home baking, cooking and barista. Our products will enable you to make restaurant-quality food and drink at a more reasonable price.
                                    </div>
                                    <p style="font-size: 20px;">2. Bản đồ</p>
                                    <div style="margin: 15px;border: 1px">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.616617036341!2d105.82520481440704!3d21.00799979386374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8041a9648d%3A0xe487dd495fdfd676!2zMTIgQ2jDuWEgQuG7mWMsIFRydW5nIExp4buHdCwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1614765564552!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
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