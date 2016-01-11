<div class="controlesRiesgos view">
<h2><?php echo __('Controles Riesgo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($controlesRiesgo['ControlesRiesgo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($controlesRiesgo['Riesgo']['id'], array('controller' => 'riesgos', 'action' => 'view', $controlesRiesgo['Riesgo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($controlesRiesgo['Controle']['id'], array('controller' => 'controles', 'action' => 'view', $controlesRiesgo['Controle']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Controles Riesgo'), array('action' => 'edit', $controlesRiesgo['ControlesRiesgo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Controles Riesgo'), array('action' => 'delete', $controlesRiesgo['ControlesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $controlesRiesgo['ControlesRiesgo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Controles Riesgos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Controles Riesgo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Riesgos'), array('controller' => 'riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo'), array('controller' => 'riesgos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controles'), array('controller' => 'controles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Controle'), array('controller' => 'controles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Controles'), array('controller' => 'planes_acciones_controles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Controle'), array('controller' => 'planes_acciones_controles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Matrices'), array('controller' => 'planes_acciones_matrices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Matrix'), array('controller' => 'planes_acciones_matrices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Planes Acciones Controles'); ?></h3>
	<?php if (!empty($controlesRiesgo['PlanesAccionesControle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Controles Riesgo Id'); ?></th>
		<th><?php echo __('Plan Accion Control'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($controlesRiesgo['PlanesAccionesControle'] as $planesAccionesControle): ?>
		<tr>
			<td><?php echo $planesAccionesControle['id']; ?></td>
			<td><?php echo $planesAccionesControle['controles_riesgo_id']; ?></td>
			<td><?php echo $planesAccionesControle['plan_accion_control']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planes_acciones_controles', 'action' => 'view', $planesAccionesControle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planes_acciones_controles', 'action' => 'edit', $planesAccionesControle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planes_acciones_controles', 'action' => 'delete', $planesAccionesControle['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planesAccionesControle['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planes Acciones Controle'), array('controller' => 'planes_acciones_controles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planes Acciones Matrices'); ?></h3>
	<?php if (!empty($controlesRiesgo['PlanesAccionesMatrix'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Controles Riesgo Id'); ?></th>
		<th><?php echo __('Plan Accion Matriz'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($controlesRiesgo['PlanesAccionesMatrix'] as $planesAccionesMatrix): ?>
		<tr>
			<td><?php echo $planesAccionesMatrix['id']; ?></td>
			<td><?php echo $planesAccionesMatrix['controles_riesgo_id']; ?></td>
			<td><?php echo $planesAccionesMatrix['plan_accion_matriz']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planes_acciones_matrices', 'action' => 'view', $planesAccionesMatrix['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planes_acciones_matrices', 'action' => 'edit', $planesAccionesMatrix['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planes_acciones_matrices', 'action' => 'delete', $planesAccionesMatrix['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planesAccionesMatrix['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planes Acciones Matrix'), array('controller' => 'planes_acciones_matrices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
