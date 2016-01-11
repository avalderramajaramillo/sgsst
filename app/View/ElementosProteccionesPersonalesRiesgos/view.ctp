<div class="elementosProteccionesPersonalesRiesgos view">
<h2><?php echo __('Elementos Protecciones Personales Riesgo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elementosProteccionesPersonalesRiesgo['Riesgo']['id'], array('controller' => 'riesgos', 'action' => 'view', $elementosProteccionesPersonalesRiesgo['Riesgo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elemento Proteccion Personal'); ?></dt>
		<dd>
			<?php echo h($elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['elemento_proteccion_personal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Elementos Protecciones Personales Riesgo'), array('action' => 'edit', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Elementos Protecciones Personales Riesgo'), array('action' => 'delete', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $elementosProteccionesPersonalesRiesgo['ElementosProteccionesPersonalesRiesgo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Elementos Protecciones Personales Riesgos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Elementos Protecciones Personales Riesgo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Riesgos'), array('controller' => 'riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Riesgo'), array('controller' => 'riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
