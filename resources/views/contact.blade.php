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
<title>Contact Multipage | Pond | Creative Page Template</title>
<!-- DEFAULT META TAGS -->

<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<!-- FONTS -->

<!-- CSS -->
<link rel='stylesheet' id='default-style-css'  href='/css/styleC.css' type='text/css' media='all' />
<link rel='stylesheet' id='default-style-css'  href='/css/colored.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-style-css'  href='/css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='owltransitions-style-css'  href='/css/owl.transitions.css' type='text/css' media='all' />
<link rel="stylesheet" id='fontawesome-style-css' href="/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" id='pe-icons-style-css' href="/css/pe-icon-7-stroke.css" type="text/css" media="all" />
<link rel='stylesheet' id='mqueries-style-css'  href='/css/mqueries.css' type='text/css' media='all' />
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
	
	
	<!-- PAGE TITLE -->
	<section id="page-title" class="full-height parallax" data-parallax-image="/images/1690x1100-light.jpg">
		<div class="section-inner align-center">
			<div class="separator-small"><span></span></div>
			<div><h2 class="title-minimal"><strong>Contact</strong></h2></div>
			<!-- The h2 is wrapped into a div tag because by default it has a top margin. By placing it in the div it doesn't apply the top padding because it's the first child of its parent element -->
			<div class="separator-small"><span></span></div>
		</div>
	</section>
	<!-- PAGE TITLE -->
	
	
	<!-- PAGEBODY -->
	<div class="page-body">
	
		<!-- CONTACT SECTION -->
		<section id="contact" class="notoppadding">
			<div class="section-inner">

				<div id="contact-split" class="split-section clearfix">

					<div class="split-left split-half">
						<div class="split-wrapped-content">

							<div class="main-title align-center">
								<h5 class="alttitle title-minimal"><strong>We're ready for your next project</strong></h5>
							</div>

							<form id="contact-form" class="checkform" action="#" target="contact-send.php" method="post" >

								<div class="form-row clearfix">
									<label for="name" class="req">نام *</label>
									<input type="text" name="name" class="name" id="name" value="" placeholder="اصغر" />
								</div>

								<div class="form-row clearfix">
									<label for="email" class="req">ایمیل *</label>
									<input type="text" name="email" class="email" id="email" value="" placeholder="example@example.com"/>
								</div>

								<div class="form-row clearfix textbox">
									<label for="message" class="req">پیام *</label>
									<textarea name="message" class="message" id="message" rows="15" cols="50" placeholder="..."></textarea>
								</div>

								<div id="form-note">
									<div class="alert alert-error">
										<strong>Error</strong>: Please check your entries!
									</div>
								</div>

								<div class="form-row form-submit">
									<input type="submit" name="submit_form" class="submit" value="بفرست" />
								</div>

								<input type="hidden" name="subject" value="Contact Subject Pond html" />
								<input type="hidden" name="fields" value="name,email,message," />
								<input type="hidden" name="sendto" value="spabrice@gmail.com" />
							</form>
						</div>
					</div> <!-- END .split-left -->


					<div class="split-right split-half">
						<div class="split-bg">
							<!-- GOOGLE MAP -->
							<div id="map" style="height:100%;min-height:300px;"></div>
							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
							<script type="text/javascript">
								function mapinitialize() {
									var latlng = new google.maps.LatLng(35.703950, 51.355541);
									var myOptions = {
										zoom: 16,
										center: latlng,
										scrollwheel: false,
										scaleControl: false,
										disableDefaultUI: false,
										mapTypeId: google.maps.MapTypeId.ROADMAP,
										// Google Map Color Styles
										styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},
											{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},
											{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}
										]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
									};
									var map = new google.maps.Map(document.getElementById("map"),myOptions);

									var image = "/images/map-pin.png";
									var image = new google.maps.MarkerImage("/images/map-pin.png", null, null, null, new google.maps.Size(84,30));
									var marker = new google.maps.Marker({
										map: map,
										icon: image,
										position: map.getCenter()
									});

									var contentString = '<b>دفتر اصلی</b><br>وستاک<br>پلاک 103';
									var infowindow = new google.maps.InfoWindow({
										content: contentString
									});

									google.maps.event.addListener(marker, 'click', function() {
										infowindow.open(map,marker);
									});


								}
								mapinitialize();
							</script>
							<!-- GOOGLE MAP -->
						</div>
					</div> <!-- END .split-right -->

				</div> <!-- END .split-section -->

			</div>
		</section>
		<!-- CONTACT SECTION -->
		
      	<!-- FOOTER -->  
		@include('footer')
      	<!-- FOOTER -->         
        
 	</div> <!-- END .page-body -->
	<!-- PAGEBODY -->
    
</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

<!-- SCRIPTS -->{{-- online chat box --}}
<script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="2c85ff50-91de-4396-a476-ad122e716192";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


<script type='text/javascript' src='/js/retina.js'></script>
<script type='text/javascript' src='/js/jquery.pace.js'></script>
<script type='text/javascript' src='/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/js/jquery.easing.compatibility.js'></script>
<script type='text/javascript' src='/js/jquery.visible.min.js'></script>
<script type='text/javascript' src='/js/jquery.parallax.min.js'></script>
<script type='text/javascript' src='/js/jquery.owl.carousel.min.js'></script>
<script type='text/javascript' src='/js/pond-header.js'></script>
<script type='text/javascript' src='/js/pond-form.js'></script>
<script type='text/javascript' src='/js/script.js'></script>
<!-- SCRIPTS -->

</body>
</html>