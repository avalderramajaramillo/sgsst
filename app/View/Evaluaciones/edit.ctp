<div class="evaluaciones form">
<?php echo $this->Form->create('Evaluacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evaluacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('evaluacion');
		echo $this->Form->input('porcentaje_peso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evaluacione.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Evaluacione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('controller' => 'evaluaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Criterios'), array('controller' => 'planes_acciones_criterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Criterio'), array('controller' => 'planes_acciones_criterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
