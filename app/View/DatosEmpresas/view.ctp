<div class="datosEmpresas view">
<h2><?php echo __('Datos Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($datosEmpresa['DatosEmpresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($datosEmpresa['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $datosEmpresa['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Ciiu'); ?></dt>
		<dd>
			<?php echo h($datosEmpresa['DatosEmpresa']['codigo_ciiu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividades Economica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($datosEmpresa['ActividadesEconomica']['actividad_economica'], array('controller' => 'actividades_economicas', 'action' => 'view', $datosEmpresa['ActividadesEconomica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clases Riesgo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($datosEmpresa['ClasesRiesgo']['descripcion'], array('controller' => 'clases_riesgos', 'action' => 'view', $datosEmpresa['ClasesRiesgo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Datos Empresa'), array('action' => 'edit', $datosEmpresa['DatosEmpresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Datos Empresa'), array('action' => 'delete', $datosEmpresa['DatosEmpresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $datosEmpresa['DatosEmpresa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades Economicas'), array('controller' => 'actividades_economicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades Economica'), array('controller' => 'actividades_economicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases Riesgos'), array('controller' => 'clases_riesgos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clases Riesgo'), array('controller' => 'clases_riesgos', 'action' => 'add')); ?> </li>
	</ul>
</div>
