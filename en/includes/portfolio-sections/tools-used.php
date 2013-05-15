	<?php if(isset($tools_used)): ?>
	<div class="row">
		<div class="span12">
			<h3>Tools used</h3>
		</div>
		<div class="offset4 span4">
			<table class="table table-bordered">

				<?php foreach ($tools_used as $i => $tool): ?>
				<tr>
					<td><p class="centered"><?php echo $tools_used[$i]; ?></p></td>
				</tr>
				<?php endforeach; ?>

  			</table>
		</div>
	</div>
	<hr/>
	<?php endif; ?>