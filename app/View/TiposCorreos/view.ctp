<div class="tiposCorreos view">
<h2><?php echo __('Tipos Correo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposCorreo['TiposCorreo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Correo'); ?></dt>
		<dd>
			<?php echo h($tiposCorreo['TiposCorreo']['tipo_correo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Correo'), array('action' => 'edit', $tiposCorreo['TiposCorreo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Correo'), array('action' => 'delete', $tiposCorreo['TiposCorreo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tiposCorreo['TiposCorreo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Correos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Correo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos'), array('controller' => 'correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correo'), array('controller' => 'correos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos Sedes'), array('controller' => 'correos_sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correos Sede'), array('controller' => 'correos_sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Correos'); ?></h3>
	<?php if (!empty($tiposCorreo['Correo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Tipos Correo Id'); ?></th>
		<th><?php echo __('Correo Electronico'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tiposCorreo['Correo'] as $correo): ?>
		<tr>
			<td><?php echo $correo['id']; ?></td>
			<td><?php echo $correo['empresas_persona_id']; ?></td>
			<td><?php echo $correo['tipos_correo_id']; ?></td>
			<td><?php echo $correo['correo_electronico']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'correos', 'action' => 'view', $correo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'correos', 'action' => 'edit', $correo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'correos', 'action' => 'delete', $correo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Correo'), array('controller' => 'correos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Correos Sedes'); ?></h3>
	<?php if (!empty($tiposCorreo['CorreosSede'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sede Id'); ?></th>
		<th><?php echo __('Tipos Correo Id'); ?></th>
		<th><?php echo __('Correo Electronico'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tiposCorreo['CorreosSede'] as $correosSede): ?>
		<tr>
			<td><?php echo $correosSede['id']; ?></td>
			<td><?php echo $correosSede['sede_id']; ?></td>
			<td><?php echo $correosSede['tipos_correo_id']; ?></td>
			<td><?php echo $correosSede['correo_electronico']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'correos_sedes', 'action' => 'view', $correosSede['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'correos_sedes', 'action' => 'edit', $correosSede['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'correos_sedes', 'action' => 'delete', $correosSede['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correosSede['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Correos Sede'), array('controller' => 'correos_sedes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
