<div class="correosSedes index">
	<h2><?php echo __('Correos Sedes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_correo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($correosSedes as $correosSede): ?>
	<tr>
		<td><?php echo h($correosSede['CorreosSede']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($correosSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $correosSede['Sede']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($correosSede['TiposCorreo']['tipo_correo'], array('controller' => 'tipos_correos', 'action' => 'view', $correosSede['TiposCorreo']['id'])); ?>
		</td>
		<td><?php echo h($correosSede['CorreosSede']['correo_electronico']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $correosSede['CorreosSede']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $correosSede['CorreosSede']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $correosSede['CorreosSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correosSede['CorreosSede']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Correos Sede'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('controller' => 'tipos_correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Correo'), array('controller' => 'tipos_correos', 'action' => 'add')); ?> </li>
	</ul>
</div>
