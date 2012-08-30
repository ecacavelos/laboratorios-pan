<!-- File: /app/View/Indexs/index.ctp -->

<?php $this->set('title_for_layout', "Laboratorios PAN SRL"); ?>

<div id="illus_content">
</div>

<?php echo $this->Html->image('bienvenidos.png', array('id' => 'bienvenidos', 'alt' => "", 'width' => '397px', 'height' => '149px')); ?>

<div id="slide_container">
	<div id="slide_wrapper">
        <div id="slider" class="nivoSlider">
        <?php
			if (!empty($productos_en_promocion)){
				// Iteramos la tabla de productos, y por cada producto que esté marcado como promocion, agregamos su imagen (con el enlace correspondiente) al contenedor del plugin slider
				foreach ($productos as $producto){ 			
					if ($producto['Producto']['promocion']) {
						echo $this->Html->image('productos/'.$producto['Producto']['id'].'.jpg', array('alt' => "", 'width' => '500px', 'height' => '149px', 'url' => '/productos#'.$producto['Producto']['nombre'], 'title' => 'Producto en promoción: '.$producto['Producto']['nombre']));
					}
				}
			} else {
				echo $this->Html->image('productos/proximamente.png', array('alt' => "", 'width' => '500px', 'height' => '149px'));
			}
        ?>
        </div>
	</div>
    
</div>

<div id="htmlcaption" class="nivo-html-caption"></div>