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
		<!-- Start itpro slider Area -->
		<!--==================================================-->
		<div class="slider-area d-flex align-items-center" id="home">1
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="slider_left_site">
							<div class="slider-content" style="text-align: center; margin-top: 150px;">
								<h3> <span>全自动化操作·精准标签检测·AI数据秒出·365天24小时运维服务</span> </h3>
								<h1> 全球首家<span style="color: #05c455;">包日·包流量</span>号码筛选平台
								</h1>
								<div class="slider-text">
									<!-- <p>The world's most accurate and cheapest
										Group Buying Filter</p> -->
								</div>
							</div>
							<div class="banner-buttons center-button">
								<div class="header-button">
									<a href="#" style="font-size: 16px; padding: 10px 40px;">立即注册</a>
								</div>
								<div class="header-button">
									<a href="#" style="font-size: 16px; padding: 10px 42px; margin-left: 10px;">防伪查询</a>
								</div>
								<!-- <div class="slider-video">
									<div class="video-icon">
										<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="#"><i
												class="fa fa-play"></i></a>
									</div>
								</div> -->
							</div>
							<div class="slider_left_shapes bounce-animate2">
								<img src="static/picture/circle-3.png" alt="">
							</div>
							<div class="slider_left_shap bounce-animate">
								<img src="static/picture/circle-2.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="slider_right_site">
							<div class="slider_right_thumb center-button">
								<img src="static/picture/hero-img.png" alt="">
							</div>
							<div class="slider_shape bounce-animate">
								<img src="static/picture/top_img.png" alt="">
							</div>
							<div class="slider_shap rotateme">
								<img src="static/picture/circle.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!--End itpro slider Area  -->
		<!--==================================================-->



		<!--==================================================-->
		<!-- End itpro about Area -->
		<!--==================================================-->
		<div class="service_area" id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="itpro-section-title mobile-center">
							<h4>我们所做的</h4>
							<h2>致力于全球热门社交APP的数据筛选</h2>
						</div>
					</div>
				</div>
				<div class="row">
					{pboot:list scode=6 num=20 order=sorting}
					<div class="col-lg-4 col-md-6">
						<div class="single_service_box">
							<div class="service_content">
								<div class="service_icon_img">
									<img src="[list:ext_svg]" alt="">
									<h3>[list:title]</h3>
								</div>
								<div class="service_title">
									<p>[list:content]</p>
								</div>
								<div class="services_button">
									<a href="javascript:void(0);">
										<span>筛开通</span>
										{pboot:if([list:tags] != 13)}
										<span>筛活跃</span>
										{/pboot:if}
										{pboot:if([list:tags] != 12)}
										<span>筛性别</span>
										{/pboot:if}
										<i class="bi bi-arrow-up-right"></i>
									</a>
									<!-- <a href="#"></a>
									<a href="#"></a>
									<a href="#"> </a> -->
								</div>
							</div>
						</div>
					</div>
					{/pboot:list}

					<div class="service_shape bounce-animate">
						<img src="static/picture/ser_shape.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro about Area -->
		<!--==================================================-->



		<!--==================================================-->
		<!-- Start itpro_about_area -->
		<!--==================================================-->
		<div class="itpro_about_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single_about_left bounce-animate2">
							<div class="about_thumb">
								<img src="static/picture/abou_img1.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single_about_right">
							<div class="itpro-section-title mobile-center">
								<h4 style="color: #000 !important;">产品优势</h4>
								<h2 style="font-size: 28px;"> 全球号码筛选计费包流量套餐<span style="color: red;font-size: 24px;">（按天/按月）</span></h2>
							</div>
							<div class="section_description">
								<p>全球首创，按套餐筛选量计费购买。 根据你的实际情况选择购买适合您的流量套餐，自由搭配，最大化您的资金使用率。</p>
							</div>
							<div class="about_icon_box">
								<div class="row">
									<div class="col-lg-6">
										<div class="icon_img">
											<img src="static/picture/about_icon_img.png" alt="">
										</div>
										<div class="about_title">
											<h3>24小时自动<br> 充值购买</h3>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="icon_img">
											<img src="static/picture/about_icon_img-1.png" alt="">
										</div>
										<div class="about_title">
											<h3>在线人工客服 <br> 解答</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="about_btn">
								<a href="#">马上注册 <i class="bi bi-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro_about_area -->
		<!--==================================================-->





		<!--==================================================-->
		<!--  Start  Counter Section -->
		<!--===================================================-->

		<div class="counter_area">
			<div class="container">
				<div class="counter-container">
					<div class="row hr pt-35">
						<div class="col-lg-3 col-md-6">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">{label:xiazai}</span></h1>
										<div class="counter-title">
											<h4>在线功能</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">{label:dianzan}</span></h1>
										<div class="counter-title">
											<h4>平台用户</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">{label:haoping}</span><span>万</span></h1>

										<div class="counter-title">
											<h4>日筛选数</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="counter-single-item-inner d-flex">
								<div class="counter-content">
									<div class="counter-text">
										<h1><span class="counter">{label:jiangpin}</span><span>万</span></h1>
										<div class="counter-title">
											<h4>日完成数</h4>
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
		<!--  End  Counter Section -->
		<!--===================================================-->

		<!--==================================================-->
		<!-- Start itpro Blog Area -->
		<!--==================================================-->
		<div class="blog_area card" id="product">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="itpro-section-title mobile-center">
							<h4>产品套餐</h4>
							<h2> 推荐产品</h2>
						</div>
						<div class="section_description">
							<p>用最优惠的价格购买套餐进行筛选，更划算！</p>
						</div>
						<div class="blog_buttons">
							<a href="#">去购买<i class="bi bi-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					{pboot:list scode=21 num=20 order=sorting}
					<div class="col-sm-12 col-md-6 col-lg-4 " style=" z-index: 2">
						<div class="pricing-single-items">
							<div class="pricing-thumb pt-25">
								<img src="[list:ext_svg]" alt="Pricing Img" width="50px">
							</div>
							<div class="pricing-title">
								<h3 class="">[list:title]</h3>
							</div>
							<div class="pricing-item-text mb-15 ">
								<span class="currency">$</span>
								<span class="tk">[list:subtitle]</span>
								<span class="month"> / 次 </span>
							</div>
							<div class="pricing-body">
								<div class="pricing-feature mb-40">
									[list:content]
									<!-- <ul>
										<li>套餐总计优惠<span class="" style="font-size: 20px; font-weight: bold;"> 40% </span></li>
										<li>更优惠的价格，更多的筛选量</li>
										<li>可用于 <span class="" style="font-size: 20px; font-weight: bold;">Zalo</span> 筛开通</li>
										<li>总数 <span class="" style="font-size: 20px; font-weight: bold;">1000000</span> 条筛选 </li>
										<li> 当天使用，不累积，过期失效 </li>
									</ul> -->
								</div>
							</div>
							<div class="pricing-btn">
								<div class="btn-common pc-btn mb-60">
									<a href="#">去购买</a>
								</div>
							</div>
						</div>
					</div>
					{/pboot:list}
					<!-- <div class="col-sm-12 col-md-6 col-lg-4 ">
						<div class="pricing-single-items">
							<div class="pricing-thumb pt-25">
								<img src="static/picture/ws.png" alt="Pricing Img" width="50px">
							</div>
							<div class="pricing-title">
								<h3 class="">[WhatsApp]开通筛选入门套餐</h3>
							</div>
							<div class="pricing-item-text mb-15">
								<span class="currency">$</span>
								<span class="tk ">10</span>
								<span class="month"> / 次 </span>
							</div>
							<div class="pricing-body">
								<div class="pricing-feature mb-40">
									<ul>
										<li>套餐总计优惠<span class="" style="font-size: 20px; font-weight: bold;"> 40% </span></li>
										<li>更优惠的价格，更多的筛选量</li>
										<li>可用于 <span class="" style="font-size: 20px; font-weight: bold;">WhatsApp</span> 筛性别</li>
										<li>总数 <span class="" style="font-size: 20px; font-weight: bold;">1000000</span> 条筛选 </li>
										<li> 当天使用，不累积，过期失效 </li>
									</ul>
								</div>
							</div>
							<div class="pricing-btn">
								<div class="btn-common pc-btn mb-60">
									<a href="#">去购买</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4" style=" z-index: 2">
						<div class="pricing-single-items">
							<div class="pricing-thumb pt-25">
								<img src="static/picture/line.png" alt="Pricing Img" width="50px">
							</div>
							<div class="pricing-title">
								<h3 class="">[Line]性别筛选入门套餐</h3>
							</div>
							<div class="pricing-item-text mb-15">
								<span class="currency ">$</span>
								<span class="tk ">10</span>
								<span class="month"> / 次 </span>
							</div>
							<div class="pricing-body">
								<div class="pricing-feature mb-40">
									<ul>
										<li>套餐总计优惠<span class="" style="font-size: 20px; font-weight: bold;"> 40% </span></li>
										<li>更优惠的价格，更多的筛选量</li>
										<li>可用于 <span class="" style="font-size: 20px; font-weight: bold;">Line</span> 筛性别</li>
										<li>总数 <span class="" style="font-size: 20px; font-weight: bold;">1000000</span> 条筛选 </li>
										<li> 当天使用，不累积，过期失效 </li>
									</ul>
								</div>
							</div>
							<div class="pricing-btn">
								<div class="btn-common pc-btn mb-60">
									<a href="#">去购买</a>
								</div>
							</div>
						</div>
					</div> -->
					<div class="choose_us_shap" style="position: absolute;
					bottom: 0;
					right: -17%; transform: rotateX(180deg); z-index: 1;">
						<img src="static/picture/shape44.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<!--==================================================-->
		<!-- End itpro Blog Area -->
		<!--==================================================-->


		<!--==================================================-->
		<!-- Start why_choose_area -->
		<!--==================================================-->
		<div class="why_choose_us_area" id="youshi">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="single_choose_us">
							<div class="itpro-section-title mobile-center">
								<h4>为什么选择我们</h4>
								<h2> 先进的数字筛选技术 <br> 精准的结果，强大的团队</h2>
							</div>
							<div class="section_description">
								<p>经历3年的累积与进步，我们已经跟得上全球社交APP的更新步伐，在每次更新2小时内均可以升级上线</p>
							</div>
							<div class="choose_us_icon_list">
								<ul>
									<li><i class="bi bi-check"></i> 7X24自动充值</li>
									<li><i class="bi bi-check"></i> 强大的技术团队</li>
									<li><i class="bi bi-check"></i> 精准高效的全自动运行</li>
									<li><i class="bi bi-check"></i> 100%满意度</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_choose_us">
							<div class="row">
								<div class="col-lg-6">
									<div class="single_choose_box">
										<div class="choose_icon_img">
											<img src="static/picture/choose_icon.png" alt="">
										</div>
										<div class="choose_us_title">
											<h3>7X24自动充值 <br></h3>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="single_choose_box upper">
										<div class="choose_icon_img">
											<img src="static/picture/choose_icon_1.png" alt="">
										</div>
										<div class="choose_us_title">
											<h3>强大的技术团队 <br> </h3>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="single_choose_box">
										<div class="choose_icon_img">
											<img src="static/picture/choose_icon_2.png" alt="">
										</div>
										<div class="choose_us_title">
											<h3>精准高效的全自动运行 <br></h3>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="single_choose_box upper">
										<div class="choose_icon_img">
											<img src="static/picture/choose_icon_3.png" alt="">
										</div>
										<div class="choose_us_title">
											<h3>100%满意度 <br></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="choose_us_shap">
						<img src="static/picture/shape44.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End why_choose_area -->
		<!--==================================================-->



		<!--==================================================-->
		<!-- Start itpro case study Area -->
		<!--==================================================-->
		<div class="blog_area ">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="itpro-section-title mobile-center">
							<h4>新闻资讯</h4>
							<h2>关于社交软件最新动态</h2>
						</div>
						<div class="section_description">
							<p>近期推荐优质内容</p>
						</div>
						<div class="blog_buttons">
							<a href="/?article">更多新闻<i class="bi bi-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					{pboot:list scode=2 num=8 order=sorting}
					<div class="col-lg-3 col-md-6">
						<div class="single_blog_box">
							<div class="blog_tmb">
								<img src="[list:ico]" alt="" style="display: block; width: 100%;">
								<!-- <img src="[list:ico]" alt=""> -->
							</div>
							<div class="blog_content">
								<div class="blog_date" style="width: 100%; white-space: nowrap;
								overflow: hidden;
								text-overflow: ellipsis;">
									<span title="[list:title]"><a href="[list:link]">[list:title]</a></span>
								</div>
								<div class="blog_title">
									<h3><a href="[list:link]">[list:content drophtml=1 dropblank=1 lencn=30]</a></h3>
								</div>
								<div style="margin-top: 20px; display: flex; align-items: center; justify-content: space-between;">
									<div class="blog_buttons blog_icon" style="margin-top: 0px; padding: 0;">
										<a href="[list:link]" style="padding: 5px;">Read More</a>
									</div>
									<div>
										<p>[list:date style=Y] <span>[list:date style=m-d]</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					{/pboot:list}
				</div>
			</div>
		</div>
		<!--==================================================-->
		<!-- End itpro case study Area -->
		<!--==================================================-->


		<!--==================================================-->
		<!--  Start  pricing_area -->
		<!--===================================================-->
		<div class="call_do_action_area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="itpro-section-title mobile-center">
							<h2> 5000+用户的满意<br> 日筛5亿庞大数据的技术基础</h2>
						</div>
						<div class="call_do_action_button" id="koubei">
							<a href="#">联系我们 <i class="bi bi-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--==================================================-->
		<!--  End  pricing_area -->
		<!--===================================================-->


		<!--==================================================-->
		<!-- Start new-brand-area -->
		<!--==================================================-->

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
		<!-- End new-brand-area -->
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
		<!-- Start Search Popup Area -->
		<!--==================================================-->

		<div class="search-popup">
			<button class="close-search style-two"><i class="fa fa-times"></i></button>
			<button class="close-search"><i class="fas fa-arrow-up"></i></button>
			<form method="post" action="#">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Search Here" required="">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>



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

		<script src="static/js/jquery.barfiller.js"></script>
		<!-- jquery js -->


		<!-- theme js -->
		<script src="static/js/theme.js"></script>

		<script src="static/js/active.js"></script>

	</body>

</html><?php return array (
  0 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/head.html',
  1 => '//LAPTOP-PIMM19LB/CMS/template/html/comm/foot.html',
); ?>