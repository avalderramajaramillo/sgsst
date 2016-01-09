<div class="tiposCorreos form">
<?php echo $this->Form->create('TiposCorreo'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipos Correo'); ?></legend>
	<?php
		echo $this->Form->input('tipo_correo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Correos'), array('controller' => 'correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correo'), array('controller' => 'correos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos Sedes'), array('controller' => 'correos_sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correos Sede'), array('controller' => 'correos_sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
