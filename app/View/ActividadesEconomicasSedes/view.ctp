<div class="actividadesEconomicasSedes view">
<h2><?php echo __('Actividades Economicas Sede'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomicasSede['ActividadesEconomicasSede']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividades Economica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEconomicasSede['ActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $actividadesEconomicasSede['ActividadesEconomica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEconomicasSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $actividadesEconomicasSede['Sede']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Es Principal'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomicasSede['ActividadesEconomicasSede']['es_principal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Economicas Sede'), array('action' => 'edit', $actividadesEconomicasSede['ActividadesEconomicasSede']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Economicas Sede'), array('action' => 'delete', $actividadesEconomicasSede['ActividadesEconomicasSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividadesEconomicasSede['ActividadesEconomicasSede']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas Sedes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economicas Sede'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
