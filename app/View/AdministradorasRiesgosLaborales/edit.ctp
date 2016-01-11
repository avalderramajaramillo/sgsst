<div class="administradorasRiesgosLaborales form">
<?php echo $this->Form->create('AdministradorasRiesgosLaborale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Administradoras Riesgos Laborale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('empresas_persona_id');
		echo $this->Form->input('nombre_abreviado');
		echo $this->Form->input('codigo_arl');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdministradorasRiesgosLaborale.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('AdministradorasRiesgosLaborale.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Administradoras Riesgos Laborales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
