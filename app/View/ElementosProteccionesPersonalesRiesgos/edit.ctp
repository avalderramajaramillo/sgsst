<div class="elementosProteccionesPersonalesRiesgos form">
<?php echo $this->Form->create('ElementosProteccionesPersonalesRiesgo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Elementos Protecciones Personales Riesgo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('riesgo_id');
		echo $this->Form->input('elemento_proteccion_personal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ElementosProteccionesPersonalesRiesgo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ElementosProteccionesPersonalesRiesgo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Elementos Protecciones Personales Riesgos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Riesgos'), array('controller' => 'riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo'), array('controller' => 'riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
