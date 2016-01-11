<div class="datosEmpresas index">
	<h2><?php echo __('Datos Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresas_persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_ciiu'); ?></th>
			<th><?php echo $this->Paginator->sort('actividades_economica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('clases_riesgo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datosEmpresas as $datosEmpresa): ?>
	<tr>
		<td><?php echo h($datosEmpresa['DatosEmpresa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($datosEmpresa['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $datosEmpresa['EmpresasPersona']['id'])); ?>
		</td>
		<td><?php echo h($datosEmpresa['DatosEmpresa']['codigo_ciiu']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($datosEmpresa['ActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $datosEmpresa['ActividadesEconomica']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($datosEmpresa['ClasesRiesgo']['descripcion'], array('controller' => 'clases_riesgos', 'action' => 'view', $datosEmpresa['ClasesRiesgo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $datosEmpresa['DatosEmpresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $datosEmpresa['DatosEmpresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $datosEmpresa['DatosEmpresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $datosEmpresa['DatosEmpresa']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases Riesgos'), array('controller' => 'clases_riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clases Riesgo'), array('controller' => 'clases_riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
