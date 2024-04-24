<!DOCTYPE HTML>
<html lang="en-US">

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
<div id="sticky-header" class="itpro_nav_manu">
  <div class="container">
    <div class="row btm-bg align-items-center">
      <div class="col-lg-3">
        <div class="logo">
          <a class="logo_img" href="" title="WasData">
            <img src="static/picture/logo.png" alt="logo" width="170">
          </a>
          <a class="main_sticky" href="" title="WasData">
            <img src="static/picture/logo.png" alt="logo" width="170">
          </a>
        </div>
      </div>
      <div class="col-lg-9 pl-0 pr-0">
        <nav class="itpro_menu">
          <ul class="nav_scroll">
            <li><a href="{pboot:sitedomain}#home">主页</a></li>
            <li><a href="{pboot:sitedomain}#product">推荐套餐</a></li>
            <li><a href="{pboot:sitedomain}#service">适用平台</a></li>
            <li><a href="{pboot:sitedomain}#youshi">优势</a></li>
            {pboot:nav num=10 parent=0}
            <li><a href="[nav:link]">[nav:name]</a>
              {pboot:if([nav:soncount]>0)}
              <ul class="sub-menu">
                {pboot:2nav parent=[nav:scode]}
                <li><a href="[2nav:link]">[2nav:name]</a></li>
                {/pboot:2nav}
              </ul>
              {/pboot:if}
            </li>
            {/pboot:nav}
            <li><a href="{pboot:sitedomain}#contact">联系我们</a></li>
          </ul>
          <div class="menu_icon">
            <div class="header-menu-icon">
              <div class="regist-button" style="margin-right: 0;">
                <a href="#" style="padding: 5px 25px;">注册</a>
              </div>
            </div>
            <div class="header-menu-icon">
              <div class="slider-button">
                <a href="#" style="padding: 5px 25px;">登录</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- itpro Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
  <div class="mobile-menu">
    <nav class="itpro_menu">
      <ul class="nav_scroll">
        <li><a href="/">主页</a></li>
        <li><a href="#product">推荐套餐</a></li>
        <li><a href="#service">适用平台</a></li>
        <li><a href="#youshi">优势</a></li>
        {pboot:nav num=10 parent=0}
        <li><a href="[nav:link]">[nav:name]</a>
          {pboot:if([nav:soncount]>0)}
          <ul class="sub-menu">
            {pboot:2nav parent=[nav:scode]}
            <li><a href="[2nav:link]">[2nav:name]</a></li>
            {/pboot:2nav}
          </ul>
          {/pboot:if}
        </li>
        {/pboot:nav}
        <li><a href="#contact">联系我们</a></li>
      </ul>
    </nav>
  </div>
