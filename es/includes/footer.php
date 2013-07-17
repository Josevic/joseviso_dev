	<?php if (!strpos($_SERVER['PHP_SELF'], 'contacto.php')): ?>
		<p class="pull-right to-top"><a href="#top"><img src="<?php echo $base;?>/images/icons/PNG/arrow-up48.png" title="Ir hacia arriba"/></a></p>
	</div>
	<hr/>
	<footer>
		<div class="container">
			<p class="muted credit">
				<a href="mailto:contacto@joseviso.com" title="Mi correo"><img src="<?php echo $base;?>/images/icons/PNG/mail.png" onmouseover="this.src='<?php echo $base;?>/images/icons/PNG/mail-hover.png'" onmouseout="this.src='<?php echo $base;?>/images/icons/PNG/mail.png'"/></a>&nbsp;
				<a href="http://facebook.com/joseviso" title="Mi página de Facebook"><img src="<?php echo $base;?>/images/icons/PNG/facebook-32.png" onmouseover="this.src='<?php echo $base;?>/images/icons/PNG/facebook-hover.png'" onmouseout="this.src='<?php echo $base;?>/images/icons/PNG/facebook-32.png'"/></a>&nbsp;
				<a href="http://twitter.com/XoseViso" title="Mi cuenta de Twitter"><img src="<?php echo $base;?>/images/icons/PNG/twitter-32.png" onmouseover="this.src='<?php echo $base;?>/images/icons/PNG/twitter-hover.png'" onmouseout="this.src='<?php echo $base;?>/images/icons/PNG/twitter-32.png'"/></a>
			</p>
		</div>
	</footer>
	<?php endif; ?>

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

	  /* Function to go to top of the page */
	  $("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});	

	  function redirectMe (sel) {
		    var url = sel[sel.selectedIndex].value;
		    window.location = url;
	  }

	  /* Function to dynamically change the icon of the collapsable menu */
	  $(document).ready(function(){    
		    $('.nav-collapse').on('shown', function () {
		       $(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
		    });

		    $('.nav-collapse').on('hidden', function () {
		       $(".icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down");
		    });
	  });

	  /* Functions to show or hide social network accounts little used */
	  $(document).ready(function(){
		  	$("#button_show").click(function(){
		    	$("#other_sn").fadeIn(400);
		    	$("#button_show").hide();
		    	$("#button_hide").show();
		  	});

		  	$("#button_hide").click(function(){
		  		$("#other_sn").fadeOut(400);
		  		$("#button_show").show();
		  		$("#button_hide").hide();
		  	});
	   });
	</script>
  </body>

</html>