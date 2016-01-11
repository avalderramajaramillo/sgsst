<div class="caracteristicasDivisionesGeopoliticas index">
	<h2><?php echo __('Caracteristicas Divisiones Geopoliticas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('divisiones_geopolitica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_caracteristicas_divisiones_geopolitica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dato_caracteristica'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($caracteristicasDivisionesGeopoliticas as $caracteristicasDivisionesGeopolitica): ?>
	<tr>
		<td><?php echo h($caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($caracteristicasDivisionesGeopolitica['DivisionesGeopolitica']['id'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $caracteristicasDivisionesGeopolitica['DivisionesGeopolitica']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($caracteristicasDivisionesGeopolitica['TiposCaracteristicasDivisionesGeopolitica']['id'], array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'view', $caracteristicasDivisionesGeopolitica['TiposCaracteristicasDivisionesGeopolitica']['id'])); ?>
		</td>
		<td><?php echo h($caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['dato_caracteristica']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Caracteristicas Divisiones Geopolitica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Divisiones Geopoliticas'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Divisiones Geopolitica'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
