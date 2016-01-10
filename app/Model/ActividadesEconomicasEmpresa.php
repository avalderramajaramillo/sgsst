<?php
App::uses('AppModel', 'Model');
/**
 * ActividadesEconomicasEmpresa Model
 *
 * @property ActividadesEconomica $ActividadesEconomica
 */
class ActividadesEconomicasEmpresa extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'es_principal';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'es_principal' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
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
		'ActividadesEconomica' => array(
			'className' => 'ActividadesEconomica',
			'foreignKey' => 'actividades_economica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
