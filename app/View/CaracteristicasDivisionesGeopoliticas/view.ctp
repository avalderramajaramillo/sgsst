<div class="caracteristicasDivisionesGeopoliticas view">
<h2><?php echo __('Caracteristicas Divisiones Geopolitica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divisiones Geopolitica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caracteristicasDivisionesGeopolitica['DivisionesGeopolitica']['id'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $caracteristicasDivisionesGeopolitica['DivisionesGeopolitica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Caracteristicas Divisiones Geopolitica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caracteristicasDivisionesGeopolitica['TiposCaracteristicasDivisionesGeopolitica']['id'], array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'view', $caracteristicasDivisionesGeopolitica['TiposCaracteristicasDivisionesGeopolitica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dato Caracteristica'); ?></dt>
		<dd>
			<?php echo h($caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['dato_caracteristica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caracteristicas Divisiones Geopolitica'), array('action' => 'edit', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caracteristicas Divisiones Geopolitica'), array('action' => 'delete', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $caracteristicasDivisionesGeopolitica['CaracteristicasDivisionesGeopolitica']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas Divisiones Geopoliticas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristicas Divisiones Geopolitica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Caracteristicas Divisiones Geopoliticas'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Caracteristicas Divisiones Geopolitica'), array('controller' => 'tipos_caracteristicas_divisiones_geopoliticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
