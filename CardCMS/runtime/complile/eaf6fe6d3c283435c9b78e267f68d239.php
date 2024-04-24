<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<link rel="icon" href="/favicon.ico" />
<link rel="shortcut icon" type="image/png" href="/favicon.png">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/bootstrap.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/font-awesome.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/plugins/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/plugins/Magnific-Popup/magnific-popup.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/style.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/responsive.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/custom.css">
</head>
<body>
    <style>
    .btn_group {
        position:absolute;
        top:44px;
        left:85%
    }
    .sticky .btn_group {
        top: 32px;
    }
    
    .btn_group > div {
        border: 2px solid #fff;
        border-radius: 20px;
        display: flex;
        overflow: hidden;
    }
    .btn_group a {
        padding: 0px 22px;
        color: #fff;
        font-size: 14px;
    }
            .btn_group a:first-child {
                background: #fff;
                color:#2e2e2e;
            }
            
    .sticky .btn_group > div {
        border: 2px solid #2e2e2e;
        border-radius: 20px;
        display: flex;
        overflow: hidden;
    }
    .sticky .btn_group a {
        padding: 0px 22px;
        color: #2e2e2e;
        font-size: 14px;
    }
    .sticky  .btn_group a:first-child {
                background: #2e2e2e;
                color:#fff;
            }
    @media (max-width: 991.98px) {
        .btn_group {
            display:none;
        }
    }
</style>
<header class="header"> 
  <!-- Start Header Navbar-->
  <div class="main-header">
    <div class="main-menu-wrap">
      <div class="container" style="width:1012px">
        <div class="row align-items-center">
          <div class="col-xl-3 col-lg-3 col-md-4 col-6"> 
            <!-- Logo -->
            <div class="logo"> <a href="{pboot:sitedomain}/"> <img src="{pboot:sitelogo}" data-rjs="2" alt=""> </a> </div>
            <!-- End of Logo --> 
          </div>
          <div class="col-xl-8 col-lg-8 col-md-4 col-6 menu-button">
            <div class="menu--inner-area clearfix">
              <div class="menu-wraper">
                <nav> 
                  <!-- Header-menu -->
                  <div class="header-menu dosis">
                    <ul>
                      <li {pboot:if(0=='{sort:scode}')}class='active'{/pboot:if}><a href="{pboot:sitedomain}/">首页</a></li>
                      <li><a href="{pboot:sitedomain}/#features">优势</a></li>
                      <li><a href="{pboot:sitedomain}/#app">支持平台</a></li>
                    {pboot:nav num=10 parent=0}
                      <li class=""><a href="[nav:link]">[nav:name]</a>
                        {pboot:if([nav:soncount]>0)}
						 <ul>
                           {pboot:2nav parent=[nav:scode]}
                          <li><a href='[2nav:link]'>[2nav:name]</a></li>
             			  {/pboot:2nav}
                        </ul>{/pboot:if} 
                      </li>
                     {/pboot:nav}
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
            <div class="btn_group">
                <div>
                    <a href="https://vip.okla.app/index.html#/regist" target="_blank">注册</a>
                    <a href="https://vip.okla.app/index.html#/login" target="_blank">登录</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Navbar--> 
