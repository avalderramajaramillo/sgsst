<div class="empresasPersonas view">
<h2><?php echo __('Empresas Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresasPersona['EmpresasPersona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Documento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresasPersona['TiposDocumento']['id'], array('controller' => 'tipos_documentos', 'action' => 'view', $empresasPersona['TiposDocumento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit Cedula'); ?></dt>
		<dd>
			<?php echo h($empresasPersona['EmpresasPersona']['nit_cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($empresasPersona['EmpresasPersona']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($empresasPersona['EmpresasPersona']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divisiones Geopolitica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresasPersona['DivisionesGeopolitica']['division_geopolitica'], array('controller' => 'divisiones_geopoliticas', 'action' => 'view', $empresasPersona['DivisionesGeopolitica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($empresasPersona['EmpresasPersona']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Sexo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresasPersona['TiposSexo']['id'], array('controller' => 'tipos_sexos', 'action' => 'view', $empresasPersona['TiposSexo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresasPersona['TiposCliente']['id'], array('controller' => 'tipos_clientes', 'action' => 'view', $empresasPersona['TiposCliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresas Persona'), array('action' => 'edit', $empresasPersona['EmpresasPersona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresas Persona'), array('action' => 'delete', $empresasPersona['EmpresasPersona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasPersona['EmpresasPersona']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Documentos'), array('controller' => 'tipos_documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Documento'), array('controller' => 'tipos_documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisiones Geopoliticas'), array('controller' => 'divisiones_geopoliticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divisiones Geopolitica'), array('controller' => 'divisiones_geopoliticas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Sexos'), array('controller' => 'tipos_sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Sexo'), array('controller' => 'tipos_sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('controller' => 'tipos_clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Fondos Pensiones'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Fondos Pensione'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradoras Riesgos Laborales'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradoras Riesgos Laborale'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos Personas'), array('controller' => 'cargos_personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargos Persona'), array('controller' => 'cargos_personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contactos Empresas'), array('controller' => 'contactos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contactos Empresa'), array('controller' => 'contactos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Correos'), array('controller' => 'correos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correo'), array('controller' => 'correos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Empresas'), array('controller' => 'datos_empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas Salud Promotoras'), array('controller' => 'empresas_salud_promotoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresas Salud Promotora'), array('controller' => 'empresas_salud_promotoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planes Acciones Definitivos'), array('controller' => 'planes_acciones_definitivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planes Acciones Definitivo'), array('controller' => 'planes_acciones_definitivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Administradoras Fondos Pensiones'); ?></h3>
	<?php if (!empty($empresasPersona['AdministradorasFondosPensione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Nombre Abreviado'); ?></th>
		<th><?php echo __('Codigo Afp'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['AdministradorasFondosPensione'] as $administradorasFondosPensione): ?>
		<tr>
			<td><?php echo $administradorasFondosPensione['id']; ?></td>
			<td><?php echo $administradorasFondosPensione['empresas_persona_id']; ?></td>
			<td><?php echo $administradorasFondosPensione['nombre_abreviado']; ?></td>
			<td><?php echo $administradorasFondosPensione['codigo_afp']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'view', $administradorasFondosPensione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'edit', $administradorasFondosPensione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'delete', $administradorasFondosPensione['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administradorasFondosPensione['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Administradoras Fondos Pensione'), array('controller' => 'administradoras_fondos_pensiones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Administradoras Riesgos Laborales'); ?></h3>
	<?php if (!empty($empresasPersona['AdministradorasRiesgosLaborale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Nombre Abreviado'); ?></th>
		<th><?php echo __('Codigo Arl'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['AdministradorasRiesgosLaborale'] as $administradorasRiesgosLaborale): ?>
		<tr>
			<td><?php echo $administradorasRiesgosLaborale['id']; ?></td>
			<td><?php echo $administradorasRiesgosLaborale['empresas_persona_id']; ?></td>
			<td><?php echo $administradorasRiesgosLaborale['nombre_abreviado']; ?></td>
			<td><?php echo $administradorasRiesgosLaborale['codigo_arl']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'view', $administradorasRiesgosLaborale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'edit', $administradorasRiesgosLaborale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'delete', $administradorasRiesgosLaborale['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administradorasRiesgosLaborale['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Administradoras Riesgos Laborale'), array('controller' => 'administradoras_riesgos_laborales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cargos Personas'); ?></h3>
	<?php if (!empty($empresasPersona['CargosPersona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Organigrama Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['CargosPersona'] as $cargosPersona): ?>
		<tr>
			<td><?php echo $cargosPersona['id']; ?></td>
			<td><?php echo $cargosPersona['empresas_persona_id']; ?></td>
			<td><?php echo $cargosPersona['organigrama_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cargos_personas', 'action' => 'view', $cargosPersona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cargos_personas', 'action' => 'edit', $cargosPersona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cargos_personas', 'action' => 'delete', $cargosPersona['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cargosPersona['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargos Persona'), array('controller' => 'cargos_personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contactos Empresas'); ?></h3>
	<?php if (!empty($empresasPersona['ContactosEmpresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipos Contacto Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['ContactosEmpresa'] as $contactosEmpresa): ?>
		<tr>
			<td><?php echo $contactosEmpresa['id']; ?></td>
			<td><?php echo $contactosEmpresa['tipos_contacto_id']; ?></td>
			<td><?php echo $contactosEmpresa['empresas_persona_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contactos_empresas', 'action' => 'view', $contactosEmpresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contactos_empresas', 'action' => 'edit', $contactosEmpresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contactos_empresas', 'action' => 'delete', $contactosEmpresa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactosEmpresa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contactos Empresa'), array('controller' => 'contactos_empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Correos'); ?></h3>
	<?php if (!empty($empresasPersona['Correo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Tipos Correo Id'); ?></th>
		<th><?php echo __('Correo Electronico'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['Correo'] as $correo): ?>
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
	<h3><?php echo __('Related Datos Empresas'); ?></h3>
	<?php if (!empty($empresasPersona['DatosEmpresa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Codigo Ciiu'); ?></th>
		<th><?php echo __('Actividades Economica Id'); ?></th>
		<th><?php echo __('Clases Riesgo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['DatosEmpresa'] as $datosEmpresa): ?>
		<tr>
			<td><?php echo $datosEmpresa['id']; ?></td>
			<td><?php echo $datosEmpresa['empresas_persona_id']; ?></td>
			<td><?php echo $datosEmpresa['codigo_ciiu']; ?></td>
			<td><?php echo $datosEmpresa['actividades_economica_id']; ?></td>
			<td><?php echo $datosEmpresa['clases_riesgo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'datos_empresas', 'action' => 'view', $datosEmpresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'datos_empresas', 'action' => 'edit', $datosEmpresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'datos_empresas', 'action' => 'delete', $datosEmpresa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $datosEmpresa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Datos Empresa'), array('controller' => 'datos_empresas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas Salud Promotoras'); ?></h3>
	<?php if (!empty($empresasPersona['EmpresasSaludPromotora'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Nombre Abreviado'); ?></th>
		<th><?php echo __('Codigo Regimen Subsidiado'); ?></th>
		<th><?php echo __('Codigo Regimen Contributivo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['EmpresasSaludPromotora'] as $empresasSaludPromotora): ?>
		<tr>
			<td><?php echo $empresasSaludPromotora['id']; ?></td>
			<td><?php echo $empresasSaludPromotora['empresas_persona_id']; ?></td>
			<td><?php echo $empresasSaludPromotora['nombre_abreviado']; ?></td>
			<td><?php echo $empresasSaludPromotora['codigo_regimen_subsidiado']; ?></td>
			<td><?php echo $empresasSaludPromotora['codigo_regimen_contributivo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas_salud_promotoras', 'action' => 'view', $empresasSaludPromotora['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas_salud_promotoras', 'action' => 'edit', $empresasSaludPromotora['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas_salud_promotoras', 'action' => 'delete', $empresasSaludPromotora['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresasSaludPromotora['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresas Salud Promotora'), array('controller' => 'empresas_salud_promotoras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planes Acciones Definitivos'); ?></h3>
	<?php if (!empty($empresasPersona['PlanesAccionesDefinitivo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fuentes Planes Accione Id'); ?></th>
		<th><?php echo __('Plan Accion Sugerido'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Fecha Sugerida Ejecución'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['PlanesAccionesDefinitivo'] as $planesAccionesDefinitivo): ?>
		<tr>
			<td><?php echo $planesAccionesDefinitivo['id']; ?></td>
			<td><?php echo $planesAccionesDefinitivo['fuentes_planes_accione_id']; ?></td>
			<td><?php echo $planesAccionesDefinitivo['plan_accion_sugerido']; ?></td>
			<td><?php echo $planesAccionesDefinitivo['empresas_persona_id']; ?></td>
			<td><?php echo $planesAccionesDefinitivo['fecha_sugerida_ejecución']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planes_acciones_definitivos', 'action' => 'view', $planesAccionesDefinitivo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planes_acciones_definitivos', 'action' => 'edit', $planesAccionesDefinitivo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planes_acciones_definitivos', 'action' => 'delete', $planesAccionesDefinitivo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planesAccionesDefinitivo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planes Acciones Definitivo'), array('controller' => 'planes_acciones_definitivos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Telefonos'); ?></h3>
	<?php if (!empty($empresasPersona['Telefono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Tipos Telefono Id'); ?></th>
		<th><?php echo __('Numero Telefonico'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['Telefono'] as $telefono): ?>
		<tr>
			<td><?php echo $telefono['id']; ?></td>
			<td><?php echo $telefono['empresas_persona_id']; ?></td>
			<td><?php echo $telefono['tipos_telefono_id']; ?></td>
			<td><?php echo $telefono['numero_telefonico']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'telefonos', 'action' => 'view', $telefono['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'telefonos', 'action' => 'edit', $telefono['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'telefonos', 'action' => 'delete', $telefono['id']), array('confirm' => __('Are you sure you want to delete # %s?', $telefono['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($empresasPersona['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresas Persona Id'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Rol'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresasPersona['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['empresas_persona_id']; ?></td>
			<td><?php echo $usuario['usuario']; ?></td>
			<td><?php echo $usuario['clave']; ?></td>
			<td><?php echo $usuario['rol']; ?></td>
			<td><?php echo $usuario['estado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
