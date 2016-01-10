<div class="actividadesEconomicas view">
<h2><?php echo __('Actividades Economica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomica['ActividadesEconomica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Actividades Economica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEconomica['ParentActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $actividadesEconomica['ParentActividadesEconomica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomica['ActividadesEconomica']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomica['ActividadesEconomica']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Economica'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomica['ActividadesEconomica']['actividad_economica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Economica'), array('action' => 'edit', $actividadesEconomica['ActividadesEconomica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Economica'), array('action' => 'delete', $actividadesEconomica['ActividadesEconomica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividadesEconomica['ActividadesEconomica']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividades Economicas'); ?></h3>
	<?php if (!empty($actividadesEconomica['ChildActividadesEconomica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Actividad Economica'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesEconomica['ChildActividadesEconomica'] as $childActividadesEconomica): ?>
		<tr>
			<td><?php echo $childActividadesEconomica['id']; ?></td>
			<td><?php echo $childActividadesEconomica['parent_id']; ?></td>
			<td><?php echo $childActividadesEconomica['lft']; ?></td>
			<td><?php echo $childActividadesEconomica['rght']; ?></td>
			<td><?php echo $childActividadesEconomica['actividad_economica']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividades_economicas', 'action' => 'view', $childActividadesEconomica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades_economicas', 'action' => 'edit', $childActividadesEconomica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividades_economicas', 'action' => 'delete', $childActividadesEconomica['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childActividadesEconomica['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Datos Empresas'); ?></h3>
	<?php if (!empty($actividadesEconomica['DatosEmpresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Codigo Ciiu'); ?></th>
		<th><?php echo __('Actividades Economica Id'); ?></th>
		<th><?php echo __('Clases Riesgo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesEconomica['DatosEmpresa'] as $datosEmpresa): ?>
		<tr>
			<td><?php echo $datosEmpresa['id']; ?></td>
			<td><?php echo $datosEmpresa['empresas_persona_id']; ?></td>
			<td><?php echo $datosEmpresa['codigo_ciiu']; ?></td>
			<td><?php echo $datosEmpresa['actividades_economica_id']; ?></td>
			<td><?php echo $datosEmpresa['clases_riesgo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'datos_empresas', 'action' => 'view', $datosEmpresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'datos_empresas', 'action' => 'edit', $datosEmpresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'datos_empresas', 'action' => 'delete', $datosEmpresa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $datosEmpresa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sedes'); ?></h3>
	<?php if (!empty($actividadesEconomica['Sede'])): ?>
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
	<?php foreach ($actividadesEconomica['Sede'] as $sede): ?>
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
