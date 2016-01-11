<div class="cargosPersonas view">
<h2><?php echo __('Cargos Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cargosPersona['CargosPersona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cargosPersona['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $cargosPersona['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organigrama'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cargosPersona['Organigrama']['id'], array('controller' => 'organigramas', 'action' => 'view', $cargosPersona['Organigrama']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargos Persona'), array('action' => 'edit', $cargosPersona['CargosPersona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cargos Persona'), array('action' => 'delete', $cargosPersona['CargosPersona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cargosPersona['CargosPersona']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargos Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones Empresas'), array('controller' => 'evaluaciones_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluaciones Empresa'), array('controller' => 'evaluaciones_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Integrantes Grupos Apoyos'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrantes Grupos Apoyo'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Evaluaciones Empresas'); ?></h3>
	<?php if (!empty($cargosPersona['EvaluacionesEmpresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cargos Persona Id'); ?></th>
		<th><?php echo __('Evaluacione Id'); ?></th>
		<th><?php echo __('Tipos Convenciones Gestione Id'); ?></th>
		<th><?php echo __('Porcentaje Validacion'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Fecha Validacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargosPersona['EvaluacionesEmpresa'] as $evaluacionesEmpresa): ?>
		<tr>
			<td><?php echo $evaluacionesEmpresa['id']; ?></td>
			<td><?php echo $evaluacionesEmpresa['cargos_persona_id']; ?></td>
			<td><?php echo $evaluacionesEmpresa['evaluacione_id']; ?></td>
			<td><?php echo $evaluacionesEmpresa['tipos_convenciones_gestione_id']; ?></td>
			<td><?php echo $evaluacionesEmpresa['porcentaje_validacion']; ?></td>
			<td><?php echo $evaluacionesEmpresa['observaciones']; ?></td>
			<td><?php echo $evaluacionesEmpresa['fecha_validacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'evaluaciones_empresas', 'action' => 'view', $evaluacionesEmpresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'evaluaciones_empresas', 'action' => 'edit', $evaluacionesEmpresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'evaluaciones_empresas', 'action' => 'delete', $evaluacionesEmpresa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evaluacionesEmpresa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evaluaciones Empresa'), array('controller' => 'evaluaciones_empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Integrantes Grupos Apoyos'); ?></h3>
	<?php if (!empty($cargosPersona['IntegrantesGruposApoyo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipos Representacione Id'); ?></th>
		<th><?php echo __('Cargos Persona Id'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Fecha Alta'); ?></th>
		<th><?php echo __('Fecha Baja'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargosPersona['IntegrantesGruposApoyo'] as $integrantesGruposApoyo): ?>
		<tr>
			<td><?php echo $integrantesGruposApoyo['id']; ?></td>
			<td><?php echo $integrantesGruposApoyo['tipos_representacione_id']; ?></td>
			<td><?php echo $integrantesGruposApoyo['cargos_persona_id']; ?></td>
			<td><?php echo $integrantesGruposApoyo['turno_id']; ?></td>
			<td><?php echo $integrantesGruposApoyo['fecha_alta']; ?></td>
			<td><?php echo $integrantesGruposApoyo['fecha_baja']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'view', $integrantesGruposApoyo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'edit', $integrantesGruposApoyo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'delete', $integrantesGruposApoyo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $integrantesGruposApoyo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrantes Grupos Apoyo'), array('controller' => 'integrantes_grupos_apoyos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
