<!-- File: /app/View/Laboratorios/index.ctp -->

<?php $this->set('title_for_layout', "Laboratorios PAN SRL"); ?>

<div id="illus_content">
</div>

<?php echo $this->Html->image('bienvenidos.png', array('id' => 'bienvenidos', 'alt' => "", 'width' => '397px', 'height' => '149px')); ?>

<div id="slide_container">
    <div id="slider" class="nivoSlider">
	<?php
		foreach ($productos as $producto){ 
			//echo '<p>'.$producto['Producto']['nombre'].'</p>';
			echo $this->Html->image('productos/'.$producto['Producto']['id'].'.jpg', array('alt' => "", 'width' => '500px', 'height' => '149px'));
		}
	?>
    </div>
</div>