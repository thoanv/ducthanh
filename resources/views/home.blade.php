@extends('layouts.app')
@section('title', 'Trang home')
@section('content')
    <div class="container">
        <div id="top_main">
            <div class="all_categories three columns">
                <div class="show_menu hover">
                    <div class="tab_cate"><i class="ico ico_menu"></i>TẤT CẢ DANH MỤC</div>
                    <div id="main_cate_menu">
                        <ul class="nav_menu">
                            <li class="m_li"><h3><a title="Giao Hàng Siêu Tốc"
                                                    href="danh-muc-san-pham/van-chuyen-sieu-toc_2099.html" class="t_menu">
                                        Giao Hàng Siêu Tốc</a></h3></li>
                            <li class="m_li"><h3><a title="Thiết Bị Dùng Pin"
                                                    href="danh-muc-san-pham/thiet-bi-dung-pin_2211.html" class="t_menu">
                                        Thiết Bị Dùng Pin</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="may-khoan-pin/c1682/bosch.html">M&aacute;y Khoan Bosch</a></li>
                                            <li><a href="may-khoan-pin/c1682/makita.html">M&aacute;y Khoan Makita</a></li>
                                            <li><a href="may-khoan-pin/c1682/dewalt.html">M&aacute;y Khoan Dewalt</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-khoan-pin_1682.html">M&aacute;y Khoan</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-mai-dung-pin_2130.html">M&aacute;y
                                                    M&agrave;i</a></li>
                                            <li><a href="danh-muc-san-pham/may-cat-dung-pin_2131.html">M&aacute;y Cắt</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-cua-chay-pin_2134.html">M&aacute;y Cưa</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-cha-nham-pin_2132.html">M&aacute;y Ch&agrave;
                                                    Nh&aacute;m</a></li>
                                            <li><a href="danh-muc-san-pham/may-phay-dung-pin_2135.html">M&aacute;y Phay</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-hut-bui-dung-pin_2136.html">M&aacute;y H&uacute;t
                                                    Bụi</a></li>
                                            <li><a href="danh-muc-san-pham/may-thoi-bui-chay-pin_2147.html">M&aacute;y Thổi
                                                    Bụi</a></li>
                                            <li><a href="danh-muc-san-pham/may-van-vit-dung-pin_2141.html">M&aacute;y Vặn V&iacute;t</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-van-bu-long-dung-pin_2144.html">M&aacute;y
                                                    Vặn Bu L&ocirc;ng</a></li>
                                            <li><a href="danh-muc-san-pham/sung-ban-keo-dung-pin_2140.html">S&uacute;ng&nbsp;Bắn
                                                    Keo</a></li>
                                            <li><a href="danh-muc-san-pham/may-cat-co-chay-pin_2146.html">M&aacute;y Cắt
                                                    Cỏ</a></li>
                                            <li><a href="danh-muc-san-pham/may-cat-cay-canh-chay-pin_2149.html">M&aacute;y
                                                    Cắt C&acirc;y Cảnh&nbsp;</a></li>
                                            <li><a href="danh-muc-san-pham/may-tia-hang-rao-chay-pin_2150.html">M&aacute;y
                                                    Tỉa H&agrave;ng R&agrave;o</a></li>
                                            <li><a href="danh-muc-san-pham/phu-kien-pin-bo-sac_2212.html">Phụ Kiện Pin &amp;
                                                    Bộ Sạc</a></li>
                                            <li class="view-all"><a href="danh-muc-san-pham/thiet-bi-dung-pin_2211.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thiet-bi-dung-pin/c2211/bosch.html">Bosch</a></li>
                                            <li><a href="thiet-bi-dung-pin/c2211/makita.html">Makita</a></li>
                                            <li><a href="thiet-bi-dung-pin/c2211/dewalt.html">Dewalt</a></li>
                                            <li><a href="thiet-bi-dung-pin/c2211/ingco.html">INGCO</a></li>
                                            <li><a href="thiet-bi-dung-pin/c2211/milwaukee.html">Milwaukee</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Dụng Cụ Điện" href="danh-muc-san-pham/dung-cu-dien_1597.html"
                                                    class="t_menu"> Dụng Cụ Điện</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/dung-cu-dien-ban-chay_1820.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                            <li><a href="may-khoan/c1669/bosch.html">M&aacute;y Khoan Bosch</a></li>
                                            <li><a href="may-khoan/c1669/makita.html">M&aacute;y Khoan Makita</a></li>
                                            <li><a href="danh-muc-san-pham/may-khoan-pin_1682.html">M&aacute;y Khoan D&ugrave;ng
                                                    Pin</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-khoan_1669.html">M&aacute;y Khoan</a></li>
                                            <li><a href="danh-muc-san-pham/may-mai_1670.html">M&aacute;y M&agrave;i</a></li>
                                            <li><a href="danh-muc-san-pham/_1671.html">M&aacute;y Cắt</a></li>
                                            <li><a href="danh-muc-san-pham/_1672.html">M&aacute;y B&agrave;o</a></li>
                                            <li><a href="danh-muc-san-pham/_1673.html">M&aacute;y Ch&agrave; Nh&aacute;m</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/_1674.html">M&aacute;y Đ&aacute;nh
                                                    B&oacute;ng</a></li>
                                            <li><a href="danh-muc-san-pham/_1675.html">M&aacute;y Cưa</a></li>
                                            <li><a href="danh-muc-san-pham/_1676.html">M&aacute;y Phay</a></li>
                                            <li><a href="danh-muc-san-pham/_1677.html">M&aacute;y Thổi Hơi N&oacute;ng</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/sung-ban-keo_1678.html">S&uacute;ng&nbsp;Bắn
                                                    Keo</a></li>
                                            <li><a href="danh-muc-san-pham/_1679.html">M&aacute;y Vặn V&iacute;t</a></li>
                                            <li class="view-all"><a href="danh-muc-san-pham/dung-cu-dien_1597.html">Xem tất
                                                    cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="dung-cu-dien/c1597/bosch.html">Bosch</a></li>
                                            <li><a href="dung-cu-dien/c1597/makita.html">Makita</a></li>
                                            <li><a href="dung-cu-dien/c1597/dewalt.html">Dewalt</a></li>
                                            <li><a href="dung-cu-dien/c1597/skil.html">Skil</a></li>
                                            <li><a href="dung-cu-dien/c1597/feg.html">FEG</a></li>
                                            <li><a href="dung-cu-dien/c1597/hitachi.html">Hitachi</a></li>
                                            <li><a href="dung-cu-dien/c1597/stanley.html">Stanley</a></li>
                                            <li><a href="dung-cu-dien/c1597/metabo.html">Metabo</a></li>
                                            <li><a href="dung-cu-dien/c1597/crown.html">Crown</a></li>
                                            <li><a href="dung-cu-dien/c1597/shinetool.html">Shinetool</a></li>
                                            <li><a href="dung-cu-dien/c1597/maktec.html">Maktec</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Máy Lọc Không Khí"
                                                    href="danh-muc-san-pham/may-loc-khong-khi_2293.html" class="t_menu"> Máy
                                        Lọc Không Khí</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="may-loc-khong-khi/c2293/sharp.html">M&aacute;y Lọc Kh&ocirc;ng Kh&iacute;&nbsp;Sharp</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-loc-khong-khi-o-to_2294.html">M&aacute;y Lọc
                                                    Kh&ocirc;ng Kh&iacute; &Ocirc; T&ocirc;</a></li>
                                            <li><a href="danh-muc-san-pham/may-loc-khong-khi_2293.html">Xem tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="may-loc-khong-khi/c2293/sharp.html">Sharp</a></li>
                                            <li><a href="may-loc-khong-khi/c2293/karcher.html">Karcher</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Thiết Bị Nâng Đỡ"
                                                    href="danh-muc-san-pham/thiet-bi-nang-do_1599.html" class="t_menu">
                                        Thiết Bị Nâng Đỡ</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thiet-bi-nang-do-ban-chay_1833.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                            <li><a href="xe-day/c1774/jumbo.html">Xe đẩy Jumbo Th&aacute;i Lan</a></li>
                                            <li><a href="xe-day/c1774/phong-thanh.html">Xe đẩy Phong Thạnh Việt Nam</a></li>
                                            <li><a href="xe-day/c1774/prestar.html">Xe đẩy&nbsp;Prestar Japan</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/pa-lang_1772.html">Pa Lăng</a></li>
                                            <li><a href="danh-muc-san-pham/con-doi_1773.html">Con Đội</a></li>
                                            <li><a href="danh-muc-san-pham/xe-day_1774.html">Xe Đẩy</a></li>
                                            <li><a href="danh-muc-san-pham/xe-day-ve-sinh_1775.html">Xe Đẩy Vệ Sinh</a></li>
                                            <li class="view-all"><a href="danh-muc-san-pham/thiet-bi-nang-do_1599.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thuong-hieu/nitto.html">Nitto</a></li>
                                            <li><a href="thuong-hieu/daesan.html">Desan</a></li>
                                            <li><a href="thuong-hieu/asaki.html">Asaki</a></li>
                                            <li><a href="thuong-hieu/masada.html">Masada</a></li>
                                            <li><a href="thuong-hieu/phong-thanh.html">Phong Thạnh</a></li>
                                            <li><a href="thuong-hieu/kawasaki.html">Kawasaki</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Thang nhôm" href="danh-muc-san-pham/thang-nhom_31.html"
                                                    class="t_menu"> Thang nhôm</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thang-nhom-ban-chay-theo-nhom_1605.html">Thang nh&ocirc;m
                                                    B&aacute;n chạy</a></li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-2m_1811.html">Thang Nh&ocirc;m 2m</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-3m_1607.html">Thang Nh&ocirc;m 3m</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-5m_1608.html">Thang nh&ocirc;m 5m</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-nhap-khau_1810.html">Thang nh&ocirc;m
                                                    nhập khẩu</a></li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-han-quoc_1812.html">Thang Nh&ocirc;m H&agrave;n
                                                    Quốc</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thang-nhom-rut_174.html">Thang nh&ocirc;m r&uacute;t</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-chu-a_175.html">Thang nh&ocirc;m&nbsp;chữ
                                                    A</a></li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-truot_176.html">Thang nh&ocirc;m
                                                    trượt</a></li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-gap_177.html">Thang nh&ocirc;m gấp</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-nhom-ghe_191.html">Thang nh&ocirc;m ghế</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thang-cach-dien_1591.html">Thang c&aacute;ch
                                                    điện</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thang-nhom/c31/nikawa.html">Nikawa</a></li>
                                            <li><a href="thang-nhom/c31/poongsan.html">Poongsan</a></li>
                                            <li><a href="thang-nhom/c31/salvo.html">Salvo</a></li>
                                            <li><a href="thang-nhom/c31/pal.html">Pal</a></li>
                                            <li><a href="thang-nhom/c31/kenfon.html">Kenfon</a></li>
                                            <li><a href="thuong-hieu/littlegiand.html">Little G</a><a
                                                    href="thang-nhom/c31/littlegiand.html">iand</a></li>
                                            <li><a href="thang-nhom/c31/hasegawa.html">Hasegawa</a></li>
                                            <li><a href="thang-nhom/c31/unigawa.html">Unigawa</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Máy Hàn & Phụ Kiện"
                                                    href="danh-muc-san-pham/may-han-phu-kien_1606.html" class="t_menu"> Máy
                                        Hàn & Phụ Kiện</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="may-han-que/c1609/hong-ky.html">M&aacute;y H&agrave;n Que Hồng K&yacute;</a>
                                            </li>
                                            <li><a href="may-han-mig/c1611/jasic.html">M&aacute;y H&agrave;n Mig Jasic</a>
                                            </li>
                                            <li><a href="may-han-tig/c1610/weldcom.html">M&aacute;y H&agrave;n Tig
                                                    Weldcom</a></li>
                                            <li><a href="may-han-que/c1609/protech.html">M&aacute;y H&agrave;n Protech</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-han-que_1609.html">M&aacute;y H&agrave;n
                                                    Que</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-tig_1610.html">M&aacute;y H&agrave;n
                                                    Tig</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-mig_1611.html">M&aacute;y H&agrave;n
                                                    Mig</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-cat-plasma_1612.html">M&aacute;y H&agrave;n
                                                    &amp; Cắt Plasma</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-da-chuc-nang_1867.html">M&aacute;y H&agrave;n
                                                    Đa Chức Năng</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-mini-gia-dinh_2287.html">M&aacute;y H&agrave;n
                                                    Mini Gia Đ&igrave;nh</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-nhua_2290.html">M&aacute;y H&agrave;n
                                                    Nhựa</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-lan_2032.html">M&aacute;y H&agrave;n
                                                    Lăn</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-bam_2031.html">M&aacute;y H&agrave;n
                                                    Bấm</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-tu-dong_2030.html">M&aacute;y H&agrave;n
                                                    Tự Động</a></li>
                                            <li><a href="danh-muc-san-pham/may-han-noi_2029.html">M&aacute;y H&agrave;n
                                                    Nối</a></li>
                                            <li><a href="danh-muc-san-pham/bien-the-han_1863.html">Biến Thế H&agrave;n</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/tuyen-tap-may-han_1623.html">Tuyển Tập M&aacute;y
                                                    H&agrave;n</a></li>
                                            <li><a href="danh-muc-san-pham/phu-kien-han_1613.html">Phụ Kiện H&agrave;n</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-han-phu-kien_1606.html">Xem tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="may-han-phu-kien/c1606/hong-ky.html">Hồng K&yacute;</a></li>
                                            <li><a href="may-han-phu-kien/c1606/jasic.html">Jasic</a></li>
                                            <li><a href="may-han-phu-kien/c1606/protech.html">Protech</a></li>
                                            <li><a href="may-han-phu-kien/c1606/weldcom.html">Weldcom</a></li>
                                            <li><a href="may-han-phu-kien/c1606/legi.html">LEGI</a></li>
                                            <li><a href="may-han-phu-kien/c1606/tien-dat.html">Tiến Đạt</a></li>
                                            <li><a href="may-han-phu-kien/c1606/kiswel.html">KISWEL</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Thiết Bị, Dụng Cụ Đo"
                                                    href="danh-muc-san-pham/thiet-bi-do_1595.html" class="t_menu"> Thiết Bị,
                                        Dụng Cụ Đo</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thuoc-do-ban-chay_1815.html">Thước Đo B&aacute;n
                                                    chạy</a></li>
                                            <li><a href="thuoc-kep/c1627/mitutoyo.html">Thước kẹp Mitutoyo</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thuoc-kep_1627.html">Thước Kẹp</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-panme_1634.html">Thước Panme</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-thuy_1635.html">Thước thủy</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-ke-vuong_1859.html">Thước Ke
                                                    Vu&ocirc;ng</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-la_1850.html">Thước L&aacute;</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-do-goc_1847.html">Thước đo g&oacute;c</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thuoc-lan-duong_1846.html">Thước lăn đường</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/dong-ho-do-do-day_1636.html">Đồng hồ đo độ d&agrave;y</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/bo-duong-do_1637.html">Bộ Dưỡng Đo</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-do-do-cao_1638.html">Thước Đo Độ Cao</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/thuoc-do-do-sau_1639.html">Thước Đo Độ
                                                    S&acirc;u</a></li>
                                            <li><a href="danh-muc-san-pham/thuoc-cuon_1640.html">Thước cuộn</a></li>
                                            <li><a href="danh-muc-san-pham/may-do-khoang-cach_1641.html">M&aacute;y Đo
                                                    Khoảng C&aacute;ch</a></li>
                                            <li><a href="danh-muc-san-pham/may-do-do-am_1642.html">M&aacute;y Đo Độ Ẩm</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-do-nhiet-do_1643.html">M&aacute;y Đo Nhiệt
                                                    Độ</a></li>
                                            <li class="view-all"><a href="danh-muc-san-pham/thiet-bi-do_1595.html">Xem tất
                                                    cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thiet-bi-do/c1595/fluke.html">Fluke</a></li>
                                            <li><a href="thiet-bi-do/c1595/sanwa.html">Sanwa</a></li>
                                            <li><a href="thiet-bi-do/c1595/crossman.html">Crossman</a></li>
                                            <li><a href="thiet-bi-do/c1595/makita.html">Makita</a></li>
                                            <li><a href="thiet-bi-do/c1595/bosch.html">Bosch</a></li>
                                            <li><a href="thiet-bi-do/c1595/leica.html">Leica</a></li>
                                            <li><a href="thiet-bi-do/c1595/tajima.html">Tajima</a></li>
                                            <li><a href="thiet-bi-do/c1595/stanley.html">Stanley</a></li>
                                            <li><a href="thiet-bi-do/c1595/horex.html">Horex</a></li>
                                            <li><a href="thiet-bi-do/c1595/shinwa.html">Shinwa</a></li>
                                            <li><a href="thiet-bi-do/c1595/moore-wright.html">Moore &amp; Wright</a></li>
                                            <li><a href="thiet-bi-do/c1595/asaki.html">Asaki</a></li>
                                            <li><a href="thiet-bi-do/c1595/mitutoyo.html">Mitutoyo</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Thiết Bị Đo Điện"
                                                    href="danh-muc-san-pham/thiet-bi-do-dien_1596.html" class="t_menu">
                                        Thiết Bị Đo Điện</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thiet-bi-do-dien-ban-chay_1818.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/ampe-kim_1665.html">Ampe K&igrave;m</a></li>
                                            <li><a href="danh-muc-san-pham/dong-ho-do-van-nang_1666.html">Đồng Hồ Đo Vạn
                                                    Năng</a></li>
                                            <li><a href="danh-muc-san-pham/do-dien-tro-cach-dien_1667.html">Đo Điện Trở C&aacute;ch
                                                    Điện</a></li>
                                            <li><a href="danh-muc-san-pham/do-dien-tro-dat_1668.html">Đo Điện Trở Đất</a>
                                            </li>
                                            <li class="view-all"><a href="danh-muc-san-pham/thiet-bi-do-dien_1596.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thiet-bi-do-dien/c1596/fluke.html">Fluke</a></li>
                                            <li><a href="thiet-bi-do-dien/c1596/lutron.html">Lutron</a></li>
                                            <li><a href="thiet-bi-do-dien/c1596/sanwa.html">Sanwa</a></li>
                                            <li><a href="thiet-bi-do-dien/c1596/hioki.html">Hioki</a></li>
                                            <li><a href="thiet-bi-do-dien/c1596/kyoritsu.html">Kyoritsu</a></li>
                                            <li><a href="thiet-bi-do-dien/c1596/extech.html">Extech</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Dụng Cụ Cầm Tay"
                                                    href="danh-muc-san-pham/dung-cu-cam-tay_1598.html" class="t_menu"> Dụng
                                        Cụ Cầm Tay</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/dung-cu-cam-tay-ban-chay_1829.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                            <li><a href="kim-cam-tay/c1720/stanley.html">K&igrave;m Stanley</a></li>
                                            <li><a href="danh-muc-san-pham/bo-tuoc-no-vit-da-nang_1831.html">Bộ Tuốc Nơ V&iacute;t
                                                    Đa Năng</a></li>
                                            <li><a href="danh-muc-san-pham/bo-co-le_1832.html">Bộ Cờ L&ecirc;</a></li>
                                            <li><a href="danh-muc-san-pham/but-dien_1842.html">B&uacute;t thử điện</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/kim-cam-tay_1720.html">K&igrave;m Cầm Tay</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/bua-cam-tay_1721.html">B&uacute;a Cầm Tay</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/luc-giac_1722.html">Lục Gi&aacute;c</a></li>
                                            <li><a href="danh-muc-san-pham/can-siet_1860.html">Cần Siết</a></li>
                                            <li><a href="danh-muc-san-pham/co-le_1723.html">Cờ L&ecirc;</a></li>
                                            <li><a href="danh-muc-san-pham/mo-let_1724.html">Mỏ Lết</a></li>
                                            <li><a href="danh-muc-san-pham/dung-cu-cat_1725.html">Dụng Cụ cắt</a></li>
                                            <li><a href="danh-muc-san-pham/e-to_1726.html">&Ecirc; T&ocirc;</a></li>
                                            <li><a href="danh-muc-san-pham/dung-cu-cao_1727.html">Dụng Cụ Cảo</a></li>
                                            <li><a href="danh-muc-san-pham/tuot-no-vit_1728.html">Tuốc Nơ V&iacute;t</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/keo-cat-cac-loai_1852.html">K&eacute;o Cắt C&aacute;c
                                                    Loại</a></li>
                                            <li><a href="danh-muc-san-pham/de-co-khi_1729.html">Đe Cơ Kh&iacute;</a></li>
                                            <li><a href="danh-muc-san-pham/ong-dieu_1730.html">Ống Điếu</a></li>
                                            <li><a href="danh-muc-san-pham/tuyp_1731.html">Tu&yacute;p</a></li>
                                            <li><a href="danh-muc-san-pham/dung-cu-tong-hop_1732.html">Dụng Cụ Tổng Hợp</a>
                                            </li>
                                            <li class="view-all"><a href="danh-muc-san-pham/dung-cu-cam-tay_1598.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thuong-hieu/stanley.html">Stanley</a></li>
                                            <li><a href="thuong-hieu/kingtony.html">Kingtony</a></li>
                                            <li><a href="thuong-hieu/sata.html">Sata</a></li>
                                            <li><a href="thuong-hieu/toptul.html">Topful</a></li>
                                            <li><a href="thuong-hieu/asaki.html">Asaki</a></li>
                                            <li><a href="thuong-hieu/licota.html">Licota</a></li>
                                            <li><a href="thuong-hieu/century.html">Century</a></li>
                                            <li><a href="thuong-hieu/crossman.html">Crossman</a></li>
                                            <li><a href="thuong-hieu/goodman.html">Goodman</a></li>
                                            <li><a href="thuong-hieu/fujiya.html">Fujiya</a></li>
                                            <li><a href="thuong-hieu/endura.html">Endura</a></li>
                                            <li><a href="thuong-hieu/wynns.html">Wynns</a></li>
                                            <li><a href="thuong-hieu/berrylion.html">Berrylion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Dụng Cụ Khí Nén"
                                                    href="danh-muc-san-pham/dung-cu-khi-nen_1600.html" class="t_menu"> Dụng
                                        Cụ Khí Nén</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/dung-cu-khi-nen-ban-chay_1834.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-van-oc_1784.html">M&aacute;y Vặn Ốc</a></li>
                                            <li><a href="danh-muc-san-pham/may-mai-hoi_1785.html">M&aacute;y M&agrave;i
                                                    Hơi</a></li>
                                            <li><a href="danh-muc-san-pham/may-danh-bong-hoi_1786.html">M&aacute;y Đ&aacute;nh
                                                    B&oacute;ng Hơi</a></li>
                                            <li><a href="danh-muc-san-pham/may-ban-dinh-hoi_1787.html">M&aacute;y Bắn Đinh
                                                    Hơi</a></li>
                                            <li><a href="danh-muc-san-pham/may-cha-nham-hoi_1788.html">M&aacute;y Ch&agrave;
                                                    Nh&aacute;m Hơi</a></li>
                                            <li><a href="danh-muc-san-pham/may-khoan-hoi_1789.html">M&aacute;y Khoan Hơi</a>
                                            </li>
                                            <li><a href="#">M&aacute;y Đục</a><a
                                                    href="danh-muc-san-pham/may-duc-be-tong_1790.html">&nbsp;B&ecirc; T&ocirc;ng</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/sung-phun-son_1791.html">S&uacute;ng Phun Sơn</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-van-vit-hoi_1792.html">M&aacute;y Vặn V&iacute;t
                                                    Hơi</a></li>
                                            <li><a href="danh-muc-san-pham/cuon-ong-hoi_1853.html">Cuộn ống hơi</a></li>
                                            <li><a href="danh-muc-san-pham/bom-mo_1848.html">Bơm Mỡ</a></li>
                                            <li class="view-all"><a href="danh-muc-san-pham/dung-cu-khi-nen_1600.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="dung-cu-khi-nen/c1600/nitto.html">Nitto</a></li>
                                            <li><a href="thuong-hieu/daesan.html">Desan</a></li>
                                            <li><a href="thuong-hieu/kingtony.html">Kingtony</a></li>
                                            <li><a href="thuong-hieu/daikoku.html">Daikoku</a></li>
                                            <li><a href="dung-cu-khi-nen/c1600/makita.html">Makita</a></li>
                                            <li><a href="dung-cu-khi-nen/c1600/bosch.html">Bosch</a></li>
                                            <li><a href="dung-cu-khi-nen/c1600/koku.html">Koku</a></li>
                                            <li><a href="dung-cu-khi-nen/c1600/shinano.html">Sinano</a></li>
                                            <li><a href="thuong-hieu/kawasaki.html">Kawasaki</a></li>
                                            <li><a href="#">Ku</a><a href="thuong-hieu/kuken.html">ken</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="m_li"><h3><a title="Thiết Bị Dùng Nước"
                                                    href="danh-muc-san-pham/thiet-bi-dung-nuoc_1601.html" class="t_menu">
                                        Thiết Bị Dùng Nước</a></h3>
                                <ul class="list_categories" style="width: 952px; min-height: 260px;">
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Nổi bật</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/thiet-bi-dung-nuoc-ban-chay_1835.html">Sản Phẩm B&aacute;n
                                                    chạy</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Danh mục</div>
                                        <ul>
                                            <li><a href="danh-muc-san-pham/may-xit-rua-ap-luc_1793.html">M&aacute;y Xịt Rửa
                                                    &Aacute;p Lực</a></li>
                                            <li><a href="danh-muc-san-pham/may-hut-bui_1794.html">M&aacute;y H&uacute;t
                                                    Bụi</a></li>
                                            <li><a href="danh-muc-san-pham/may-cha-san_1795.html">M&aacute;y Ch&agrave; S&agrave;n</a>
                                            </li>
                                            <li><a href="danh-muc-san-pham/may-bom-nuoc_1796.html">M&aacute;y Bơm Nước</a>
                                            </li>
                                            <li class="view-all"><a href="danh-muc-san-pham/thiet-bi-dung-nuoc_1601.html">Xem
                                                    tất cả</a></li>
                                        </ul>
                                    </li>
                                    <li class="pc_menu has-sub">
                                        <div class="tt_cate">Thương Hiệu Nổi Bật</div>
                                        <ul>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/black-decker.html">Black &amp; Decker</a>
                                            </li>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/makita.html">Makita</a></li>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/hitachi.html">Hitachi</a></li>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/bosch.html">Bosch</a></li>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/skil.html">Skil</a></li>
                                            <li><a href="thiet-bi-dung-nuoc/c1601/karcher.html">Karcher</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others_menu">
                            <ul>
                                <li><a href="index.html" title="Trang chủ">Trang chủ</a></li>
                                <li><a href="ket-noi-tu-van/99-gioi-thieu-chung-ve-ket-noi-tieu-dung.html"
                                       title="Giới thiệu">Giới thiệu</a></li>
                                <li><a href="ket-noi-tu-van.html" title="Tư vấn kết nối">Tư vấn kết nối</a></h3> </li>
                                <li><a href="lien-he.html" title="Liên hệ">Liên hệ</a></h3> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="others_icon_menu">
                        <ul>
                            <li class="others_icon_menu__promotion"><a href="tin-khuyen-mai.html"
                                                                       title="Tin khuyến mãi"><i></i> Tin khuyến mãi</a>
                            </li>
                            <li class="others_icon_menu__combo"><a href="combo-tiet-kiem.html"
                                                                   title="Combo tiết kiệm"><i></i> Combo tiết kiệm</a></li>
                            <li class="others_icon_menu__youtube"><a
                                    href="https://www.youtube.com/channel/UCHwxcUZLYWagLEtijQ9aJSQ" rel="nofollow"
                                    target="_blank" title="Video Review Sản Phẩm"><i></i> Video Review</a></h3> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="right_top_main" class="thirteen columns"> <!-- Main Menu-->
                <nav>
                    <div id='main_menu'>
                        <ul class="fl">
                            <li class="active"><h3><a href="index.html" title="Trang chủ">Trang chủ</a></h3></li>
                            <li><h3><a href="ket-noi-tu-van/99-gioi-thieu-chung-ve-ket-noi-tieu-dung.html"
                                       title="Giới thiệu">Giới thiệu</a></h3></li>
                            <li><h3><a href="ket-noi-tu-van.html" title="Tư vấn kết nối">Tư vấn kết nối</a></h3></li>
                            <li><h3><a href="tin-khuyen-mai.html" title="Tin khuyến mãi">Tin khuyến mãi</a></h3></li>
                            <li><h3><a href="combo-tiet-kiem.html" title="Combo tiết kiệm">Combo tiết kiệm</a></h3></li>
                            <li><h3><a href="lien-he.html" title="Liên hệ">Liên hệ</a></h3></li>
                            <li><h3><a href="https://www.youtube.com/channel/UCHwxcUZLYWagLEtijQ9aJSQ" rel="nofollow"
                                       target="_blank" title="Video Review Sản Phẩm">Video Review Sản Phẩm</a></h3></li>
                        </ul>
                    </div>
                </nav> <!--end Main Menu--> <!--<div class="hotline_head fr"><b> - </b></div>--></div>
        </div>
        <div class="cf"></div>
        <div class="slide_index" id="homebanners">
            <div id="slide_banner">
                <div class='item'><a title="Banner Trang Chủ"><img src="data/bqc/bt9/banner-trang-chu-1637549963.jpg"
                                                                   alt="Banner Trang Chủ"/></a></div>
                <div class='item'><a href="thuong-hieu/stanley.html" target="_blank" title="4 - stanley"><img
                            src="data/bqc/bt10/4-stanley-1482812793.png" alt="4 - stanley"/></a></div>
                <div class='item'><a href="may-khoan/c1669/bosch.html" target="_blank" title="2 Bosh"><img
                            src="data/bqc/bt10/2-bosh-1482812693.png" alt="2 Bosh"/></a></div>
                <div class='item'><a href="thang-nhom/c31/nikawa.html" target="_blank" title="1"><img
                            src="data/bqc/bt6/1-1482812612.png" alt="1"/></a></div>
                <div class='item'><a href="danh-muc-san-pham/may-han-phu-kien_1606.html" target="_blank" title="test"><img
                            src="data/bqc/bt3/test-1482724072.jpg" alt="test"/></a></div>
            </div>
        </div>
        <div id="ads_right_top_main" class="fr">
            <div class="ads_item"><a title="11 Năm Trong Ngành - KNTD 2021"><img width="100%"
                                                                                 src="data/bqc/bt10/11-nam-trong-nganh-kntd-2021-1609990794.png"
                                                                                 alt="11 Năm Trong Ngành - KNTD 2021"></a>
            </div>
        </div>
        <div class="slogan-container cf"><h1 class="slogan-text"> Mua Thang Nhôm, Máy Hàn, Máy Khoan, Xe Đẩy Chính Hãng Giá
                Tốt </h1>
            <div class="slogan-end"></div>
            <div class="cf"></div>
        </div> <!--Slide Brands-->
        <div class="box bor_box pros_home box-brand-category"><h3 class="main_Tab tab-brand-category"><a
                    href="javascript: void(0);" onclick="showBradCategoryTab(0);" id="tab_brand_category_all"
                    class="view_all cl_red"><b>Tất cả</b></a> <a href="javascript: void(0);"
                                                                 onclick="showBradCategoryTab(1606);"
                                                                 id="tab_brand_category_1606" class="view_all cl_red un_active"><b>Máy
                        Hàn</b></a> <a href="javascript: void(0);" onclick="showBradCategoryTab(31);" id="tab_brand_category_31"
                                       class="view_all cl_red un_active"><b>Thang Nhôm</b></a> <a href="javascript: void(0);"
                                                                                                  onclick="showBradCategoryTab(1774);"
                                                                                                  id="tab_brand_category_1774"
                                                                                                  class="view_all cl_red un_active"><b>Xe
                        Đẩy</b></a> <a href="javascript: void(0);" onclick="showBradCategoryTab(1772);" id="tab_brand_category_1772"
                                       class="view_all cl_red un_active"><b>Pa Lăng</b></a> <a href="javascript: void(0);"
                                                                                               onclick="showBradCategoryTab(1669);"
                                                                                               id="tab_brand_category_1669"
                                                                                               class="view_all cl_red un_active"><b>Máy
                        Khoan</b></a> <a href="javascript: void(0);" onclick="showBradCategoryTab(1670);" id="tab_brand_category_1670"
                                         class="view_all cl_red un_active"><b>Máy Mài</b></a> <a href="javascript: void(0);"
                                                                                                 onclick="showBradCategoryTab(1671);"
                                                                                                 id="tab_brand_category_1671"
                                                                                                 class="view_all cl_red un_active"><b>Máy
                        Cắt</b></a></h3>
            <div class="subcate">
                <button type="button" class="btn-direct-support" onclick="direct('index.html')"><i></i>&nbsp;Tư vấn trực
                    tiếp
                </button>
            </div>
            <div class="slide_brands" id="slide_brands_all">
                <div class="item"><a href="thuong-hieu/hikoki.html" title="HIKOKI"><img title="HIKOKI"
                                                                                        src="data/bt8/hikoki-hp-1585305545.jpg"
                                                                                        alt="HIKOKI" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/xstep.html" title="XSTEP"><img title="XSTEP"
                                                                                      src="data/bt4/xstep-hp-1515033420.jpg"
                                                                                      alt="XSTEP" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/weldcom.html" title="Weldcom"><img title="Weldcom"
                                                                                          src="data/bt5/weldcom-hp-1509532459.png"
                                                                                          alt="Weldcom" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/prestar.html" title="PRESTAR"><img title="PRESTAR"
                                                                                          src="data/bt4/prestar-hp-1509531099.png"
                                                                                          alt="PRESTAR" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/phong-thanh.html" title="Phong Thạnh"><img title="Phong Thạnh"
                                                                                                  src="data/bt8/phong-thanh-hp-1509529680.png"
                                                                                                  alt="Phong Thạnh"
                                                                                                  height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/sumo.html" title="Sumo"><img title="Sumo"
                                                                                    src="data/bt10/sumo-hp-1515033630.jpg"
                                                                                    alt="Sumo" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/legi.html" title="LEGI"><img title="LEGI"
                                                                                    src="data/bt10/legi-hp-1509532308.png"
                                                                                    alt="LEGI" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/jasic.html" title="Jasic"><img title="Jasic"
                                                                                      src="data/bt1/jasic-hp-1509531988.png"
                                                                                      alt="Jasic" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/hong-ky.html" title="Hồng Ký"><img title="Hồng Ký"
                                                                                          src="data/bt3/hong-ky-hp-1509528957.png"
                                                                                          alt="Hồng Ký" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/stihl.html" title="STIHL"><img title="STIHL"
                                                                                      src="data/bt1/stihl-hp-1509512410.jpg"
                                                                                      alt="STIHL" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/stanley.html" title="Stanley"><img title="Stanley"
                                                                                          src="data/bt7/stanley-hp-1509523686.png"
                                                                                          alt="Stanley" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/crown.html" title="CROWN"><img title="CROWN"
                                                                                      src="data/bt1/crown-hp-1509591317.png"
                                                                                      alt="CROWN" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/ken.html" title="KEN"><img title="KEN"
                                                                                  src="data/bt1/ken-hp-1509590570.png"
                                                                                  alt="KEN" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/mitutoyo.html" title="Mitutoyo"><img title="Mitutoyo"
                                                                                            src="data/bt8/mitutoyo-hp-1509511980.jpg"
                                                                                            alt="Mitutoyo" height="68"/>
                    </a></div>
                <div class="item"><a href="thuong-hieu/poongsan.html" title="POONGSAN"><img title="POONGSAN"
                                                                                            src="data/bt5/poongsan-hp-1509527465.png"
                                                                                            alt="POONGSAN" height="68"/>
                    </a></div>
                <div class="item"><a href="thuong-hieu/dewalt.html" title="Dewalt"><img title="Dewalt"
                                                                                        src="data/bt10/dewalt-hp-1509590111.png"
                                                                                        alt="Dewalt" height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/bosch.html" title="Bosch"><img title="Bosch"
                                                                                      src="data/bt8/bosch-hp-1509527735.png"
                                                                                      alt="Bosch" height="68"/> </a></div>
                <div class="item"><a href="thuong-hieu/black-decker.html" title="Black & Decker"><img title="Black & Decker"
                                                                                                      src="data/bt6/black-decker-hp-1561703670.jpg"
                                                                                                      alt="Black & Decker"
                                                                                                      height="68"/> </a>
                </div>
                <div class="item"><a href="thuong-hieu/makita.html" title="Makita"><img title="Makita"
                                                                                        src="data/bt6/makita-hp-1509528313.png"
                                                                                        alt="Makita" height="68"/> </a>
                </div>
            </div>
            <div class="slide_brands" id="slide_brands_1606" style="display: none;">
                <div class="item"><a href="may-han-phu-kien/c1606/jasic.html" title="Jasic"><img title="Jasic"
                                                                                                 src="data/bt1/jasic-hp-1509531988.png"
                                                                                                 alt="Jasic" height="68"/>
                    </a></div>
                <div class="item"><a href="may-han-phu-kien/c1606/legi.html" title="LEGI"><img title="LEGI"
                                                                                               src="data/bt10/legi-hp-1509532308.png"
                                                                                               alt="LEGI" height="68"/> </a>
                </div>
                <div class="item"><a href="may-han-phu-kien/c1606/weldcom.html" title="Weldcom"><img title="Weldcom"
                                                                                                     src="data/bt5/weldcom-hp-1509532459.png"
                                                                                                     alt="Weldcom"
                                                                                                     height="68"/> </a>
                </div>
                <div class="item"><a href="may-han-phu-kien/c1606/hong-ky.html" title="Hồng Ký"><img title="Hồng Ký"
                                                                                                     src="data/bt3/hong-ky-hp-1509528957.png"
                                                                                                     alt="Hồng Ký"
                                                                                                     height="68"/> </a>
                </div>
                <div class="item"><a href="may-han-phu-kien/c1606/makita.html" title="Makita"><img title="Makita"
                                                                                                   src="data/bt6/makita-hp-1509528313.png"
                                                                                                   alt="Makita"
                                                                                                   height="68"/> </a></div>
                <div class="item"><a href="may-han-phu-kien/c1606/bosch.html" title="Bosch"><img title="Bosch"
                                                                                                 src="data/bt8/bosch-hp-1509527735.png"
                                                                                                 alt="Bosch" height="68"/>
                    </a></div>
                <div class="item"><a href="may-han-phu-kien/c1606/stanley.html" title="Stanley"><img title="Stanley"
                                                                                                     src="data/bt7/stanley-hp-1509523686.png"
                                                                                                     alt="Stanley"
                                                                                                     height="68"/> </a>
                </div>
            </div>
            <div class="slide_brands" id="slide_brands_31" style="display: none;">
                <div class="item"><a href="thang-nhom/c31/sumo.html" title="Sumo"><img title="Sumo"
                                                                                       src="data/bt10/sumo-hp-1515033630.jpg"
                                                                                       alt="Sumo" height="68"/> </a></div>
                <div class="item"><a href="thang-nhom/c31/prestar.html" title="PRESTAR"><img title="PRESTAR"
                                                                                             src="data/bt4/prestar-hp-1509531099.png"
                                                                                             alt="PRESTAR" height="68"/>
                    </a></div>
                <div class="item"><a href="thang-nhom/c31/xstep.html" title="XSTEP"><img title="XSTEP"
                                                                                         src="data/bt4/xstep-hp-1515033420.jpg"
                                                                                         alt="XSTEP" height="68"/> </a>
                </div>
                <div class="item"><a href="thang-nhom/c31/poongsan.html" title="POONGSAN"><img title="POONGSAN"
                                                                                               src="data/bt5/poongsan-hp-1509527465.png"
                                                                                               alt="POONGSAN" height="68"/>
                    </a></div>
            </div>
            <div class="slide_brands" id="slide_brands_1774" style="display: none;">
                <div class="item"><a href="xe-day/c1774/sumo.html" title="Sumo"><img title="Sumo"
                                                                                     src="data/bt10/sumo-hp-1515033630.jpg"
                                                                                     alt="Sumo" height="68"/> </a></div>
                <div class="item"><a href="xe-day/c1774/phong-thanh.html" title="Phong Thạnh"><img title="Phong Thạnh"
                                                                                                   src="data/bt8/phong-thanh-hp-1509529680.png"
                                                                                                   alt="Phong Thạnh"
                                                                                                   height="68"/> </a></div>
                <div class="item"><a href="xe-day/c1774/prestar.html" title="PRESTAR"><img title="PRESTAR"
                                                                                           src="data/bt4/prestar-hp-1509531099.png"
                                                                                           alt="PRESTAR" height="68"/> </a>
                </div>
                <div class="item"><a href="xe-day/c1774/black-decker.html" title="Black & Decker"><img
                            title="Black & Decker" src="data/bt6/black-decker-hp-1561703670.jpg" alt="Black & Decker"
                            height="68"/> </a></div>
                <div class="item"><a href="xe-day/c1774/dewalt.html" title="Dewalt"><img title="Dewalt"
                                                                                         src="data/bt10/dewalt-hp-1509590111.png"
                                                                                         alt="Dewalt" height="68"/> </a>
                </div>
                <div class="item"><a href="xe-day/c1774/makita.html" title="Makita"><img title="Makita"
                                                                                         src="data/bt6/makita-hp-1509528313.png"
                                                                                         alt="Makita" height="68"/> </a>
                </div>
                <div class="item"><a href="xe-day/c1774/stanley.html" title="Stanley"><img title="Stanley"
                                                                                           src="data/bt7/stanley-hp-1509523686.png"
                                                                                           alt="Stanley" height="68"/> </a>
                </div>
            </div>
            <div class="slide_brands" id="slide_brands_1772" style="display: none;"></div>
            <div class="slide_brands" id="slide_brands_1669" style="display: none;">
                <div class="item"><a href="may-khoan/c1669/mitutoyo.html" title="Mitutoyo"><img title="Mitutoyo"
                                                                                                src="data/bt8/mitutoyo-hp-1509511980.jpg"
                                                                                                alt="Mitutoyo" height="68"/>
                    </a></div>
                <div class="item"><a href="may-khoan/c1669/ken.html" title="KEN"><img title="KEN"
                                                                                      src="data/bt1/ken-hp-1509590570.png"
                                                                                      alt="KEN" height="68"/> </a></div>
                <div class="item"><a href="may-khoan/c1669/crown.html" title="CROWN"><img title="CROWN"
                                                                                          src="data/bt1/crown-hp-1509591317.png"
                                                                                          alt="CROWN" height="68"/> </a>
                </div>
                <div class="item"><a href="may-khoan/c1669/black-decker.html" title="Black & Decker"><img
                            title="Black & Decker" src="data/bt6/black-decker-hp-1561703670.jpg" alt="Black & Decker"
                            height="68"/> </a></div>
                <div class="item"><a href="may-khoan/c1669/hong-ky.html" title="Hồng Ký"><img title="Hồng Ký"
                                                                                              src="data/bt3/hong-ky-hp-1509528957.png"
                                                                                              alt="Hồng Ký" height="68"/>
                    </a></div>
                <div class="item"><a href="may-khoan/c1669/dewalt.html" title="Dewalt"><img title="Dewalt"
                                                                                            src="data/bt10/dewalt-hp-1509590111.png"
                                                                                            alt="Dewalt" height="68"/> </a>
                </div>
                <div class="item"><a href="may-khoan/c1669/hikoki.html" title="HIKOKI"><img title="HIKOKI"
                                                                                            src="data/bt8/hikoki-hp-1585305545.jpg"
                                                                                            alt="HIKOKI" height="68"/> </a>
                </div>
                <div class="item"><a href="may-khoan/c1669/makita.html" title="Makita"><img title="Makita"
                                                                                            src="data/bt6/makita-hp-1509528313.png"
                                                                                            alt="Makita" height="68"/> </a>
                </div>
                <div class="item"><a href="may-khoan/c1669/bosch.html" title="Bosch"><img title="Bosch"
                                                                                          src="data/bt8/bosch-hp-1509527735.png"
                                                                                          alt="Bosch" height="68"/> </a>
                </div>
                <div class="item"><a href="may-khoan/c1669/stanley.html" title="Stanley"><img title="Stanley"
                                                                                              src="data/bt7/stanley-hp-1509523686.png"
                                                                                              alt="Stanley" height="68"/>
                    </a></div>
            </div>
            <div class="slide_brands" id="slide_brands_1670" style="display: none;">
                <div class="item"><a href="may-mai/c1670/ken.html" title="KEN"><img title="KEN"
                                                                                    src="data/bt1/ken-hp-1509590570.png"
                                                                                    alt="KEN" height="68"/> </a></div>
                <div class="item"><a href="may-mai/c1670/crown.html" title="CROWN"><img title="CROWN"
                                                                                        src="data/bt1/crown-hp-1509591317.png"
                                                                                        alt="CROWN" height="68"/> </a></div>
                <div class="item"><a href="may-mai/c1670/black-decker.html" title="Black & Decker"><img
                            title="Black & Decker" src="data/bt6/black-decker-hp-1561703670.jpg" alt="Black & Decker"
                            height="68"/> </a></div>
                <div class="item"><a href="may-mai/c1670/hong-ky.html" title="Hồng Ký"><img title="Hồng Ký"
                                                                                            src="data/bt3/hong-ky-hp-1509528957.png"
                                                                                            alt="Hồng Ký" height="68"/> </a>
                </div>
                <div class="item"><a href="may-mai/c1670/sumo.html" title="Sumo"><img title="Sumo"
                                                                                      src="data/bt10/sumo-hp-1515033630.jpg"
                                                                                      alt="Sumo" height="68"/> </a></div>
                <div class="item"><a href="may-mai/c1670/dewalt.html" title="Dewalt"><img title="Dewalt"
                                                                                          src="data/bt10/dewalt-hp-1509590111.png"
                                                                                          alt="Dewalt" height="68"/> </a>
                </div>
                <div class="item"><a href="may-mai/c1670/hikoki.html" title="HIKOKI"><img title="HIKOKI"
                                                                                          src="data/bt8/hikoki-hp-1585305545.jpg"
                                                                                          alt="HIKOKI" height="68"/> </a>
                </div>
                <div class="item"><a href="may-mai/c1670/makita.html" title="Makita"><img title="Makita"
                                                                                          src="data/bt6/makita-hp-1509528313.png"
                                                                                          alt="Makita" height="68"/> </a>
                </div>
                <div class="item"><a href="may-mai/c1670/bosch.html" title="Bosch"><img title="Bosch"
                                                                                        src="data/bt8/bosch-hp-1509527735.png"
                                                                                        alt="Bosch" height="68"/> </a></div>
                <div class="item"><a href="may-mai/c1670/stanley.html" title="Stanley"><img title="Stanley"
                                                                                            src="data/bt7/stanley-hp-1509523686.png"
                                                                                            alt="Stanley" height="68"/> </a>
                </div>
            </div>
            <div class="slide_brands" id="slide_brands_1671" style="display: none;">
                <div class="item"><a href="may-cat/c1671/jasic.html" title="Jasic"><img title="Jasic"
                                                                                        src="data/bt1/jasic-hp-1509531988.png"
                                                                                        alt="Jasic" height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/ken.html" title="KEN"><img title="KEN"
                                                                                    src="data/bt1/ken-hp-1509590570.png"
                                                                                    alt="KEN" height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/weldcom.html" title="Weldcom"><img title="Weldcom"
                                                                                            src="data/bt5/weldcom-hp-1509532459.png"
                                                                                            alt="Weldcom" height="68"/> </a>
                </div>
                <div class="item"><a href="may-cat/c1671/crown.html" title="CROWN"><img title="CROWN"
                                                                                        src="data/bt1/crown-hp-1509591317.png"
                                                                                        alt="CROWN" height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/black-decker.html" title="Black & Decker"><img
                            title="Black & Decker" src="data/bt6/black-decker-hp-1561703670.jpg" alt="Black & Decker"
                            height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/stihl.html" title="STIHL"><img title="STIHL"
                                                                                        src="data/bt1/stihl-hp-1509512410.jpg"
                                                                                        alt="STIHL" height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/hong-ky.html" title="Hồng Ký"><img title="Hồng Ký"
                                                                                            src="data/bt3/hong-ky-hp-1509528957.png"
                                                                                            alt="Hồng Ký" height="68"/> </a>
                </div>
                <div class="item"><a href="may-cat/c1671/dewalt.html" title="Dewalt"><img title="Dewalt"
                                                                                          src="data/bt10/dewalt-hp-1509590111.png"
                                                                                          alt="Dewalt" height="68"/> </a>
                </div>
                <div class="item"><a href="may-cat/c1671/hikoki.html" title="HIKOKI"><img title="HIKOKI"
                                                                                          src="data/bt8/hikoki-hp-1585305545.jpg"
                                                                                          alt="HIKOKI" height="68"/> </a>
                </div>
                <div class="item"><a href="may-cat/c1671/makita.html" title="Makita"><img title="Makita"
                                                                                          src="data/bt6/makita-hp-1509528313.png"
                                                                                          alt="Makita" height="68"/> </a>
                </div>
                <div class="item"><a href="may-cat/c1671/bosch.html" title="Bosch"><img title="Bosch"
                                                                                        src="data/bt8/bosch-hp-1509527735.png"
                                                                                        alt="Bosch" height="68"/> </a></div>
                <div class="item"><a href="may-cat/c1671/stanley.html" title="Stanley"><img title="Stanley"
                                                                                            src="data/bt7/stanley-hp-1509523686.png"
                                                                                            alt="Stanley" height="68"/> </a>
                </div>
            </div>
        </div> <!--end Slide Brands-->
        <script> var html_slide_brands = new Array();
            html_slide_brands[1606] = '';
            html_slide_brands[31] = '';
            html_slide_brands[1774] = '';
            html_slide_brands[1772] = '';
            html_slide_brands[1669] = '';
            html_slide_brands[1670] = '';
            html_slide_brands[1671] = '';
            var _owlCarousel = new Array();
            _owlCarousel['all'] = '';
            _owlCarousel[1606] = '';
            _owlCarousel[31] = '';
            _owlCarousel[1774] = '';
            _owlCarousel[1772] = '';
            _owlCarousel[1669] = '';
            _owlCarousel[1670] = '';
            _owlCarousel[1671] = '';

            function showBradCategoryTab(tab) {
                $(".slide_brands").hide();
                if (tab > 0) {
                    $(".tab-brand-category a").addClass("un_active");
                    $("#tab_brand_category_" + tab).removeClass("un_active");
                    $('#slide_brands_' + tab).show();
                    if (typeof _owlCarousel[tab] == 'object') {
                        _owlCarousel[tab].trigger('destroy.owl.carousel');
                        _owlCarousel[tab].html(_owlCarousel[tab].find('.owl-stage-outer').html()).removeClass('owl-loaded');
                        _owlCarousel[tab].owlCarousel({
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            nav: false,
                            navSpeed: 500,
                            dots: false,
                            margin: 55,
                            smartSpeed: 1000,
                            loop: true,
                            items: 4,
                            responsive: {
                                0: {items: 2},
                                320: {items: 2},
                                480: {items: 2},
                                640: {items: 2},
                                768: {items: 4},
                                980: {items: 4},
                                1200: {items: 4}
                            }
                        });
                    } else if ($("#slide_brands_" + tab).find("div").length > 1) {
                        _owlCarousel[tab] = $("#slide_brands_" + tab).owlCarousel({
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            nav: false,
                            navSpeed: 500,
                            dots: false,
                            margin: 55,
                            smartSpeed: 1000,
                            loop: true,
                            items: 4,
                            responsive: {
                                0: {items: 2},
                                320: {items: 2},
                                480: {items: 2},
                                640: {items: 2},
                                768: {items: 4},
                                980: {items: 4},
                                1200: {items: 4}
                            }
                        });
                    }
                } else {
                    $(".tab-brand-category a").addClass("un_active");
                    $("#tab_brand_category_all").removeClass("un_active");
                    $("#slide_brands_all").show();
                    if (typeof _owlCarousel["all"] == 'object') {
                        _owlCarousel["all"].trigger('destroy.owl.carousel');
                        _owlCarousel["all"].html(_owlCarousel["all"].find('.owl-stage-outer').html()).removeClass('owl-loaded');
                        _owlCarousel["all"].owlCarousel({
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            nav: false,
                            navSpeed: 500,
                            dots: false,
                            margin: 55,
                            smartSpeed: 1000,
                            loop: true,
                            items: 4,
                            responsive: {
                                0: {items: 2},
                                320: {items: 2},
                                480: {items: 2},
                                640: {items: 2},
                                768: {items: 4},
                                980: {items: 4},
                                1200: {items: 4}
                            }
                        });
                    }
                }
            } </script> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/van-chuyen-sieu-toc_2099.html"
                                                                   style="color: #d42f22">Giao Hàng Siêu Tốc</a></h3>
            <div class="subcate"></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-toc-do-cao-makita-hp1630_5.html"
                                                   title="Máy khoan tốc độ cao Makita HP1630"> <img
                                    src="data/bt5/may-khoan-toc-do-cao-makita-hp1630-1601311852.jpg"
                                    alt="Máy khoan tốc độ cao Makita HP1630"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-toc-do-cao-makita-hp1630_5.html"
                                                title="Máy khoan tốc độ cao Makita HP1630">Máy khoan tốc độ cao Makita
                                HP1630</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.980.000 đ</del></span> <span
                                class="m_price cl_red">1.386.000 đ</span></div>
                        <span class="saleoff">-30%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--></div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="24mm-may-khoan-bua-780w-makita-hr2470_17.html"
                                                   title="24mm Máy khoan búa 780W Makita HR2470"> <img
                                    src="data/bt7/24mm-may-khoan-bua-780w-makita-hr2470-1601312800.jpg"
                                    alt="24mm Máy khoan búa 780W Makita HR2470"/> </a></figure>
                        <h2 class="pro_name"><a href="24mm-may-khoan-bua-780w-makita-hr2470_17.html"
                                                title="24mm Máy khoan búa 780W Makita HR2470">24mm Máy khoan búa 780W Makita
                                HR2470</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.679.000 đ</del></span> <span
                                class="m_price cl_red">3.070.000 đ</span></div>
                        <span class="saleoff">-17%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--></div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bosch-gsb-13re-650w_84.html"
                                                   title="Máy Khoan Bosch GSB 13RE 650W"> <img
                                    src="data/bt5/may-khoan-bosch-gsb-13re-650w-1588781418.jpg"
                                    alt="Máy Khoan Bosch GSB 13RE 650W"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-bosch-gsb-13re-650w_84.html"
                                                title="Máy Khoan Bosch GSB 13RE 650W">Máy Khoan Bosch GSB 13RE 650W</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.450.000 đ</del></span> <span
                                class="m_price cl_red">1.385.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                   title="Máy Khoan Động Lực Bosch GSB 16RE"> <img
                                    src="data/bt4/may-khoan-dong-luc-bosch-gsb-16re-1597720594.jpg"
                                    alt="Máy Khoan Động Lực Bosch GSB 16RE"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                title="Máy Khoan Động Lực Bosch GSB 16RE">Máy Khoan Động Lực Bosch GSB
                                16RE</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.648.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cat-da-bosch-gdm-13-34_86.html"
                                                   title="Máy Cắt Đá Bosch GDM 13-34"> <img
                                    src="data/bt7/may-cat-da-bosch-gdm-13-34.jpg" alt="Máy Cắt Đá Bosch GDM 13-34"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="may-cat-da-bosch-gdm-13-34_86.html"
                                                title="Máy Cắt Đá Bosch GDM 13-34">Máy Cắt Đá Bosch GDM 13-34</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.805.000 đ</del></span> <span
                                class="m_price cl_red">1.790.000 đ</span></div>
                        <span class="saleoff">-1%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bosch-gbm-13re-600w_94.html"
                                                   title="Máy Khoan Bosch GBM 13RE 600W"> <img
                                    src="data/bt1/may-khoan-bosch-gbm-13re-600w.jpg" alt="Máy Khoan Bosch GBM 13RE 600W"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="may-khoan-bosch-gbm-13re-600w_94.html"
                                                title="Máy Khoan Bosch GBM 13RE 600W">Máy Khoan Bosch GBM 13RE 600W</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.439.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cua-dia-bosch-gks-190_98.html"
                                                   title="Máy Cưa Đĩa Bosch GKS 190"> <img
                                    src="data/bt2/may-cua-dia-bosch-gks-190.jpg" alt="Máy Cưa Đĩa Bosch GKS 190"/> </a></figure>
                        <h2 class="pro_name"><a href="may-cua-dia-bosch-gks-190_98.html" title="Máy Cưa Đĩa Bosch GKS 190">Máy
                                Cưa Đĩa Bosch GKS 190</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">2.352.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bua-bosch-gbh-2-26dre-800w_118.html"
                                                   title="Máy khoan búa Bosch GBH 2-26DRE 800W"> <img
                                    src="data/bt2/may-khoan-bua-bosch-gbh-2-26dre-800w-1561433043.jpg"
                                    alt="Máy khoan búa Bosch GBH 2-26DRE 800W"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-bua-bosch-gbh-2-26dre-800w_118.html"
                                                title="Máy khoan búa Bosch GBH 2-26DRE 800W">Máy khoan búa Bosch GBH 2-26DRE
                                800W</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">4.002.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bua-bosch-gbh-2-20-dre_122.html"
                                                   title="Máy khoan búa Bosch GBH 2-20 DRE"> <img
                                    src="data/bt4/may-khoan-bua-bosch-gbh-2-20-dre.jpg" alt="Máy khoan búa Bosch GBH 2-20 DRE"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-bua-bosch-gbh-2-20-dre_122.html"
                                                title="Máy khoan búa Bosch GBH 2-20 DRE">Máy khoan búa Bosch GBH 2-20
                                DRE</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.052.000 đ</del></span> <span
                                class="m_price cl_red">2.970.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-poongsan-ps-43_218.html"
                                                   title="Thang nhôm Poongsan PS-43"> <img
                                    src="data/bt4/thang-nhom-poongsan-ps-43.jpg" alt="Thang nhôm Poongsan PS-43"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-poongsan-ps-43_218.html" title="Thang nhôm Poongsan PS-43">Thang
                                nhôm Poongsan PS-43</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">2.470.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/thiet-bi-dung-pin_2211.html"
                                                                   style="color: #d42f22">Thiết Bị Dùng Pin</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/may-khoan-pin_1682.html" title="Máy Khoan Pin">Máy Khoan
                        Pin</a></h4> <h4><a href="danh-muc-san-pham/may-mai-dung-pin_2130.html" title="Máy Mài Dùng Pin">Máy Mài
                        Dùng Pin</a></h4> <h4><a href="danh-muc-san-pham/may-van-bu-long-dung-pin_2144.html"
                                                 title="Máy Vặn Bu Lông Dùng Pin">Máy Vặn Bu Lông Dùng Pin</a></h4> <h4><a
                        href="danh-muc-san-pham/may-van-vit-dung-pin_2141.html" title="Máy Vặn Vít Dùng Pin">Máy Vặn Vít Dùng
                        Pin</a></h4> <a href="danh-muc-san-pham/thiet-bi-dung-pin_2211.html" class="view_all cl_red"><b>Tất cả Thiết
                        Bị Dùng Pin</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-pin-bosch-gsb-18v-50_34412.html"
                                                   title="Máy khoan pin Bosch GSB 18V-50"> <img
                                    src="data/bt4/may-khoan-pin-bosch-gsb-18v-50-1649726058.jpg"
                                    alt="Máy khoan pin Bosch GSB 18V-50"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-pin-bosch-gsb-18v-50_34412.html"
                                                title="Máy khoan pin Bosch GSB 18V-50">Máy khoan pin Bosch GSB 18V-50</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>4.827.000 đ</del></span> <span
                                class="m_price cl_red">4.827.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bua-chay-pin-dewalt-dcd785d2-18v_25937.html"
                                                   title="Máy khoan búa chạy pin Dewalt DCD785D2 (18V)"> <img
                                    src="data/bt7/may-khoan-bua-chay-pin-dewalt-dcd785d2-18v-1642390613.jpg"
                                    alt="Máy khoan búa chạy pin Dewalt DCD785D2 (18V)"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-bua-chay-pin-dewalt-dcd785d2-18v_25937.html"
                                                title="Máy khoan búa chạy pin Dewalt DCD785D2 (18V)">Máy khoan búa chạy pin
                                Dewalt DCD785D2 (18V)</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.385.000 đ</del></span> <span
                                class="m_price cl_red">3.899.000 đ</span></div>
                        <span class="saleoff">-12%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--></div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="pin-li-ion-20v-40ah-dewalt-dcb240-b1_39942.html"
                                                   title="Pin li-ion 20V 4.0Ah Dewalt DCB240-B1"> <img
                                    src="data/bt2/pin-li-ion-20v-40ah-dewalt-dcb240-b1-1645173812.jpg"
                                    alt="Pin li-ion 20V 4.0Ah Dewalt DCB240-B1"/> </a></figure>
                        <h2 class="pro_name"><a href="pin-li-ion-20v-40ah-dewalt-dcb240-b1_39942.html"
                                                title="Pin li-ion 20V 4.0Ah Dewalt DCB240-B1">Pin li-ion 20V 4.0Ah Dewalt
                                DCB240-B1</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.510.000 đ</del></span> <span
                                class="m_price cl_red">1.390.000 đ</span></div>
                        <span class="saleoff">-8%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-pin-dewalt-dcd791n-18v-chua-pin-sac-_34886.html"
                                                   title="Máy khoan pin Dewalt DCD791N 18V ( Chưa Pin & Sạc )"> <img
                                    src="data/bt2/may-khoan-pin-dewalt-dcd791n-18v-chua-pin-sac--1590745413.jpg"
                                    alt="Máy khoan pin Dewalt DCD791N 18V ( Chưa Pin & Sạc )"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-pin-dewalt-dcd791n-18v-chua-pin-sac-_34886.html"
                                                title="Máy khoan pin Dewalt DCD791N 18V ( Chưa Pin & Sạc )">Máy khoan pin
                                Dewalt DCD791N 18V ( Chưa Pin & Sạc )</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.114.000 đ</del></span> <span
                                class="m_price cl_red">1.940.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a
                                href="may-van-vit-dung-pin-20v-dewalt-dcf850n-kr-chua-pin-sac-_39929.html"
                                title="Máy vặn vít dùng pin 20V DeWalt DCF850N-KR ( Chưa Pin & Sạc )"> <img
                                    src="data/bt1/may-van-vit-dung-pin-20v-dewalt-dcf850n-kr-chua-pin-sac--1638871355.jpg"
                                    alt="Máy vặn vít dùng pin 20V DeWalt DCF850N-KR ( Chưa Pin & Sạc )"/> </a></figure>
                        <h2 class="pro_name"><a href="may-van-vit-dung-pin-20v-dewalt-dcf850n-kr-chua-pin-sac-_39929.html"
                                                title="Máy vặn vít dùng pin 20V DeWalt DCF850N-KR ( Chưa Pin & Sạc )">Máy
                                vặn vít dùng pin 20V DeWalt DCF850N-KR ( Chưa Pin & Sạc )</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.870.000 đ</del></span> <span
                                class="m_price cl_red">2.690.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-mai-goc-dung-pin-makita-dga413z-chua-kem-pin-sac_33423.html"
                                                   title="Máy mài góc dùng pin Makita DGA413Z (Chưa kèm Pin & Sạc)"> <img
                                    src="data/bt6/may-mai-goc-dung-pin-makita-dga413z-chua-kem-pin-sac-1649382053.jpg"
                                    alt="Máy mài góc dùng pin Makita DGA413Z (Chưa kèm Pin & Sạc)"/> </a></figure>
                        <h2 class="pro_name"><a href="may-mai-goc-dung-pin-makita-dga413z-chua-kem-pin-sac_33423.html"
                                                title="Máy mài góc dùng pin Makita DGA413Z (Chưa kèm Pin & Sạc)">Máy mài góc
                                dùng pin Makita DGA413Z (Chưa kèm Pin & Sạc)</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">4.029.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-van-vit-dong-luc-pin-dewalt-dcf805c2-108v_32804.html"
                                                   title="Máy vặn vít động lực pin Dewalt DCF805C2 10.8V"> <img
                                    src="data/bt7/may-van-vit-dong-luc-pin-dewalt-dcf805c2-108v-1649320824.jpg"
                                    alt="Máy vặn vít động lực pin Dewalt DCF805C2 10.8V"/> </a></figure>
                        <h2 class="pro_name"><a href="may-van-vit-dong-luc-pin-dewalt-dcf805c2-108v_32804.html"
                                                title="Máy vặn vít động lực pin Dewalt DCF805C2 10.8V">Máy vặn vít động lực
                                pin Dewalt DCF805C2 10.8V</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.400.000 đ</del></span> <span
                                class="m_price cl_red">2.199.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-mai-goc-chay-pin-makita-dga402rme_22866.html"
                                                   title="Máy mài góc chạy pin Makita DGA402RME"> <img
                                    src="data/bt2/may-mai-goc-chay-pin-makita-dga402rme.jpg"
                                    alt="Máy mài góc chạy pin Makita DGA402RME"/> </a></figure>
                        <h2 class="pro_name"><a href="may-mai-goc-chay-pin-makita-dga402rme_22866.html"
                                                title="Máy mài góc chạy pin Makita DGA402RME">Máy mài góc chạy pin Makita
                                DGA402RME</a></h2>
                        <div class="info_price"><span class="f_price"><del>6.955.000 đ</del></span> <span
                                class="m_price cl_red">6.319.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a
                                href="than-may-van-vit-dung-pin-18v-dewalt-dcf887n-kr-chua-pin-sac-_33448.html"
                                title="Thân máy vặn vít dùng pin 18V DeWALT DCF887N-KR ( Chưa Pin & Sạc )"> <img
                                    src="data/bt9/than-may-van-vit-dung-pin-18v-dewalt-dcf887n-1561523226.png"
                                    alt="Thân máy vặn vít dùng pin 18V DeWALT DCF887N-KR ( Chưa Pin & Sạc )"/> </a></figure>
                        <h2 class="pro_name"><a
                                href="than-may-van-vit-dung-pin-18v-dewalt-dcf887n-kr-chua-pin-sac-_33448.html"
                                title="Thân máy vặn vít dùng pin 18V DeWALT DCF887N-KR ( Chưa Pin & Sạc )">Thân máy vặn vít
                                dùng pin 18V DeWALT DCF887N-KR ( Chưa Pin & Sạc )</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.600.000 đ</del></span> <span
                                class="m_price cl_red">2.550.000 đ</span></div>
                        <span class="saleoff">-2%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-van-vit-pin-dewalt-dcd791m2_32778.html"
                                                   title="Máy khoan vặn vít pin Dewalt DCD791M2"> <img
                                    src="data/bt1/may-khoan-van-vit-pin-dewalt-dcd791m2-1546508049.jpg"
                                    alt="Máy khoan vặn vít pin Dewalt DCD791M2"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-van-vit-pin-dewalt-dcd791m2_32778.html"
                                                title="Máy khoan vặn vít pin Dewalt DCD791M2">Máy khoan vặn vít pin Dewalt
                                DCD791M2</a></h2>
                        <div class="info_price"><span class="f_price"><del>5.200.000 đ</del></span> <span
                                class="m_price cl_red">4.699.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/dung-cu-dien_1597.html"
                                                                   style="color: #d42f22">Dụng Cụ Điện</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/motor-dien_2072.html" title="Motor Điện">Motor Điện</a></h4>
                <h4><a href="danh-muc-san-pham/tuyen-tap-dung-cu-dien_1819.html" title="Tuyển Tập Dụng Cụ Điện">Tuyển Tập
                        Dụng Cụ Điện</a></h4> <h4><a href="danh-muc-san-pham/may-duc-be-tong_2340.html" title="Máy Đục Bê Tông">Máy
                        Đục Bê Tông</a></h4> <h4><a href="danh-muc-san-pham/may-van-bu-long_2143.html" title="Máy Vặn Bu Lông">Máy
                        Vặn Bu Lông</a></h4> <a href="danh-muc-san-pham/dung-cu-dien_1597.html" class="view_all cl_red"><b>Tất
                        cả Dụng Cụ Điện</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-mai-goc-ryobi-hg-650_37072.html"
                                                   title="Máy mài góc Ryobi HG-650"> <img
                                    src="data/bt10/may-mai-goc-ryobi-hg-650-1609939626.jpg" alt="Máy mài góc Ryobi HG-650"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="may-mai-goc-ryobi-hg-650_37072.html" title="Máy mài góc Ryobi HG-650">Máy
                                mài góc Ryobi HG-650</a></h2>
                        <div class="info_price"><span class="f_price"><del>690.000 đ</del></span> <span
                                class="m_price cl_red">650.000 đ</span></div>
                        <span class="saleoff">-6%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-ban-1m2-hong-ky-kc12-1hp-day-dong-220v_34504.html"
                                                   title="Máy khoan bàn 1m2 Hồng ký KC12 (1HP )Dây đồng 220V"> <img
                                    src="data/bt3/may-khoan-ban-1m2-hong-ky-kc12-1hp-day-dong-220v-1586170124.jpg"
                                    alt="Máy khoan bàn 1m2 Hồng ký KC12 (1HP )Dây đồng 220V"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-ban-1m2-hong-ky-kc12-1hp-day-dong-220v_34504.html"
                                                title="Máy khoan bàn 1m2 Hồng ký KC12 (1HP )Dây đồng 220V">Máy khoan bàn 1m2
                                Hồng ký KC12 (1HP )Dây đồng 220V</a></h2>
                        <div class="info_price"><span class="f_price"><del>9.300.000 đ</del></span> <span
                                class="m_price cl_red">8.550.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-bua-va-van-vit-makita-10mm-hp0300_35067.html"
                                                   title="Máy khoan búa và vặn vít Makita (10mm) HP0300"> <img
                                    src="data/bt7/may-khoan-bua-va-van-vit-makita-100mm-hp0300-1594291066.png"
                                    alt="Máy khoan búa và vặn vít Makita (10mm) HP0300"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-bua-va-van-vit-makita-10mm-hp0300_35067.html"
                                                title="Máy khoan búa và vặn vít Makita (10mm) HP0300">Máy khoan búa và vặn
                                vít Makita (10mm) HP0300</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.782.000 đ</del></span> <span
                                class="m_price cl_red">899.000 đ</span></div>
                        <span class="saleoff">-50%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--></div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-dong-luc-bosch-gsb-13re-hop-nhua_27673.html"
                                                   title="Máy Khoan Động Lực Bosch GSB 13RE (Hộp Nhựa)"> <img
                                    src="data/bt9/may-khoan-dong-luc-bosch-gsb-13re-hop-nhua-1562038894.jpg"
                                    alt="Máy Khoan Động Lực Bosch GSB 13RE (Hộp Nhựa)"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-dong-luc-bosch-gsb-13re-hop-nhua_27673.html"
                                                title="Máy Khoan Động Lực Bosch GSB 13RE (Hộp Nhựa)">Máy Khoan Động Lực
                                Bosch GSB 13RE (Hộp Nhựa)</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.590.000 đ</del></span> <span
                                class="m_price cl_red">1.429.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cat-sat-350mm-hong-ky-hk-cf312-3hp-1pha_7810.html"
                                                   title="Máy cẳt sắt 350mm Hồng Ký HK CF312 3HP 1pha"> <img
                                    src="data/bt10/may-cat-sat-350mm-hong-ky-hk-cf312-3hp-1pha.jpg"
                                    alt="Máy cẳt sắt 350mm Hồng Ký HK CF312 3HP 1pha"/> </a></figure>
                        <h2 class="pro_name"><a href="may-cat-sat-350mm-hong-ky-hk-cf312-3hp-1pha_7810.html"
                                                title="Máy cẳt sắt 350mm Hồng Ký HK CF312 3HP 1pha">Máy cẳt sắt 350mm Hồng
                                Ký HK CF312 3HP 1pha</a></h2>
                        <div class="info_price"><span class="f_price"><del>6.100.000 đ</del></span> <span
                                class="m_price cl_red">5.890.000 đ</span></div>
                        <span class="saleoff">-4%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="mai-mai-ban-2-da-15hp-220v-200mm-5610012_30014.html"
                                                   title="Mài mài bàn 2 đá 1.5HP 220V 200mm (5610012)"> <img
                                    src="data/bt6/mai-mai-ban-2-da-15hp-220v-200mm-5610012.jpg"
                                    alt="Mài mài bàn 2 đá 1.5HP 220V 200mm (5610012)"/> </a></figure>
                        <h2 class="pro_name"><a href="mai-mai-ban-2-da-15hp-220v-200mm-5610012_30014.html"
                                                title="Mài mài bàn 2 đá 1.5HP 220V 200mm (5610012)">Mài mài bàn 2 đá 1.5HP
                                220V 200mm (5610012)</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.100.000 đ</del></span> <span
                                class="m_price cl_red">2.890.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="235mm-may-cua-dia-bosch-gks-235-turbo_4983.html"
                                                   title="235mm Máy cưa đĩa Bosch GKS 235 TURBO"> <img
                                    src="data/bt2/235mm-may-cua-dia-bosch-gks-235-turbo.jpg"
                                    alt="235mm Máy cưa đĩa Bosch GKS 235 TURBO"/> </a></figure>
                        <h2 class="pro_name"><a href="235mm-may-cua-dia-bosch-gks-235-turbo_4983.html"
                                                title="235mm Máy cưa đĩa Bosch GKS 235 TURBO">235mm Máy cưa đĩa Bosch GKS
                                235 TURBO</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.529.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                   title="Máy Khoan Động Lực Bosch GSB 16RE"> <img
                                    src="data/bt4/may-khoan-dong-luc-bosch-gsb-16re-1597720594.jpg"
                                    alt="Máy Khoan Động Lực Bosch GSB 16RE"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                title="Máy Khoan Động Lực Bosch GSB 16RE">Máy Khoan Động Lực Bosch GSB
                                16RE</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.648.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-may-khoan-100-chi-tiet-bosch-gsb-13-re-set_1368.html"
                                                   title="Bộ máy khoan 100 chi tiết Bosch GSB 13 RE SET"> <img
                                    src="data/bt10/bo-may-khoan-100-chi-tiet-bosch-gsb-13-re-set.jpg"
                                    alt="Bộ máy khoan 100 chi tiết Bosch GSB 13 RE SET"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-may-khoan-100-chi-tiet-bosch-gsb-13-re-set_1368.html"
                                                title="Bộ máy khoan 100 chi tiết Bosch GSB 13 RE SET">Bộ máy khoan 100 chi
                                tiết Bosch GSB 13 RE SET</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.923.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-may-khoan-19-mon-bosch-gsb-550-mp-set_34979.html"
                                                   title="Bộ máy khoan 19 món Bosch GSB 550 MP SET"> <img
                                    src="data/bt2/bo-may-khoan-19-mon-bosch-gsb-550-mp-set-1593659149.jpg"
                                    alt="Bộ máy khoan 19 món Bosch GSB 550 MP SET"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-may-khoan-19-mon-bosch-gsb-550-mp-set_34979.html"
                                                title="Bộ máy khoan 19 món Bosch GSB 550 MP SET">Bộ máy khoan 19 món Bosch
                                GSB 550 MP SET</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.430.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/thiet-bi-nang-do_1599.html"
                                                                   style="color: #d42f22">Thiết Bị Nâng Đỡ</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/tuyen-tap-thiet-bi-nang-do_1854.html"
                                        title="Tuyển Tập Thiết Bị Nâng Đỡ">Tuyển Tập Thiết Bị Nâng Đỡ</a></h4> <h4><a
                        href="danh-muc-san-pham/xe-nang_2195.html" title="Xe Nâng Hàng">Xe Nâng Hàng</a></h4> <h4><a
                        href="danh-muc-san-pham/pa-lang_1772.html" title="Pa Lăng Xích">Pa Lăng Xích</a></h4> <h4><a
                        href="danh-muc-san-pham/con-doi_1773.html" title="Con Đội - Kích Thủy Lực">Con Đội - Kích Thủy Lực</a>
                </h4> <a href="danh-muc-san-pham/thiet-bi-nang-do_1599.html" class="view_all cl_red"><b>Tất cả Thiết Bị Nâng
                        Đỡ</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-nang-tay-thap-ichimens-xt680-1150_27068.html"
                                                   title="Xe nâng tay thấp Ichimens XT680-1150"> <img
                                    src="data/bt7/xe-nang-tay-thap-ichimens-xt680-1150.jpg"
                                    alt="Xe nâng tay thấp Ichimens XT680-1150"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-nang-tay-thap-ichimens-xt680-1150_27068.html"
                                                title="Xe nâng tay thấp Ichimens XT680-1150">Xe nâng tay thấp Ichimens
                                XT680-1150</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.900.000 đ</del></span> <span
                                class="m_price cl_red">4.250.000 đ</span></div>
                        <span class="saleoff">-14%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-nang-tay-thap-ichimens-xtn-540-1150-3-tan-_34893.html"
                                                   title="Xe nâng tay thấp ICHIMENS XTN 540-1150 (3 tấn )"> <img
                                    src="data/bt6/xe-nang-tay-thap-ichimens-xtn-540-1150-3-tan--1590995957.jpg"
                                    alt="Xe nâng tay thấp ICHIMENS XTN 540-1150 (3 tấn )"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-nang-tay-thap-ichimens-xtn-540-1150-3-tan-_34893.html"
                                                title="Xe nâng tay thấp ICHIMENS XTN 540-1150 (3 tấn )">Xe nâng tay thấp
                                ICHIMENS XTN 540-1150 (3 tấn )</a></h2>
                        <div class="info_price"><span class="f_price"><del>5.500.000 đ</del></span> <span
                                class="m_price cl_red">5.350.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-nang-tay-thap-ichimens-xt680-1150-3t_27074.html"
                                                   title="Xe nâng tay thấp Ichimens XT680-1150 (3T)"> <img
                                    src="data/bt2/xe-nang-tay-thap-ichimens-xt680-1150-3t.jpg"
                                    alt="Xe nâng tay thấp Ichimens XT680-1150 (3T)"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-nang-tay-thap-ichimens-xt680-1150-3t_27074.html"
                                                title="Xe nâng tay thấp Ichimens XT680-1150 (3T)">Xe nâng tay thấp Ichimens
                                XT680-1150 (3T)</a></h2>
                        <div class="info_price"><span class="f_price"><del>5.900.000 đ</del></span> <span
                                class="m_price cl_red">5.200.000 đ</span></div>
                        <span class="saleoff">-12%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-nang-tay-thap-ichimens-xt540-1150-2t_27073.html"
                                                   title="Xe nâng tay thấp Ichimens XT540-1150-2T"> <img
                                    src="data/bt6/xe-nang-tay-thap-ichimens-xt540-1150-2t.jpg"
                                    alt="Xe nâng tay thấp Ichimens XT540-1150-2T"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-nang-tay-thap-ichimens-xt540-1150-2t_27073.html"
                                                title="Xe nâng tay thấp Ichimens XT540-1150-2T">Xe nâng tay thấp Ichimens
                                XT540-1150-2T</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.560.000 đ</del></span> <span
                                class="m_price cl_red">4.350.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-nang-tay-thap-ichimens-xt540-1150-25t_27071.html"
                                                   title="Xe nâng tay thấp Ichimens XT540-1150-2,5T"> <img
                                    src="data/bt7/xe-nang-tay-thap-ichimens-xt540-1150-25t.jpg"
                                    alt="Xe nâng tay thấp Ichimens XT540-1150-2,5T"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-nang-tay-thap-ichimens-xt540-1150-25t_27071.html"
                                                title="Xe nâng tay thấp Ichimens XT540-1150-2,5T">Xe nâng tay thấp Ichimens
                                XT540-1150-2,5T</a></h2>
                        <div class="info_price"><span class="f_price"><del>7.450.000 đ</del></span> <span
                                class="m_price cl_red">4.550.000 đ</span></div>
                        <span class="saleoff">-39%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="vali-nhua-dung-may-van-vit-dewalt-boxdew2_36697.html"
                                                   title="Vali nhựa đựng máy vặn vít Dewalt BOXDEW2"> <img
                                    src="data/bt7/vali-nhua-dung-may-van-vit-dewalt-boxdew2-1648197753.jpg"
                                    alt="Vali nhựa đựng máy vặn vít Dewalt BOXDEW2"/> </a></figure>
                        <h2 class="pro_name"><a href="vali-nhua-dung-may-van-vit-dewalt-boxdew2_36697.html"
                                                title="Vali nhựa đựng máy vặn vít Dewalt BOXDEW2">Vali nhựa đựng máy vặn vít
                                Dewalt BOXDEW2</a></h2>
                        <div class="info_price"><span class="f_price"><del>398.000 đ</del></span> <span
                                class="m_price cl_red">260.000 đ</span></div>
                        <span class="saleoff">-35%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="xe-day-hang-tay-gap-phong-thanh-xtb-100dg_4664.html"
                                                   title="Xe đẩy hàng tay gấp Phong Thạnh XTB 100DG"> <img
                                    src="data/bt4/xe-day-hang-tay-gap-phong-thanh-xtb-100dg.jpg"
                                    alt="Xe đẩy hàng tay gấp Phong Thạnh XTB 100DG"/> </a></figure>
                        <h2 class="pro_name"><a href="xe-day-hang-tay-gap-phong-thanh-xtb-100dg_4664.html"
                                                title="Xe đẩy hàng tay gấp Phong Thạnh XTB 100DG">Xe đẩy hàng tay gấp Phong
                                Thạnh XTB 100DG</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.490.000 đ</del></span> <span
                                class="m_price cl_red">1.330.000 đ</span></div>
                        <span class="saleoff">-11%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--></div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="3-tan-con-doi-masada-ms-3_3986.html"
                                                   title="3 tấn Con đội Masada MS-3"> <img
                                    src="data/bt1/3-tan-con-doi-masada-ms-3.jpg" alt="3 tấn Con đội Masada MS-3"/> </a></figure>
                        <h2 class="pro_name"><a href="3-tan-con-doi-masada-ms-3_3986.html"
                                                title="3 tấn Con đội Masada MS-3">3 tấn Con đội Masada MS-3</a></h2>
                        <div class="info_price"><span class="f_price"><del>849.000 đ</del></span> <span
                                class="m_price cl_red">750.000 đ</span></div>
                        <span class="saleoff">-12%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thung-do-nghe-3in1-co-banh-xe-stanley-stst18613_36533.html"
                                                   title="Thùng đồ nghề 3in1 có bánh xe Stanley STST18613"> <img
                                    src="data/bt4/thung-do-nghe-3in1-co-banh-xe-stanley-stst18613-1601863262.jpg"
                                    alt="Thùng đồ nghề 3in1 có bánh xe Stanley STST18613"/> </a></figure>
                        <h2 class="pro_name"><a href="thung-do-nghe-3in1-co-banh-xe-stanley-stst18613_36533.html"
                                                title="Thùng đồ nghề 3in1 có bánh xe Stanley STST18613">Thùng đồ nghề 3in1
                                có bánh xe Stanley STST18613</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.847.000 đ</del></span> <span
                                class="m_price cl_red">1.699.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="palang-xich-keo-tay-5-tan-3m-nitto-50vp5_24950.html"
                                                   title="Palang xích kéo tay 5 tấn 3m Nitto 50VP5"> <img
                                    src="data/bt9/palang-xich-keo-tay-5-tan-3m-nitto-50vp5.jpg"
                                    alt="Palang xích kéo tay 5 tấn 3m Nitto 50VP5"/> </a></figure>
                        <h2 class="pro_name"><a href="palang-xich-keo-tay-5-tan-3m-nitto-50vp5_24950.html"
                                                title="Palang xích kéo tay 5 tấn 3m Nitto 50VP5">Palang xích kéo tay 5 tấn
                                3m Nitto 50VP5</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.750.000 đ</del></span> <span
                                class="m_price cl_red">3.420.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--Link Ads Cate-->
        <div class="box ads ads_cate cl_white banner_cate2"><img
                src="data/bqc/bt9/banner-dang-muc-thang-nhom-phien-ban-moi-1479478920.jpg"
                alt="Banner dang mục thang nhôm phiên bản mới"/>
            <div class="banner_cate_ct"><h3 class="banner_main_cate fr"><span>Tư vấn cùng chuyên gia</span><a
                        href="danh-muc-san-pham/thang-nhom_31.html" title="Thang nhôm">Thang nhôm</a></h3>
                <ul>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/252-chon-thang-nhom-nao-cho-lap-dat-dieu-hoa.html"
                                title="Chọn Thang Nhôm Nào Cho Lắp Đặt Điều Hòa">Chọn Thang Nh&ocirc;m N&agrave;o Cho Lắp Đặt
                                Điều H&ograve;a</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/248-cach-lua-chon-thang-nhom-rut-gon-phu-hop.html"
                                title="Cách Lựa Chọn Thang Nhôm Rút Gọn Phù Hợp">C&aacute;ch Lựa Chọn Thang Nh&ocirc;m R&uacute;t
                                Gọn Ph&ugrave; Hợp</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/224-nhung-uu-diem-cua-thang-nhom-chu-a.html"
                                title="Những Ưu Điểm Của Thang Nhôm Chữ A">Những Ưu Điểm Của Thang Nh&ocirc;m Chữ A</a></h2>
                    </li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/265-nhung-tu-the-su-dung-thang-nhom-gap-an-toan.html"
                                title="Những Tư Thế Sử Dụng Thang Nhôm Gấp An Toàn">Những Tư Thế Sử Dụng Thang Nh&ocirc;m Gấp An
                                To&agrave;n</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/253-huong-dan-giu-gin-va-lam-sach-thang-nhom.html"
                                title="Những Tư Thế Sử Dụng Thang Nhôm Gấp An Toàn">Những Tư Thế Sử Dụng Thang Nh&ocirc;m Gấp An
                                To&agrave;n</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/223-nguyen-tac-su-dung-thang-nhom-an-toan.html"
                                title="Nguyên Tắc Sử Dụng Thang Nhôm An Toàn">Nguy&ecirc;n Tắc Sử Dụng Thang Nh&ocirc;m An To&agrave;n</a>
                        </h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/222-cac-tieu-chi-chon-mua-thang-nhom-phu-hop.html"
                                title="Các Tiêu Chí Chọn Mua Thang Nhôm Phù Hợp">C&aacute;c Ti&ecirc;u Ch&iacute; Chọn Mua Thang
                                Nh&ocirc;m Ph&ugrave; Hợp</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="ket-noi-tu-van/396-bo-suu-tap-thang-nhom-chat-luong-gia-duoi-3-trieu.html"
                                title="Bộ Sưu Tập Thang Nhôm Chất Lượng Giá Dưới 3 Triệu">Bộ Sưu Tập Thang Nh&ocirc;m Chất Lượng
                                Gi&aacute; Dưới 3 Triệu</a></h2></li>
                </ul>
            </div>
        </div> <!--end Link Ads Cate--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/thang-nhom_31.html"
                                                                   style="color: #d42f22">Thang nhôm</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/thang-nhom-chu-a_175.html" title="Thang Nhôm Chữ A">Thang
                        Nhôm Chữ A</a></h4> <h4><a href="danh-muc-san-pham/thang-nhom-rut_174.html" title="Thang Nhôm Rút">Thang
                        Nhôm Rút</a></h4> <h4><a href="danh-muc-san-pham/thang-nhom-ghe_191.html" title="Thang Nhôm Ghế">Thang Nhôm
                        Ghế</a></h4> <h4><a href="danh-muc-san-pham/thang-cach-dien_1591.html" title="Thang cách điện">Thang cách
                        điện</a></h4> <a href="danh-muc-san-pham/thang-nhom_31.html" class="view_all cl_red"><b>Tất cả Thang
                        nhôm</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-doi-nikawa-nk-56ai-pri_25339.html"
                                                   title="Thang nhôm rút đôi Nikawa NK-56AI-PRI"> <img
                                    src="data/bt7/thang-nhom-rut-doi-nikawa-nk-56ai-pri-1648272494.jpg"
                                    alt="Thang nhôm rút đôi Nikawa NK-56AI-PRI"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-doi-nikawa-nk-56ai-pri_25339.html"
                                                title="Thang nhôm rút đôi Nikawa NK-56AI-PRI">Thang nhôm rút đôi Nikawa
                                NK-56AI-PRI</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.599.000 đ</del></span> <span
                                class="m_price cl_red">3.895.000 đ</span></div>
                        <span class="saleoff">-16%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-chu-a-nikawa-nk-50ai-pri_4521.html"
                                                   title="Thang nhôm rút chữ A NIKAWA NK-50AI-PRI"> <img
                                    src="data/bt2/thang-nhom-rut-chu-a-nikawa-nk-50ai-1582540983.png"
                                    alt="Thang nhôm rút chữ A NIKAWA NK-50AI-PRI"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-chu-a-nikawa-nk-50ai-pri_4521.html"
                                                title="Thang nhôm rút chữ A NIKAWA NK-50AI-PRI">Thang nhôm rút chữ A NIKAWA
                                NK-50AI-PRI</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.730.000 đ</del></span> <span
                                class="m_price cl_red">3.489.000 đ</span></div>
                        <span class="saleoff">-27%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-chu-a-nikawa-nk-44ai-pri_4522.html"
                                                   title="Thang nhôm rút chữ A NIKAWA NK-44AI-PRI"> <img
                                    src="data/bt10/thang-nhom-rut-chu-a-nikawa-nk-44ai-1582541086.png"
                                    alt="Thang nhôm rút chữ A NIKAWA NK-44AI-PRI"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-chu-a-nikawa-nk-44ai-pri_4522.html"
                                                title="Thang nhôm rút chữ A NIKAWA NK-44AI-PRI">Thang nhôm rút chữ A NIKAWA
                                NK-44AI-PRI</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.310.000 đ</del></span> <span
                                class="m_price cl_red">3.225.000 đ</span></div>
                        <span class="saleoff">-26%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-poongsan-ps-45_220.html"
                                                   title="Thang nhôm Poongsan PS-45"> <img
                                    src="data/bt5/thang-nhom-poongsan-ps-45.jpg" alt="Thang nhôm Poongsan PS-45"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-poongsan-ps-45_220.html" title="Thang nhôm Poongsan PS-45">Thang
                                nhôm Poongsan PS-45</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.620.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-poongsan-ps-44_219.html"
                                                   title="Thang nhôm Poongsan PS-44"> <img
                                    src="data/bt10/thang-nhom-poongsan-ps-44.jpg" alt="Thang nhôm Poongsan PS-44"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="thang-nhom-poongsan-ps-44_219.html" title="Thang nhôm Poongsan PS-44">Thang
                                nhôm Poongsan PS-44</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.020.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-ban-poongsan-ps-401515_32318.html"
                                                   title="Thang nhôm bàn Poongsan PS-401515"> <img
                                    src="data/bt10/thang-nhom-ban-poongsan-ps-401515-1649258983.jpg"
                                    alt="Thang nhôm bàn Poongsan PS-401515"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-ban-poongsan-ps-401515_32318.html"
                                                title="Thang nhôm bàn Poongsan PS-401515">Thang nhôm bàn Poongsan
                                PS-401515</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">4.550.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-ban-poongsan-ps-40160_27381.html"
                                                   title="Thang nhôm bàn Poongsan PS-40160"> <img
                                    src="data/bt7/thang-nhom-ban-poongsan-ps-40160-1649258034.jpg"
                                    alt="Thang nhôm bàn Poongsan PS-40160"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-ban-poongsan-ps-40160_27381.html"
                                                title="Thang nhôm bàn Poongsan PS-40160">Thang nhôm bàn Poongsan
                                PS-40160</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.320.000 đ</del></span> <span
                                class="m_price cl_red">3.240.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-ban-poongsan-ps-30160_27363.html"
                                                   title="Thang nhôm bàn Poongsan PS-30160"> <img
                                    src="data/bt10/thang-nhom-ban-poongsan-ps-30160-1649257702.jpg"
                                    alt="Thang nhôm bàn Poongsan PS-30160"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-ban-poongsan-ps-30160_27363.html"
                                                title="Thang nhôm bàn Poongsan PS-30160">Thang nhôm bàn Poongsan
                                PS-30160</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.710.000 đ</del></span> <span
                                class="m_price cl_red">2.670.000 đ</span></div>
                        <span class="saleoff">-2%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-chu-a-nikita-ai56-56m_9404.html"
                                                   title="Thang nhôm rút chữ A Nikita AI56 (5.6m)"> <img
                                    src="data/bt2/thang-nhom-rut-chu-a-nikita-ai56-56m.jpg"
                                    alt="Thang nhôm rút chữ A Nikita AI56 (5.6m)"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-chu-a-nikita-ai56-56m_9404.html"
                                                title="Thang nhôm rút chữ A Nikita AI56 (5.6m)">Thang nhôm rút chữ A Nikita
                                AI56 (5.6m)</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.899.000 đ</del></span> <span
                                class="m_price cl_red">3.049.000 đ</span></div>
                        <span class="saleoff">-22%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-nikawa-nk-32_4531.html"
                                                   title="Thang nhôm rút NIKAWA NK-32"> <img
                                    src="data/bt9/thang-nhom-rut-nikawa-nk-32.jpg" alt="Thang nhôm rút NIKAWA NK-32"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-nikawa-nk-32_4531.html"
                                                title="Thang nhôm rút NIKAWA NK-32">Thang nhôm rút NIKAWA NK-32</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.800.000 đ</del></span> <span
                                class="m_price cl_red">2.390.000 đ</span></div>
                        <span class="saleoff">-15%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--Link Ads Cate-->
        <div class="box ads ads_cate cl_white banner_cate1"><img
                src="data/bqc/bt9/banner-dang-muc-may-han-phien-ban-moi-1479478911.jpg"
                alt="Banner dang mục máy hàn phiên bản mới"/>
            <div class="banner_cate_ct"><h3 class="banner_main_cate "><span>Tư vấn cùng chuyên gia</span><a
                        href="danh-muc-san-pham/may-han-phu-kien_1606.html" title="Máy Hàn & Phụ Kiện">Máy Hàn & Phụ Kiện</a>
                </h3>
                <ul>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/364-chon-mua-loai-may-han-mig-nao-chat-luong-gia-tot.html"
                                title="Các loại máy hàn tốt nên mua !">Chọn mua loại M&aacute;y H&agrave;n Mig n&agrave;o chất
                                lượng gi&aacute; tốt?</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/362-chon-mua-loai-may-han-que-nao-chat-luong-gia-tot.html"
                                title="Các loại máy hàn tốt nên mua !">Chọn mua loại M&aacute;y H&agrave;n Que n&agrave;o chất
                                lượng gi&aacute; tốt?</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/336-huong-dan-cach-bao-duong-nang-cao-tuoi-tho-may-han.html"
                                title="Các loại máy hàn tốt nên mua !">Hướng Dẫn C&aacute;ch Bảo Dưỡng N&acirc;ng Cao Tuổi Thọ M&aacute;y
                                H&agrave;n</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/339-cach-han-mach-an-toan-va-bao-quan-may-han-dung-cach.html"
                                title="Các loại máy hàn tốt nên mua !">C&aacute;ch H&agrave;n Mạch An To&agrave;n v&agrave; Bảo
                                Quản M&aacute;y H&agrave;n Đ&uacute;ng C&aacute;ch</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/213-huong-dan-han-nhom-bang-thiet-bi-han-mig.html"
                                title="Các loại máy hàn tốt nên mua !">Hướng dẫn h&agrave;n nh&ocirc;m bằng thiết bị h&agrave;n
                                MIG</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/209-quy-dinh-an-toan-bat-buoc-khi-su-dung-may-han.html"
                                title="Các loại máy hàn tốt nên mua !">Quy Định An To&agrave;n Bắt Buộc Khi Sử Dụng M&aacute;y H&agrave;n</a>
                        </h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/266-huong-dan-chon-lua-may-han-dien-tu-phu-hop.html"
                                title="Các loại máy hàn tốt nên mua !">Hướng Dẫn Chọn Lựa M&aacute;y H&agrave;n Điện Tử Ph&ugrave;
                                Hợp</a></h2></li>
                    <li class="columns"><h2 class="link_title"><a
                                href="https://ketnoitieudung.vn/ket-noi-tu-van/211-so-sanh-uu-diem-may-han-dien-tu-voi-may-han-co.html"
                                title="Các loại máy hàn tốt nên mua !">So S&aacute;nh Ưu Điểm M&aacute;y H&agrave;n Điện Tử Với
                                M&aacute;y H&agrave;n Cơ</a></h2></li>
                </ul>
            </div>
        </div> <!--end Link Ads Cate--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/may-han-phu-kien_1606.html"
                                                                   style="color: #d42f22">Máy Hàn & Phụ Kiện</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/bien-the-han_1863.html" title="Biến Thế Hàn">Biến Thế
                        Hàn</a></h4> <h4><a href="danh-muc-san-pham/may-han-que_1609.html" title="Máy Hàn Que">Máy Hàn Que</a></h4>
                <h4><a href="danh-muc-san-pham/may-han-tig_1610.html" title="Máy Hàn Tig">Máy Hàn Tig</a></h4> <h4><a
                        href="danh-muc-san-pham/may-han-mig_1611.html" title="Máy Hàn Mig">Máy Hàn Mig</a></h4> <a
                    href="danh-muc-san-pham/may-han-phu-kien_1606.html" class="view_all cl_red"><b>Tất cả Máy Hàn & Phụ
                        Kiện</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-khong-dung-khi-hong-ky-hk-mig-200d_38530.html"
                                                   title="Máy hàn không dùng khí Hồng ký HK MIG 200D"> <img
                                    src="data/bt8/may-han-khong-dung-khi-hong-ky-hk-mig-200d-1620620233.jpg"
                                    alt="Máy hàn không dùng khí Hồng ký HK MIG 200D"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-khong-dung-khi-hong-ky-hk-mig-200d_38530.html"
                                                title="Máy hàn không dùng khí Hồng ký HK MIG 200D">Máy hàn không dùng khí
                                Hồng ký HK MIG 200D</a></h2>
                        <div class="info_price"><span class="f_price"><del>7.000.000 đ</del></span> <span
                                class="m_price cl_red">6.699.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-dien-tu-igbt-hong-ky-hk-200a_38491.html"
                                                   title="Máy hàn điện tử IGBT Hồng Ký HK 200A"> <img
                                    src="data/bt8/may-han-dien-tu-igbt-hong-ky-hk-200a-1619237607.jpg"
                                    alt="Máy hàn điện tử IGBT Hồng Ký HK 200A"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-dien-tu-igbt-hong-ky-hk-200a_38491.html"
                                                title="Máy hàn điện tử IGBT Hồng Ký HK 200A">Máy hàn điện tử IGBT Hồng Ký HK
                                200A</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.770.000 đ</del></span> <span
                                class="m_price cl_red">3.409.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-que-dien-tu-hong-ky-hk-200a_7733.html"
                                                   title="Máy hàn que điện tử Hồng Ký HK 200A"> <img
                                    src="data/bt5/may-han-que-dien-tu-hong-ky-hk-200a-1533029722.jpg"
                                    alt="Máy hàn que điện tử Hồng Ký HK 200A"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-que-dien-tu-hong-ky-hk-200a_7733.html"
                                                title="Máy hàn que điện tử Hồng Ký HK 200A">Máy hàn que điện tử Hồng Ký HK
                                200A</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.610.000 đ</del></span> <span
                                class="m_price cl_red">3.350.000 đ</span></div>
                        <span class="saleoff">-8%</span> <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="day-han-mig-inox-kiswel-m-308-08mm_16905.html"
                                                   title="Dây hàn MIG Inox Kiswel M-308 (0,8mm)"> <img
                                    src="data/bt9/day-han-mig-inox-kiswel-m-308-08mm.png"
                                    alt="Dây hàn MIG Inox Kiswel M-308 (0,8mm)"/> </a></figure>
                        <h2 class="pro_name"><a href="day-han-mig-inox-kiswel-m-308-08mm_16905.html"
                                                title="Dây hàn MIG Inox Kiswel M-308 (0,8mm)">Dây hàn MIG Inox Kiswel M-308
                                (0,8mm)</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.950.000 đ</del></span> <span
                                class="m_price cl_red">2.450.000 đ</span></div>
                        <span class="saleoff">-17%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-tig-jasic-tig-250a-w227_7859.html"
                                                   title="Máy Hàn Tig Jasic Tig 250A W227"> <img
                                    src="data/bt10/may-han-tig-jasic-tig-250a-w227-1622451505.jpg"
                                    alt="Máy Hàn Tig Jasic Tig 250A W227"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-tig-jasic-tig-250a-w227_7859.html"
                                                title="Máy Hàn Tig Jasic Tig 250A W227">Máy Hàn Tig Jasic Tig 250A W227</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>7.630.000 đ</del></span> <span
                                class="m_price cl_red">6.799.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-que-inverter-hong-ky-hk-250a_38973.html"
                                                   title="Máy hàn que Inverter Hồng Ký HK 250A"> <img
                                    src="data/bt7/may-han-que-inverter-hong-ky-hk-250a-1623395606.jpg"
                                    alt="Máy hàn que Inverter Hồng Ký HK 250A"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-que-inverter-hong-ky-hk-250a_38973.html"
                                                title="Máy hàn que Inverter Hồng Ký HK 250A">Máy hàn que Inverter Hồng Ký HK
                                250A</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">6.100.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-que-dien-tu-hong-ky-hk-200e_7735.html"
                                                   title="Máy hàn que điện tử Hồng Ký HK 200E"> <img
                                    src="data/bt7/may-han-que-dien-tu-hong-ky-hk-200e-1574824729.jpg"
                                    alt="Máy hàn que điện tử Hồng Ký HK 200E"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-que-dien-tu-hong-ky-hk-200e_7735.html"
                                                title="Máy hàn que điện tử Hồng Ký HK 200E">Máy hàn que điện tử Hồng Ký HK
                                200E</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.990.000 đ</del></span> <span
                                class="m_price cl_red">2.849.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-han-bien-the-hong-ky-hk-h400d-day-dong_4035.html"
                                                   title="Máy hàn biến thế Hồng Ký HK-H400D dây đồng"> <img
                                    src="data/bt9/may-han-bien-the-hong-ky-hk-h400d-day-dong.jpg"
                                    alt="Máy hàn biến thế Hồng Ký HK-H400D dây đồng"/> </a></figure>
                        <h2 class="pro_name"><a href="may-han-bien-the-hong-ky-hk-h400d-day-dong_4035.html"
                                                title="Máy hàn biến thế Hồng Ký HK-H400D dây đồng">Máy hàn biến thế Hồng Ký
                                HK-H400D dây đồng</a></h2>
                        <div class="info_price"><span class="f_price"><del>14.100.000 đ</del></span> <span
                                class="m_price cl_red">13.650.000 đ</span></div>
                        <span class="saleoff">-4%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-bien-the-han-hong-ky-hk-h350d-day-dong_4033.html"
                                                   title="Máy biến thế hàn Hồng Ký HK-H350D dây đồng"> <img
                                    src="data/bt7/may-bien-the-han-hong-ky-hk-h350d-day-dong.jpg"
                                    alt="Máy biến thế hàn Hồng Ký HK-H350D dây đồng"/> </a></figure>
                        <h2 class="pro_name"><a href="may-bien-the-han-hong-ky-hk-h350d-day-dong_4033.html"
                                                title="Máy biến thế hàn Hồng Ký HK-H350D dây đồng">Máy biến thế hàn Hồng Ký
                                HK-H350D dây đồng</a></h2>
                        <div class="info_price"><span class="f_price"><del>12.800.000 đ</del></span> <span
                                class="m_price cl_red">12.360.000 đ</span></div>
                        <span class="saleoff">-4%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-bien-the-han-220v-380v-hong-ky-hk-h300d_7772.html"
                                                   title="Máy biến thế hàn 220V/380V Hồng Ký HK-H300D"> <img
                                    src="data/bt2/may-bien-the-han-220v-380v-hong-ky-hk-h300d.jpg"
                                    alt="Máy biến thế hàn 220V/380V Hồng Ký HK-H300D"/> </a></figure>
                        <h2 class="pro_name"><a href="may-bien-the-han-220v-380v-hong-ky-hk-h300d_7772.html"
                                                title="Máy biến thế hàn 220V/380V Hồng Ký HK-H300D">Máy biến thế hàn
                                220V/380V Hồng Ký HK-H300D</a></h2>
                        <div class="info_price"><span class="f_price"><del>12.300.000 đ</del></span> <span
                                class="m_price cl_red">11.990.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/thiet-bi-do_1595.html"
                                                                   style="color: #d42f22">Thiết Bị, Dụng Cụ Đo</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/tuyen-tap-thuoc-do_1814.html" title="Tuyển Tập Thước Đo">Tuyển
                        Tập Thước Đo</a></h4> <h4><a href="danh-muc-san-pham/dong-ho-so_2096.html" title="Đồng Hồ So">Đồng Hồ So</a>
                </h4> <h4><a href="danh-muc-san-pham/may-can-muc-laser_2355.html" title="Máy cân mực Laser">Máy cân mực
                        Laser</a></h4> <h4><a href="danh-muc-san-pham/thuoc-lan-duong_1846.html" title="Thước lăn đường">Thước lăn
                        đường</a></h4> <a href="danh-muc-san-pham/thiet-bi-do_1595.html" class="view_all cl_red"><b>Tất cả Thiết Bị,
                        Dụng Cụ Đo</b></a></div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="150mm-thuoc-cap-du-xich-mitutoyo-530-104_362.html"
                                                   title="150mm Thước cặp du xích Mitutoyo 530-104"> <img
                                    src="data/bt2/150mm-thuoc-cap-du-xich-mitutoyo-530-104.jpg"
                                    alt="150mm Thước cặp du xích Mitutoyo 530-104"/> </a></figure>
                        <h2 class="pro_name"><a href="150mm-thuoc-cap-du-xich-mitutoyo-530-104_362.html"
                                                title="150mm Thước cặp du xích Mitutoyo 530-104">150mm Thước cặp du xích
                                Mitutoyo 530-104</a></h2>
                        <div class="info_price"><span class="f_price"><del>777.000 đ</del></span> <span
                                class="m_price cl_red">650.000 đ</span></div>
                        <span class="saleoff">-17%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="48-thuoc-thuy-stanley-stht42076-8_3144.html"
                                                   title="48' Thước thuỷ Stanley STHT42076-8"> <img
                                    src="data/bt4/48-thuoc-thuy-stanley-stht42076-8-1648543804.jpg"
                                    alt="48' Thước thuỷ Stanley STHT42076-8"/> </a></figure>
                        <h2 class="pro_name"><a href="48-thuoc-thuy-stanley-stht42076-8_3144.html"
                                                title="48' Thước thuỷ Stanley STHT42076-8">48' Thước thuỷ Stanley
                                STHT42076-8</a></h2>
                        <div class="info_price"><span class="f_price"><del>431.000 đ</del></span> <span
                                class="m_price cl_red">419.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-do-khoang-cach-bosch-glm-30-30m_7676.html"
                                                   title="Máy Đo Khoảng Cách Bosch GLM 30 30M"> <img
                                    src="data/bt3/may-do-khoang-cach-bosch-glm-30-30m.jpg"
                                    alt="Máy Đo Khoảng Cách Bosch GLM 30 30M"/> </a></figure>
                        <h2 class="pro_name"><a href="may-do-khoang-cach-bosch-glm-30-30m_7676.html"
                                                title="Máy Đo Khoảng Cách Bosch GLM 30 30M">Máy Đo Khoảng Cách Bosch GLM 30
                                30M</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.854.000 đ</del></span> <span
                                class="m_price cl_red">1.730.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="9-thuoc-thuy-co-nam-cham-stanley-stht42465-8_3140.html"
                                                   title="9' Thước thủy có nam châm Stanley STHT42465-8"> <img
                                    src="data/bt1/thuoc-thuy-tu-tinh-stanley-42-465-9-.jpg"
                                    alt="9' Thước thủy có nam châm Stanley STHT42465-8"/> </a></figure>
                        <h2 class="pro_name"><a href="9-thuoc-thuy-co-nam-cham-stanley-stht42465-8_3140.html"
                                                title="9' Thước thủy có nam châm Stanley STHT42465-8">9' Thước thủy có nam
                                châm Stanley STHT42465-8</a></h2>
                        <div class="info_price"><span class="f_price"><del>211.200 đ</del></span> <span
                                class="m_price cl_red">189.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="100-500v-but-thu-dien-66-120-s_3114.html"
                                                   title="100-500V Bút thử điện 66-120-S"> <img
                                    src="data/bt2/100-500v-but-thu-dien-66-120.jpg" alt="100-500V Bút thử điện 66-120-S"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="100-500v-but-thu-dien-66-120-s_3114.html"
                                                title="100-500V Bút thử điện 66-120-S">100-500V Bút thử điện 66-120-S</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>42.000 đ</del></span> <span
                                class="m_price cl_red">37.000 đ</span></div>
                        <span class="saleoff">-12%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="100-500v-but-thu-dien-stanley-66-119_3115.html"
                                                   title="100-500V Bút thử điện Stanley 66-119"> <img
                                    src="data/bt10/100-500v-but-thu-dien-stanley-66-119.jpg"
                                    alt="100-500V Bút thử điện Stanley 66-119"/> </a></figure>
                        <h2 class="pro_name"><a href="100-500v-but-thu-dien-stanley-66-119_3115.html"
                                                title="100-500V Bút thử điện Stanley 66-119">100-500V Bút thử điện Stanley
                                66-119</a></h2>
                        <div class="info_price"><span class="f_price"><del>23.000 đ</del></span> <span
                                class="m_price cl_red">21.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="8-thuoc-ke-moc-stanley-stht46532-8_3758.html"
                                                   title="8' Thước ke mộc Stanley STHT46532-8"> <img
                                    src="data/bt9/8--thuoc-ke-moc-stanley-46-532.jpg"
                                    alt="8' Thước ke mộc Stanley STHT46532-8"/> </a></figure>
                        <h2 class="pro_name"><a href="8-thuoc-ke-moc-stanley-stht46532-8_3758.html"
                                                title="8' Thước ke mộc Stanley STHT46532-8">8' Thước ke mộc Stanley
                                STHT46532-8</a></h2>
                        <div class="info_price"><span class="f_price"><del>292.000 đ</del></span> <span
                                class="m_price cl_red">262.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="6-thuoc-ke-vuong-stanley-stht46530-8_4101.html"
                                                   title="6' Thước ke vuông Stanley STHT46530-8"> <img
                                    src="data/bt2/6--thuoc-ke-vuong-stanley-46-530.jpg"
                                    alt="6' Thước ke vuông Stanley STHT46530-8"/> </a></figure>
                        <h2 class="pro_name"><a href="6-thuoc-ke-vuong-stanley-stht46530-8_4101.html"
                                                title="6' Thước ke vuông Stanley STHT46530-8">6' Thước ke vuông Stanley
                                STHT46530-8</a></h2>
                        <div class="info_price"><span class="f_price"><del>294.000 đ</del></span> <span
                                class="m_price cl_red">262.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="12-thuoc-vuong-ket-hop-can-cam-nhua-stanley-46-028_3129.html"
                                                   title="12' Thước vuông kết hợp cán cầm nhựa Stanley 46-028"> <img
                                    src="data/bt8/12-thuoc-vuong-ket-hop-can-cam-nhua-stanley-46-028.jpg"
                                    alt="12' Thước vuông kết hợp cán cầm nhựa Stanley 46-028"/> </a></figure>
                        <h2 class="pro_name"><a href="12-thuoc-vuong-ket-hop-can-cam-nhua-stanley-46-028_3129.html"
                                                title="12' Thước vuông kết hợp cán cầm nhựa Stanley 46-028">12' Thước vuông
                                kết hợp cán cầm nhựa Stanley 46-028</a></h2>
                        <div class="info_price"><span class="f_price"><del>419.000 đ</del></span> <span
                                class="m_price cl_red">399.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="12-thuoc-vuong-can-cam-nhua-stanley-46-143_3130.html"
                                                   title="12' Thước vuông cán cầm nhựa Stanley 46-143"> <img
                                    src="data/bt10/12--thuoc-vuong-can-cam-nhua-stanley-46-143.jpg"
                                    alt="12' Thước vuông cán cầm nhựa Stanley 46-143"/> </a></figure>
                        <h2 class="pro_name"><a href="12-thuoc-vuong-can-cam-nhua-stanley-46-143_3130.html"
                                                title="12' Thước vuông cán cầm nhựa Stanley 46-143">12' Thước vuông cán cầm
                                nhựa Stanley 46-143</a></h2>
                        <div class="info_price"><span class="f_price"><del>290.000 đ</del></span> <span
                                class="m_price cl_red">259.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/dung-cu-cam-tay_1598.html"
                                                                   style="color: #d42f22">Dụng Cụ Cầm Tay</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/o-khoa_2318.html" title="Ổ Khóa">Ổ Khóa</a></h4> <h4><a
                        href="danh-muc-san-pham/tuyen-tap-dung-cu-cam-tay_1824.html" title="Tuyển Tập Dụng Cụ Cầm Tay">Tuyển Tập
                        Dụng Cụ Cầm Tay</a></h4> <h4><a href="danh-muc-san-pham/but-dien_1842.html" title="Bút Thử Điện">Bút Thử
                        Điện</a></h4> <h4><a href="danh-muc-san-pham/bao-go_1911.html" title="Bào gỗ">Bào gỗ</a></h4> <a
                    href="danh-muc-san-pham/dung-cu-cam-tay_1598.html" class="view_all cl_red"><b>Tất cả Dụng Cụ Cầm Tay</b></a>
            </div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-to-vit-dien-tu-6-chiec-stanley-stht66052-8_3116.html"
                                                   title="Bộ tô vít điện tử 6 chiếc Stanley STHT66052-8"> <img
                                    src="data/bt6/bo-to-vit-dien-tu-6-chiec-stanley-66-052.jpg"
                                    alt="Bộ tô vít điện tử 6 chiếc Stanley STHT66052-8"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-to-vit-dien-tu-6-chiec-stanley-stht66052-8_3116.html"
                                                title="Bộ tô vít điện tử 6 chiếc Stanley STHT66052-8">Bộ tô vít điện tử 6
                                chiếc Stanley STHT66052-8</a></h2>
                        <div class="info_price"><span class="f_price"><del>100.000 đ</del></span> <span
                                class="m_price cl_red">90.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="5-16-2-mo-let-xich-irwin-t231-1-2_26327.html"
                                                   title="5/16-2' Mỏ lết xích IRWIN T231-1/2"> <img
                                    src="data/bt8/5-16-2-mo-let-xich-irwin-t231-1-2-1.jpg"
                                    alt="5/16-2' Mỏ lết xích IRWIN T231-1/2"/> </a></figure>
                        <h2 class="pro_name"><a href="5-16-2-mo-let-xich-irwin-t231-1-2_26327.html"
                                                title="5/16-2' Mỏ lết xích IRWIN T231-1/2">5/16-2' Mỏ lết xích IRWIN
                                T231-1/2</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.000.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-co-le-vong-mieng-mo-14-mon-toptul-gaaa1404_11104.html"
                                                   title="Bộ cờ lê vòng miệng mờ 14 món Toptul GAAA1404"> <img
                                    src="data/bt3/bo-co-le-vong-mieng-mo-14-mon-toptul-gaaa1404.jpg"
                                    alt="Bộ cờ lê vòng miệng mờ 14 món Toptul GAAA1404"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-co-le-vong-mieng-mo-14-mon-toptul-gaaa1404_11104.html"
                                                title="Bộ cờ lê vòng miệng mờ 14 món Toptul GAAA1404">Bộ cờ lê vòng miệng mờ
                                14 món Toptul GAAA1404</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.094.000 đ</del></span> <span
                                class="m_price cl_red">1.989.000 đ</span></div>
                        <span class="saleoff">-6%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-tuyp-25-chi-tiet-baker-lofh1215_36487.html"
                                                   title="Bộ tuýp 25 chi tiết BAKER LOFH1215"> <img
                                    src="data/bt5/bo-tuyp-25-chi-tiet-baker-lofh1215-1620462989.jpg"
                                    alt="Bộ tuýp 25 chi tiết BAKER LOFH1215"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-tuyp-25-chi-tiet-baker-lofh1215_36487.html"
                                                title="Bộ tuýp 25 chi tiết BAKER LOFH1215">Bộ tuýp 25 chi tiết BAKER
                                LOFH1215</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.050.000 đ</del></span> <span
                                class="m_price cl_red">970.000 đ</span></div>
                        <span class="saleoff">-8%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-tuoc-no-vit-da-nang-32-chi-tiet-tolsen-20370_38855.html"
                                                   title="Bộ tuốc nơ vít đa năng 32 chi tiết Tolsen 20370"> <img
                                    src="data/bt5/bo-tuoc-no-vit-da-nang-32-chi-tiet-tolsen-20370-1623042102.jpg"
                                    alt="Bộ tuốc nơ vít đa năng 32 chi tiết Tolsen 20370"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-tuoc-no-vit-da-nang-32-chi-tiet-tolsen-20370_38855.html"
                                                title="Bộ tuốc nơ vít đa năng 32 chi tiết Tolsen 20370">Bộ tuốc nơ vít đa
                                năng 32 chi tiết Tolsen 20370</a></h2>
                        <div class="info_price"><span class="f_price"><del>439.200 đ</del></span> <span
                                class="m_price cl_red">366.000 đ</span></div>
                        <span class="saleoff">-17%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="can-no-kingtony-34423-2a-1-2-50-350nm_9041.html"
                                                   title="Cần nổ Kingtony 34423-2A 1/2' 50-350Nm"> <img
                                    src="data/bt6/can-no-kingtony-34423-2a-1-2-70-340nm.jpg"
                                    alt="Cần nổ Kingtony 34423-2A 1/2' 50-350Nm"/> </a></figure>
                        <h2 class="pro_name"><a href="can-no-kingtony-34423-2a-1-2-50-350nm_9041.html"
                                                title="Cần nổ Kingtony 34423-2A 1/2' 50-350Nm">Cần nổ Kingtony 34423-2A 1/2'
                                50-350Nm</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.850.000 đ</del></span> <span
                                class="m_price cl_red">1.590.000 đ</span></div>
                        <span class="saleoff">-15%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="can-no-ngan-kingtony-34323-1a-3-8-5-25-nm_9053.html"
                                                   title="Cần nổ ngắn Kingtony 34323-1A 3/8' 5-25 Nm"> <img
                                    src="data/bt9/can-no-ngan-kingtony-34323-1a-3-8-5-25-nm.jpg"
                                    alt="Cần nổ ngắn Kingtony 34323-1A 3/8' 5-25 Nm"/> </a></figure>
                        <h2 class="pro_name"><a href="can-no-ngan-kingtony-34323-1a-3-8-5-25-nm_9053.html"
                                                title="Cần nổ ngắn Kingtony 34323-1A 3/8' 5-25 Nm">Cần nổ ngắn Kingtony
                                34323-1A 3/8' 5-25 Nm</a></h2>
                        <div class="info_price"><span class="f_price"><del>999.000 đ</del></span> <span
                                class="m_price cl_red">930.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-co-le-vong-mieng-8-mon-8-19mm-stanley-stmt78099-8_38532.html"
                                                   title="Bộ cờ lê vòng miệng 8 món 8-19mm Stanley STMT78099-8"> <img
                                    src="data/bt1/bo-co-le-vong-mieng-8-mon-8-19mm-stanley-stmt78099-8-1620709472.jpg"
                                    alt="Bộ cờ lê vòng miệng 8 món 8-19mm Stanley STMT78099-8"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-co-le-vong-mieng-8-mon-8-19mm-stanley-stmt78099-8_38532.html"
                                                title="Bộ cờ lê vòng miệng 8 món 8-19mm Stanley STMT78099-8">Bộ cờ lê vòng
                                miệng 8 món 8-19mm Stanley STMT78099-8</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span class="m_price cl_red">314.000 đ</span>
                        </div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="kim-rang-vise-grip-95-irwin-2078209_38794.html"
                                                   title="Kìm răng Vise Grip 9.5' IRWIN 2078209"> <img
                                    src="data/bt5/kim-rang-vise-grip-95-irwin-2078209-1622689902.jpg"
                                    alt="Kìm răng Vise Grip 9.5' IRWIN 2078209"/> </a></figure>
                        <h2 class="pro_name"><a href="kim-rang-vise-grip-95-irwin-2078209_38794.html"
                                                title="Kìm răng Vise Grip 9.5' IRWIN 2078209">Kìm răng Vise Grip 9.5' IRWIN
                                2078209</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span class="m_price cl_red">362.000 đ</span>
                        </div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="24-cua-tay-irwin-txp1124-610-000_26389.html"
                                                   title="24' Cưa tay IRWIN TXP1124-610-000"> <img
                                    src="data/bt4/24-cua-tay-irwin-txp1124-610-000-1.jpg"
                                    alt="24' Cưa tay IRWIN TXP1124-610-000"/> </a></figure>
                        <h2 class="pro_name"><a href="24-cua-tay-irwin-txp1124-610-000_26389.html"
                                                title="24' Cưa tay IRWIN TXP1124-610-000">24' Cưa tay IRWIN
                                TXP1124-610-000</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span class="m_price cl_red">143.000 đ</span>
                        </div>
                    </div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><a href="danh-muc-san-pham/dung-cu-khi-nen_1600.html"
                                                                   style="color: #d42f22">Dụng Cụ Khí Nén</a></h3>
            <div class="subcate"><h4><a href="danh-muc-san-pham/may-van-vit-hoi_1792.html" title="Máy Vặn Vít Hơi">Máy Vặn
                        Vít Hơi</a></h4> <h4><a href="danh-muc-san-pham/dung-cu-khi-nen-ban-chay_1834.html"
                                                title="Dụng Cụ Khí Nén Bán Chạy">Dụng Cụ Khí Nén Bán Chạy</a></h4> <h4><a
                        href="danh-muc-san-pham/bom-mo_1848.html" title="Bơm Mỡ">Bơm Mỡ</a></h4> <h4><a
                        href="danh-muc-san-pham/cuon-ong-hoi_1853.html" title="Cuộn Ống Hơi">Cuộn Ống Hơi</a></h4> <a
                    href="danh-muc-san-pham/dung-cu-khi-nen_1600.html" class="view_all cl_red"><b>Tất cả Dụng Cụ Khí Nén</b></a>
            </div>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="sung-bom-mo-400cc-toptul-jgae0202_9116.html"
                                                   title="Súng bơm mỡ 400cc Toptul JGAE0202"> <img
                                    src="data/bt2/sung-bom-mo-400cc-toptul-jgae0202-1.jpg"
                                    alt="Súng bơm mỡ 400cc Toptul JGAE0202"/> </a></figure>
                        <h2 class="pro_name"><a href="sung-bom-mo-400cc-toptul-jgae0202_9116.html"
                                                title="Súng bơm mỡ 400cc Toptul JGAE0202">Súng bơm mỡ 400cc Toptul
                                JGAE0202</a></h2>
                        <div class="info_price"><span class="f_price"><del>802.000 đ</del></span> <span
                                class="m_price cl_red">705.000 đ</span></div>
                        <span class="saleoff">-13%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-nen-khi-co-dau-24l-ingco-ac20248t_33502.html"
                                                   title="Máy nén khí có dầu 24L INGCO AC20248T"> <img
                                    src="data/bt6/may-nen-khi-co-dau-24l-ingco-ac20248t-1570438919.jpg"
                                    alt="Máy nén khí có dầu 24L INGCO AC20248T"/> </a></figure>
                        <h2 class="pro_name"><a href="may-nen-khi-co-dau-24l-ingco-ac20248t_33502.html"
                                                title="Máy nén khí có dầu 24L INGCO AC20248T">Máy nén khí có dầu 24L INGCO
                                AC20248T</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.600.000 đ</del></span> <span
                                class="m_price cl_red">2.433.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="sung-mo-oc-2-bua-top-paw-04006_13128.html"
                                                   title="Súng Mở Ốc 2 Búa Top PAW-04006"> <img
                                    src="data/bt6/sung-mo-oc-2-bua-top-paw-04006.jpg" alt="Súng Mở Ốc 2 Búa Top PAW-04006"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="sung-mo-oc-2-bua-top-paw-04006_13128.html"
                                                title="Súng Mở Ốc 2 Búa Top PAW-04006">Súng Mở Ốc 2 Búa Top PAW-04006</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>2.399.000 đ</del></span> <span
                                class="m_price cl_red">2.049.000 đ</span></div>
                        <span class="saleoff">-15%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cha-nham-dung-hoi-prona-rp-01_32875.html"
                                                   title="Máy chà nhám dùng hơi PRONA RP-01"> <img
                                    src="data/bt2/may-cha-nham-dung-hoi-prona-rp-01-1551330444.png"
                                    alt="Máy chà nhám dùng hơi PRONA RP-01"/> </a></figure>
                        <h2 class="pro_name"><a href="may-cha-nham-dung-hoi-prona-rp-01_32875.html"
                                                title="Máy chà nhám dùng hơi PRONA RP-01">Máy chà nhám dùng hơi PRONA
                                RP-01</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.090.000 đ</del></span> <span
                                class="m_price cl_red">2.749.000 đ</span></div>
                        <span class="saleoff">-12%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a
                                href="20hp-may-nen-khi-dung-tich-24-lit-total-tc12024-tc120246t_35710.html"
                                title="2.0HP Máy nén khí dung tích 24 lít Total TC12024 (TC120246T)"> <img
                                    src="data/bt8/20hp-may-nen-khi-dung-tich-24-lit-total-tc120246t-1596082219.jpg"
                                    alt="2.0HP Máy nén khí dung tích 24 lít Total TC12024 (TC120246T)"/> </a></figure>
                        <h2 class="pro_name"><a href="20hp-may-nen-khi-dung-tich-24-lit-total-tc12024-tc120246t_35710.html"
                                                title="2.0HP Máy nén khí dung tích 24 lít Total TC12024 (TC120246T)">2.0HP
                                Máy nén khí dung tích 24 lít Total TC12024 (TC120246T)</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.660.000 đ</del></span> <span
                                class="m_price cl_red">2.419.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="sung-rut-dinh-rive-top-rvg01_4371.html"
                                                   title="Súng rút đinh Rive TOP - RVG01"> <img
                                    src="data/bt7/sung-rut-dinh-rive-top-rvg01.jpg" alt="Súng rút đinh Rive TOP - RVG01"/> </a>
                        </figure>
                        <h2 class="pro_name"><a href="sung-rut-dinh-rive-top-rvg01_4371.html"
                                                title="Súng rút đinh Rive TOP - RVG01">Súng rút đinh Rive TOP - RVG01</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>1.799.000 đ</del></span> <span
                                class="m_price cl_red">1.649.000 đ</span></div>
                        <span class="saleoff">-9%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="to-vit-dien-ac-ban-tu-dong-kilews-sk-2205lsb_7419.html"
                                                   title="Tô vít điện AC bán tự động Kilews SK-2205LSB"> <img
                                    src="data/bt1/to-vit-dien-ac-ban-tu-dong-kilews-sk-2205lsb.jpg"
                                    alt="Tô vít điện AC bán tự động Kilews SK-2205LSB"/> </a></figure>
                        <h2 class="pro_name"><a href="to-vit-dien-ac-ban-tu-dong-kilews-sk-2205lsb_7419.html"
                                                title="Tô vít điện AC bán tự động Kilews SK-2205LSB">Tô vít điện AC bán tự
                                động Kilews SK-2205LSB</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.921.000 đ</del></span> <span
                                class="m_price cl_red">3.625.000 đ</span></div>
                        <span class="saleoff">-8%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-nen-khi-puma-pk0140-1-4hp_11507.html"
                                                   title="Máy nén khí Puma PK0140-1/4HP"> <img
                                    src="data/bt3/may-nen-khi-puma-pk0140-1-4hp-1.jpg" alt="Máy nén khí Puma PK0140-1/4HP"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="may-nen-khi-puma-pk0140-1-4hp_11507.html"
                                                title="Máy nén khí Puma PK0140-1/4HP">Máy nén khí Puma PK0140-1/4HP</a></h2>
                        <div class="info_price"><span class="f_price"><del>7.750.000 đ</del></span> <span
                                class="m_price cl_red">7.479.000 đ</span></div>
                        <span class="saleoff">-4%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-mai-hoi-1-4-tolsen-73325_39012.html"
                                                   title="Máy mài hơi 1/4' Tolsen 73325"> <img
                                    src="data/bt7/may-mai-hoi-1-4-tolsen-73325-1623742305.jpg"
                                    alt="Máy mài hơi 1/4' Tolsen 73325"/> </a></figure>
                        <h2 class="pro_name"><a href="may-mai-hoi-1-4-tolsen-73325_39012.html"
                                                title="Máy mài hơi 1/4' Tolsen 73325">Máy mài hơi 1/4' Tolsen 73325</a></h2>
                        <div class="info_price"><span class="f_price"><del>418.080 đ</del></span> <span
                                class="m_price cl_red">348.400 đ</span></div>
                        <span class="saleoff">-17%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-mai-goc-dung-hoi-100mm-licota-pag-30012_33977.html"
                                                   title="Máy mài góc dùng hơi 100mm LICOTA PAG-30012"> <img
                                    src="data/bt4/may-mai-goc-dung-hoi-100mm-licota-pag-30012-1566463332.jpg"
                                    alt="Máy mài góc dùng hơi 100mm LICOTA PAG-30012"/> </a></figure>
                        <h2 class="pro_name"><a href="may-mai-goc-dung-hoi-100mm-licota-pag-30012_33977.html"
                                                title="Máy mài góc dùng hơi 100mm LICOTA PAG-30012">Máy mài góc dùng hơi
                                100mm LICOTA PAG-30012</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.750.000 đ</del></span> <span
                                class="m_price cl_red">1.659.000 đ</span></div>
                        <span class="saleoff">-6%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--List Products-->
        <div class="box bor_box pros_home"><h3 class="main_Tab"><span>Sản phẩm</span> Đã xem</h3>
            <div class="slide_pros">
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-nen-khi-khong-dau-24l-stanley-sxcms1324he_39972.html"
                                                   title="Máy nén khí không dầu 24L Stanley SXCMS1324HE"> <img
                                    src="data/bt9/may-nen-khi-khong-dau-24l-stanley-sxcms1324he-1639117278.jpg"
                                    alt="Máy nén khí không dầu 24L Stanley SXCMS1324HE"/> </a></figure>
                        <h2 class="pro_name"><a href="may-nen-khi-khong-dau-24l-stanley-sxcms1324he_39972.html"
                                                title="Máy nén khí không dầu 24L Stanley SXCMS1324HE">Máy nén khí không dầu
                                24L Stanley SXCMS1324HE</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.960.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="dao-cat-ong-dong-stanley-93-020-22-1-8-11-8-3-28mm_35754.html"
                                                   title="Dao cắt ống đồng Stanley 93-020-22 1/8'' - 11/8'' (3-28mm)"> <img
                                    src="data/bt9/dao-cat-ong-dong-stanley-93-020-22-1-8-11-8-3-28mm-10c-hop-1596290837.jpg"
                                    alt="Dao cắt ống đồng Stanley 93-020-22 1/8'' - 11/8'' (3-28mm)"/> </a></figure>
                        <h2 class="pro_name"><a href="dao-cat-ong-dong-stanley-93-020-22-1-8-11-8-3-28mm_35754.html"
                                                title="Dao cắt ống đồng Stanley 93-020-22 1/8'' - 11/8'' (3-28mm)">Dao cắt
                                ống đồng Stanley 93-020-22 1/8'' - 11/8'' (3-28mm)</a></h2>
                        <div class="info_price"><span class="f_price"><del>236.000 đ</del></span> <span
                                class="m_price cl_red">229.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="mui-khoan-tru-thep-list500-0120-nachi_17623.html"
                                                   title="Mũi khoan trụ thép List500-0120 Nachi"> <img
                                    src="data/bt9/mui-khoan-tru-thep-list500-0120-nachi-1.jpg"
                                    alt="Mũi khoan trụ thép List500-0120 Nachi"/> </a></figure>
                        <h2 class="pro_name"><a href="mui-khoan-tru-thep-list500-0120-nachi_17623.html"
                                                title="Mũi khoan trụ thép List500-0120 Nachi">Mũi khoan trụ thép
                                List500-0120 Nachi</a></h2>
                        <div class="info_price"><span class="f_price"><del>39.600 đ</del></span> <span
                                class="m_price cl_red">33.600 đ</span></div>
                        <span class="saleoff">-16%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cat-sat-total-ts92035526_34363.html"
                                                   title="Máy cắt sắt Total TS92035526"> <img
                                    src="data/bt4/may-cat-sat-total-ts92035526-1582602043.jpg"
                                    alt="Máy cắt sắt Total TS92035526"/> </a></figure>
                        <h2 class="pro_name"><a href="may-cat-sat-total-ts92035526_34363.html"
                                                title="Máy cắt sắt Total TS92035526">Máy cắt sắt Total TS92035526</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.190.000 đ</del></span> <span
                                class="m_price cl_red">1.950.000 đ</span></div>
                        <span class="saleoff">-11%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-siet-bu-long-milwaukee-m18-fmtiw2f12-chua-pin-sac-_38397.html"
                                                   title="Máy siết bu lông Milwaukee M18 FMTIW2F12 ( Chưa Pin & Sạc )"> <img
                                    src="data/bt2/may-siet-bu-long-milwaukee-m18-fmtiw2f12-chua-pin-sac--1618046797.jpg"
                                    alt="Máy siết bu lông Milwaukee M18 FMTIW2F12 ( Chưa Pin & Sạc )"/> </a></figure>
                        <h2 class="pro_name"><a href="may-siet-bu-long-milwaukee-m18-fmtiw2f12-chua-pin-sac-_38397.html"
                                                title="Máy siết bu lông Milwaukee M18 FMTIW2F12 ( Chưa Pin & Sạc )">Máy siết
                                bu lông Milwaukee M18 FMTIW2F12 ( Chưa Pin & Sạc )</a></h2>
                        <div class="info_price"><span class="f_price"><del>6.647.000 đ</del></span> <span
                                class="m_price cl_red">5.780.000 đ</span></div>
                        <span class="saleoff">-14%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                   title="Máy Khoan Động Lực Bosch GSB 16RE"> <img
                                    src="data/bt4/may-khoan-dong-luc-bosch-gsb-16re-1597720594.jpg"
                                    alt="Máy Khoan Động Lực Bosch GSB 16RE"/> </a></figure>
                        <h2 class="pro_name"><a href="may-khoan-dong-luc-bosch-gsb-16re_85.html"
                                                title="Máy Khoan Động Lực Bosch GSB 16RE">Máy Khoan Động Lực Bosch GSB
                                16RE</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">1.648.000 đ</span></div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="3mx16mm-thuoc-cuon-thep-irwin-t13949_38592.html"
                                                   title="3Mx16mm Thước cuộn thép IRWIN T13949"> <img
                                    src="data/bt8/3mx16mm-thuoc-cuon-thep-irwin-t13949-1621566656.jpg"
                                    alt="3Mx16mm Thước cuộn thép IRWIN T13949"/> </a></figure>
                        <h2 class="pro_name"><a href="3mx16mm-thuoc-cuon-thep-irwin-t13949_38592.html"
                                                title="3Mx16mm Thước cuộn thép IRWIN T13949">3Mx16mm Thước cuộn thép IRWIN
                                T13949</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span class="m_price cl_red">95.000 đ</span>
                        </div>
                    </div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="dong-ho-van-nang-hioki-dt4282_34044.html"
                                                   title="Đồng hồ vạn năng Hioki DT4282"> <img
                                    src="data/bt7/dong-ho-van-nang-hioki-dt4282-1568806774.jpg"
                                    alt="Đồng hồ vạn năng Hioki DT4282"/> </a></figure>
                        <h2 class="pro_name"><a href="dong-ho-van-nang-hioki-dt4282_34044.html"
                                                title="Đồng hồ vạn năng Hioki DT4282">Đồng hồ vạn năng Hioki DT4282</a></h2>
                        <div class="info_price"><span class="f_price"><del>9.900.000 đ</del></span> <span
                                class="m_price cl_red">9.799.000 đ</span></div>
                        <span class="saleoff">-2%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="bo-may-khoan-van-vit-dung-pin-stanley-schi121s2fk-12v_38187.html"
                                                   title="Bộ máy khoan vặn vít dùng pin Stanley SCHI121S2FK (12V)"> <img
                                    src="data/bt9/bo-may-khoan-van-vit-dung-pin-stanley-sch121s2fk-12v-1616165369.jpg"
                                    alt="Bộ máy khoan vặn vít dùng pin Stanley SCHI121S2FK (12V)"/> </a></figure>
                        <h2 class="pro_name"><a href="bo-may-khoan-van-vit-dung-pin-stanley-schi121s2fk-12v_38187.html"
                                                title="Bộ máy khoan vặn vít dùng pin Stanley SCHI121S2FK (12V)">Bộ máy khoan
                                vặn vít dùng pin Stanley SCHI121S2FK (12V)</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.600.000 đ</del></span> <span
                                class="m_price cl_red">2.940.000 đ</span></div>
                        <span class="saleoff">-19%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="dao-cat-ong-dong-sellery-88-891_9879.html"
                                                   title="Dao cắt ống đồng Sellery 88-891"> <img
                                    src="data/bt10/dao-cat-ong-dong-sellery-88-891.jpg" alt="Dao cắt ống đồng Sellery 88-891"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="dao-cat-ong-dong-sellery-88-891_9879.html"
                                                title="Dao cắt ống đồng Sellery 88-891">Dao cắt ống đồng Sellery 88-891</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>552.000 đ</del></span> <span
                                class="m_price cl_red">540.000 đ</span></div>
                        <span class="saleoff">-3%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-poongsan-ps-45_220.html"
                                                   title="Thang nhôm Poongsan PS-45"> <img
                                    src="data/bt5/thang-nhom-poongsan-ps-45.jpg" alt="Thang nhôm Poongsan PS-45"/> </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-poongsan-ps-45_220.html" title="Thang nhôm Poongsan PS-45">Thang
                                nhôm Poongsan PS-45</a></h2>
                        <div class="info_price"><span class="f_price"></span> <span
                                class="m_price cl_red">3.620.000 đ</span></div>
                        <span class="ship_in_hour"></span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="thang-nhom-rut-gon-nikita-kn-r32_14587.html"
                                                   title="Thang nhôm rút gọn Nikita KN-R32"> <img
                                    src="data/bt4/thang-nhom-rut-gon-nikita-kn-r32.jpg" alt="Thang nhôm rút gọn Nikita KN-R32"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="thang-nhom-rut-gon-nikita-kn-r32_14587.html"
                                                title="Thang nhôm rút gọn Nikita KN-R32">Thang nhôm rút gọn Nikita
                                KN-R32</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.190.000 đ</del></span> <span
                                class="m_price cl_red">1.520.000 đ</span></div>
                        <span class="saleoff">-31%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="dao-cat-ong-dong-sellery-88-890_9878.html"
                                                   title="Dao cắt ống đồng Sellery 88-890"> <img
                                    src="data/bt3/dao-cat-ong-dong-sellery-88-890-1597473138.jpg"
                                    alt="Dao cắt ống đồng Sellery 88-890"/> </a></figure>
                        <h2 class="pro_name"><a href="dao-cat-ong-dong-sellery-88-890_9878.html"
                                                title="Dao cắt ống đồng Sellery 88-890">Dao cắt ống đồng Sellery 88-890</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>374.695 đ</del></span> <span
                                class="m_price cl_red">350.000 đ</span></div>
                        <span class="saleoff">-7%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="mui-khoan-4-canh-sds-plus-12x160mm-makita-b-62739_35442.html"
                                                   title="Mũi khoan 4 cạnh SDS-PLUS 12x160mm Makita B-62739"> <img
                                    src="data/bt5/mui-khoan-4-canh-sds-plus-12x160mm-makita-b-62739-1595596047.jpg"
                                    alt="Mũi khoan 4 cạnh SDS-PLUS 12x160mm Makita B-62739"/> </a></figure>
                        <h2 class="pro_name"><a href="mui-khoan-4-canh-sds-plus-12x160mm-makita-b-62739_35442.html"
                                                title="Mũi khoan 4 cạnh SDS-PLUS 12x160mm Makita B-62739">Mũi khoan 4 cạnh
                                SDS-PLUS 12x160mm Makita B-62739</a></h2>
                        <div class="info_price"><span class="f_price"><del>141.000 đ</del></span> <span
                                class="m_price cl_red">99.000 đ</span></div>
                        <span class="saleoff">-30%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-tron-son-makita-m6600xb-800w-_36498.html"
                                                   title="Máy trộn sơn MAKITA M6600XB ( 800W )"> <img
                                    src="data/bt7/may-tron-son-makita-m6600xb-800w--1622469960.jpg"
                                    alt="Máy trộn sơn MAKITA M6600XB ( 800W )"/> </a></figure>
                        <h2 class="pro_name"><a href="may-tron-son-makita-m6600xb-800w-_36498.html"
                                                title="Máy trộn sơn MAKITA M6600XB ( 800W )">Máy trộn sơn MAKITA M6600XB (
                                800W )</a></h2>
                        <div class="info_price"><span class="f_price"><del>3.124.000 đ</del></span> <span
                                class="m_price cl_red">2.187.000 đ</span></div>
                        <span class="saleoff">-30%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="1-4-bo-tuyp-38-mon-toptul-gcad3801_4484.html"
                                                   title="1/4' Bộ tuýp 38 món TOPTUL GCAD3801"> <img
                                    src="data/bt7/1-4--bo-tuyp-38-mon-toptul-gcad3801.jpg"
                                    alt="1/4' Bộ tuýp 38 món TOPTUL GCAD3801"/> </a></figure>
                        <h2 class="pro_name"><a href="1-4-bo-tuyp-38-mon-toptul-gcad3801_4484.html"
                                                title="1/4' Bộ tuýp 38 món TOPTUL GCAD3801">1/4' Bộ tuýp 38 món TOPTUL
                                GCAD3801</a></h2>
                        <div class="info_price"><span class="f_price"><del>1.467.000 đ</del></span> <span
                                class="m_price cl_red">1.394.000 đ</span></div>
                        <span class="saleoff">-5%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="dao-cat-ong-dong-sellery-88-889_9877.html"
                                                   title="Dao cắt ống đồng Sellery 88-889"> <img
                                    src="data/bt8/dao-cat-ong-dong-sellery-88-889.jpg" alt="Dao cắt ống đồng Sellery 88-889"/>
                            </a></figure>
                        <h2 class="pro_name"><a href="dao-cat-ong-dong-sellery-88-889_9877.html"
                                                title="Dao cắt ống đồng Sellery 88-889">Dao cắt ống đồng Sellery 88-889</a>
                        </h2>
                        <div class="info_price"><span class="f_price"><del>344.599 đ</del></span> <span
                                class="m_price cl_red">332.508 đ</span></div>
                        <span class="saleoff">-4%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="2m-thang-chu-a-pho-thong-ta20_9402.html"
                                                   title="2m Thang chữ A phổ thông TA20"> <img
                                    src="data/bt3/2m-thang-chu-a-pho-thong-ta20-1568886420.jpg"
                                    alt="2m Thang chữ A phổ thông TA20"/> </a></figure>
                        <h2 class="pro_name"><a href="2m-thang-chu-a-pho-thong-ta20_9402.html"
                                                title="2m Thang chữ A phổ thông TA20">2m Thang chữ A phổ thông TA20</a></h2>
                        <div class="info_price"><span class="f_price"><del>990.000 đ</del></span> <span
                                class="m_price cl_red">840.000 đ</span></div>
                        <span class="saleoff">-16%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="may-cat-da-nang-dung-pin-bosch-gus-12v-li-solo_33270.html"
                                                   title="Máy cắt đa năng dùng pin Bosch GUS 12V-LI (solo)"> <img
                                    src="data/bt7/may-cat-da-nang-dung-pin-bosch-gus-12v-li-solo-1563271427.jpg"
                                    alt="Máy cắt đa năng dùng pin Bosch GUS 12V-LI (solo)"/> </a></figure>
                        <h2 class="pro_name"><a href="may-cat-da-nang-dung-pin-bosch-gus-12v-li-solo_33270.html"
                                                title="Máy cắt đa năng dùng pin Bosch GUS 12V-LI (solo)">Máy cắt đa năng
                                dùng pin Bosch GUS 12V-LI (solo)</a></h2>
                        <div class="info_price"><span class="f_price"><del>2.190.000 đ</del></span> <span
                                class="m_price cl_red">1.858.000 đ</span></div>
                        <span class="saleoff">-16%</span></div> <!--end Pro Item--> </div>
                <div class="item"> <!--Pro Item-->
                    <div class="pro_item">
                        <figure class="img_pro"><a href="50-75mm-panme-do-ngoai-dien-tu-mitutoyo-293-242-30_3624.html"
                                                   title="50-75mm Panme đo ngoài điện tử Mitutoyo 293-242-30"> <img
                                    src="data/bt2/50-75mm-panme-do-ngoai-dien-tu-mitutoyo-293-242-30.jpg"
                                    alt="50-75mm Panme đo ngoài điện tử Mitutoyo 293-242-30"/> </a></figure>
                        <h2 class="pro_name"><a href="50-75mm-panme-do-ngoai-dien-tu-mitutoyo-293-242-30_3624.html"
                                                title="50-75mm Panme đo ngoài điện tử Mitutoyo 293-242-30">50-75mm Panme đo
                                ngoài điện tử Mitutoyo 293-242-30</a></h2>
                        <div class="info_price"><span class="f_price"><del>4.031.000 đ</del></span> <span
                                class="m_price cl_red">3.660.000 đ</span></div>
                        <span class="saleoff">-10%</span></div> <!--end Pro Item--> </div>
            </div>
        </div> <!--end List Products--> <!--Info SEO-->
        <div class="box info_SEO pn_homepage_content">
            <div style="text-align: justify;">C&ocirc;ng ty TNHH MTV TM KẾT NỐI TI&Ecirc;U D&Ugrave;NG ra đời v&agrave;o th&aacute;ng
                01/08/2012, với c&aacute;ch thức kinh doanh <span
                    style="color:#0000cd;"><strong>Mua h&agrave;ng online</strong> </span>- Giao h&agrave;ng tận nơi. L&agrave;
                đơn vị đi đầu trong lĩnh vực cung cấp thiết bị c&ocirc;ng nghiệp hiện đại v&agrave; được nhiều đối t&aacute;c
                tin tưởng. Ch&uacute;ng t&ocirc;i x&acirc;y dựng h&agrave;ng trăm ngh&igrave;n sản phẩm từ c&aacute;c thương
                hiệu uy t&iacute;n của những ng&agrave;nh h&agrave;ng Thang nh&ocirc;m, Dụng cụ cầm tay, Dụng cụ đo ch&iacute;nh
                x&aacute;c, Pa lăng x&iacute;ch, Thiết bị n&acirc;ng đỡ - Bảo quản, Điện gia dụng, Dụng cụ d&ugrave;ng xăng,
                M&aacute;y h&agrave;n &amp; phụ kiện, Thiết bị d&ugrave;ng kh&iacute; n&eacute;n, Vật liệu m&agrave;i m&ograve;n,
                Thiết bị đo laser, Thiết bị đo d&ograve;ng điện. Kh&ocirc;ng chỉ vậy, mua sắm trực tuyến tại
                ketnoitieudung.vn gi&uacute;p qu&yacute; kh&aacute;ch tiết kiệm được thời gian, c&ocirc;ng sức m&agrave; vẫn
                bảo đảm được c&aacute;c quyền lợi về bảo h&agrave;nh, đổi/trả trong v&ograve;ng 15 ng&agrave;y kể từ thời
                điểm qu&yacute; kh&aacute;ch nhận được h&agrave;ng.<br/><br/>Với sứ mệnh ph&acirc;n phối m&aacute;y m&oacute;c
                v&agrave; c&ocirc;ng cụ cầm tay h&agrave;ng đầu tại Việt Nam, chỉ cần mở <a href="index.html"><span
                        style="color:#0000cd;"><strong>website ketnoitieudung.vn</strong></span></a> v&agrave; mua h&agrave;ng
                qua mạng, qu&yacute; kh&aacute;ch sẽ được giao sản phẩm tới tận nơi đối với c&aacute;c tỉnh th&agrave;nh kh&aacute;c.
                Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i c&ograve;n c&oacute; th&ecirc;m mục kết nối Tư Vấn gi&uacute;p qu&yacute;
                kh&aacute;ch c&oacute; th&ecirc;m những lời khuy&ecirc;n hữu &iacute;ch trong qu&aacute; tr&igrave;nh mua
                sắm. H&atilde;y c&ugrave;ng h&agrave;ng triệu người ti&ecirc;u d&ugrave;ng Việt Nam trải nghiệm tiện
                &iacute;ch mua sắm trực tuyến dễ d&agrave;ng, tiện &iacute;ch.<br/><br/>Ngo&agrave;i ra, qu&yacute; kh&aacute;ch
                c&oacute; thể đến với <b>Điện M&aacute;y Ti&ecirc;u D&ugrave;ng</b>&nbsp;- l&agrave; thương hiệu chuy&ecirc;n
                về Điện m&aacute;y được ph&aacute;t triển bởi C&ocirc;ng ty H&agrave; Như, để lựa chọn cho m&igrave;nh c&aacute;c
                Sản phẩm Điện m&aacute;y ph&ugrave; hợp cho nhu cầu sử dụng của c&aacute; nh&acirc;n &amp; gia đ&igrave;nh.
            </div>
        </div>
    </div><!--end Container--><!-- Begin of footer-->
@endsection
