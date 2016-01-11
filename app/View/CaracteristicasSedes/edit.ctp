<div class="caracteristicasSedes form">
<?php echo $this->Form->create('CaracteristicasSede'); ?>
	<fieldset>
		<legend><?php echo __('Edit Caracteristicas Sede'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sede_id');
		echo $this->Form->input('tipos_caracteristicas_sede_id');
		echo $this->Form->input('dato_caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CaracteristicasSede.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CaracteristicasSede.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Caracteristicas Sedes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Sedes'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Sede'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
