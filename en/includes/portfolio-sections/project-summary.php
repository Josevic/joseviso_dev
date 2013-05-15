<!-- Summary of the project -->
	<div class="row spacer">

		<!-- Description-->
		<div class="hero-unit span<?php echo $herounit_width; ?>">
			<?php echo $herounit_desc; ?>
		</div>

		<!-- Front image (if available) -->
		<?php if (isset($image_front)): ?>
		<div class="span3 pull-right hidden-phone">
			<img src="<?php echo $image_front; ?>">
		</div>
		<?php endif; ?>
	</div>

	<hr/>