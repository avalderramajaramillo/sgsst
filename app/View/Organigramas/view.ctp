<div class="organigramas view">
<h2><?php echo __('Organigrama View'); ?></h2>
	<dl>
		<dt><?php echo __('Empresas Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organigrama['EmpresasPersona']['id'], array('controller' => 'empresas_personas', 'action' => 'view', $organigrama['EmpresasPersona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Organigrama'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organigrama['ParentOrganigrama']['cargo'], array('controller' => 'organigramas', 'action' => 'view', $organigrama['ParentOrganigrama']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($organigrama['Organigrama']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($organigrama['Organigrama']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($organigrama['Organigrama']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organigrama'), array('action' => 'edit', $organigrama['Organigrama']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organigrama'), array('action' => 'delete', $organigrama['Organigrama']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $organigrama['Organigrama']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organigrama'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('controller' => 'empresas_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organigramas'), array('controller' => 'organigramas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyo'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones Grupos Apoyos Globales'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyos Globale'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funciones Grupos Apoyos'); ?></h3>
	<?php if (!empty($organigrama['FuncionesGruposApoyo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organigrama Id'); ?></th>
		<th><?php echo __('Funcion Grupo Apoyo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organigrama['FuncionesGruposApoyo'] as $funcionesGruposApoyo): ?>
		<tr>
			<td><?php echo $funcionesGruposApoyo['id']; ?></td>
			<td><?php echo $funcionesGruposApoyo['organigrama_id']; ?></td>
			<td><?php echo $funcionesGruposApoyo['funcion_grupo_apoyo']; ?></td>
			<td><?php echo $funcionesGruposApoyo['created']; ?></td>
			<td><?php echo $funcionesGruposApoyo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'view', $funcionesGruposApoyo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'edit', $funcionesGruposApoyo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'delete', $funcionesGruposApoyo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $funcionesGruposApoyo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyo'), array('controller' => 'funciones_grupos_apoyos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Funciones Grupos Apoyos Globales'); ?></h3>
	<?php if (!empty($organigrama['FuncionesGruposApoyosGlobale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organigrama Id'); ?></th>
		<th><?php echo __('Funcion Grupo Apoyo Global'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organigrama['FuncionesGruposApoyosGlobale'] as $funcionesGruposApoyosGlobale): ?>
		<tr>
			<td><?php echo $funcionesGruposApoyosGlobale['id']; ?></td>
			<td><?php echo $funcionesGruposApoyosGlobale['organigrama_id']; ?></td>
			<td><?php echo $funcionesGruposApoyosGlobale['funcion_grupo_apoyo_global']; ?></td>
			<td><?php echo $funcionesGruposApoyosGlobale['created']; ?></td>
			<td><?php echo $funcionesGruposApoyosGlobale['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'view', $funcionesGruposApoyosGlobale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'edit', $funcionesGruposApoyosGlobale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'delete', $funcionesGruposApoyosGlobale['id']), array('confirm' => __('Are you sure you want to delete # %s?', $funcionesGruposApoyosGlobale['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funciones Grupos Apoyos Globale'), array('controller' => 'funciones_grupos_apoyos_globales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Organigramas'); ?></h3>
	<?php if (!empty($organigrama['ChildOrganigrama'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organigrama['ChildOrganigrama'] as $childOrganigrama): ?>
		<tr>
			<td><?php echo $childOrganigrama['id']; ?></td>
			<td><?php echo $childOrganigrama['empresas_persona_id']; ?></td>
			<td><?php echo $childOrganigrama['parent_id']; ?></td>
			<td><?php echo $childOrganigrama['lft']; ?></td>
			<td><?php echo $childOrganigrama['rght']; ?></td>
			<td><?php echo $childOrganigrama['cargo']; ?></td>
			<td><?php echo $childOrganigrama['created']; ?></td>
			<td><?php echo $childOrganigrama['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'organigramas', 'action' => 'view', $childOrganigrama['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'organigramas', 'action' => 'edit', $childOrganigrama['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'organigramas', 'action' => 'delete', $childOrganigrama['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childOrganigrama['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Organigrama'), array('controller' => 'organigramas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas Personas'); ?></h3>
	<?php if (!empty($organigrama['EmpresasPersona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipos Documento Id'); ?></th>
		<th><?php echo __('Nit Cedula'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Divisiones Geopolitica Id'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Tipos Sexo Id'); ?></th>
		<th><?php echo __('Tipos Cliente Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organigrama['EmpresasPersona'] as $empresasPersona): ?>
		<tr>
			<td><?php echo $empresasPersona['id']; ?></td>
			<td><?php echo $empresasPersona['tipos_documento_id']; ?></td>
			<td><?php echo $empresasPersona['nit_cedula']; ?></td>
			<td><?php echo $empresasPersona['nombre']; ?></td>
			<td><?php echo $empresasPersona['direccion']; ?></td>
			<td><?php echo $empresasPersona['divisiones_geopolitica_id']; ?></td>
			<td><?php echo $empresasPersona['fecha_nacimiento']; ?></td>
			<td><?php echo $empresasPersona['tipos_sexo_id']; ?></td>
			<td><?php echo $empresasPersona['tipos_cliente_id']; ?></td>
			<td><?php echo $empresasPersona['created']; ?></td>
			<td><?php echo $empresasPersona['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas_personas', 'action' => 'view', $empresasPersona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas_personas', 'action' => 'edit', $empresasPersona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas_personas', 'action' => 'delete', $empresasPersona['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasPersona['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresas Persona'), array('controller' => 'empresas_personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Procesos'); ?></h3>
	<?php if (!empty($organigrama['Proceso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Proceso'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organigrama['Proceso'] as $proceso): ?>
		<tr>
			<td><?php echo $proceso['id']; ?></td>
			<td><?php echo $proceso['parent_id']; ?></td>
			<td><?php echo $proceso['lft']; ?></td>
			<td><?php echo $proceso['rght']; ?></td>
			<td><?php echo $proceso['proceso']; ?></td>
			<td><?php echo $proceso['descripcion']; ?></td>
			<td><?php echo $proceso['created']; ?></td>
			<td><?php echo $proceso['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procesos', 'action' => 'view', $proceso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procesos', 'action' => 'edit', $proceso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procesos', 'action' => 'delete', $proceso['id']), array('confirm' => __('Are you sure you want to delete # %s?', $proceso['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
