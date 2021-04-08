<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh mục</h3>
        </div>
        <div class="secion-detail">
            <ul class="list-item">
                <li>
                    <a href="<?php echo base_url('home/do_lam_banh') ?>" title="" class="icon2">Đồ làm bánh</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo base_url('home/do_lam_banh') ?>" title="">Nguyên liệu làm bánh</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_lam_banh') ?>" title="">Dụng cụ làm bánh</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_lam_banh') ?>" title="">Khuôn làm bánh</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_lam_banh') ?>" title="">Túi , hộp , cốc, lọ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('home/do_nau_an') ?>" title="" class="icon2">Đồ nấu ăn</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo base_url('home/do_nau_an') ?>" title="">Nguyên liệu món Á</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_nau_an') ?>" title="">Nguyên liệu món Âu</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_nau_an') ?>" title="">Dụng cụ nấu ăn</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_nau_an') ?>" title="">Nguyên liệu lẩu-nướng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('home/do_pha_che') ?>" title="" class="icon2">Đồ pha chế</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo base_url('home/do_pha_che') ?>" title="">Nguyên liệu pha chế</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_pha_che') ?>" title="">Dụng cụ pha chế</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/do_pha_che') ?>" title="">Máy pha chế</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="section" id="selling-wp">
                                <div class="section-head">
                                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                                </div>
                                <div class="section-detail">
                                    <ul class="list-item">
                                        <?php foreach ($data as $row): ?>
                                            <li class="clearfix">
                                            <a href="<?php echo base_url('home/detailproduct'); ?>?id=<?php echo $row->id_sp; ?>&sx=<?php echo $row->id_ncc; ?>&&lq=<?php echo $row->id_phan_loai; ?>" title="" class="thumb fl-left">
                                                <img src="<?php echo base_url('img/'.$row->anh); ?>" alt="" style="width: 72.13px;height: 72.13px">
                                            </a>
                                            <div class="info fl-right">
                                                <a href="?page=detail_product" title="" class="product-name"><?php echo $row->ten_sp; ?></a>
                                                <div class="price">
                                                    <span class="new"><?php echo $row->gia_giam; ?></span>
                                                <span class="old"><?php echo $row->gia_ban; ?></span>
                                                </div>
                                                <a href="" title="" class="buy-now">Mua ngay</a>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="section" id="fanpage">
                                <div class="section-head">
                                    <h3 class="section-title">FANPAGE</h3>
                                </div>
                                <div class="section-detail">
                                    <div class="widget_title">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F360boutique.360%2F&tabs=timeline&width=280&height=350&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="280" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section" id="fanpage">
                                <div class="section-head">
                                    <h3 class="section-title">Bản đồ</h3>
                                </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.616617036341!2d105.82520481440704!3d21.00799979386374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8041a9648d%3A0xe487dd495fdfd676!2zMTIgQ2jDuWEgQuG7mWMsIFRydW5nIExp4buHdCwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1615263331751!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
</div>