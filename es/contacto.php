<?php 

	$page_title = "Contacto";
 	$page_description = "Formas de contactarme: formulario de contacto, email y Skype.";

	include("includes/header.php"); ?>
			
		<div class="lead spacer">
			<p>Puedes contactarme por medio de cualquiera de las siguientes formas:</p>
		</div>

		<form class="form-horizontal well spacer" action="process" method="POST">
			<fieldset> 
				<div id="legend" class="">
		        	<h4>Formulario de Contacto</h4>
		      	</div>

				  <div class="control-group spacer">
				    <label class="control-label" for="inputName">Nombre</label>
				    <div class="controls">
				      <input type="text" id="inputName" name="inputName" placeholder="Escribe tu nombre" required>
				    </div>
				  </div>  


				  <div id="emailGroup" class="control-group">
				    <label class="control-label" for="inputEmail">Email</label>
				    <div class="controls">
				      <!-- <input type="text" id="inputEmail" name="inputEmail" placeholder="Escribe tu email"> -->
				      <input type="email" name="inputEmail" placeholder="Escribe tu email" required>
				      <!-- <span class="help-inline">Por favor, introduce un email válido</span> -->
				    </div>
				  </div>

				  <div class="control-group">
				    <label class="control-label" for="inputMessage">Mensaje</label>
				    <div class="controls">
				      <textarea name="inputMessage" rows="7" class="field span4" placeholder="Mensaje que quieres hacerme llegar" required></textarea>
				    </div>
				  </div>
		  
		  		
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" name="sent" class="btn btn-primary">¡Enviar Mensaje!</button>
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
					<img src="../images/email_spanish.png" alt="contacto@joseviso.com" />
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