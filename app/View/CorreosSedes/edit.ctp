<div class="correosSedes form">
<?php echo $this->Form->create('CorreosSede'); ?>
	<fieldset>
		<legend><?php echo __('Edit Correos Sede'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sede_id');
		echo $this->Form->input('tipos_correo_id');
		echo $this->Form->input('correo_electronico');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CorreosSede.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CorreosSede.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Correos Sedes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('controller' => 'tipos_correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Correo'), array('controller' => 'tipos_correos', 'action' => 'add')); ?> </li>
	</ul>
</div>
