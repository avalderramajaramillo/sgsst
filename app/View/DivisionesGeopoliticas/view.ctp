<div class="divisionesGeopoliticas view">
<h2><?php echo __('Divisiones Geopolitica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Divisiones Geopolitica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($divisionesGeopolitica['ParentDivisionesGeopolitica']['division_geopolitica'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $divisionesGeopolitica['ParentDivisionesGeopolitica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division Geopolitica'); ?></dt>
		<dd>
			<?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['division_geopolitica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divipola'); ?></dt>
		<dd>
			<?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['divipola']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Divisiones Geopolitica'), array('action' => 'edit', $divisionesGeopolitica['DivisionesGeopolitica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Divisiones Geopolitica'), array('action' => 'delete', $divisionesGeopolitica['DivisionesGeopolitica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $divisionesGeopolitica['DivisionesGeopolitica']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Divisiones Geopoliticas'); ?></h3>
	<?php if (!empty($divisionesGeopolitica['ChildDivisionesGeopolitica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Division Geopolitica'); ?></th>
		<th><?php echo __('Divipola'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divisionesGeopolitica['ChildDivisionesGeopolitica'] as $childDivisionesGeopolitica): ?>
		<tr>
			<td><?php echo $childDivisionesGeopolitica['id']; ?></td>
			<td><?php echo $childDivisionesGeopolitica['parent_id']; ?></td>
			<td><?php echo $childDivisionesGeopolitica['lft']; ?></td>
			<td><?php echo $childDivisionesGeopolitica['rght']; ?></td>
			<td><?php echo $childDivisionesGeopolitica['division_geopolitica']; ?></td>
			<td><?php echo $childDivisionesGeopolitica['divipola']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $childDivisionesGeopolitica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'divisiones_geopoliticas', 'action' => 'edit', $childDivisionesGeopolitica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'divisiones_geopoliticas', 'action' => 'delete', $childDivisionesGeopolitica['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childDivisionesGeopolitica['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas Personas'); ?></h3>
	<?php if (!empty($divisionesGeopolitica['EmpresasPersona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipos Documento Id'); ?></th>
		<th><?php echo __('Nit Cedula'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Divisiones Geopolitica Id'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Tipos Sexo Id'); ?></th>
		<th><?php echo __('Tipos Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divisionesGeopolitica['EmpresasPersona'] as $empresasPersona): ?>
		<tr>
			<td><?php echo $empresasPersona['id']; ?></td>
			<td><?php echo $empresasPersona['tipos_documento_id']; ?></td>
			<td><?php echo $empresasPersona['nit_cedula']; ?></td>
			<td><?php echo $empresasPersona['nombre']; ?></td>
			<td><?php echo $empresasPersona['direccion']; ?></td>
			<td><?php echo $empresasPersona['divisiones_geopolitica_id']; ?></td>
			<td><?php echo $empresasPersona['fecha_nacimiento']; ?></td>
			<td><?php echo $empresasPersona['tipos_sexo_id']; ?></td>
			<td><?php echo $empresasPersona['tipos_cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas_personas', 'action' => 'view', $empresasPersona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas_personas', 'action' => 'edit', $empresasPersona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas_personas', 'action' => 'delete', $empresasPersona['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasPersona['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sedes'); ?></h3>
	<?php if (!empty($divisionesGeopolitica['Sede'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Sede'); ?></th>
		<th><?php echo __('Clases Riesgo Id'); ?></th>
		<th><?php echo __('Divisiones Geopolitica Id'); ?></th>
		<th><?php echo __('Zonas Geopolitica Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divisionesGeopolitica['Sede'] as $sede): ?>
		<tr>
			<td><?php echo $sede['id']; ?></td>
			<td><?php echo $sede['parent_id']; ?></td>
			<td><?php echo $sede['lft']; ?></td>
			<td><?php echo $sede['rght']; ?></td>
			<td><?php echo $sede['sede']; ?></td>
			<td><?php echo $sede['clases_riesgo_id']; ?></td>
			<td><?php echo $sede['divisiones_geopolitica_id']; ?></td>
			<td><?php echo $sede['zonas_geopolitica_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sedes', 'action' => 'view', $sede['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sedes', 'action' => 'edit', $sede['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sedes', 'action' => 'delete', $sede['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sede['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
