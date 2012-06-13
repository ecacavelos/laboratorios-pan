<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('general');
		echo $this->Html->css('nivo-slider/nivo-slider.css');
		echo $this->Html->css('nivo-slider/demo/style.css');
		
		//CSSs para la libreria de galeria de imagenes para la seccion de productos
		//echo $this->Html->css('basic.css');
		echo $this->Html->css('galleriffic-2.css');
		
		echo $this->Html->script('nivo-slider/demo/scripts/jquery-1.4.3.min.js');
		echo $this->Html->script('nivo-slider/jquery.nivo.slider.pack.js');		
		echo $this->Html->script('start-slider.js');
		
		//SCRIPTs para la libreria de galeria de imagenes para la seccion de productos
		echo $this->Html->script('jquery.galleriffic.js');
		echo $this->Html->script('jquery.opacityrollover.js');

		//SCRIPT para las animaciones de la cabecera
		echo $this->Html->script('header-effects.js');		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<!--Script para seccion de prodcutos	-->
	<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
	</script>
<!--Script para seccion de prodcutos	-->	
	
</head>
<body>
	<div id="container">
		<div id="content" class="clear">
            <div id="header">
                <div id="logo">
                    <!--<a href="index.php"><img src="images/logo.png" border="0"/></a>-->
                    <?php echo $this->Html->image('logo.png', array('alt' => $title_for_layout, 'url' => '/')); ?>
                </div>
                <div id="logo_iso">                	
                    <!--<img src="images/logo_rg.png"/>-->
                    <?php echo $this->Html->image('logo_rg.png', array('alt' => $title_for_layout, 'id' => 'rotable_image')); ?>
                </div>
            </div>
            <div id="menuTop">
                <ul>
                    <!--<li><a href="/">Inicio</a></li>-->
                    <li><?php echo $this->Html->link('Inicio', array('controller' => 'indexs', 'action' => 'index')); ?></li>
                    <!--<li><a href="/empresa">La empresa</a></li>-->
                    <li><?php echo $this->Html->link('La Empresa', array('controller' => 'indexs', 'action' => 'empresa')); ?></li>
                    <!--<li><a href="/productos">Productos</a></li>-->
                    <li><?php echo $this->Html->link('Productos', array('controller' => 'productos', 'action' => 'index')); ?></li>
                    <!--<li><a href="/WEB-PAN-PHP/">Stevia Pan</a></li>-->
                    <li><?php echo $this->Html->link('Stevia Pan', 'http://www.steviapan.com/', array('target' => '_blank')); ?></li>
                    <!--<li><a href="/enlaces">Enlaces de Interes</a></li>-->
                    <!--<li>< ?php echo $this->Html->link('Enlaces de Interes', array('controller' => 'indexs', 'action' => 'enlaces')); ?></li>-->
                    <!--<li><a href="/contactenos">Contactenos</a></li>-->
                    <li><?php echo $this->Html->link('Contactenos', array('controller' => 'contactos')); ?></li>
                </ul>
			</div>
                    
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
            
            <div id="footer">
                <div id="lf">
                    López De Filippi 2855 – Barrio San Vicente<br/>
                    595-21 332-389 / 595-21 303-653
                    <?php //echo $this->webroot; ?>                    
                </div>
                <div id="rg">
                    <!--<a href="index.html"><img src="images/homenaje_home.png"/></a>-->
                    <?php echo $this->Html->image('homenaje_home.png', array('alt' => $title_for_layout, 'url' => '/homenaje')); ?>
                </div>
			</div>
		</div>
        <?php echo $this->element('sql_dump'); ?>		
</body>
</html>
