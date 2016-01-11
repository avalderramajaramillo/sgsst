<?php
App::uses('AppModel', 'Model');
/**
 * ElementosProteccionesPersonalesRiesgo Model
 *
 * @property Riesgo $Riesgo
 */
class ElementosProteccionesPersonalesRiesgo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'elemento_proteccion_personal' => array(
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
		'Riesgo' => array(
			'className' => 'Riesgo',
			'foreignKey' => 'riesgo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
