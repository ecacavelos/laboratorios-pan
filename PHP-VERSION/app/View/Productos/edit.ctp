<!-- File: /app/View/Productos/edit.ctp -->
<?php echo $this->Form->create('Producto', array('action' => 'edit', 'type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Producto'); ?></legend>
        <?php
			echo $this->Form->input('id');
            echo $this->Form->input('nombre', array('type' => 'text'));
            echo $this->Form->input('descripcion');
			//echo $this->Form->input('file', array('type' => 'file'));
			echo $this->Form->input('Upload.0.file', array('type' => 'file'));
	        echo $this->Form->input('Upload.1.file', array('type' => 'file'));			
        ?>
	</fieldset>
<?php echo $this->Form->end('Guardar Cambios'); ?>
