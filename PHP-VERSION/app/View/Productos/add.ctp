<!-- File: /app/View/Productos/add.ctp -->
<div class="productos form">
    <?php echo $this->Form->create('Producto', array('type' => 'file'));?>
        <fieldset>
            <legend><?php echo __('Agregar Producto'); ?></legend>
        <?php
            echo $this->Form->input('nombre', array('type' => 'text'));
            echo $this->Form->input('descripcion');
			echo $this->Form->input('promocion', array('type' => 'checkbox'));
			//echo $this->Form->input('file', array('type' => 'file'));
			echo '<p></p>';			
			echo $this->Form->input('Upload.0.file', array('type' => 'file', 'label' => 'Imagen'));
	        echo $this->Form->input('Upload.1.file', array('type' => 'file', 'label' => 'Prospecto'));
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Guardar'));?>
</div>
