	<p class="pull-right hidden-desktop to-top"><a href="#top"><i class="icon-arrow-up"></i>Go to Top</a></p>
</div>

	<hr/>
	
	<?php if (!strpos($_SERVER['PHP_SELF'], 'contact.php')): ?>
	<footer>
		<div class="container">
			<p class="muted credit"><small><a class="link-muted" href="mailto:contact@joseviso.com" title="My email account">contact@joseviso.com</a> · <a href="http://facebook.com/joseviso" title="My Facebook page"><img src="<?php echo $base; ?>/images/icons/PNG/facebook-32.png" onmouseover="this.src='<?php echo $base; ?>/images/icons/PNG/facebook-hover.png'" onmouseout="this.src='<?php echo $base; ?>/images/icons/PNG/facebook-32.png'"/></a> · <a href="http://twitter.com/XoseViso" title="My Twitter account"><img src="<?php echo $base; ?>/images/icons/PNG/twitter-32.png" onmouseover="this.src='<?php echo $base; ?>/images/icons/PNG/twitter-hover.png'" onmouseout="this.src='<?php echo $base; ?>/images/icons/PNG/twitter-32.png'"/></a></small></p>
		</div>
	</footer>
	<?php endif; ?>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo $base;?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.js"></script>

    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37330001-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();


	  $("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});	

	  function redirectMe (sel) {
		    var url = sel[sel.selectedIndex].value;
		    window.location = url;
	  }
	</script>
  </body>

</html>