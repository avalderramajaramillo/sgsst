<div class="datosEmpresas form">
<?php echo $this->Form->create('DatosEmpresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Datos Empresa'); ?></legend>
	<?php
		echo $this->Form->input('empresas_persona_id');
		echo $this->Form->input('codigo_ciiu');
		echo $this->Form->input('actividades_economica_id');
		echo $this->Form->input('clases_riesgo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases Riesgos'), array('controller' => 'clases_riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clases Riesgo'), array('controller' => 'clases_riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
