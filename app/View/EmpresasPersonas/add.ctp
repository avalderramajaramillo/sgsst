<div class="empresasPersonas form">
<?php echo $this->Form->create('EmpresasPersona'); ?>
	<fieldset>
		<legend><?php echo __('Add Empresas Persona'); ?></legend>
	<?php
		echo $this->Form->input('tipos_documento_id');
		echo $this->Form->input('nit_cedula');
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('divisiones_geopolitica_id');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('tipos_sexo_id');
		echo $this->Form->input('tipos_cliente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Documentos'), array('controller' => 'tipos_documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Documento'), array('controller' => 'tipos_documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Sexos'), array('controller' => 'tipos_sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Sexo'), array('controller' => 'tipos_sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('controller' => 'tipos_clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Fondos Pensiones'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Fondos Pensione'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Riesgos Laborales'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Riesgos Laborale'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos Personas'), array('controller' => 'cargos_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargos Persona'), array('controller' => 'cargos_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contactos Empresas'), array('controller' => 'contactos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contactos Empresa'), array('controller' => 'contactos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos'), array('controller' => 'correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correo'), array('controller' => 'correos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Salud Promotoras'), array('controller' => 'empresas_salud_promotoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Salud Promotora'), array('controller' => 'empresas_salud_promotoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Definitivos'), array('controller' => 'planes_acciones_definitivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Definitivo'), array('controller' => 'planes_acciones_definitivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
