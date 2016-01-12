<div class="evaluaciones view">
<h2><?php echo __('Evaluacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Evaluacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evaluacione['ParentEvaluacione']['evaluacion'], array('controller' => 'evaluaciones', 'action' => 'view', $evaluacione['ParentEvaluacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluacion'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['evaluacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Peso'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['porcentaje_peso']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacione'), array('action' => 'edit', $evaluacione['Evaluacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacione'), array('action' => 'delete', $evaluacione['Evaluacione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evaluacione['Evaluacione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('controller' => 'evaluaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Criterios'), array('controller' => 'planes_acciones_criterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Criterio'), array('controller' => 'planes_acciones_criterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Evaluaciones'); ?></h3>
	<?php if (!empty($evaluacione['ChildEvaluacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Evaluacion'); ?></th>
		<th><?php echo __('Porcentaje Peso'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evaluacione['ChildEvaluacione'] as $childEvaluacione): ?>
		<tr>
			<td><?php echo $childEvaluacione['id']; ?></td>
			<td><?php echo $childEvaluacione['parent_id']; ?></td>
			<td><?php echo $childEvaluacione['lft']; ?></td>
			<td><?php echo $childEvaluacione['rght']; ?></td>
			<td><?php echo $childEvaluacione['evaluacion']; ?></td>
			<td><?php echo $childEvaluacione['porcentaje_peso']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'evaluaciones', 'action' => 'view', $childEvaluacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'evaluaciones', 'action' => 'edit', $childEvaluacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'evaluaciones', 'action' => 'delete', $childEvaluacione['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childEvaluacione['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Evaluacione'), array('controller' => 'evaluaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planes Acciones Criterios'); ?></h3>
	<?php if (!empty($evaluacione['PlanesAccionesCriterio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evaluacione Id'); ?></th>
		<th><?php echo __('Plan Accion Criterio'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evaluacione['PlanesAccionesCriterio'] as $planesAccionesCriterio): ?>
		<tr>
			<td><?php echo $planesAccionesCriterio['id']; ?></td>
			<td><?php echo $planesAccionesCriterio['evaluacione_id']; ?></td>
			<td><?php echo $planesAccionesCriterio['plan_accion_criterio']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planes_acciones_criterios', 'action' => 'view', $planesAccionesCriterio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planes_acciones_criterios', 'action' => 'edit', $planesAccionesCriterio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planes_acciones_criterios', 'action' => 'delete', $planesAccionesCriterio['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planesAccionesCriterio['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planes Acciones Criterio'), array('controller' => 'planes_acciones_criterios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
