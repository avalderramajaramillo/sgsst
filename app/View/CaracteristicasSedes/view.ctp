<div class="caracteristicasSedes view">
<h2><?php echo __('Caracteristicas Sede'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caracteristicasSede['CaracteristicasSede']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caracteristicasSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $caracteristicasSede['Sede']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Caracteristicas Sede'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caracteristicasSede['TiposCaracteristicasSede']['id'], array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'view', $caracteristicasSede['TiposCaracteristicasSede']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dato Caracteristica'); ?></dt>
		<dd>
			<?php echo h($caracteristicasSede['CaracteristicasSede']['dato_caracteristica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caracteristicas Sede'), array('action' => 'edit', $caracteristicasSede['CaracteristicasSede']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caracteristicas Sede'), array('action' => 'delete', $caracteristicasSede['CaracteristicasSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $caracteristicasSede['CaracteristicasSede']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas Sedes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristicas Sede'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Sedes'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Sede'), array('controller' => 'tipos_caracteristicas_sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
