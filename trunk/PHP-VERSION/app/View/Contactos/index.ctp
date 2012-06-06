<!-- File: /app/View/Laboratorios/index.ctp -->

<?php $this->set('title_for_layout', "Laboratorios PAN SRL"); ?>

 <div id="illus_content_int_pages">
	<div id="page-wrap">
    	<h2>Dejenos su consulta y le responderemos en la brevedad posible.</h2>
        <div id="contact-area">
        <?php echo $this->Form->create('Contacto',array('action' => 'enviar',
        												'inputDefaults' => array(
												        'div' => false)
        ))?>
        <?php echo $this->Form->input('nombre');   
			  echo $this->Form->input('ciudad');   
			  echo $this->Form->input('email');   
			  echo $this->Form->input('mensaje');   
			  echo $this->Form->input('enviar',array('type' => 'submit', 'class' => 'submit-button', 'label' => false));   	  
			  ?>
<!--            <label for="Name">Nombre:</label>-->
<!--            <input type="text" name="Name" id="Name" />-->
<!---->
<!--            <label for="City">Ciudad:</label>-->
<!--            <input type="text" name="City" id="City" />-->
<!--            -->
<!--            <label for="Email">Email:</label>-->
<!--            <input type="text" name="Email" id="Email" />-->
<!--            -->
<!--            <label for="Message">Mensaje:</label><br />-->
<!--            <textarea name="Message" rows="20" cols="20" id="Message"></textarea>-->
<!--            -->
<!--          <input type="submit" name="submit" value="Enviar" class="submit-button" />-->
        <?php 
        
        echo $this->Form->end()
        ?>
        <div style="clear: both;"></div>
        </div>
	</div>
</div>
