<!-- File: /app/View/Productos/add.ctp -->
<div class="productos form">
    <?php echo $this->Form->create('Producto', array('type' => 'file'));?>
        <fieldset>
            <legend><?php echo __('Agregar Producto'); ?></legend>
        <?php
            echo $this->Form->input('nombre', array('type' => 'text'));
            echo $this->Form->input('descripcion');
			//echo $this->Form->input('file', array('type' => 'file'));
			echo $this->Form->input('Upload.0.file', array('type' => 'file'));
	        echo $this->Form->input('Upload.1.file', array('type' => 'file'));
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
</div>
