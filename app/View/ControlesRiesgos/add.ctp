<div class="controlesRiesgos form">
<?php echo $this->Form->create('ControlesRiesgo'); ?>
	<fieldset>
		<legend><?php echo __('Add Controles Riesgo'); ?></legend>
	<?php
		echo $this->Form->input('riesgo_id');
		echo $this->Form->input('controle_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Controles Riesgos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Riesgos'), array('controller' => 'riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo'), array('controller' => 'riesgos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controles'), array('controller' => 'controles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Controle'), array('controller' => 'controles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Controles'), array('controller' => 'planes_acciones_controles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Controle'), array('controller' => 'planes_acciones_controles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Matrices'), array('controller' => 'planes_acciones_matrices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Matrix'), array('controller' => 'planes_acciones_matrices', 'action' => 'add')); ?> </li>
	</ul>
</div>
