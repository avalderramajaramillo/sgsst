<div class="organigramas index">
	<h2><?php echo __('Organigramas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('cargo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	
	<?php foreach ($organigramas as $key=>$value): ?>
		<tr>
			<?php echo "<td>$value</td>"; ?>
			<td class="actions">
				<?php echo $this->Html->link("View", array('action'=>'view', $key)); ?>
				<?php echo $this->Html->link("Edit", array('action'=>'edit', $key)); ?>
		 		<?php  echo $this->Html->link("Delete", array('action'=>'delete')); ?>
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
		<li><?php echo $this->Html->link(__('New Organigrama'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyo'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos Globales'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyos Globale'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
