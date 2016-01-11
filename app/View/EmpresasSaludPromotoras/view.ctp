<div class="empresasSaludPromotoras view">
<h2><?php echo __('Empresas Salud Promotora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresasSaludPromotora['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $empresasSaludPromotora['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Abreviado'); ?></dt>
		<dd>
			<?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['nombre_abreviado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Regimen Subsidiado'); ?></dt>
		<dd>
			<?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['codigo_regimen_subsidiado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Regimen Contributivo'); ?></dt>
		<dd>
			<?php echo h($empresasSaludPromotora['EmpresasSaludPromotora']['codigo_regimen_contributivo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresas Salud Promotora'), array('action' => 'edit', $empresasSaludPromotora['EmpresasSaludPromotora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresas Salud Promotora'), array('action' => 'delete', $empresasSaludPromotora['EmpresasSaludPromotora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasSaludPromotora['EmpresasSaludPromotora']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Salud Promotoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Salud Promotora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
