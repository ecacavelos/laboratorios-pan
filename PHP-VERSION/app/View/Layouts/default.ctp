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
		
		echo $this->Html->script('nivo-slider/demo/scripts/jquery-1.4.3.min.js');
		echo $this->Html->script('nivo-slider/jquery.nivo.slider.pack.js');		
		echo $this->Html->script('start-slider.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
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
                    <?php echo $this->Html->image('logo_rg.png', array('alt' => $title_for_layout)); ?>
                </div>
            </div>
            <div id="menuTop">
                <ul>
                    <li><a href="/WEB-PAN-PHP/">Inicio</a></li>
                    <li><a href="/WEB-PAN-PHP/empresa">La empresa</a></li>
                    <li><a href="/WEB-PAN-PHP/">Productos</a></li>
                    <li><a href="/WEB-PAN-PHP/">Stevia Pan</a></li>
                    <li><a href="/WEB-PAN-PHP/">Enlaces de Interes</a></li>
                    <li><a href="/WEB-PAN-PHP/">Contactenos</a></li>
                </ul>
			</div>
                    
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
            
            <div id="footer">
                <div id="lf">
                    López De Filippi 2855 – Barrio San Vicente<br/>
                    595-21 332-389 / 595-21 303-653
                </div>
                <div id="rg">
                    <!--<a href="index.html"><img src="images/homenaje_home.png"/></a>-->
                    <?php echo $this->Html->image('homenaje_home.png', array('alt' => $title_for_layout, 'url' => '/')); ?>
                </div>
			</div>            
		</div>
</body>
</html>
