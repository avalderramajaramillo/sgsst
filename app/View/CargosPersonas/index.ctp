<div class="cargosPersonas index">
	<h2><?php echo __('Cargos Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresas_persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('organigrama_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cargosPersonas as $cargosPersona): ?>
	<tr>
		<td><?php echo h($cargosPersona['CargosPersona']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cargosPersona['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $cargosPersona['EmpresasPersona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cargosPersona['Organigrama']['id'], array('controller' => 'organigramas', 'action' => 'view', $cargosPersona['Organigrama']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cargosPersona['CargosPersona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cargosPersona['CargosPersona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cargosPersona['CargosPersona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cargosPersona['CargosPersona']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cargos Persona'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones Empresas'), array('controller' => 'evaluaciones_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluaciones Empresa'), array('controller' => 'evaluaciones_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes Grupos Apoyos'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrantes Grupos Apoyo'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'add')); ?> </li>
	</ul>
</div>
