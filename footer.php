<footer class="footer-bg-1 padding-top-7 roboto">
  <div class="container sec-bpadding-6">
    <div class="row">

      <div class="col-md-4 col-sm-6 colmargin clearfix margin-bottom font-weight-4">
        <div>
        <div class="footer-logo"><img src="images/logo.png" alt="" href="index.php" class="footer-logo-img"/></div>
        <address>
            <strong class="text-white opacity-5">Address:</strong>
            <br />
            <p class="text-white opacity-5">21 Abeokuta street, off Obasa road/off Oba Akran
            <br />
            Ikeja, Lagos state</p>
        </address>

        <span class="text-white opacity-5"><strong>Phone:</strong> 08062218546</span><br>
        <span><strong class="text-white opacity-5">Email:</strong> <a href="mailto:info@auxanosolutions.net" class="opacity-link-light">info@auxanosolutions.net</a> </span><br>
    </div>
      </div>
	  <!--end item-->
	  

      <div class="col-md-3 clearfix margin-bottom  text-center">
        <h5 class="text-white uppercase less-mar3 font-weight-7 pad-l10">Navigation</h5>
        <div class="clearfix"></div>
        <ul class="list-padding-1 text-white font-weight-4 ">
            <li><a href="#" class="opacity-link-light">Projects</a></li>
            <li><a href="about.php" class="opacity-link-light">About Us</a></li>
            <li><a href="contact.php" class="opacity-link-light">Contact Us</a></li>
            <li><a href="services.php" class="opacity-link-light">Managed Services</a></li>
            <li><a href="services.php" class="opacity-link-light">Professional Services</a></li>
			<li><a href="services.php" class="opacity-link-light">IT Consultancy</a></li>
			<li><a href="services.php" class="opacity-link-light">Network Services</a></li>
			<li><a href="#" class="opacity-link-light">Access Control</a></li>
        </ul>
      </div>
      <!--end item-->

      <div class="col-md-5 col-sm-6 col-xs-12 bmargin clearfix margin-bottom font-weight-4">
        <div class="item-holder">

		<div id="map_extended" class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4436.865639645713!2d3.3410988311081686!3d6.603364938826822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25bce86350a7a420!2sAuxano%20Solutions%20Technology%20Ltd!5e0!3m2!1sen!2sng!4v1574097307962!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        </div>
      </div>
      <!--end item-->
      <div class="clearfix padding-bottom-3 resnopad"></div>
    </div>

    </div>


    <div class="container-fluid border-top-light1 padding-top-3 padding-bottom-3">
		<div class="container">

			<div class="col-md-12 col-sm-12 col-xs-12 text-left text-small2 respo text-white opacity-5">Copyright 2019 © Auxano Solutions Technology</div>

    	</div>

    </div>


</footer>

<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

</div><!--end site wrapper-->
</div><!--end wrapper boxed-->


<!-- Scripts -->
<script src="js/jquery/jquery.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/less/less.min.js" data-env="development"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="js/megamenu/js/main.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
<script src="js/owl-carousel/custom.js"></script>
<script src="js/ytplayer/jquery.mb.YTPlayer.js"></script>
<script src="js/ytplayer/elementvideo-custom.js"></script>
<script src="js/ytplayer/play-pause-btn.js"></script>
<script src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script src="js/cubeportfolio/main-mosaic3.js"></script>
<script src="js/accordion/js/smk-accordion.js"></script>
<script src="js/accordion/js/custom.js"></script>
<script src="js/tabs/js/responsive-tabs.min.js"></script>
<script src="js/parallax/parallax-background.min.js"></script>
<script>
	(function ($) {
		$('.parallax').parallaxBackground();

	})(jQuery);
</script>

<!-- REVOLUTION JS FILES -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


<script>
	var tpj=jQuery;
	var revapi4;
	tpj(document).ready(function() {
	if(tpj("#rev_slider").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider");
	}else{
		revapi4 = tpj("#rev_slider").show().revolution({
		sliderType:"standard",
		jsFileLocation:"js/revolution-slider/js/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:7000,
		navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
		onHoverStop:"on",
		arrows: {
		style:"gyges",
		enable:true,
		hide_onmobile:false,
		hide_under:100,
		hide_onleave:true,
		hide_delay:200,
		hide_delay_mobile:1200,
		tmp:'',
		left: {
		h_align:"left",
		v_align:"center",
		h_offset:35,
		v_offset:0
		},
		right: {
		h_align:"right",
		v_align:"center",
		h_offset:35,
		v_offset:0
		}
		}
		,
		touch:{
		touchenabled:"on",
		swipe_threshold: 75,
		swipe_min_touches: 1,
		swipe_direction: "horizontal",
		drag_block_vertical: false
	}
	,



	},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},

	responsiveLevels:[1240,1024,778,480],
	gridwidth:[1240,1024,778,480],
	 gridheight: [630,450,450,320],
	lazyType:"smart",
		parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2000,
		levels:[2,3,4,5,6,7,12,16,10,50],
		},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	disableProgressBar:"on",
	debugMode:false,
		fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
		}
	});
	}
	});	/*ready*/
</script>


<script src="js/jFlickrFeed/jflickrfeed.min.js"></script>
<script>
$('#basicuse').jflickrfeed({
limit: 6,
qstrings: {
id: '133294431@N08'
},
itemTemplate:
'<li>' +
'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
'</li>'
});
</script>

<script src="js/animations/js/animations.min.js"></script>
<script src="js/animations/js/appear.min.js"></script>
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

</script>
<script src="js/functions/functions.js"></script>
</body>
</html>