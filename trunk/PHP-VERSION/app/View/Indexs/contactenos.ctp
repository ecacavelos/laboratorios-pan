<!-- File: /app/View/Laboratorios/index.ctp -->

<?php $this->set('title_for_layout', "Laboratorios PAN SRL"); ?>

<div id="illus_content_int_pages">
	<div id="page-wrap">
    	<h2>Dejenos su consulta y le responderemos en la brevedad posible.</h2>
        <div id="contact-area">
        <form method="post" action="contactengine.php">
            <label for="Name">Nombre:</label>
            <input type="text" name="Name" id="Name" />

            <label for="City">Ciudad:</label>
            <input type="text" name="City" id="City" />
            
            <label for="Email">Email:</label>
            <input type="text" name="Email" id="Email" />
            
            <label for="Message">Mensaje:</label><br />
            <textarea name="Message" rows="20" cols="20" id="Message"></textarea>
            
            <input type="submit" name="submit" value="Enviar" class="submit-button" />
        </form>
        <div style="clear: both;"></div>
        </div>
	</div>
</div>
