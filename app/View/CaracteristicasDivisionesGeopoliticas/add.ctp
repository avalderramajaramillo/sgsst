<div class="caracteristicasDivisionesGeopoliticas form">
<?php echo $this->Form->create('CaracteristicasDivisionesGeopolitica'); ?>
	<fieldset>
		<legend><?php echo __('Add Caracteristicas Divisiones Geopolitica'); ?></legend>
	<?php
		echo $this->Form->input('divisiones_geopolitica_id');
		echo $this->Form->input('tipos_caracteristicas_divisiones_geopolitica_id');
		echo $this->Form->input('dato_caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Caracteristicas Divisiones Geopoliticas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Divisiones Geopoliticas'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Divisiones Geopolitica'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
