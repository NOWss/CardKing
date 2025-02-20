<!DOCTYPE HTML>
<html lang="zxx">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{pboot:sitetitle}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon -->

		<!-- bootstrap CSS -->
		<link rel="stylesheet" href="static/css/bootstrap.min.css" type="text/css" media="all">
		<!-- carousel CSS -->
		<link rel="stylesheet" href="static/css/owl.carousel.min.css" type="text/css" media="all">
		<!-- animate CSS -->
		<link rel="stylesheet" href="static/css/animate.css" type="text/css" media="all">
		<!-- animated-text CSS -->
		<link rel="stylesheet" href="static/css/animated-text.css" type="text/css" media="all">
		<!-- font-awesome CSS -->
		<link rel="stylesheet" href="static/css/all.min.css" type="text/css" media="all">
		<!-- font-flaticon CSS -->
		<link rel="stylesheet" href="static/css/flaticon.css" type="text/css" media="all">
		<!-- theme-default CSS -->
		<link rel="stylesheet" href="static/css/theme-default.css" type="text/css" media="all">
		<!-- meanmenu CSS -->
		<link rel="stylesheet" href="static/css/meanmenu.min.css" type="text/css" media="all">
		<!-- transitions CSS -->
		<link rel="stylesheet" href="static/css/owl.transitions.css" type="text/css" media="all">
		<!-- venobox CSS -->
		<link rel="stylesheet" href="static/css/venobox.css" type="text/css" media="all">

		<!-- bootstrap icons -->
		<link rel="stylesheet" href="static/css/bootstrap-icons.css" type="text/css" media="all">

		<!-- Main Style CSS -->
		<link rel="stylesheet" href="static/css/style.css" type="text/css" media="all">
		<!-- responsive CSS -->
		<link rel="stylesheet" href="static/css/responsive.css" type="text/css" media="all">

		<link rel="stylesheet" href="static/css/dist/newStyle.css" type="text/css" media="all">

		<!-- modernizr js -->
		<script src="static/js/modernizr-3.5.0.min.js"></script>
	</head>

	<body>

		<!--==================================================-->
		<!-- Start itpro Main Menu Area -->
		<!--==================================================-->
<!-- Start itpro Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="itpro_nav_manu">
  <div class="container" style="max-width: 100vw;">
    <div class="row btm-bg align-items-center">
      <div class="col-lg-3">
        <div class="logo">
          <a class="logo_img" href="" title="WasData">
            <img src="static/picture/logo.png" alt="logo" width="170">
          </a>
          <a class="main_sticky" href="" title="WasData">
            <img src="static/picture/logo1.png" alt="logo" width="170">
          </a>
        </div>
      </div>
      <div class="col-lg-6 pl-0 pr-0">
        <nav class="itpro_menu">
          <ul class="nav_scroll">
            <li><a href="{pboot:sitedomain}#home">首页</a></li>
            <li><a href="{pboot:sitedomain}#service">付款卡特点</a></li>
            <li><a href="{pboot:sitedomain}#product">使用场景</a></li>
            <li><a href="{pboot:sitedomain}#youshi">安全</a></li>
            <li><a href="{pboot:sitedomain}#yunwei">我们的团队</a></li>
            <li><a href="{pboot:sitedomain}#news">最新资讯</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3 pl-0 pr-0">
        <div class="header_right_btn">
          <div class="img-box">
            <img src="static/images/Sign in.png">
          </div>
          <div class="text-box">
            <a href="https://admin.cardking.tw/" target="_blank">注册  |  登录</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- itpro Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
  <div class="mobile-menu">
    <nav class="itpro_menu">
      <ul class="nav_scroll">
        <li><a href="{pboot:sitedomain}#home">首页</a></li>
        <li><a href="{pboot:sitedomain}#product">付款卡特点</a></li>
        <li><a href="{pboot:sitedomain}#service">使用场景</a></li>
        <li><a href="{pboot:sitedomain}#youshi">安全</a></li>
        <li><a href="{pboot:sitedomain}#contact">我们的团队</a></li>
        <li><a href="{pboot:sitedomain}#contact">最新资讯</a></li>
      </ul>
    </nav>
  </div>
