<div class="clasesRiesgos view">
<h2><?php echo __('Clases Riesgo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clase Riesgo'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['clase_riesgo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Minimo'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_minimo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Inicial'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Maximo'); ?></dt>
		<dd>
			<?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_maximo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clases Riesgo'), array('action' => 'edit', $clasesRiesgo['ClasesRiesgo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clases Riesgo'), array('action' => 'delete', $clasesRiesgo['ClasesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clasesRiesgo['ClasesRiesgo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases Riesgos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clases Riesgo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Datos Empresas'); ?></h3>
	<?php if (!empty($clasesRiesgo['DatosEmpresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Codigo Ciiu'); ?></th>
		<th><?php echo __('Actividades Economica Id'); ?></th>
		<th><?php echo __('Clases Riesgo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clasesRiesgo['DatosEmpresa'] as $datosEmpresa): ?>
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
	<?php if (!empty($clasesRiesgo['Sede'])): ?>
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
	<?php foreach ($clasesRiesgo['Sede'] as $sede): ?>
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