</header>
  
    <!-- End of Main header -->
    <style>

        .btn_group > div {
            border: 2px solid #2e2e2e;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
        }

        .btn_group a {
            padding: 0px 22px;
            color: #2e2e2e;
            font-size: 14px;
        }

            .btn_group a:first-child {
                background: #2e2e2e;
                color: #fff;
            }

        @media (max-width: 991.98px) {
            .btn_group {
                display: none;
            }
        }
    </style>
    <!-- home banner area -->
    <div class="banner-area-inner">
        <div class="banner-inner-area banner-area1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <!-- banner text -->
                        <div class="banner-text-inner">
                            <div class="banner-shape-wrap">
                                <div class="banner-shape-inner"> <img src="{pboot:sitedomain}/style/img/banner/shaps1.png" alt="" class='shape shape1 rotate3d'> <img src="{pboot:sitedomain}/style/img/banner/shaps2.png" alt="" class='shape shape2 rotate2d'> <img src="{pboot:sitedomain}/style/img/banner/shaps3.png" alt="" class='shape shape3 rotate-2d'> <img src="{pboot:sitedomain}/style/img/banner/shaps4.png" alt="" class='shape shape4 rotate3d'> <img src="{pboot:sitedomain}/style/img/banner/shaps5.png" alt="" class='shape shape5 rotate2d'> <img src="{pboot:sitedomain}/style/img/banner/shaps6.png" alt="" class='shape shape6 rotate-2d'> <img src="{pboot:sitedomain}/style/img/banner/shaps7.png" alt="" class='shape shape7 rotate3d'> </div>
                            </div>
                            <h1>okla全球号码百事通#检测筛选专家</h1>
                            <p>
                                ①	全球自有号源源头数字工场<br />
                                ②	集合全球二十个社交产品App<br />
                                ③	全球有礼享受高级待遇最低工场价<br />
                                ④	全自动365天24小时智能筛选服务<br />
                                ⑤	平台福利活动专区产品天天最低价<br />
                            </p>
                            <a href="{label:down}" class="btn"  target="_blank">免费注册</a> <a href="https://vip.okla.app/index.html" target="_blank" class="btn">平台登录</a>
                        </div>
                        <!-- banner text -->
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-4 offse-xl-2">
                        <!-- banner image-->
                        <div class="banner-image">
                            <img src="{pboot:sitedomain}/style/img/banner/macbook3.png" alt="" style="
    max-width: 996px;
    margin-left: -8vw;
    width: 64vw;
">
                        </div>
                        <!--End of banner image-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of home banner area -->

    <section class="pb-110" id='features'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="section-title text-center">
                        {pboot:sort scode=6}
                        <h2>[sort:name]</h2>
                        <p>[sort:def1]</p>
                        {/pboot:sort}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="feature-carousel owl-carousel">
                        {pboot:list scode=6 num=20 order=sorting}
                        <div class="single-feature-inner text-center">
                            <div class="feature-icon"><img src="[list:ext_svg]" class="svg" alt=""></div>
                            <h5>[list:title]</h5>
                            <p>[list:description]</p>
                        </div>
                        {/pboot:list}


                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .wan_char:after {
            content: '万';
        }
    </style>
    <!-- Counter up area -->
    <section class="border-top pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">{label:xiazai}</span>
                        <p>在线功能</p>
                    </div>
                    <!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter">{label:dianzan}</span>
                        <p>平台用户</p>
                    </div>
                    <!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter wan_char">{label:haoping}</span>
                        <p>日筛选数</p>
                    </div>
                    <!-- single counetr -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- single counetr -->
                    <div class="single-counter text-center">
                        <span class="counter wan_char">{label:jiangpin}</span>
                        <p>日完成数</p>
                    </div>
                    <!-- single counetr -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.End of Counter up area -->
    <!-- interact user -->
    <section class="bg-2 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <!-- user interact image -->
                    <div class="user-interact-image"> <img src="{pboot:sitedomain}/style/img/feature/01.png" alt=""> </div>
                    <!-- End of user interact image -->
                </div>
                <div class="col-lg-5 col-sm-5">
                    <!-- user ineract text -->
                    <div class="user-interact-inner">
                        <div class="interact-icon"> <img src="{pboot:sitedomain}/style/img/icons/teamwork.svg" class="svg" alt=""> </div>
                        <h2>精准筛查助您轻松出海营销</h2>
                        <p> 全球判断号码开通，号码活跃，Ai头像，实时开关机，手机设备信息，运营商信息，空号检测，号码漫游流量，多维度标签集成。 </p>
                        <a href="{label:down}" class="btn">Get Started</a>
                    </div>
                    <!--End of user ineract text -->
                </div>
            </div>
        </div>
    </section>
    <!-- interact user -->
    <!-- interact user -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <!-- user ineract text -->
                    <div class="user-interact-inner">
                        <div class="interact-icon"> <img src="{pboot:sitedomain}/style/img/icons/solution1.svg" class="svg" alt=""> </div>
                        <h2>直观界面一目了然</h2>
                        <p> 快速高效响应你的诉求 </p>
                        <a href="{label:down}" class="btn">Get Started</a>
                    </div>
                    <!--End of user ineract text -->
                </div>
                <div class="col-lg-7 col-sm-7">
                    <!-- user interact image -->
                    <div class="user-interact-image type2"> <img src="{pboot:sitedomain}/style/img/feature/user-interact2.png" alt=""> </div>
                    <!-- End of user interact image -->
                </div>
            </div>
        </div>
    </section>
    <!-- interact user -->
    <!-- app video -->
    <section class="app-video" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- why bottle video -->
                    <div class="theme-video-wrap"> <a href="{label:video}" class="video-btn" data-popup="video"><i class="fa fa-play"></i></a> </div>
                    <!-- end of why bottle video -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of why bottol water -->
    <!-- app screen -->
    <section class="pt-120 pb-115" id='app'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        {pboot:sort scode=7}
                        <h2>[sort:name]</h2>
                        <p>[sort:def1]</p>
                        {/pboot:sort}
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
        </div>
        <div class="app-scrin-inner">

            {pboot:list scode=7 num=1 order=sorting}
            <div style="
    text-align: center;margin-top:20px;
