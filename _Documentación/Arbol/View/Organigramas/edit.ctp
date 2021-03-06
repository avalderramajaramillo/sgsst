<div class="organigramas form">
<?php echo $this->Form->create('Organigrama'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organigrama'); ?></legend>
    	<?php
    		echo $this->Form->hidden('id');
    		echo $this->Form->input('parent_id', array('selected'=>$this->data['Organigrama']['parent_id']));
    		echo $this->Form->input('cargo');
    	?>
	</fieldset>
<?php echo $this->Form->end('Update'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DivisionesGeopolitica.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DivisionesGeopolitica.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
