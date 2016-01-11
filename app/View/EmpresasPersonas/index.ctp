<div class="empresasPersonas index">
	<h2><?php echo __('Empresas Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_documento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nit_cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('divisiones_geopolitica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_sexo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresasPersonas as $empresasPersona): ?>
	<tr>
		<td><?php echo h($empresasPersona['EmpresasPersona']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresasPersona['TiposDocumento']['id'], array('controller' => 'tipos_documentos', 'action' => 'view', $empresasPersona['TiposDocumento']['id'])); ?>
		</td>
		<td><?php echo h($empresasPersona['EmpresasPersona']['nit_cedula']); ?>&nbsp;</td>
		<td><?php echo h($empresasPersona['EmpresasPersona']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($empresasPersona['EmpresasPersona']['direccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresasPersona['DivisionesGeopolitica']['division_geopolitica'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $empresasPersona['DivisionesGeopolitica']['id'])); ?>
		</td>
		<td><?php echo h($empresasPersona['EmpresasPersona']['fecha_nacimiento']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresasPersona['TiposSexo']['id'], array('controller' => 'tipos_sexos', 'action' => 'view', $empresasPersona['TiposSexo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empresasPersona['TiposCliente']['id'], array('controller' => 'tipos_clientes', 'action' => 'view', $empresasPersona['TiposCliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresasPersona['EmpresasPersona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresasPersona['EmpresasPersona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresasPersona['EmpresasPersona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasPersona['EmpresasPersona']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('action' => 'add')); ?></li>
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
