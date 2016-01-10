<div class="actividadesEconomicasEmpresas form">
<?php echo $this->Form->create('ActividadesEconomicasEmpresa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actividades Economicas Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('actividades_economica_id');
		echo $this->Form->input('es_principal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActividadesEconomicasEmpresa.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ActividadesEconomicasEmpresa.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
