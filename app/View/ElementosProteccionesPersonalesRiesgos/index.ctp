<div class="elementosProteccionesPersonalesRiesgos index">
	<h2><?php echo __('Elementos Protecciones Personales Riesgos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('elemento_proteccion_personal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($elementosProteccionesPersonalesRiesgos as $elementosProteccionesPersonalesRiesgo): ?>
	<tr>
		<td><?php echo h($elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($elementosProteccionesPersonalesRiesgo['Riesgo']['id'], array('controller' => 'riesgos', 'action' => 'view', $elementosProteccionesPersonalesRiesgo['Riesgo']['id'])); ?>
		</td>
		<td><?php echo h($elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['elemento_proteccion_personal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Elementos Protecciones Personales Riesgo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Riesgos'), array('controller' => 'riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo'), array('controller' => 'riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
