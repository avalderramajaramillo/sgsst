<div class="correos view">
<h2><?php echo __('Correo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($correo['Correo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($correo['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $correo['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Correo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($correo['TiposCorreo']['tipo_correo'], array('controller' => 'tipos_correos', 'action' => 'view', $correo['TiposCorreo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($correo['Correo']['correo_electronico']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Correo'), array('action' => 'edit', $correo['Correo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Correo'), array('action' => 'delete', $correo['Correo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correo['Correo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('controller' => 'tipos_correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Correo'), array('controller' => 'tipos_correos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sedes'); ?></h3>
	<?php if (!empty($correo['Sede'])): ?>
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
	<?php foreach ($correo['Sede'] as $sede): ?>
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
