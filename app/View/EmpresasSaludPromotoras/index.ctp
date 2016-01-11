<div class="empresasSaludPromotoras index">
	<h2><?php echo __('Empresas Salud Promotoras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresas_persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_abreviado'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_regimen_subsidiado'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_regimen_contributivo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresasSaludPromotoras as $empresasSaludPromotora): ?>
	<tr>
		<td><?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresasSaludPromotora['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $empresasSaludPromotora['EmpresasPersona']['id'])); ?>
		</td>
		<td><?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['nombre_abreviado']); ?>&nbsp;</td>
		<td><?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['codigo_regimen_subsidiado']); ?>&nbsp;</td>
		<td><?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['codigo_regimen_contributivo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresasSaludPromotora['EmpresasSaludPromotora']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresasSaludPromotora['EmpresasSaludPromotora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresasSaludPromotora['EmpresasSaludPromotora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasSaludPromotora['EmpresasSaludPromotora']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Empresas Salud Promotora'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
