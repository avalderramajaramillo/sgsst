<div class="administradorasFondosPensiones index">
	<h2><?php echo __('Administradoras Fondos Pensiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresas_persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_abreviado'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_afp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($administradorasFondosPensiones as $administradorasFondosPensione): ?>
	<tr>
		<td><?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($administradorasFondosPensione['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $administradorasFondosPensione['EmpresasPersona']['id'])); ?>
		</td>
		<td><?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['nombre_abreviado']); ?>&nbsp;</td>
		<td><?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['codigo_afp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administradorasFondosPensione['AdministradorasFondosPensione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administradorasFondosPensione['AdministradorasFondosPensione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administradorasFondosPensione['AdministradorasFondosPensione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administradorasFondosPensione['AdministradorasFondosPensione']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Administradoras Fondos Pensione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
