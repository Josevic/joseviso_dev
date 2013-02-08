<?php 

	$page_title = "Contact";
 	$page_description = "Ways of contacting me.";

	include("includes/header.php"); ?>

	<!-- <h1 class="hidden-desktop centered">Contact</h1> -->
	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
				<li class="active">Contact</li>
			</ul>
		</div>
	</div>
		
		<form class="form-horizontal" action="process" method="POST">
			<div class="row">
				<div class="span7">
					<fieldset> 
						<div id="legend" class="">
				        	<h4>Contact Form</h4>
				      	</div>

						  <div class="control-group spacer">
						    <label class="control-label" for="inputName">Name</label>
						    <div class="controls">
						      <input type="text" id="inputName" name="inputName" placeholder="Enter your name" required>
						    </div>
						  </div>  


						  <div id="emailGroup" class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="email" name="inputEmail" placeholder="Enter your email" required>
						    </div>
						  </div>

						  <div class="control-group">
						    <label class="control-label" for="inputMessage">Message</label>
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
				<h4>Email</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/gmail-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;"><strong>contact@joseviso.com</strong></p>
					</div>
				</div>
			</div>
		</div>
		<hr/>

		<div class="row visible-phone contact-method">
			<div class="span7">
				<h4>Phone Number</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/call-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;"><a href="tel:+34687352837">+34 <strong>687 352 837</strong></a><p/>
					</div>
				</div>
			</div>
		</div>
		<hr/>

		<div class="row hidden-phone contact-method">
			<div class="span7">
				<h4>Phone Number</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/call-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;">+34 <strong>687 352 837</strong><p/>
					</div>
				</div>
			</div>
		</div>

		<div class="row contact-method">
			<div class="span7">
				<h4>Skype</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/skype-icon.png" />
					</div>
					<div class="span3">
						<!-- <img src="../images/skype.png" alt="jose.viso.vargas"/> -->
						<p class="lead" style="margin-top:12px;"><strong>jose.viso.vargas</strong></p>
					</div>
				</div>
			</div>
		</div>
		
		<?php include("includes/footer.php"); ?>