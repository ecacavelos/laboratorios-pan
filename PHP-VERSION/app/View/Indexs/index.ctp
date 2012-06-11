<!-- File: /app/View/Indexs/index.ctp -->

<?php $this->set('title_for_layout', "Laboratorios PAN SRL"); ?>

<div id="illus_content">
</div>

<?php echo $this->Html->image('bienvenidos.png', array('id' => 'bienvenidos', 'alt' => "", 'width' => '397px', 'height' => '149px')); ?>

<div id="slide_container">
    <div id="slider" class="nivoSlider">
	<?php
		// Iteramos la tabla de productos, y por cada producto que esté marcado como promocion, agregamos su imagen (con el enlace correspondiente) al contenedor del plugin slider
		foreach ($productos as $producto){ 			
			if ($producto['Producto']['promocion']) {
				echo $this->Html->image('productos/'.$producto['Producto']['id'].'.jpg', array('alt' => "", 'width' => '500px', 'height' => '149px', 'url' => '/productos#'.$producto['Producto']['nombre']));
			}
		}
	?>
    </div>
</div>