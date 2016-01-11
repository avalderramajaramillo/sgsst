<div class="contactosEmpresas form">
<?php echo $this->Form->create('ContactosEmpresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Contactos Empresa'); ?></legend>
	<?php
		echo $this->Form->input('tipos_contacto_id');
		echo $this->Form->input('empresas_persona_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contactos Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Contactos'), array('controller' => 'tipos_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Contacto'), array('controller' => 'tipos_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
