<?php 

	$page_title = "Contact";
 	$page_description = "Ways of contacting me.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1 style="color:gray">Contact</h1>
	  </div>
	</header>
		
		<form  action="process" method="POST">
			<div class="row">
				<div class="span7">
					<fieldset>

						  <div class="control-group spacer">
						    
						    <div class="controls">
						      <input type="text" id="inputName" name="inputName" placeholder="Enter your name" required>
						    </div>
						  </div>  


						  <div id="emailGroup" class="control-group">
						    
						    <div class="controls">
						      <input type="email" name="inputEmail" placeholder="Enter your email" required>
						    </div>
						  </div>

						  <div class="control-group">
						    
						    <div class="controls">
						      <textarea name="inputMessage" rows="7" class="field span4" placeholder="Message you want to send me" required></textarea>
						    </div>
						  </div>
				  
				  		
						  <div class="control-group">
						    <div class="controls">
						      <button type="submit" name="sent" class="btn btn-primary">Send Message!</button>
						    </div>
						  </div>
					</fieldset>
				</div>
			</div>
		</form>
		<hr/>
	
		<div class="row">
			<div class="span7">
				<p class="lead" style="margin-top:12px;"><small class="muted">Email:</small> <strong>contact@joseviso.com</strong></p>	
			</div>
		</div>
		

		<div class="row visible-phone contact-method">
			<div class="offset1 span7">
				<p class="lead" style="margin-top:12px;"><small class="muted">Tel:</small> <a href="tel:+34687352837">+34 <strong>687 352 837</strong></a><p/>	
			</div>
		</div>

		<div class="row hidden-phone contact-method">
			<div class="span7">
				<p class="lead" style="margin-top:12px;"><small class="muted">Tel:</small> +34 <strong>687 352 837</strong><p/>
			</div>
		</div>
		<hr/>
		
		<div class="row">
			<div class="span10">
				
				<?php include("includes/social_networks.php"); ?>
			</div>
		</div>
		<?php include("includes/footer.php"); ?>