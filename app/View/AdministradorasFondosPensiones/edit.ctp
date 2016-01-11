<div class="administradorasFondosPensiones form">
<?php echo $this->Form->create('AdministradorasFondosPensione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Administradoras Fondos Pensione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('empresas_persona_id');
		echo $this->Form->input('nombre_abreviado');
		echo $this->Form->input('codigo_afp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdministradorasFondosPensione.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('AdministradorasFondosPensione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Administradoras Fondos Pensiones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
