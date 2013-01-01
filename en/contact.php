<?php 

	$page_title = "Contact";
 	$page_description = "Ways of contacting me: contact form, email and skype.";

	include("includes/header.php"); ?>
			
		<div class="lead spacer">
			<p>You can contact me through any of the following ways:</p>
		</div>

		<form class="form-horizontal well spacer" action="process" method="POST">
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
		</form>
	
		<div class="well">
			<h4>Email</h4>
			<div class="row centered">
				<div class="span3">
					<img src="../images/icons/PNG/gmail-icon.png" />
				</div>
				<div class="span4">
					<img src="../images/email_english.png" alt="contacto@joseviso.com" />
				</div>
			</div>
		</div>

		<div class="well">
			<h4>Skype</h4>
			<div class="row centered">
				<div class="span3">
					<img src="../images/icons/PNG/skype-icon.png" />
				</div>
				<div class="span4">
					<img src="../images/skype.png" alt="jose.viso.vargas"/>
				</div>
			</div>
		</div>
		
		<?php include("includes/footer.php"); ?>