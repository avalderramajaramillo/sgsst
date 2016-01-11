<div class="administradorasRiesgosLaborales view">
<h2><?php echo __('Administradoras Riesgos Laborale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administradorasRiesgosLaborale['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $administradorasRiesgosLaborale['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Abreviado'); ?></dt>
		<dd>
			<?php echo h($administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['nombre_abreviado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Arl'); ?></dt>
		<dd>
			<?php echo h($administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['codigo_arl']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administradoras Riesgos Laborale'), array('action' => 'edit', $administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administradoras Riesgos Laborale'), array('action' => 'delete', $administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administradorasRiesgosLaborale['AdministradorasRiesgosLaborale']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Riesgos Laborales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Riesgos Laborale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