</div>
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
							<h1>{sort:name}</h1>
							<ul>
								<li><a href="/">主页</a></li>
								<li>{sort:name}</li>
							</ul>
						</div>
					</div>
					<div class="britcam-shape">
						<div class="breadcumb-content upp">
							<ul>
								<li><a href="/">主页</a></li>
								<li>{sort:name}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--==================================================-->
		<!-- Start itpro Blog Area -->
		<!--==================================================-->
		<div class="blog-area style-two page">
			<div class="container">
				<div class="row">
					{pboot:list num=15 order=sorting}
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<!-- <div class="single-blog-thumb">
								<img src="static/picture/blog1.png" alt="">
								<div class="blog-top-button">
									<a href="#"> GRAPHIC </a>
								</div>
							</div> -->
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p>[list:date style=Y-m-d]</p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="[list:link]">[list:title]</a> </h2>
								</div>
								<div class="context" style="margin-bottom: 30px;">
									<p>[list:content drophtml=1 dropblank=1 lencn=60]</p>
								</div>
								<!-- <div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Alex Collins </h6>
									</div>
								</div> -->
								<div class="blog-button">
									<a href="[list:link]"> Read More</a>
								</div>
							</div>
						</div>
					</div>
					{/pboot:list}
					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="static/picture/blog2.png" alt="">
								<div class="blog-top-button">
									<a href="#"> DEVELOPMENT </a>
								</div>
							</div>
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p> August 21, 2023 </p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="blog-details.html"> How to Increase Business Products Sales </a> </h2>
								</div>
								<div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Julia Moris </h6>
									</div>
								</div>
								<div class="blog-button">
									<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="static/picture/blog3.png" alt="">
								<div class="blog-top-button">
									<a href="#"> DESIGN </a>
								</div>
							</div>
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p> August 20, 2023 </p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="blog-details.html"> Top 10 Most Populars Google Chrome app</a>
									</h2>
								</div>
								<div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Amantha </h6>
									</div>
								</div>
								<div class="blog-button">
									<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="static/picture/blog-sm-1.jpg" alt="">
								<div class="blog-top-button">
									<a href="#"> GRAPHIC </a>
								</div>
							</div>
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p> August 25, 2023 </p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="blog-details.html"> Popular Consultants are big Meetup 2023 </a> </h2>
								</div>
								<div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Alex Collins </h6>
									</div>
								</div>
								<div class="blog-button">
									<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="static/picture/blog-sm-2.jpg" alt="">
								<div class="blog-top-button">
									<a href="#"> DEVELOPMENT </a>
								</div>
							</div>
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p> August 21, 2023 </p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="blog-details.html"> How to Increase Business Products Sales </a> </h2>
								</div>
								<div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Julia Moris </h6>
									</div>
								</div>
								<div class="blog-button">
									<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="static/picture/blog-sm-1.jpg" alt="">
								<div class="blog-top-button">
									<a href="#"> DESIGN </a>
								</div>
							</div>
							<div class="em-blog-content">
								<div class="meta-blog-text">
									<p> August 20, 2023 </p>
								</div>
								<div class="em-blog-title">
									<h2> <a href="blog-details.html"> Top 10 Most Populars Google Chrome app</a>
									</h2>
								</div>
								<div class="em-blog-icon">
									<div class="em-blog-thumb">
										<img src="static/picture/blog-icon.png" alt="">
									</div>
									<div class="em-blog-icon-title">
										<h6> Amantha </h6>
									</div>
								</div>
								<div class="blog-button">
									<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-12">
  <div class="pagination justify-content-center mt-4">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fas fa-angle-double-right"></i></a>
  </div>
</div> -->
<style>
  .page-num {
    font-size: 18px;
    font-weight: 500;
    color: #FF3C00;
    float: left;
    text-decoration: none;
    transition: background-color .3s;
    margin: 0 4px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    height: 40px;
    width: 40px;
    line-height: 40px;
    text-align: center;
    cursor: pointer;
  }

  .page-num a:hover {
    color: #fff;
    background-color: #FF3C00;
  }

  .page-num-current {
    z-index: 1;
    color: #fff !important;
    background-color: #FF3C00;
    /* border-color: #36c95f8; */
  }
</style>
{pboot:if({page:rows}>0)}
<div class="col-12">
  <nav aria-label="page navigation pagination justify-content-center mt-4" class="my-4">
    <div class="pagination justify-content-center">
      <a href="{page:index}"><i class="fas fa-angle-double-left"></i></a>
      <!-- <a class="page-item page-link" href="{page:pre}">上一页</a> -->
      {page:numbar}<!-- 数字条，小屏幕时自动隐藏-->
      <!-- <a class="page-item page-link" href="{page:next}">下一页</a> -->
      <a href="{page:last}"><i class="fas fa-angle-double-right"></i></a>
    </div>
  </nav>
  {else}
  <div class="text-center my-5 text-secondary">未查询到任何数据！</div>
  {/pboot:if}
</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro Blog Area -->
		<!--==================================================-->




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
                <a class="social-icon-color" href="#"> <i class="bi bi-send"></i> </a>
                <span>{pboot:companyphone}</span>
              </p>
              <p class="icon-content">
                <a class="social-icon-color2" href="#"> <i class="bi bi-envelope"></i> </a>
                <span>{pboot:companyemail}</span>
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
  0 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/head.html',
  1 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/page.html',
  2 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/foot.html',
); ?>