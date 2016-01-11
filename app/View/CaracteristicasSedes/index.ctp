<div class="caracteristicasSedes index">
	<h2><?php echo __('Caracteristicas Sedes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_caracteristicas_sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dato_caracteristica'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($caracteristicasSedes as $caracteristicasSede): ?>
	<tr>
		<td><?php echo h($caracteristicasSede['CaracteristicasSede']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($caracteristicasSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $caracteristicasSede['Sede']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($caracteristicasSede['TiposCaracteristicasSede']['id'], array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'view', $caracteristicasSede['TiposCaracteristicasSede']['id'])); ?>
		</td>
		<td><?php echo h($caracteristicasSede['CaracteristicasSede']['dato_caracteristica']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $caracteristicasSede['CaracteristicasSede']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $caracteristicasSede['CaracteristicasSede']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caracteristicasSede['CaracteristicasSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $caracteristicasSede['CaracteristicasSede']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Caracteristicas Sede'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Sedes'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Sede'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
