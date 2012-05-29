<!-- File: /app/View/Productos/edit.ctp -->
<?php echo $this->Form->create('Producto', array('action' => 'edit')); ?>
	<fieldset>
		<legend><?php echo __('Editar Producto'); ?></legend>
        <?php
            echo $this->Form->input('nombre', array('type' => 'text'));
            echo $this->Form->input('descripcion');
        ?>
	</fieldset>
<?php echo $this->Form->end('Guardar Cambios'); ?>
