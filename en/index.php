<?php

 $page_title = "Home";
 $page_description = "Jose Viso's personal website. User Experience professional. Discover who I am, what I do and what I like.";

 include("includes/header.php"); ?>

		<div class="row"> 
			<div class="span12 visible-desktop">
				<div class="parent">
					<div class="child">
						<p id="presentation_desktop">Hi! I'm <a class="link_presentation" href="about">Jose Viso</a> and I design <span class="useful"><strong>useful</strong></span>, <span class="simple"><strong>simple</strong></span> and <span class="easy"><strong>easy to use</strong></span> <a class="link_presentation" href="portfolio">software</a>.</p>
					</div>
				</div>
			</div>
			<div class="span12 visible-tablet">
				<div class="parent">
					<div class="child">
						<p id="presentation_tablet">Hi! I'm Jose Viso and I design <span class="useful"><strong>useful</strong></span>, <span class="simple"><strong>simple</strong></span> and <span class="easy"><strong>easy to use</strong></span> software.</p>
					</div>
				</div>
			</div>
			<div class="span12 visible-phone">
				<div class="parent">
					<div class="child">
						<p id="presentation_phone">Hi! I'm <a class="link_presentation" href="about" >Jose Viso</a> and I design <span class="useful"><strong>useful</strong></span>, <span class="simple"><strong>simple</strong></span> and <span class="easy"><strong>easy to use</strong></span> <a class="link_presentation" href="portfolio">software</a>.</p>
					</div>
				</div>
			</div>
		</div>
	
  </div> 

 <footer>
	<div class="container">
		<p class="muted credit"><small>contact@joseviso.com · <a href="http://facebook.com/joseviso" title="My Facebook page"><img src="../images/icons/PNG/facebook-32.png" onmouseover="this.src='../images/icons/PNG/facebook-hover.png'" onmouseout="this.src='../images/icons/PNG/facebook-32.png'"/></a> · <a href="http://twitter.com/XoseViso" title="My Twitter account"><img src="../images/icons/PNG/twitter-32.png" onmouseover="this.src='../images/icons/PNG/twitter-hover.png'" onmouseout="this.src='../images/icons/PNG/twitter-32.png'"/></a></small></p>
	</div>
 </footer>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="<?php echo $base;?>/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.js"></script>

 <script type="text/javascript">

	  /* Code related to Google Analytics */
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37330001-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	  /* Function to dynamically change the icon of the collapsable menu */
	  $(document).ready(function(){    
		    $('.nav-collapse').on('shown', function () {
		       $(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
		    });

		    $('.nav-collapse').on('hidden', function () {
		       $(".icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down");
		    });
	  });
 </script>
 </body>

</html>
