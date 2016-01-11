<div class="divisionesGeopoliticas index">
	<h2><?php echo __('Divisiones Geopoliticas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('division_geopolitica'); ?></th>
			<th><?php echo $this->Paginator->sort('divipola'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($divisionesGeopoliticas as $divisionesGeopolitica): ?>
	<tr>
		<td><?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($divisionesGeopolitica['ParentDivisionesGeopolitica']['division_geopolitica'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $divisionesGeopolitica['ParentDivisionesGeopolitica']['id'])); ?>
		</td>
		<td><?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['lft']); ?>&nbsp;</td>
		<td><?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['rght']); ?>&nbsp;</td>
		<td><?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['division_geopolitica']); ?>&nbsp;</td>
		<td><?php echo h($divisionesGeopolitica['DivisionesGeopolitica']['divipola']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $divisionesGeopolitica['DivisionesGeopolitica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $divisionesGeopolitica['DivisionesGeopolitica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $divisionesGeopolitica['DivisionesGeopolitica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $divisionesGeopolitica['DivisionesGeopolitica']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
