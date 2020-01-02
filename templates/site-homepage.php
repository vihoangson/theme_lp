<?php
/**
 * Template Name: site-homepage
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

define('URL_SITE','https://lampart-vn.com');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/wp-content/themes/lampart-template/old-files/wp-content/themes/aron/styles/style.css" rel="stylesheet"/>
</head>
<body>
<!-- Navigation -->
<div id="topBar">
    <!-- Brand and toggle get grouped for better mobile display -->
    <section class="container">
        <h1>Lampart là công ty phát triển phần mềm.</h1>
        <!-- *** Get menu top *** -->
        <div class="menu-top-container"><ul id="menu-top" class="lang list_h"><li id="menu-item-102-en" class="lang-item lang-item-2 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-102-en special-class"><a href="<?= URL_SITE ?>/en/" hreflang="en-US" lang="en-US"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="English" alt="English" /></a></li>
                <li id="menu-item-102-ja" class="lang-item lang-item-5 lang-item-ja menu-item menu-item-type-custom menu-item-object-custom menu-item-102-ja special-class"><a href="<?= URL_SITE ?>/ja/" hreflang="ja" lang="ja"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAE2SURBVHjaYvz69SsDEvj37x+ERGbAwZ9//wACiAUoysXFBST///8P0QOm//+HU0jgxYsXAAHEAlP0H8HYt+//4SP/f//6b2b238sLrpqRkRFoCUAAsaCrXrv2/8KF///8+f/r9//Dh/8/ffI/OQWiAeJCgABigrseJPT27f/Vq////v3/1y8oWrzk/+PHcEv+/PkDEEBMEM/B3fj/40eo0t9g8suX/w8f/odZAVQMEEAsQAzj/2cQFf3PxARWCrYEaBXQLCkpqB/+/wcqBgggJrjxQPX/hYX/+/v///kLqhpIBgf/l5ODhxiQBAggFriToDoTEv5zcf3ftQuk2s7uf0wM3MdAAPQDQAAxvn37lo+PDy4KZUDcycj4/z9CBojv3r0LEEAgG969eweLSBDEBSCWAAQYACaTbJ/kuok9AAAAAElFTkSuQmCC" title="日本語" alt="日本語" /></a></li>
                <li id="menu-item-102-vi" class="lang-item lang-item-9 lang-item-vi current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-102-vi special-class"><a href="<?= URL_SITE ?>/vi/" hreflang="vi" lang="vi"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC" title="Tiếng Việt" alt="Tiếng Việt" /></a></li>
            </ul></div>            </section>
</div>
<header>
    <div class="hgroup container">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <h2 class="logo"><a href="<?= URL_SITE ?>/vi/"> <img src="<?= URL_SITE ?>/wp-content/uploads/2019/02/logo.png"> </a></h2>
                </div>
                <div id="nav" class="navbar-collapse collapse">
                    <!-- *** Get menu primary *** -->
                    <ul id="menu-primary_vi" class="nav nav-pills"><li id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91 special-class"><a href="<?= URL_SITE ?>/vi/achievements/">Thành tựu</a></li>
                        <li id="menu-item-1871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-1871 special-class"><a href="<?= URL_SITE ?>/vi/offshore-development/" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="menu-item-674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-674 special-class"><a href="<?= URL_SITE ?>/vi/offshore-development/">Phát triển gia công phần mềm</a></li>
                                <li id="menu-item-1021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1021 special-class"><a href="<?= URL_SITE ?>/vi/bpo/">BPO</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1482 special-class"><a href="<?= URL_SITE ?>/vi/corporate/">Công ty</a></li>
                        <li id="menu-item-3021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3021 special-class"><a href="<?= URL_SITE ?>/vi/tai-lieu-gioi-thieu-cong-ty/">Giới thiệu công ty</a></li>
                        <li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87 special-class"><a href="<?= URL_SITE ?>/vi/introduction-activities/">Hoạt động</a></li>
                        <li id="menu-item-2545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2545 special-class"><a href="<?= URL_SITE ?>/vi/recruit/">Tuyển dụng</a></li>
                        <li id="menu-item-2857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2857 special-class"><a href="<?= URL_SITE ?>/vi/dao-tao/">Đào tạo</a></li>
                        <li id="menu-item-3062" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3062 special-class"><a href="<?= URL_SITE ?>/vi/tuyen-thuc-tap-sinh/">Thực tập</a></li>
                        <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89 special-class"><a href="<?= URL_SITE ?>/vi/contact-us/">Liên hệ</a></li>
                    </ul>								        </div>
            </nav>
        </div>
    </div>
</header>
<div class="new_intro">
    <div class='border-banner'>
        <div class='img-banner'></div>
        <div class='box-banner' style="">

            <h1>
                Lampart Co.Ltd
            </h1>
            <h2>
                &ldquo;Creativity is limitless&rdquo;
            </h2>
            <hr style="background: url(<?= URL_SITE ?>/wp-content/uploads/2017/06/line2.png) no-repeat;border: 0;height: 14px;">

            <p><!-- *** Get slogan *** -->
                <aside id="text-10" class="widget widget_text">			<div class="textwidget">Lampart phấn đấu để cung cấp sản phẩm được gia công 1 cách tỉ mỉ từ đội ngũ kỹ sư sáng tạo bậc nhất của chúng tôi.<br>
                        Giải pháp của chúng tôi chỉ giới hạn bởi trí tưởng tượng của bạn.
                    </div>
                </aside>                <!-- Lampart strives to deliver a product meticulously crafted from our innovative and creative Engineers.<br>
                Our solutions are limited only by your imagination. -->
            </p>
        </div>
    </div>
</div>
<div id="contents" class="container">
    <main class="col-xs-8">

        <div>
            <div class="mb30">
                <!-- *** Get banner bn_recruite *** -->
                <aside id="text-6" class="widget widget_text">			<div class="textwidget"><a href="//lampart-vn.com/vi/tai-lieu-gioi-thieu-cong-ty/"><img src="/wp-content/uploads/2019/01/1.gif" alt=""></a>
                        <a href="//lampart-vn.com/vi/recruit/"><img src="/wp-content/uploads/2019/01/banner1.png" alt=""></a></div>
                </aside>	      </div>
            <section>
                <!-- *** Get category NEWS *** -->

            </section>
            <div class="facebook_plugin_section">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <center>
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Lampart-Co-Ltd-560705814008370/"
                         data-width="597">
                    </div>
                </center>


            </div>
        </div>

    </main>     <!-- *** Get menu right *** -->
    <div id="sidebar" class="col-xs-4">
        <aside id="text-4" class="widget widget_text">			<div class="textwidget"> <div><a href="//lampart-vn.com/vi/recruit/"><img src="<?= URL_SITE ?>/wp-content/themes/aron/img/en/bn_recruite2.png" alt=""></a></div>
                <div><a href="//lampart-vn.com/vi/corporate/"><img src="<?= URL_SITE ?>/wp-content/themes/aron/img/en/bn_ceo.png" alt=""></a></div>
                <div><a href="//lampart-vn.com/vi/achievements/"><img src="<?= URL_SITE ?>/wp-content/themes/aron/img/en/bn_dev.png" alt="">
                    </a></div>
                <section>
                    <div class="bgW p10">
                        <h4 class="mt10">Thông tin liên hệ</h4>
                        <p><i class="fa fa-phone fa-lg"></i>(+84 0) 28-3990-3296
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+84 0) 28-3990-3297</p>
                        <p><i class="fa fa-fax  fa-lg"></i>(+84 0) 28-3620-1378</p>
                        <p><i class="fa fa-home  fa-lg"></i>Lầu 1, 21K Nguyễn Văn Trỗi P.12, Q.Phú Nhuận, Tp.Hồ Chí Minh</p>
                        <p><small>※ Từ thứ 2 đến thứ 6 (8:00 - 17:00)</small></p>
                    </div>

                    <a href="//lampart-vn.com/vi/contact-us/"><div class="btn btn-primary w100 mt20">
                            Gửi mail
                        </div>
                    </a>
                </section></div>
        </aside>
    </div></div>
<footer>
    <div class="menu">
        <div class="container row">
            <div class="totop"><i class="fa fa-chevron-up"></i>Top</div>
            <!-- *** Get menu footer *** -->
            <nav role="navigation" class="navigation site-navigation secondary-navigation">
                <div class="menu-secondary_vi-container"><ul id="nava" class="menu"><li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121 special-class"><a href="<?= URL_SITE ?>/vi/achievements/">Thành tựu</a></li>
                        <li id="menu-item-1249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1249 special-class"><a href="<?= URL_SITE ?>/vi/offshore-development/">Dịch vụ</a></li>
                        <li id="menu-item-1464" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1464 special-class"><a href="<?= URL_SITE ?>/vi/corporate/">Công ty</a></li>
                        <li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118 special-class"><a href="<?= URL_SITE ?>/vi/introduction-activities/">Hoạt động</a></li>
                        <li id="menu-item-2552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2552 special-class"><a href="<?= URL_SITE ?>/vi/recruit/">Tuyển dụng</a></li>
                        <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120 special-class"><a href="<?= URL_SITE ?>/vi/contact-us/">Liên hệ</a></li>
                        <li id="menu-item-731" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-731 special-class"><a href="<?= URL_SITE ?>/en/privacy-policy/">Chính sách bảo mật</a></li>
                    </ul></div>				</nav>
            <!-- *** Get menu langue *** -->
            <div class="menu-top-container"><ul id="menu-top-1" class="lang list_h"><li class="lang-item lang-item-2 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-102-en special-class"><a href="<?= URL_SITE ?>/en/" hreflang="en-US" lang="en-US"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="English" alt="English" /></a></li>
                    <li class="lang-item lang-item-5 lang-item-ja menu-item menu-item-type-custom menu-item-object-custom menu-item-102-ja special-class"><a href="<?= URL_SITE ?>/ja/" hreflang="ja" lang="ja"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAE2SURBVHjaYvz69SsDEvj37x+ERGbAwZ9//wACiAUoysXFBST///8P0QOm//+HU0jgxYsXAAHEAlP0H8HYt+//4SP/f//6b2b238sLrpqRkRFoCUAAsaCrXrv2/8KF///8+f/r9//Dh/8/ffI/OQWiAeJCgABigrseJPT27f/Vq////v3/1y8oWrzk/+PHcEv+/PkDEEBMEM/B3fj/40eo0t9g8suX/w8f/odZAVQMEEAsQAzj/2cQFf3PxARWCrYEaBXQLCkpqB/+/wcqBgggJrjxQPX/hYX/+/v///kLqhpIBgf/l5ODhxiQBAggFriToDoTEv5zcf3ftQuk2s7uf0wM3MdAAPQDQAAxvn37lo+PDy4KZUDcycj4/z9CBojv3r0LEEAgG969eweLSBDEBSCWAAQYACaTbJ/kuok9AAAAAElFTkSuQmCC" title="日本語" alt="日本語" /></a></li>
                    <li class="lang-item lang-item-9 lang-item-vi current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-102-vi special-class"><a href="<?= URL_SITE ?>/vi/" hreflang="vi" lang="vi"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC" title="Tiếng Việt" alt="Tiếng Việt" /></a></li>
                </ul></div>			</div>
    </div>
    <p id="copy"><small>Copyright © 2017 Lampart Co., Ltd. All Rights Reserved.</small></p>
</footer>
</body></html>
