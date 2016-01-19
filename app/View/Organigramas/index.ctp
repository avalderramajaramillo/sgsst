<?php 
    // echo $this->Html->link("Add Organigramas",array('action'=>'add'));
    
    // echo "<ul>"; 
    // foreach($organigramas as $key=>$value){ 
    //     $edit = $this->Html->link("Edit", array('action'=>'edit', $key)); 
    //     $delete = $this->Html->link("Delete", array('action'=>'delete', $key)); 
    //     echo "<li>[$edit]&nbsp;[$delete] &nbsp;$value</li>"; 
    // } 
    // echo "</ul>"; 
?>
<div class="organigramas index">
	<h2><?php echo __('Organigramas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
		
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('parent_id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('rght'); ?></th>-->
			<th><?php echo __('cargo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($organigramas as $organigrama): ?>
	<tr>
		<!--<td><?php echo h($organigrama['Organigrama']['id']); ?>&nbsp;</td>-->
		<!--<td>-->
	 <!--   <?php echo $this->Html->link($divisionesGeopolitica['ParentDivisionesGeopolitica']['division_geopolitica'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $divisionesGeopolitica['ParentDivisionesGeopolitica']['id'])); ?>-->
		<!--<?php echo $this->Html->link($organigrama['ParentOrganigrama']['cargo'], array('controller' => 'Organigramas', 'action' => 'view', $organigrama['ParentOrganigrama']['id'])); ?>-->
		<!--</td>-->
		<td><?php echo h($organigrama['Organigrama']['lft']); ?>&nbsp;</td>
		<!--<td><?php echo h($organigrama['Organigrama']['rght']); ?>&nbsp;</td>-->
		<td><?php echo h($organigrama['Organigrama']['cargo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organigrama['Organigrama']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organigrama['Organigrama']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organigrama['Organigrama']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $organigrama['Organigrama']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos Personas'), array('controller' => 'cargos_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargos Persona'), array('controller' => 'cargos_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyo'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos Globales'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyos Globale'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>