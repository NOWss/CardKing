<!DOCTYPE HTML>
<html lang="en-US">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>itpro-Finance Consulting HTML5 Template</title>
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
		<!--  Start Header Slider Section -->
		<!--===================================================-->
		<div class="breadcumb-area d-flex align-items-center">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-12">
						<div class="breadcumb-content">
							<h1>{sort:name}</h1>
							<ul>
								<li><a href="index.html">主页</a></li>
								<li>{sort:name}</li>
							</ul>
						</div>
					</div>
					<div class="britcam-shape">
						<div class="breadcumb-content upp">
							<ul>
								<li><a href="index.html">主页</a></li>
								<li>{sort:name}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>






		<!-- ========================================================= -->
		<!-- Start abouts area  -->
		<!-- ========================================================= -->
		<div class="abouts_areas">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="singles_abouts_boxs">
							<div class="abouts_thumb">
								<img src="static/picture/abouts_1.png" alt="">
								<div class="about-inner-content">
									<div class="abouts_titles">
										<h3>All in one web solution for your digital business </h3>
										<div class="abouts_icons">
											<a href="#"><i class="fas fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="singles_abouts_boxs">
							<div class="abouts_thumb">
								<img src="static/picture/abouts_2.png" alt="">
								<div class="abouts_titles upper">
									<h3>The top best digital agency in new road market usa </h3>
									<div class="abouts_icons">
										<a href="#"><i class="fas fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=================================================-->
		<!-- START  feture-area Section -->
		<!--=================================================-->
		<div class="feature-area style-two">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="itpro-section-title">
							<h5> Features </h5>
							<h2> We Are Global Stakeholder Over 2000+ <span> Companies </span></h2>
							<p class="about-text1"> Appropriately enhance principle-centered innovation rather than high
								standards in platforms. Credibly orchestrate functional. </p>
						</div>
						<div class="unique-theme-icon-list">
							<ul>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process </span>
								</li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
										paradigms </span></li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
										paradigms </span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<!-- Hero -->
						<div class="tab">

							<ul class="tabs">
								<li><a href="#">Full Satisfaction</a></li>
								<li><a href="#">Expart Team</a></li>
								<li><a href="#">Mission & Vission</a></li>
							</ul> <!-- / tabs -->

							<div class="tab_content">

								<div class="tabs_item">
									<img src="static/picture/img-1.png" alt="business image">
									<ul class="tabs-inner-list">
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
										<li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
										<li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span>
										</li>
										<li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
									</ul>
								</div> <!-- / tabs_item -->

								<div class="tabs_item">
									<img src="static/picture/img-2.png" alt="Image">
									<ul class="tabs-inner-list">
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
										<li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
										<li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span>
										</li>
										<li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
									</ul>
								</div> <!-- / tabs_item -->

								<div class="tabs_item">
									<img src="static/picture/img-3.png" alt="Image">
									<ul class="tabs-inner-list">
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
										<li><i class="fas fa-check"></i><span>Entums estibulum dignissim posuere</span></li>
										<li><i class="fas fa-check"></i><span>Quality users after Breed Applications.</span>
										</li>
										<li><i class="fas fa-check"></i><span>Market Positioning Expertise.</span></li>
										<li><i class="fas fa-check"></i><span>Rather than unique Idea.</span></li>
									</ul>
								</div> <!-- / tabs_item -->

							</div> <!-- / tab_content -->
						</div> <!-- / tab -->
					</div>
				</div>
			</div>
		</div>


		<!--==================================================-->
		<!-- Start itpro Testimonial Area -->
		<!--==================================================-->
		<div class="testimonial-area">
			<div class="container">
				<div class="row testi-rotate align-items-center">
					<div class="col-lg-7 col-md-6">
						<div class="itpro-section-title white pb-50">
							<h5> Testimonials </h5>
							<h2> itpro Trusted Customers </h2>
							<h2> Awesome <span> Reviews </span></h2>
						</div>
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="row">
							<div class="col-6">
								<div class="testi-counter-box upper">
									<div class="testi-counter-title">
										<h3 class="counter"> 1,372 </h3>
										<span>+</span>
										<p> Happy Customers </p>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="testi-counter-box">
									<div class="testi-counter-title">
										<h3 class="counter"> 100 </h3>
										<span>%</span>
										<p> Satisfaction Rate </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testi-shape-thumb1 rotateme">
						<img src="static/picture/testimonial-map.png" alt="">
					</div>
				</div>
				<div class="row">
					<div class="testimonial_list owl-carousel">
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi1.png" alt="">
										</div>
										<div class="quote-title">
											<h4>Philip Anthorpy</h4>
											<p>UI Designer</p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi3.png" alt="">
										</div>
										<div class="quote-title">
											<h4> Shilpa Shethy </h4>
											<p> CEO, Founder </p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi2.png" alt="">
										</div>
										<div class="quote-title">
											<h4> David Alexon </h4>
											<p> MH Manager </p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi3.png" alt="">
										</div>
										<div class="quote-title">
											<h4> Shilpa Shethy </h4>
											<p> CEO, Founder </p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi2.png" alt="">
										</div>
										<div class="quote-title">
											<h4> David Alexon </h4>
											<p> MH Manager </p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi1.png" alt="">
										</div>
										<div class="quote-title">
											<h4>Philip Anthorpy</h4>
											<p>UI Designer</p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pr-1">
							<div class="testimonial-single-box">
								<div class="testimonial-content1">
									<div class="single-quote-icon">
										<div class="quote-thumb">
											<img src="static/picture/testi2.png" alt="">
										</div>
										<div class="quote-title">
											<h4> David Alexon </h4>
											<p> MH Manager </p>
										</div>
									</div>
									<div class="em-testimonial-text">
										<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
											productivate media”.</p>
									</div>
									<div class="em-testi-start-icon">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-half"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testi-shape">
						<div class="testi-shape-thumb">
							<img src="static/picture/all-shape5.png" alt="">
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro Testimonial Area -->
		<!--==================================================-->




		<!--==================================================-->
		<!--  Start  Counter Section -->
		<!--===================================================-->
		<div class="counter-section style-33 pt-30 pb-80">
			<div class="container">
				<div class="counter-container">
					<div class="row hr pt-40">
						<div class="col-md-6 col-lg-4">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">60</span></h1>
										<span></span>
										<div class="counter-title">
											<h4>Member</h4>
											<h3>Professional</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">70</span></h1>
										<span></span>
										<div class="counter-title">
											<h4>Projects</h4>
											<h3>Completed</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">90</span></h1>
										<span></span>
										<div class="counter-title">
											<h4>Client</h4>
											<h3>Satisfactions</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!--==================================================-->
		<!-- Start itpro Team Area -->
		<!--==================================================-->
		<div class="team_area style-two">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="itpro-section-title upper text-center pb-60">
							<h5> Team Member </h5>
							<h2> Let’s Meet with Our <span> Experts </span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single_team">
							<div class="single_team_thumb1">
								<img src="static/picture/team-1.jpg" alt="image">
							</div>
							<div class="single_team_content">
								<div class="team-title">
									<h4>Silvia Garden</h4>
									<span>Designer</span>
								</div>
								<div class="single_team_icon">
									<a href="#"> <i class="bi bi-facebook"></i> </a>
									<a href="#"> <i class="bi bi-twitter"></i> </a>
									<a href=""><i class="bi bi-dribbble"></i></a>
									<a href="#"> <i class="bi bi-instagram"> </i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single_team">
							<div class="single_team_thumb1">
								<img src="static/picture/team-2.jpg" alt="image">
							</div>
							<div class="single_team_content">
								<div class="team-title">
									<h4> Monalisha Shen </h4>
									<span> IT-Executive </span>
								</div>
								<div class="single_team_icon">
									<a href="#"> <i class="bi bi-facebook"></i> </a>
									<a href="#"> <i class="bi bi-twitter"></i> </a>
									<a href=""><i class="bi bi-dribbble"></i></a>
									<a href="#"> <i class="bi bi-instagram"> </i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single_team">
							<div class="single_team_thumb1">
								<img src="static/picture/team-3.jpg" alt="image">
							</div>
							<div class="single_team_content">
								<div class="team-title">
									<h4>Bubli Khanam</h4>
									<span>Developer</span>
								</div>
								<div class="single_team_icon">
									<a href="#"> <i class="bi bi-facebook"></i> </a>
									<a href="#"> <i class="bi bi-twitter"></i> </a>
									<a href=""><i class="bi bi-dribbble"></i></a>
									<a href="#"> <i class="bi bi-instagram"> </i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro Team Area -->
		<!--==================================================-->




		<!--==================================================-->
		<!-- Start  FAQ Section -->
		<!--===================================================-->
		<div class="faq-sectiions ">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="itpro-section-title white pb-1 mb-1">
							<h5> process </h5>
							<h2> Freequently Asked <span> Question </span></h2>
							<p class="study-text1"> Appropriately enhance principle-centered innovation rather than high
								standards in platforms. Credibly orchestrate functional. </p>
						</div>
						<div class="unique-theme-icon-list">
							<ul>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process </span>
								</li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
										paradigms </span></li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process </span>
								</li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
										paradigms </span></li>
							</ul>
						</div>
						<div class="why-choose-button">
							<a href=""> <i class="bi bi-gear"></i> More About </a>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 pl-0">
						<!-- Start Accordion -->
						<div class="tab_container pl-30 pt-20">
							<div id="tab1" class="tab_content">
								<ul class="accordion">
									<li>
										<a><span> What is Finance Consultant? </span></a>
										<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
											Credib generate team building vorta after professional value. Proactively
											administrate enabled paradigm</p>
									</li>
									<li>
										<a><span> How to Book a New Consultant? </span></a>
										<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
											Credib generate team building vorta after professional value. Proactively
											administrate enabled paradigm</p>
									</li>
									<li>
										<a><span> How to Book a New Consultant? </span></a>
										<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
											Credib generate team building vorta after professional value. Proactively
											administrate enabled paradigm</p>
									</li>
									<li>
										<a><span> How to Book a New Consultant? </span></a>
										<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
											Credib generate team building vorta after professional value. Proactively
											administrate enabled paradigm</p>
									</li>
								</ul>
							</div>
						</div>
						<!-- End Accordion -->
					</div>
				</div>
			</div>
		</div>







		<!--==================================================-->
		<!--Start  Brand Section -->
		<!--===================================================-->
		<div class="new-brand-area">
			<div class="container">
				<div class="row">
					<div class="owl-carousel single_brand">
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands_1.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands_2.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands_3.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands_4.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands_5.png" alt="">
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-12">
							<div class="single_brand-box">
								<div class="ingle_brand-tmb">
									<img src="static/picture/brands.png" alt="">
								</div>
							</div>
						</div> -->

					</div>
				</div>
			</div>
		</div>





		<!--==================================================-->
		<!-- Start itpro Subscribe Area -->
		<!--==================================================-->
		<!-- <div class="subscribe-area style-two mt-5 mt-sm-0">
			<div class="container">
				<div class="subscribe">
					<div class="row align-items-center">
						<div class="col-lg-4 col-md-12">
							<div class="subscribe-title">
								<h1>Get your Free Business Consolution</h1>
							</div>
						</div>
						<div class="col-lg-8 col-md-12">
							<a href="tel:09837393403" class="subscribe-icon">
								<i class="bi bi-telephone-inbound"></i>
							</a>
							<div class="subscribe-title2">
								<h1> +98 376 (2890) 100 </h1>
								<p> example@gmail.com </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--==================================================-->
		<!-- End itpro Subscribe Area -->
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