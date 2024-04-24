<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{content:title}</title>
<meta name="keywords" content="{content:keywords}">
<meta name="description" content="{content:description}">
<link rel="shortcut icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/bootstrap.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/font-awesome.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/plugins/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/plugins/Magnific-Popup/magnific-popup.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/style.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/responsive.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/custom.css">
</head>

<body class="baise">
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
  
<div class="page-title-wrap" data-bg-img="{pboot:sitedomain}/style/img/video-bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col"> 
        <!-- page title content -->
        <div class="page-title-content text-center">
          <ul class="mb-0 list-unstyle nav">
            <li>{pboot:position separator='>'}</li>
          </ul>
          <h1 class="h2">{sort:name}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="pt-120 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-8"> 
        <div class="blog-details-inner"> 
          <div class="single-blog-inner"> 
            <div class="post-content">
              <div class="post-details">
                  <!--
                <div class="post-info d-flex"> <span>{content:date style=Y-m-d}</span></div>
                <div class="post-title">
                  <h3>{content:title}</h3>
                </div>-->
                <div>{content:content}
				<br>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <aside> 
          <!-- single sidebar widget -->
          <div class="single-sidebar-widget mb-30">
            <div class="search-bar-widget">
              <div class="search-form parsley-validate">
                <form  name="formsearch" action="{pboot:scaction}">
                  <input type="text" placeholder="Search here..." required name="keyword">
                </form>
              </div>
            </div>
          </div>
          <!--End of  single sidebar widget --> 
          
          <!-- single sidebar widget -->
          <div class="single-sidebar-widget mb-30">
            <div class="sidebar-title">
              <h5>推荐新闻</h5>
            </div>
            <div class="sidebar-body latest-post">
              <ul>
                {pboot:list scode=2 num=10 order=sorting}
                <li>
                  <div class="latest-post-wrap media">
                    <div class="latest-post-img"> <img src="[list:ico]" alt=""> </div>
                    <div class="latest-post-body media-body">
                      <p><a href="[list:link]">[list:title]</a></p>
                    </div>
                  </div>
                </li>
                {/pboot:list}
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
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
  0 => '//LAPTOP-PIMM19LB/CMS/template/default/comm/head.html',
  1 => '//LAPTOP-PIMM19LB/CMS/template/default/comm/right.html',
  2 => '//LAPTOP-PIMM19LB/CMS/template/default/comm/foot.html',
); ?>