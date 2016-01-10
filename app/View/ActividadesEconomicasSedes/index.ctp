<div class="actividadesEconomicasSedes index">
	<h2><?php echo __('Actividades Economicas Sedes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('actividades_economica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('es_principal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($actividadesEconomicasSedes as $actividadesEconomicasSede): ?>
	<tr>
		<td><?php echo h($actividadesEconomicasSede['ActividadesEconomicasSede']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesEconomicasSede['ActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $actividadesEconomicasSede['ActividadesEconomica']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($actividadesEconomicasSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $actividadesEconomicasSede['Sede']['id'])); ?>
		</td>
		<td><?php echo h($actividadesEconomicasSede['ActividadesEconomicasSede']['es_principal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividadesEconomicasSede['ActividadesEconomicasSede']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividadesEconomicasSede['ActividadesEconomicasSede']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividadesEconomicasSede['ActividadesEconomicasSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividadesEconomicasSede['ActividadesEconomicasSede']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Actividades Economicas Sede'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
