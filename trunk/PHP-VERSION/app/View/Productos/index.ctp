<?php
	if ($logeado == '1') {
		echo 'Estas logeado. ';
		echo $this->Html->link('Cerrar Sesión', array('controller' => 'users', 'action' => 'logout'));
	}
?>

<h1>Productos</h1>

<!-- Start Advanced Gallery Html Containers -->
<div id="gallery" class="content">
    <div id="controls" class="controls"></div>
    <div class="slideshow-container">
        <div id="loading" class="loader"></div>
        <div id="slideshow" class="slideshow"></div>
    </div>
    <div id="caption" class="caption-container"></div>
</div>
<div id="thumbs" class="navigation">
    <ul class="thumbs noscript">
    
    <!-- Por cada producto generar el codigo HTML siguiente: 
        <li>
            <a class="thumb" name="leaf" href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015.jpg" title="Title #0">
                <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #0" />
            </a>
            <div class="caption">
                <div class="download">
                    <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                </div>
                <div class="image-title">Title #0</div>
                <div class="image-desc">Description</div>
            </div>
        </li>	-->

    <?php             
        //$productos -> es un array con la siguiente estructura:$productos[nro_producto]['Producto'][campo] :::: 'Producto' es el string Producto, es decir, siempre va ser Producto
        //$this->webroot.'/img/productos/'.$producto['Producto']['id_producto'].'.jpg -> path a las imagenes. 
        foreach ($productos as $producto){
            
            $path = $this->webroot.'img/productos/'.$producto['Producto']['id'].'.jpg';
            //$path_thumb = $this->webroot.'img/productos/'.$producto['Producto']['id_producto'].'_s.jpg';
            $path_thumb = $this->webroot.'img/productos/'.$producto['Producto']['id'].'.jpg';
            
            echo '<li>
            <a class="thumb" name="drop" href="'.$path.'" title="'.$producto['Producto']['nombre'].'">
                <img src="'.$path_thumb.'" alt="'.$producto['Producto']['nombre'].'" />
            </a>
            <div class="caption">
                <div class="image-title">'.$producto['Producto']['nombre'].'</div>
                <div class="image-desc"><p id="desc_producto">'.$producto['Producto']['descripcion'].'</p></div>';            
				if ($logeado == '1') {
					echo '<p>'.$this->Html->link('Editar este producto', array('controller' => 'productos', 'action' => 'edit', $producto['Producto']['id'])).'</p>';
					echo '<p>'.$this->Form->postLink('Eliminar este producto', array('controller' => 'productos', 'action' => 'delete', $producto['Producto']['id']), array('confirm' => 'Está seguro?')).'</p>';
				}
				echo '<p>'.$this->Html->link('Ver el prospecto','/img/productos/'.$producto['Producto']['nombre'].'.pdf', array('target' => '_blank')).'</p>';
        	echo '</div>
			</li>';
		
        }    
    ?>				
        
    </ul>
</div>
<div style="clear: both;"></div> 
		
<script type="text/javascript">
	jQuery(document).ready(function($) {
		// We only want these styles applied when javascript is enabled
		$('div.navigation').css({'width' : '325px', 'float' : 'left'});
		$('div.content').css('display', 'block');

		// Initially set opacity on thumbs and add
		// additional styling for hover effect on thumbs
		var onMouseOutOpacity = 0.67;
		$('#thumbs ul.thumbs li').opacityrollover({
			mouseOutOpacity:   onMouseOutOpacity,
			mouseOverOpacity:  1.0,
			fadeSpeed:         'fast',
			exemptionSelector: '.selected'
		});
		
		// Initialize Advanced Galleriffic Gallery
		var gallery = $('#thumbs').galleriffic({
			delay:                     2500,
			numThumbs:                 15,
			preloadAhead:              10,
			enableTopPager:            true,
			enableBottomPager:         true,
			maxPagesToShow:            7,
			imageContainerSel:         '#slideshow',
			controlsContainerSel:      '#controls',
			captionContainerSel:       '#caption',
			loadingContainerSel:       '#loading',
			renderSSControls:          true,
			renderNavControls:         true,
			playLinkText:              'Recorrido automatico',
			pauseLinkText:             'Pausar recorrido automatico',
			prevLinkText:              '&lsaquo; Anterior',
			nextLinkText:              'Siguiente &rsaquo;',
			nextPageLinkText:          'Siguiente &rsaquo;',
			prevPageLinkText:          '&lsaquo; Ant',
			enableHistory:             false,
			autoStart:                 false,
			syncTransitions:           true,
			defaultTransitionDuration: 900,
			onSlideChange:             function(prevIndex, nextIndex) {
				// 'this' refers to the gallery, which is an extension of $('#thumbs')
				this.find('ul.thumbs').children()
					.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
					.eq(nextIndex).fadeTo('fast', 1.0);
			},
			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
		});
	});
</script>