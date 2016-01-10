<?php
App::uses('AppModel', 'Model');
/**
 * ActividadesEconomica Model
 *
 * @property ActividadesEconomica $ParentActividadesEconomica
 * @property ActividadesEconomica $ChildActividadesEconomica
 * @property DatosEmpresa $DatosEmpresa
 * @property Sede $Sede
 */
class ActividadesEconomica extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'actividad_economica';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'actividad_economica' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
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
		'ParentActividadesEconomica' => array(
			'className' => 'ActividadesEconomica',
			'foreignKey' => 'parent_id',
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
		'ChildActividadesEconomica' => array(
			'className' => 'ActividadesEconomica',
			'foreignKey' => 'parent_id',
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
			'foreignKey' => 'actividades_economica_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Sede' => array(
			'className' => 'Sede',
			'joinTable' => 'actividades_economicas_sedes',
			'foreignKey' => 'actividades_economica_id',
			'associationForeignKey' => 'sede_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
