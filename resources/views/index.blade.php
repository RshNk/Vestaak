<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

<!-- DEFAULT META TAGS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home | Pond | Creative One Page Template</title>
<!-- DEFAULT META TAGS -->

<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<!-- FONTS -->

<!-- CSS -->
<link rel='stylesheet' id='default-style-css'  href='/css/styleC.css' type='text/css' media='all' />
<link rel='stylesheet' id='colored-style-css'  href='/css/colored.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-style-css'  href='/css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='owltransitions-style-css'  href='/css/owl.transitions.css' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-style-css'  href='/css/fancybox.css' type='text/css' media='all' />
<link rel='stylesheet' id='isotope-style-css'  href='/css/isotope.css' type='text/css' media='all' />
<link rel="stylesheet" id='rsplugin-style-css' href="/rs-plugin/css/settings.css" type="text/css" media="all" />
<link rel="stylesheet" id='fontawesome-style-css' href="/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" id='pe-icons-style-css' href="/css/pe-icon-7-stroke.css" type="text/css" media="all" />
<link rel='stylesheet' id='mqueries-style-css'  href='/css/mqueries.css' type='text/css' media='all' />
<link rel='stylesheet' id='mqueries-style-css'  href='/css/searchbox.css' type='text/css' media='all' />
<!-- CSS -->

<!-- FAVICON -->
<link rel="shortcut icon" href="/images/favicon.png"/>
<!-- FAVICON -->

<!-- JQUERY LIBRARY -->
<script src="/js/jquery-1.9.1.min.js"></script>
<!-- JQUERY LIBRARY -->

</head>

<body class="bordered"> 

