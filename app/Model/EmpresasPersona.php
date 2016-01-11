<?php
App::uses('AppModel', 'Model');
/**
 * EmpresasPersona Model
 *
 * @property TiposDocumento $TiposDocumento
 * @property DivisionesGeopolitica $DivisionesGeopolitica
 * @property TiposSexo $TiposSexo
 * @property TiposCliente $TiposCliente
 * @property AdministradorasFondosPensione $AdministradorasFondosPensione
 * @property AdministradorasRiesgosLaborale $AdministradorasRiesgosLaborale
 * @property CargosPersona $CargosPersona
 * @property ContactosEmpresa $ContactosEmpresa
 * @property Correo $Correo
 * @property DatosEmpresa $DatosEmpresa
 * @property EmpresasSaludPromotora $EmpresasSaludPromotora
 * @property PlanesAccionesDefinitivo $PlanesAccionesDefinitivo
 * @property Telefono $Telefono
 * @property Usuario $Usuario
 */
class EmpresasPersona extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nit_cedula' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_nacimiento' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposDocumento' => array(
			'className' => 'TiposDocumento',
			'foreignKey' => 'tipos_documento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DivisionesGeopolitica' => array(
			'className' => 'DivisionesGeopolitica',
			'foreignKey' => 'divisiones_geopolitica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposSexo' => array(
			'className' => 'TiposSexo',
			'foreignKey' => 'tipos_sexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposCliente' => array(
			'className' => 'TiposCliente',
			'foreignKey' => 'tipos_cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AdministradorasFondosPensione' => array(
			'className' => 'AdministradorasFondosPensione',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'AdministradorasRiesgosLaborale' => array(
			'className' => 'AdministradorasRiesgosLaborale',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CargosPersona' => array(
			'className' => 'CargosPersona',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ContactosEmpresa' => array(
			'className' => 'ContactosEmpresa',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Correo' => array(
			'className' => 'Correo',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DatosEmpresa' => array(
			'className' => 'DatosEmpresa',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmpresasSaludPromotora' => array(
			'className' => 'EmpresasSaludPromotora',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PlanesAccionesDefinitivo' => array(
			'className' => 'PlanesAccionesDefinitivo',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Telefono' => array(
			'className' => 'Telefono',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'empresas_persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
