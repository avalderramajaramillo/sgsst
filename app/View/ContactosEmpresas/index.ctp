<div class="contactosEmpresas index">
	<h2><?php echo __('Contactos Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipos_contacto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresas_persona_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contactosEmpresas as $contactosEmpresa): ?>
	<tr>
		<td><?php echo h($contactosEmpresa['ContactosEmpresa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactosEmpresa['TiposContacto']['id'], array('controller' => 'tipos_contactos', 'action' => 'view', $contactosEmpresa['TiposContacto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contactosEmpresa['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $contactosEmpresa['EmpresasPersona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactosEmpresa['ContactosEmpresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactosEmpresa['ContactosEmpresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactosEmpresa['ContactosEmpresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactosEmpresa['ContactosEmpresa']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Contactos Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Contactos'), array('controller' => 'tipos_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Contacto'), array('controller' => 'tipos_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