"> <img src="[list:ico]" data-rjs="2" alt="[list:title]"> </div>
            {/pboot:list}
        </div>
    </section>
    <!-- End of app screen -->
    <!-- start blog area -->
    <section class="border-top pt-115 pb-80" id='blog'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2>新闻</h2>
                        <p></p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                {pboot:list scode=2 num=3 order=sorting}
                <div class="col-lg-4 col-md-4">
                    <div class="single-blog-inner">
                        <div class="post-image">
                            <a href="[list:link]"> <img src="[list:ico]" alt=""> </a>
                            <div class="post-date">
                                <p><span>[list:date style=m-d]</span>[list:date style=Y]</p>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3><a href="[list:link]">[list:title]</a></h3>
                                </div>
                                <p>[list:content drophtml=1 dropblank=1 lencn=60]</p>
                                <a class='blog-btn' href="[list:link]">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                {/pboot:list}
            </div>
        </div>
    </section>
    <!-- end of blog artea -->
    <!-- 立即注册 -->
    <section class="border-top pt-110 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="download-app-inner text-center">
                        <h2 class="h1">立即注册okla筛选检测平台，体验无限的可能性。</h2>
                        <h3>并开始为您的业务提供全方位智能服务</h3>
                        <a href="{label:down}" class="btn">立即注册</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {pboot:content id=53} [content:content drophtml=1 dropblank=1 len=40 more='']
    <style>
        .czyh_ad {
            position: fixed;
            right: 0;
            top: 49vh;
        }
        .czyh_ad_content {
            position: fixed;
            right: 0;
            top: 0;
            width:100vw;
            height:100vh;
            background:rgba(0,0,0,0.7);
            z-index:1000;
            display:none;
            justify-content:center;
            align-items:center;
        }
            .czyh_ad_content >div {
                position:relative;
            }
        .czyh_ad_content img {
            margin:auto;
            max-width:1029px;
        }
            .czyh_ad_content a.close {
                position:absolute;
                top:20px;
                right:20px;
                opacity:1;
            }
            .czyh_ad_content svg {
                width: 38px;
                height: 38px;
            }
                .czyh_ad_content svg path {
                    fill: #fff;
                }
    </style>
    <div class="czyh_ad">
        <a href="javascript:;"  onclick="czad_content.style.display='flex'">
            <img src="[content:ico]" width="120" />
        </a>
    </div>
    <div class="czyh_ad_content" id="czad_content">
        <div>
            <a class="close" href="javascript:;" onclick="czad_content.style.display='none'">
                <img src="/style/img/icons/close-circle.svg"  class="svg" width="38" />
            </a>
            <img src="[content:pics]" />
        </div>    
    </div>
    {/pboot:content}
    <!-- End of 立即注册 -->
    <footer class="footer">
    <div class="footerbg"> <img src="{pboot:sitedomain}/style/img/footer-bg.png" alt=""> </div>
    <div class="footer-top pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- footer widget -->
                    <div class="footer-widget">
                        <div class="footer-logo"> <a href="{pboot:sitedomain}/"><img src="{pboot:sitelogo}" alt=""></a> </div>
                        <p>{pboot:content id=31} [content:content drophtml=1 dropblank=1 len=40 more='']{/pboot:content}</p>
                    </div>
                    <!--End of footer widget -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <!-- widget header -->
                        <div class="widget-header">
                            <h5>联系我们</h5>
                        </div>
                        <!-- widget header -->
                        <div class="widget-body">
                            <ul class="address-list">
                                <li> <span><i class="fa  fa-phone-square"></i></span>{pboot:companyphone} </li>
                                <li> <span><i class="fa  fa-envelope"></i></span> {pboot:companyemail} </li>
                                <!--<li> <span><i class="fa  fa-map"></i></span>{pboot:companyaddress}</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6"  style="display:flex;border-left:1px solid #ccc">
                    <p style="font-size:14px;width:92%;margin:auto;">
                        Address: 10 Anson Road, #32 International Plaza, Singapore 079903。<br/>
                        Important: okla仅支持美元付款，任何非美元收款的通道，可能存在诈骗风险，请注意辨别.
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6" style="display:none">
                    <div class="footer-widget">
                        <!-- widget header -->
                        <div class="widget-header">
                            <h5>快速链接</h5>
                        </div>
                        <!-- widget header -->
                    </div>
                    <div class="widget-body">
                        <div class="extra-link">
                            <div class="link-left">
                                <ul>
                                    <li><a href="{pboot:sitedomain}/">首页</a></li>
                                    {pboot:nav parent=0}
                                    <li><a href="[nav:link]">[nav:name]</a></li> {/pboot:nav}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6"  style="display:none">
                    <div class="footer-widget">
                        <div class="widget-body">
                            <div class="twetter-post-inner">
                                <div class="footer-post-details" style="display:none"> <img src="{pboot:companyweixin}" width="175"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-text text-center">
            <p>
                {pboot:sitecopyright} <a rel="nofollow">{pboot:siteicp}</a>
            </p>
        </div>
    </div>
