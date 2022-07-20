@php
    $info_web = \App\Models\AboutU::find(1);
@endphp
<header>
    <div class="container">
        <span class="four columns" id="logo"><a href='index.html' title="Kết nối tiêu dùng"><img
                    src="images/logo_new_2.png" alt='Kết nối tiêu dùng' title='Kết nối tiêu dùng'/></a></span><!--Search Tool-->
        <div class="search_form mtt columns">
            <div class="search_box form_submit">
                <div class="input_bar"><input class="inputSearch" placeholder="Nhập tên sản phẩm" name="keyword"
                                              type="text" id="keyword" value="" autocomplete="off"
                                              onKeyUp="searchSuggestion();" onFocus="searchSuggestion();"/></div>
                <div id="pn_result_auto_complete">
                    <div id="pn_result_auto_complete_frame"></div>
                </div>
            </div>
            <div class="search_icon_wrapper">
                <button type="button" id="lnk-search" name="search-button" class="submitSearch">Tìm kiếm</button>
            </div>
            <div class="search_icon_wrapper mar-mb">
                <div class="work-time"> Thời gian làm việc<br/> 8H - 17H | Thứ 2 - Thứ 7<br/> Nghỉ trưa 12h - 13h</div>
                <a href="huong-dan-thanh-toan.html" class="submitSearch lnk-guide-payment">Hướng dẫn<br/>thanh toán</a>
                <a href="javascript: void(0);" onclick="showCart();" class="quick_quotes cl_white"><span
                        id="sp_total_product_in_cart_header">0</span></a>
                <div class="cf"></div>
            </div>
            <div class="header_r columns" style="position: relative;"><a href="javascript: void(0);"
                                                                         class="user-link fr"></a>
                <div id="panel-user-login">
                    <div style="position: relative">
                        <div style="padding: 0px 10px 10px 10px;"><a href="#login_form"
                                                                     class="lnk-action link_login_popup">Đăng nhập</a>
                            <a href="#register_form" class="lnk-action link_register_popup">Tạo tài khoản</a> <a
                                href="javascript: void(0);"
                                onClick="callPopupLogin('https://www.facebook.com/v3.2/dialog/oauth?client_id=1382090098782187&amp;state=8ea1a19e095f3267f7d7177e10108c95&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fwww.ketnoitieudung.vn%2Ffacebook%2Flogin_js.php&amp;scope=email%2Cpublic_profile')"
                                class="lnk-login-social"><img src="images/user/login_facebook.png"/></a> <a
                                href="javascript: void(0);" onClick="callPopupLogin('google/index.html')"
                                class="lnk-login-social"><img src="images/user/login_google.png"/></a></div>
                        <i class="arrow-top"></i></div>
                </div>
            </div>
            <div class="cf"></div>
            <div class="header-search-link cl_white">
                <div class="title_search">Tìm nhanh:</div>
                <ul>
                    <li><a href="may-han-que-dien-tu-hong-ky-hk-200n_31801.html" target="_blank">Hồng Ký HK 200N</a>
                    </li>
                    <li><a href="may-khoan-bua-va-van-vit-makita-10mm-hp0300_35067.html" target="_blank">Makita
                            HP0300</a></li>
                    <li><a href="thang-nhom-poongsan-ps-44_219.html" target="_blank">Poongsan PS-44</a></li>
                    <li><a href="may-han-dien-tu-jasic-zx7-200pro_7819.html" target="_blank">Jasic ZX7-200PRO</a></li>
                </ul>
            </div>
        </div> <!--end Search Tool--> </div>
</header><!--#end Header-->
