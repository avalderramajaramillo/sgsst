<div class="clasesRiesgos index">
	<h2><?php echo __('Clases Riesgos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('clase_riesgo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje_minimo'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje_maximo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clasesRiesgos as $clasesRiesgo): ?>
	<tr>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['id']); ?>&nbsp;</td>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['clase_riesgo']); ?>&nbsp;</td>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_minimo']); ?>&nbsp;</td>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_inicial']); ?>&nbsp;</td>
		<td><?php echo h($clasesRiesgo['ClasesRiesgo']['porcentaje_maximo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clasesRiesgo['ClasesRiesgo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clasesRiesgo['ClasesRiesgo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clasesRiesgo['ClasesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clasesRiesgo['ClasesRiesgo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Clases Riesgo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
