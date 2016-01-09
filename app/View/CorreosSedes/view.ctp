<div class="correosSedes view">
<h2><?php echo __('Correos Sede'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($correosSede['CorreosSede']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo $this->Html->link($correosSede['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $correosSede['Sede']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Correo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($correosSede['TiposCorreo']['tipo_correo'], array('controller' => 'tipos_correos', 'action' => 'view', $correosSede['TiposCorreo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($correosSede['CorreosSede']['correo_electronico']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Correos Sede'), array('action' => 'edit', $correosSede['CorreosSede']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Correos Sede'), array('action' => 'delete', $correosSede['CorreosSede']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correosSede['CorreosSede']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos Sedes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correos Sede'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('controller' => 'tipos_correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Correo'), array('controller' => 'tipos_correos', 'action' => 'add')); ?> </li>
	</ul>
</div>