</div>
<!--==================================================-->
<!-- End itpro Main Menu Area -->
<!--==================================================-->
		<!--==================================================-->
		<!-- End itpro Main Menu Area -->
		<!--==================================================-->

		<!--==================================================-->
		<!--Start Header Slider Section -->
		<!--===================================================-->

		<!--==================================================-->
		<!--START BLOG  Section -->
		<!--===================================================-->
		<div class="blog-section style-two details">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="blog-single-items">
							<!-- <div class="blog-thumb">
								<img src="static/picture/blog-4.jpg" alt="Blog img">
							</div> -->
							<div class="blog-content">
								<div class="blog-content-text text-left">
									<h5>{content:title}</h5>
									<div class="blog-meta" style="margin: 20px 0;">
										<span>{content:date style="F"}&nbsp;{content:date style="d, Y"}</span>
										<span class="tag-item">
											{pboot:tags id={content:id}}
											<span href="#">[tags:text]</span>
											{/pboot:tags}
										</span>
									</div>
									<!-- {pboot:if('{content:ico}' != '/static/images/nopic.png')}
									<div class="img-box" style="width: 80%; height: auto;margin-top: 50px;">
										<img src="{content:ico}" style="height: auto;">
									</div>
									{/pboot:if} -->
									<p>{content:content}</p>
								</div>
								<br>
								<div class="text-secondary lh-2">
									<p>上一篇：{content:precontent}</p>
									<p>下一篇：{content:nextcontent}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!--==================================================-->
		<!-- Start itpro Footer Middle Area -->
		<!--==================================================-->
		<div class="footer-middle style-two upper" id="contact">
  <div class="footer-bottom-area d-flex align-items-center" style="height: 120px;">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4">
          <div class="itpro-logo">
            <a class="logo_thumb" href="/" title="itpro">
              <img src="static/picture/logo1.png" alt="logo" style="width: 50%;">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div style="color: #fff;">
            <div style="margin-bottom: 10px;">
              <i class="bi bi-clock-history"></i>
              工作时间：9:00AM - 04:00 AM
            </div>
            
              <div>
                <i class="bi bi-send"></i>
                Telegram客服：<a href="https://t.me/cardking88" target="_blank">{pboot:companyemail}</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-bottom-content">
            <div class="footer-bottom-content-copy">
              <p>{pboot:sitecopyright}<a rel="nofollow">{pboot:siteicp}</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--==================================================-->
<!-- End itpro Footer Middle Area -->
<!--==================================================-->
		<!--==================================================-->
		<!-- End itpro Footer Middle Area -->
		<!--==================================================-->




		<!--==================================================-->
		<!-- Start scrollup section Area -->
		<!--==================================================-->
		<!-- scrollup section -->
		<div class="scroll-area">
			<div class="top-wrap">
				<div class="go-top-btn-wraper">
					<div class="go-top go-top-button">
						<i class="fas fa-arrow-up"></i>
						<i class="fas fa-arrow-up"></i>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- Start scrollup section Area -->
		<!--==================================================-->

		<!-- jquery js -->
		<script src="static/js/jquery-3.6.2.min.js"></script>
		<script src="static/js/popper.min.js"></script>
		<!-- bootstrap js -->
		<script src="static/js/bootstrap.min.js"></script>
		<!-- carousel js -->
		<script src="static/js/owl.carousel.min.js"></script>
		<!-- counterup js -->
		<script src="static/js/jquery.counterup.min.js"></script>
		<!-- waypoints js -->
		<script src="static/js/waypoints.min.js"></script>
		<!-- wow js -->
		<script src="static/js/wow.js"></script>
		<!-- imagesloaded js -->
		<script src="static/js/imagesloaded.pkgd.min.js"></script>
		<!-- venobox js -->
		<script src="static/js/venobox.js"></script>

		<!--  animated-text js -->
		<script src="static/js/animated-text.js"></script>
		<!-- venobox min js -->
		<script src="static/js/venobox.min.js"></script>
		<!-- isotope js -->
		<script src="static/js/isotope.pkgd.min.js"></script>
		<!-- jquery meanmenu js -->
		<script src="static/js/jquery.meanmenu.js"></script>

		<!-- jquery scrollup js -->
		<script src="static/js/jquery.scrollUp.js"></script>
		<!-- theme js -->
		<script src="static/js/theme.js"></script>
		<!-- barfiller -->
		<script src="static/js/jquery.barfiller.js"></script>
		<!-- 将字体转换为繁体 -->
		<script src="static/js/jfzh.js"></script>
	</body>

</html><?php return array (
  0 => '/www/wwwroot/www.cardking.tw/template/html/comm/head.html',
  1 => '/www/wwwroot/www.cardking.tw/template/html/comm/foot.html',
); ?>