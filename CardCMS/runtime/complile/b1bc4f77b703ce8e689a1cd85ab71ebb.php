<!DOCTYPE HTML>
<html lang="en-US">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>itpro - Finance Consulting HTML5 Template</title>
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
          <a class="logo_img" href="" title="itpro">
            <img src="static/picture/logo.png" alt="logo">
          </a>
          <a class="main_sticky" href="" title="itpro">
            <img src="static/picture/logo.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-lg-9 pl-0 pr-0">
        <nav class="itpro_menu">
          <ul class="nav_scroll">
            <li><a href="/">主页</a></li>
            <li><a href="/?about">优势</a></li>
            <li><a href="#product">支持平台</a></li>
            <li><a href="#koubei">口碑</a></li>
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
          </ul>
          <div class="menu_icon">
            <div>&nbsp;</div>
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
        <li><a href="{pboot:sitedomain}/">主页</a></li>
        <li><a href="#service">优势</a></li>
        <li><a href="#product">支持平台</a></li>
        {pboot:nav num=10 parent=0}
        <li><a href="[nav:link]">[nav:name]</a>
          {pboot:if([nav:soncount]>0)}
          <ul class="sub-menu">
            {pboot:2nav parent=[nav:scode]}
            <li><a href='[2nav:link]'>[2nav:name]</a></li>
            {/pboot:2nav}
          </ul>
          {/pboot:if}
        </li>
        {/pboot:nav}
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
							<h1> Contact Us </h1>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li> Contact Us </li>
							</ul>
						</div>
					</div>
					<div class="britcam-shape">
						<div class="breadcumb-content upp">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li> Contact Us </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--==================================================-->
		<!-- Start Appoinment Section -->
		<!--===================================================-->
		<div class="contact-us pt-90 pb-90">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
						<div class="contact_from_box">
							<div class="contact_title pb-4">
								<h3>Get In Touch</h3>
							</div>
							<form action="#" method="POST" id="unique-theme-form">
								<div class="row">
									<div class="col-lg-6">
										<div class="form_box mb-30">
											<input type="text" name="name" placeholder="Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box mb-30">
											<input type="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box mb-30">
											<input type="text" name="phone" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box mb-30">
											<input type="text" name="web" placeholder="Website">
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form_box mb-30">
											<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
										</div>
										<div class="quote_button">
											<button class="btn" type="submit"> <i class="bi bi-gear"></i> Free Consultant
											</button>
										</div>
									</div>
								</div>
							</form>
							<div id="status"></div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
						<div class="cda-content-area">
							<div class="cda-single-content d-flex">
								<div class="cda-icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="cda-content-inner">
									<h4>Company Location</h4>
									<p>Durham Street Hialeah, <br>FL 33010, USA</p>
								</div>
							</div>
							<div class="cda-single-content hr d-flex">
								<div class="cda-icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="cda-content-inner">
									<h4>Telephone Number</h4>
									<p>+880 636 524 265, <br>+880 636 524 265, </p>
								</div>
							</div>
							<div class="cda-single-content hr d-flex">
								<div class="cda-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="cda-content-inner">
									<h4>Our Email Address</h4>
									<p>yourinfo@gmail.com <br>yourmail@gmail.com</p>
								</div>
							</div>
							<div class="cda-single-content hr d-flex">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- Start Contact Location Section -->
		<!--===================================================-->





		<!--==================================================-->
		<!-- Start itpro Footer Middle Area -->
		<!--==================================================-->
		<!--==================================================-->
<!-- Start itpro Footer Middle Area -->
<!--==================================================-->
<div class="footer-middle">
  <div class="container">
    <!-- <div class="subscribe-area">
					<div class="row ">
						<div class="col-lg-6 col-md-6">
							<div class="subscribe-title">
								<h1>Subscribe to our Newsletter</h1>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<form action="#" method="POST" id="unique-theme-form">
								<div class="subscribe_form">
									<input type="email" name="email" id="email" class="form-control" required=""
										data-error="Please enter your email" placeholder="Enter Your Email">
									<button type="submit" class="btn">Subscribe</button>
								</div>
								<div class="subscribe_form_send">
								</div>
							</form>
							<div id="status"></div>
						</div>
					</div>
					<div class="subscribe-shape">
						<div class="subscribe-thumb bounce-animate5">
							<img src="static/picture/small-dot.png" alt="">
						</div>
						<div class="subscribe-thumb1">
							<img src="static/picture/big-dot.png" alt="">
						</div>
					</div>
				</div> -->

    <div class="footer-bg">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="widget widgets-company-info mb-4 mb-lg-0">
            <div class="company-info-desc pr-2">
              <h4 class="widget-title"> 联系我们 </h4>
            </div>
            <div class="follow-company-icon">
              <p class="icon-content">
                <a class="social-icon-color" href="#"> <i class="bi bi-telephone"></i> </a>
                <span>Telegram: @oklacom</span>
              </p>
              <p class="icon-content">
                <a class="social-icon-color2" href="#"> <i class="bi bi-envelope"></i> </a>
                <span>ad@okla.app</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="widget widget-nav-menu">
            <h4 class="widget-title">导航</h4>
            <div class="menu-quick-link-content">
              <ul class="footer-menu">
                <li><a href="/">主页</a></li>
                <li><a href="/?about">优势</a></li>
                <li><a href="#product">支持平台</a></li>
                <li><a href="#koubei">口碑</a></li>
                {pboot:nav num=10 parent=0}
                <li><a href="[nav:link]">[nav:name]</a>
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
            <a class="logo_thumb" href="" title="itpro">
              <img src="static/picture/logo.png" alt="logo">
            </a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="footer-bottom-content">
            <div class="footer-bottom-content-copy">
              <p>Copyright &copy; 2023.Company name All rights reserved.</p>
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
  1 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/foot.html',
); ?>