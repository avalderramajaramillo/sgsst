<div class="actividadesEconomicasEmpresas view">
<h2><?php echo __('Actividades Economicas Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomicasEmpresa['ActividadesEconomicasEmpresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividades Economica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesEconomicasEmpresa['ActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $actividadesEconomicasEmpresa['ActividadesEconomica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Es Principal'); ?></dt>
		<dd>
			<?php echo h($actividadesEconomicasEmpresa['ActividadesEconomicasEmpresa']['es_principal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades Economicas Empresa'), array('action' => 'edit', $actividadesEconomicasEmpresa['ActividadesEconomicasEmpresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades Economicas Empresa'), array('action' => 'delete', $actividadesEconomicasEmpresa['ActividadesEconomicasEmpresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividadesEconomicasEmpresa['ActividadesEconomicasEmpresa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economicas Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