</footer>

<div class="phone_btn">
    <ul class="wrap">
        <li>
            <a  href="https://t.me/oklacom" target="_blank">
                <img src="/style/img/icons/telegram-plane.svg" width="22" class="svg" />
                <span>在线客服</span>
            </a>
        </li>
        <li>
            <a href="https://vip.okla.app/index.html#/check"  target="_blank">
                <img src="/style/img/icons/safety.svg" width="22" class="svg" />
                <span>客服查验</span>
            </a>
        </li>
        <li>
            <a rel="nofollow" href="#" id="backToTop">
                <img src="/style/img/icons/top-filling.svg" class="svg" width="22" />
                <span>回到顶部</span>
            </a>
        </li>
       
    </ul>
</div>

<script src="{pboot:sitedomain}/style/js/jquery-3.3.1.min.js"></script>
<script src="{pboot:sitedomain}/style/js/bootstrap.bundle.min.js"></script>
<script src="{pboot:sitedomain}/style/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{pboot:sitedomain}/style/plugins/parsley/parsley.min.js"></script>
<script src="{pboot:sitedomain}/style/plugins/parallax/parallax.js"></script>
<script src="{pboot:sitedomain}/style/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="{pboot:sitedomain}/style/js/menu.min.js"></script>
<script src="{pboot:sitedomain}/style/plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>
<script src="{pboot:sitedomain}/style/plugins/waypoints/jquery.counterup.min.js"></script>
<script src="{pboot:sitedomain}/style/js/scripts.js"></script>
<script src="{pboot:sitedomain}/style/js/custom.js"></script>
</body>
</html><?php return array (
  0 => 'D:/Project/B BigData/CMS/template/default/comm/head.html',
  1 => 'D:/Project/B BigData/CMS/template/default/comm/foot.html',
); ?>