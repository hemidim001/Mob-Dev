<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>MOBILE!</title>   

        <meta name="description" content="Looking for cheap prices yet expensive design? This brand new website development run by students will help you out! Cheap websites for all!" /> 

        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>   

        <!-- Mobile Internet Explorer ClearType Technology -->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

        <!-- Bootstrap -->
        <link href="_include/css/bootstrap.css" rel="stylesheet">

        <!-- Main Style -->
        <link href="_include/css/main.css" rel="stylesheet">

        <link href="_include/css/flexslider.css" rel="stylesheet">

        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">

        <!-- FancyBox -->
        <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

        <!-- Font Icons -->
        <link href="_include/css/fonts.css" rel="stylesheet">

        <!-- Shortcodes -->
        <link href="_include/css/shortcodes.css" rel="stylesheet">

        <!-- Responsive -->
        <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="_include/css/responsive.css" rel="stylesheet">

        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">


        <link href="_include/css/five.css" rel="stylesheet">
        <!--<link href="_include/css/pricetag.css" rel="stylesheet">-->
        <link href="_include/css/pricetagv2.css" rel="stylesheet">
        <link href="_include/css/iframe.css" rel="stylesheet">


        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
        <!-- FIVE FONDS -->
        <link href="_include/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600,600italic' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="#">

        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">

        <!-- Modernizr -->
        <script src="_include/js/modernizr.js"></script>

        <!-- Analytics -->
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'Insert Your Code']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <!-- End Analytics -->
        
        
        <script src="_include/js/responsiveslides.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
