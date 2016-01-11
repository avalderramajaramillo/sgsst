<div class="administradorasFondosPensiones view">
<h2><?php echo __('Administradoras Fondos Pensione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administradorasFondosPensione['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $administradorasFondosPensione['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Abreviado'); ?></dt>
		<dd>
			<?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['nombre_abreviado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Afp'); ?></dt>
		<dd>
			<?php echo h($administradorasFondosPensione['AdministradorasFondosPensione']['codigo_afp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administradoras Fondos Pensione'), array('action' => 'edit', $administradorasFondosPensione['AdministradorasFondosPensione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administradoras Fondos Pensione'), array('action' => 'delete', $administradorasFondosPensione['AdministradorasFondosPensione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administradorasFondosPensione['AdministradorasFondosPensione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Fondos Pensiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Fondos Pensione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
