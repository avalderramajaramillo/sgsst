<div class="cargosPersonas form">
<?php echo $this->Form->create('CargosPersona'); ?>
	<fieldset>
		<legend><?php echo __('Add Cargos Persona'); ?></legend>
	<?php
		echo $this->Form->input('empresas_persona_id');
		echo $this->Form->input('organigrama_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cargos Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones Empresas'), array('controller' => 'evaluaciones_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluaciones Empresa'), array('controller' => 'evaluaciones_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes Grupos Apoyos'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrantes Grupos Apoyo'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'add')); ?> </li>
	</ul>
</div>