window.onload = function () {
	var styles = [

        
        	           {
		featureType: 'road.local', // set the road
		elementType: 'geometry',
		stylers: [

			{ hue: '#D62727' },
			{ lightness: 14 }
		]
	},
                	           {
		featureType: 'road.highway', // set the road
		elementType: 'all',
		stylers: [
			{ hue: '#D62727' },
			{ lightness: 14 }
		]
	},
            
            {
		featureType: 'water', // set the water color
		elementType: 'geometry', // apply the color only to the fill
		stylers: [
                        { lightness: -30 },
			{ saturation: -100 }
		]
	},
        {
		featureType: 'landscape.natural', // set the natural landscape
		elementType: 'all',
		stylers: [
                        { lightness: -100 },
			{ saturation: -100 }
		]
	}
	,
        {
		featureType: 'landscape.man_made', // set the natural landscape
		elementType: 'all',
		stylers: [
                        { lightness: -30 },
			{ saturation: -100 }
		]
	}
	,
            {
		featureType: 'poi', // set the point of interest
		elementType: 'geometry',
		stylers: [
			{ lightness: -60 },
                        { saturation: -100 }
		]
	},
        {
         featureType: "road",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },
            {
		featureType: 'transit', // set the road
		elementType: 'geometry',
		stylers: [
			{ hue: '#D62727' },
			{ lightness: 14 }
		]
	}
];

var options = {
	mapTypeControlOptions: {
		mapTypeIds: ['Styled']
	},
        scrollwheel: false,
        navigationControl: false,
        scaleControl: true,
        draggable: false,
	center: new google.maps.LatLng(52.369580, 4.889001),
	zoom: 10,
	disableDefaultUI: true,	
	mapTypeId: 'Styled'
};
var div = document.getElementById('surabaya');
var map = new google.maps.Map(div, options);
var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);
}
</script>
    </head>


    <body>

        <!-- This section is for Splash Screen -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- End of Splash Screen -->

        <!-- Homepage Slider -->
        <div id="home-slider">	
            <div class="overlay"></div>

            <div class="slider-text">
                <div id="slidecaption"></div>
            </div>   

            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>

                <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
        </div>
        <!-- End Homepage Slider -->

        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

                <div id="logo">
                    <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template"></a>
                </div>

                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#prices">Price</a></li>
                        <li><a href="#contact">Contact</a></li>

                    </ul>
                </nav>

            </div>
        </header>
        <!-- End Header -->

        <!-- About Section -->
        <div id="about" class="page-alternate2">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Test. Test.</h2>
                           
                            <!--                <h3 class="title-description">Learn About our Team &amp; Culture.</h3>-->
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <div class="row">
                    <div class="cheap-info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus ut arcu sollicitudin vestibulum. Integer pretium fermentum lectus a mattis. Donec in augue ac diam lobortis aliquet. Phasellus a auctor mauris. Donec euismod tellus ac mi fringilla suscipit. Sed eget porttitor ligula, et mollis risus. Pellentesque et turpis lacus. Cras auctor mollis ligula, ac elementum lacus euismod vitae. Fusce volutpat euismod purus, sit amet pulvinar risus tempor vel. In efficitur nisi sit amet tortor porta auctor in at risus. Pellentesque lacus justo, congue vel dolor eu, iaculis porttitor mi. Ut mattis tortor et sem venenatis dictum ut a velit.
                    </div>

                </div>
            </div>
        </div>
        <!-- End About Section -->




        <!-- Services Section -->
        <section id="services" class="page">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Services</h2>
                            <!--                <h3 class="title-description">Learn About our Team &amp; Culture.</h3>-->
                        </div>
                    </div>
                </div>
                <div class="row-service text-center services">
                    <div class="col-md-3"> <span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-tablet fa-stack-1x services-icon"></i> </span>
                        <h4 class="service-heading">Lorem Ipsum </h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus ut arcu sollicitudin vestibulum. Integer pretium fermentum lectus a mattis. </p>
                    </div>
                    <div class="col-md-3"> <span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-html5 fa-stack-1x services-icon"></i> </span>
                        <h4 class="service-heading">Lorem Ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus ut arcu sollicitudin vestibulum. Integer pretium fermentum lectus a mattis.</p>
                    </div>
                    <div class="col-md-3"> <span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-desktop fa-stack-1x services-icon"></i> </span>
                        <h4 class="service-heading">Lorem Ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus ut arcu sollicitudin vestibulum. Integer pretium fermentum lectus a mattis.</p>
                    </div>
                    <div class="col-md-3"> <span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-cogs fa-stack-1x services-icon"></i> </span>
                        <h4 class="service-heading">Lorem Ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus ut arcu sollicitudin vestibulum. Integer pretium fermentum lectus a mattis.</p>
                    </div>
                </div>
            </div>
        </section>


        
   <section id="prices" class="page-alternate2">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Prices</h2>
                        </div>
                    </div>
                </div>
                <section id="pricePlans">
                    <ul id="plans">
                        <li class="plan">
                            <ul class="planContainer">
                            </ul>
                        </li>

                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2 class="bestPlanTitle">Minimum</h2></li>
                                <li class="price"><p class="bestPlanPrice">€100</p></li>
                                <li>
                                    <ul class="options">
                                        <li>Responsive Design</li>
                                        <li>Professional Look</li>
                                        <li>SEO</li>
                                        <li>Basic Design</li>
                                        <li>24/7 E-Mail Service</li>
                                    </ul>
                                </li>
                                <li class="button"><a class="bestPlanButton" href="#contact">Contact Now!</a></li>
                            </ul>
                        </li>

                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2 class="bestPlanTitle">Maximum</h2></li>
                                <li class="price"><p class="bestPlanPrice">€300</p></li>
                                <li>
                                    <ul class="options">
                                        <li>Responsive Design</li>
                                        <li>Professional Look</li>
                                        <li>SEO</li>
                                        <li>Complex Design</li>
                                        <li>24/7 E-Mail Service</li>
                                    </ul>
                                </li>
                                <li class="button"><a class="bestPlanButton" href="#contact">Contact Now!</a></li>
                            </ul>
                        </li>


                        <li class="plan">
                            <ul class="planContainer">
                            </ul>
                        </li>


                    </ul>   

                </section>
                <div class="row">
                    <div class="cheap-info">
                       
                        <br> 
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="demo-wrapper">
                <div id="surabaya"></div>
            </div>
        </section>
   

        <!-- Contact Section -->
        <div id="contact" class="page">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title">Contact Now!</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- End Title Page -->

                <!-- Contact Form -->
                <div class="row">
                    <div class="span9">

                        <form id="contact-form" class="contact-form" action="_include/mailsend.php" method="post">
                            <p class="contact-name">
                                <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                            </p>
                            <p class="contact-email">
                                <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                            </p>
                            <p class="contact-message">
                                <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                            </p>
                            <p class="contact-submit">
    
                                <input class="submit" type="submit" name="submit" id="submit" value="Send Your Email">
                            </p>

                            <div id="response">

                            </div>
                        </form>

                    </div>

                    <div class="span3">
                        <div class="contact-details">
                            <h3>Contact Details</h3>
                            <ul>
                                <li><a href="#">info@info.com</a></li>
                                <li>
                                   Location:
                                    <br>
                                   Amsterdam
                                    <br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
        <!-- End Contact Section -->

        <!-- Twitter Feed -->

        <!-- End Twitter Feed -->

        <!-- Socialize -->
        <div id="social-area" class="page-alternate">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <nav id="social">
                            <ul>
                                <li><a href="https://facebook.com/" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                                <li><a href="https://www.facebook.com/" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Socialize -->

        <!-- Footer -->
        <footer>
            <p class="credits">&copy;2015 . </p>
        </footer>
        <!-- End Footer -->

        <!-- Back To Top -->
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
        <!-- End Back to Top -->

        <!-- Js -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="_include/js/main.js"></script> <!-- Default JS -->
        <script src="_include/js/prefixfree.min.js"></script> <!-- PRICE TAG -->


        <!-- End Js -->


    </body>
</html>