<!-- BORDERS (Don't want any border? Delete the class bordered on the body and this part) -->
<div id="bodyborder-left"></div>
<div id="bodyborder-right"></div>
<div id="bodyborder-top"></div>
<div id="bodyborder-bottom"></div>
<!-- BORDERS -->
	
<!-- PAGELOADER -->
<div id="page-loader" class="text-light">
	<div class="page-loader-inner">
    	<div class="loader-logo-name"><img src="/images/pond-logo-light.png" alt="Logo"/></div>
		<h6 class="alttitle title-minimal">Loading</h6>
	</div>
</div>
<!-- PAGELOADER -->

<!-- PAGE CONTENT -->
<div id="page-content">

	<!-- HEADER -->
	@include('header')
	<!-- HEADER -->    
	
	
	<!-- HOME (SLIDER) -->
	<section id="home" class="notoppadding text-light">
		<div class="section-inner">
			 
		<!-- REVOLUTION SLIDER -->
		<div class="rev-slider-container">
			<div class="rev-slider" >
				<ul>
				
					<!-- THE FIRST SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" style="width: 100%; height: auto;">
						<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
						<img src="/images/milad.jpg"   alt="slidebg1"  data-bgposition="center center" data-bgrepeat="no-repeat">
						
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong> وستاک</strong>
						</div>
						
					</li> <!-- end first slide -->
				
					<!-- THE SECOND SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" >
						<!-- THE MAIN IMAGE IN THE SECOND SLIDE -->
						<img src="/images/1690x1100.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong>Creative Minimalism</strong>
						</div>
												
					</li>
					
					<!-- THE THIRD SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" >
						<!-- THE MAIN IMAGE IN THE SECOND SLIDE -->
						<img src="/images/backweb.jpg"   alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong>Sharp Elegance</strong>
						</div>
						
					</li>
			   
				</ul>

			</div>
		</div> <!-- END .rev-slider-container -->        
		<!-- REVOLUTION SLIDER -->
	
		</div>
	</section>
	<!-- HOME (SLIDER) -->
	
	<!-- PAGEBODY -->
	<div class="page-body">

		{{--<!-- Our Services -->
		<section id="services" class="notoppadding">
			<div class="section-inner">

				<div id="services-spli" class="split-section clearfix" style="background:#f7f7f7;">

					<div class="split-left split-onethird text-light">
						<div class="split-wrapped-content vertical-center">
							<div class="main-title">
								<h3><strong>Our Services</strong></h3>
								<div class="separator"><span></span></div>
								<h6 class="alttitle title-minimal">Making the impossible possible.  That's what we do.</h6>
							</div>
						</div>
						<div class="split-bg" style="background:url(/images/1690x1100.jpg) center center; background-size:cover;"></div>
					</div> <!-- END .split-left -->

					<div class="split-right split-twothird">
						<div class="split-wrapped-content">

							<div class="column-section clearfix">
								<div class="column one-half align-center">
									<i class="pe-7s-browser pe-3x"></i>
									<h5 class="title-minimal" data-bigletter="R"><strong>Responsive</strong></h5>
									<div class="separator-small"><span></span></div>
									<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius.</p>
								</div>
								<div class="column one-half last-col align-center">
									<i class="pe-7s-help2 pe-3x"></i>
									<h5 class="title-minimal" data-bigletter="S"><strong>Support</strong></h5>
									<div class="separator-small"><span></span></div>
									<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius.</p>
								</div>
							</div> <!-- END .column-section -->

							<div class="column-section clearfix">
								<div class="column one-half align-center">
									<i class="pe-7s-camera pe-3x"></i>
									<h5 class="title-minimal" data-bigletter="M"><strong>Media</strong></h5>
									<div class="separator-small"><span></span></div>
									<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius.</p>
								</div>
								<div class="column one-half last-col align-center">
									<i class="pe-7s-loop pe-3x"></i>
									<h5 class="title-minimal" data-bigletter="F"><strong>Flexible</strong></h5>
									<div class="separator-small"><span></span></div>
									<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius.</p>
								</div>
							</div> <!-- END .column-section -->

						</div>
						<div class="split-bg"></div>
					</div> <!-- END .split-right -->

				</div> <!-- END .split-section -->

			</div> <!-- END .section-inner-->
		</section> <!-- END SECTION #service-->
		<!-- Our Services -->--}}

		<div class="spacer spacer-big"></div>

		<!--FIELDS-->
		<section id="portfolio-layout " class="notoppadding">
			<div class="section-inner">
				
				<!-- STANDARD PORTFOLIO -->
				<div class="main-title wrapper align-center">
					<h4 data-bigletter="S"><strong>Standard</strong></h4>
					<div class="separator-small"><span></span></div>
					<h6 class="alttitle title-minimal">Standard Fullwidth</h6>
				</div> <!-- END .main-title .wrapper -->

				<div class="spacer spacer-small"></div>

				<div id="portfolio-grid-standard" class="masonry portfolio-entries services clearfix" data-maxitemwidth="450">

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/web.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>طراحی و توسعه سایت </strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>طراحی و توسعه سایت </strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">طراحی پیشرفته و پیاده سازی نوین</h6>
								</div>
								<a href="/services/web" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item print">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/mobile.png" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>طراحی و توسعه اپلیکیشن</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>طراحی و توسعه اپلیکیشن</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">Android/IOS</h6>
								</div>
								<a href="/services/app" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/youth.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>آموزش نیروی کار جوان</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>آموزش نیروی کار جوان</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">کارآموزی</h6>
								</div>
								<a href="/services/young" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item print">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/consult.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>مشاوره و ارائه تیم فنی</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>مشاوره و ارائه تیم فنی</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">پشتیبانی</h6>
								</div>
								<a href="portfolio-single2.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/learn.jpg" data-bgposition="center center" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>بستر ویدئویی آموزش آنلاین</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>بستر ویدئویی آموزش آنلاین</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">محصولات</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/teach.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>کلاس های تخصصی آموزشی</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>کلاس های تخصصی آموزشی</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">ورود به بازارکار</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/re.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>مهندسی نیازمندی ها</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>مهندسی نیازمندی ها</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">استخراج نیازمندی ها و مشاوره فنی</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/telegram.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>bot تلگرام</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>bot تلگرام</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">طراحی bot تلگرام و بازی inline</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/hrm.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>نرم افزار HRM</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>نرم افزار HRM</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">نرم افزار مدیریت نیروی انسانی</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/bill.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>سیستم مدیریت قبض</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>سیستم مدیریت قبص</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">مدیریت ، ایحاد و پرداخت قبوض</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/todo.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>سیستم مدیریت وظایف</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>سیستم مدیریت وظایف</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">سیستم TODO فارسی</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

					<div class="portfolio-masonry-entry masonry-item branding">
						<div class="entry-thumb portfolio-thumb">
							<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
								<img src="/images/teacher.jpg" alt="SEO IMAGE NAME">
								<h5 class="overlay-name fixed title-minimal"><strong>سایت شخصی و دستیار اساتید</strong></h5>
								<div class="overlaycaption">
									<h5 class="overlay-name title-minimal"><strong>سایت شخصی و دستیار اساتید</strong></h5>
									<div class="separator-small"><span></span></div>
									<h6 class="alttitle">سایتی جذاب با امکانات فوق العاده</h6>
								</div>
								<a href="portfolio-single.html" class="transition"></a>
							</div>
						</div>
					</div> <!-- END .portfolio-masonry-entry -->

				</div> <!-- END #portfolio-grid -->
				<!-- STANDARD PORTFOLIO -->

			</div> <!-- END .section-inner-->
		</section>
        <!--FIELDS-->

		<div class="spacer spacer-big"></div>

		<!--WORK-->
		<section id="portfolio-layout work" class="notoppadding">
			<div class="section-inner">

				<!-- STANDARD PORTFOLIO -->
				<div class="main-title wrapper align-center">
					<h4 data-bigletter="S"><strong>WORK</strong></h4>
					<div class="separator-small"><span></span></div>
					<h6 class="alttitle title-minimal">our works</h6>
				</div> <!-- END .main-title .wrapper -->

				<div class="spacer spacer-small"></div>

				<div class="owlcarousel portfolio-carousel" data-pagination="false" data-navigation="true">
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>On the Road</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Photography</h6>
							</div>
							<a href="portfolio-single4.html" class="transition"></a>
						</div>
					</div>
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Don't<br>Bullshit<br>Me</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single3.html" class="transition"></a>
						</div>
					</div>
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Lucy</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Photography</h6>
							</div>
							<a href="portfolio-single4.html" class="transition"></a>
						</div>
					</div>
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Air Crash</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Photography</h6>
							</div>
							<a href="portfolio-single4.html" class="transition"></a>
						</div>
					</div>
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Sixteen & <br>Frans</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single2.html" class="transition"></a>
						</div>
					</div>
					<div class="portfolio-carousel-item" style="background-image:url(/images/800x600.jpg);">
						<div class="imgoverlay overlay-dark overlay-transparent name-hidden">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>African<br>Cultur</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Photography</h6>
							</div>
							<a href="portfolio-single4.html" class="transition"></a>
						</div>
					</div>
				</div>
				<!-- END #portfolio-grid -->
				<!-- STANDARD PORTFOLIO -->

			</div> <!-- END .section-inner-->
		</section>
		<!--WORK-->

		<div class="spacer spacer-big"></div>

		<!-- CLIENTS -->
		<div class="wrapper">

			<div class="main-title align-center">
				<h4><strong>Clients</strong></h4>
				<div class="separator-small"><span></span></div>
				<h6 class="alttitle title-minimal">Who we worked with</h6>
			</div>

			<div class="spacer spacer-mini"></div>

			<div class="owlcarousel content-carousel" data-autoplay="6000" data-pagination="true">
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
				<div class="align-center">
					<img src="/images/logo-placeholder.png" alt="Client Logo">
				</div>
			</div>
		</div>
		<!-- CLIENTS -->

		<div class="spacer spacer-big"></div>

		<!-- TESTIMONIALS -->
		<div id="testimonials" class="horizontalsection text-light parallax" data-parallax-image="/images/1690x1100.jpg">
			<div class="horizontalinner wrapper">

				<div class="owlslider testimonial-slider">
					<div class="testimonial-item">
						<div class="testimonial-quote">As a designer there are not many other templates that comes close to this. This template really understands the main purposes of webdesign.</div>
						<h6 class="testimonial-name"><strong>Patrick Hamilton</strong></h6>
						<h6 class="testimonial-namesub alttitle">Rip Curl</h6>
					</div>
					<div class="testimonial-item">
						<div class="testimonial-quote">Clean, simple and so mighty.</div>
						<h6 class="testimonial-name"><strong>Andy Smith</strong></h6>
						<h6 class="testimonial-namesub alttitle">Quicksilver</h6>
					</div>
					<div class="testimonial-item">
						<div class="testimonial-quote">Wow, just amazing. Made it very easy for me to get my website up and running.</div>
						<h6 class="testimonial-name"><strong>Sementha Garro</strong></h6>
						<h6 class="testimonial-namesub alttitle">Billabong</h6>
					</div>
				</div> <!-- END .owlslider -->

			</div>
		</div> <!-- END #testimonials -->
		<!-- TESTIMONIALS -->
      	<!-- FOOTER -->
		@include('footer')
      	<!-- FOOTER -->         
        
 	</div> <!-- END .page-body -->
	<!-- PAGEBODY -->
    
</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

<!-- SCRIPTS -->
{{-- online chat box --}}
<script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="2c85ff50-91de-4396-a476-ad122e716192";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


<script type='text/javascript' src='/js/retina.js'></script>
<script type='text/javascript' src='/js/jquery.pace.js'></script>
<script type='text/javascript' src='/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/js/jquery.easing.compatibility.js'></script>
<script type='text/javascript' src='/js/jquery.visible.min.js'></script>
<script type='text/javascript' src='/js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='/js/jquery.bgvideo.min.js'></script>
<script type='text/javascript' src='/js/jquery.fitvids.min.js'></script>
<script type='text/javascript' src='/js/jquery.fancybox.pack.js'></script>
<script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type='text/javascript' src='/js/jquery.parallax.min.js'></script>
<script type='text/javascript' src='/js/jquery.counter.min.js'></script>
<script type='text/javascript' src='/js/jquery.scroll.min.js'></script>
<script type='text/javascript' src='/js/jquery.owl.carousel.min.js'></script>
<script type='text/javascript' src='/js/pond-form.js'></script>
<script type='text/javascript' src='/js/pond-header.js'></script>
<script type='text/javascript' src='/js/script.js'></script>
<script type='text/javascript' src='/js/searchbox.js'></script>
<!-- SCRIPTS -->

</body>
</html>