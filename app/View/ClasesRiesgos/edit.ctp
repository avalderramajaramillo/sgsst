<div class="clasesRiesgos form">
<?php echo $this->Form->create('ClasesRiesgo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Clases Riesgo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clase_riesgo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('porcentaje_minimo');
		echo $this->Form->input('porcentaje_inicial');
		echo $this->Form->input('porcentaje_maximo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClasesRiesgo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ClasesRiesgo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Clases Riesgos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
