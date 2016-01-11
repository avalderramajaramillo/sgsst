<div class="controlesRiesgos index">
	<h2><?php echo __('Controles Riesgos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('riesgo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('controle_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($controlesRiesgos as $controlesRiesgo): ?>
	<tr>
		<td><?php echo h($controlesRiesgo['ControlesRiesgo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($controlesRiesgo['Riesgo']['id'], array('controller' => 'riesgos', 'action' => 'view', $controlesRiesgo['Riesgo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($controlesRiesgo['Controle']['id'], array('controller' => 'controles', 'action' => 'view', $controlesRiesgo['Controle']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $controlesRiesgo['ControlesRiesgo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $controlesRiesgo['ControlesRiesgo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $controlesRiesgo['ControlesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $controlesRiesgo['ControlesRiesgo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Controles Riesgo'), array('action' => 'add')); ?></li>
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
