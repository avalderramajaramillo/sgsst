<div class="contactosEmpresas view">
<h2><?php echo __('Contactos Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactosEmpresa['ContactosEmpresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Contacto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactosEmpresa['TiposContacto']['id'], array('controller' => 'tipos_contactos', 'action' => 'view', $contactosEmpresa['TiposContacto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactosEmpresa['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $contactosEmpresa['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contactos Empresa'), array('action' => 'edit', $contactosEmpresa['ContactosEmpresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contactos Empresa'), array('action' => 'delete', $contactosEmpresa['ContactosEmpresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactosEmpresa['ContactosEmpresa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contactos Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contactos Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Contactos'), array('controller' => 'tipos_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Contacto'), array('controller' => 'tipos_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
