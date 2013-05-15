	<?php 

	/***

	    $details = array(
		"date" => "Month Year start - Month Year end",
		"tags" => array(
			"Tag name 1" => "tag-url", 
			"Tag name 2" => "tag2-url"
		)
	);

	***/ 


	if(isset($details)): 
	?>
	<div class="row">
			<div class="span12">
				<h3>Details</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Date</dt>
				  <dd><?php echo $details['date']; ?></dd>
				
				  <dt>Tags</dt>
				  <dd>

				  	<?php foreach ($details['tags'] as $tag_name => $tag_url): ?>
				  	<a href="<?php echo $base . '/en/portfolio/category/' . $tag_url; ?>"><span class="label"><?php echo $tag_name; ?></span></a>
				  	<?php endforeach; ?>

    			  </dd>
				</dl>
			</div>
	</div>
	<?php endif; ?>