<div class="organigramas form">
<?php echo $this->Form->create('Organigrama'); ?>
	<fieldset>
		<legend><?php echo __('Add Organigrama'); ?></legend>
	<?php
		 
    	echo $this->Form->input('parent_id',array('label'=>'Parent')); 
    echo $this->Form->input('cargo',array('label'=>'Name'));
		echo $this->Form->input('EmpresasPersona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organigramas'), array('action' => 'index')); ?></li>
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
