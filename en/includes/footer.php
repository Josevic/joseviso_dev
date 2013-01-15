	<hr/>

	<div class="footer">
				<p>2013 - Built using <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
		</div>
	</div>

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
	</script>
  </body>

</html>