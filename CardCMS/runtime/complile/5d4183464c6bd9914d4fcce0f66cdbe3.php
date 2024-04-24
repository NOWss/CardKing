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
            <li><a href="{pboot:sitedomain}#product">付款卡特点</a></li>
            <li><a href="{pboot:sitedomain}#service">使用场景</a></li>
            <li><a href="{pboot:sitedomain}#youshi">安全</a></li>
            <li><a href="{pboot:sitedomain}#contact">我们的团队</a></li>
            <li><a href="{pboot:sitedomain}#contact">最新资讯</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3 pl-0 pr-0">
        <div class="header_right_btn">
          <div class="img-box">
            <img src="static/images/Sign in.png">
          </div>
          <div class="text-box">
            <a href="#">Sign up  |  Log in</a>
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
		<div class="breadcumb-area d-flex align-items-center">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-12">
						<div class="breadcumb-content">
							<h1> {sort:name} </h1>
							<ul>
								<li><a href="/">主页</a></li>
								<li><a href="/?article">新闻</a></li>
								<li> {sort:name} </li>
							</ul>
						</div>
					</div>
					<div class="britcam-shape">
						<div class="breadcumb-content upp">
							<ul>
								<li><a href="/">主页</a></li>
								<li><a href="/?article">新闻</a></li>
								<li> {sort:name} </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--==================================================-->
		<!--START BLOG  Section -->
		<!--===================================================-->
		<div class="blog-section style-two details">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="blog-single-items">
							<!-- <div class="blog-thumb">
								<img src="static/picture/blog-4.jpg" alt="Blog img">
							</div> -->
							<div class="blog-content">
								<div class="blog-content-text text-left">
									<h5>{content:title}</h5>
									<div class="blog-meta" style="margin: 20px 0;">
										<span>{content:date style=Y-m-d}</span>
										<span class="tag-item">
											{pboot:tags id={content:id}}
											<span href="#">[tags:text]</span>
											{/pboot:tags}
										</span>
									</div>
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
					<div class="col-lg-4 col-md-8">
  <div class="widget-items mt-5 mt-lg-0 mb-40">
    <form action="#" method="get" action="{pboot:scaction}">
      <input type="text" class="src-input-box" placeholder="Search Here" name="keyword" value="" title="src-input-box">
      <button class="src-icon" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </div>
  <div class="widget-items mb-40" style="padding: 0px;">
    <!-- <div class="widget-title">
      <h2>广告</h2>
    </div> -->
    <div class="owl-carousel owl-theme" id="owl-demo">
      {pboot:slide gid={sort:def3} num=5}
      <div class="item">
        <a href="[slide:link]"><img src="[slide:src]" style="width: 100% !important; height: auto;"></a>
      </div>
      {/pboot:slide}
    </div>
  </div>
  <!-- <div class="widget-items mb-40">
    <div class="widget-title">
      <h2>关键字</h2>
    </div>
    <div class="tag-item">
      {pboot:tags id={content:id}}
      <a href="#">[tags:text]</a>
      {/pboot:tags}
    </div>
  </div> -->
  <div class="widget-items mb-40">
    <div class="widget-title">
      <h2>推荐新闻</h2>
    </div>
    <div class="catagory-item">
      <ul>
        {pboot:list scode=2 num=10 order=sorting}
        <li class="hr-3">
          <a href="[list:link]">[list:title]</a>
        </li>
        {/pboot:list}
      </ul>
    </div>
  </div>

</div>
<script src="static/js/jquery-3.6.2.min.js"></script>

<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
      // margin: 10,
      loop: true,
      // autoWidth: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 3000,
    });
  });

</script>
				</div>
			</div>
		</div>





		<!--==================================================-->
		<!-- Start itpro Footer Middle Area -->
		<!--==================================================-->
		<div class="footer-middle style-two upper" id="contact">
  <div class="container">
    <div class="footer-bg">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="widget widgets-company-info mb-4 mb-lg-0">
            <div class="company-info-desc pr-2">
              <h4 class="widget-title"> 联系我们 </h4>
            </div>
            <div class="follow-company-icon">
              <p class="icon-content">
                <a class="social-icon-color" href="javascript:void(0);"> <i class="bi bi-send"></i> </a>
                <!-- <span>{pboot:companyphone}</span> -->
              </p>
              <p class="icon-content">
                <a class="social-icon-color2" href="javascript:void(0);"> <i class="bi bi-envelope"></i> </a>
                <!-- <span>{pboot:companyemail}</span> -->
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="widget widget-nav-menu">
            <h4 class="widget-title">导航</h4>
            <div class="menu-quick-link-content">
              <ul class="footer-menu">
                <li><a href="{pboot:sitedomain}#home">主页</a></li>
                <li><a href="{pboot:sitedomain}#product">推荐套餐</a></li>
                <li><a href="{pboot:sitedomain}#service">适用平台</a></li>
                <li><a href="{pboot:sitedomain}#youshi">优势</a></li>
                {pboot:nav num=10 parent=0}
                <li><a href="[nav:link]">[nav:name]</a></li>
                {/pboot:nav}
              </ul>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-6">
							<div class="widget widget-nav-menu">
								<h4 class="widget-title"> Services </h4>
								<div class="menu-quick-link-content">
									<ul class="footer-menu">
										<li><a href="#"> Strategy & Planing </a></li>
										<li><a href="#"> Consumer Market </a></li>
										<li><a href="#"> Data Analysis </a></li>
										<li><a href="#"> Corporate Finance </a></li>
										<li><a href="#"> Market Research </a></li>
									</ul>
								</div>
							</div>
						</div> -->
        <div class="col-lg-4 col-sm-6">
          <div id="em-recent-post-widget" class="mt-5 mt-sm-0">
            <div class="single-widget-item">
              <h4 class="widget-title">注意</h4>
              <p style="color: #fff;">Address: 10 Anson Road, #32 International Plaza, Singapore 079903。
                Important: 仅支持美元付款，任何非美元收款的通道，可能存在诈骗风险，请注意辨别.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="foorer-shape">
						<div class="footer-thumb">
							<img src="static/picture/red-dot.png" alt="">
						</div>
						<div class="footer-thumb1 bounce-animate2">
							<img src="static/picture/all-shape.png" alt="">
						</div>
					</div> -->
    </div>

  </div>
  <div class="footer-bottom-area d-flex align-items-center">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4">
          <div class="itpro-logo">
            <a class="logo_thumb" href="/" title="itpro">
              <img src="static/picture/logo.png" alt="logo">
            </a>
          </div>
        </div>
        <div class="col-md-8">
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
	</body>

</html><?php return array (
  0 => '//LAPTOP-PIMM19LB/CARDCMS/template/html/comm/head.html',
  1 => '//LAPTOP-PIMM19LB/CARDCMS/template/html/comm/right.html',
  2 => '//LAPTOP-PIMM19LB/CARDCMS/template/html/comm/foot.html',
); ?>