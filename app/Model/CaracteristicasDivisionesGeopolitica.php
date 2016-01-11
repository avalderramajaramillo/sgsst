<?php
App::uses('AppModel', 'Model');
/**
 * CaracteristicasDivisionesGeopolitica Model
 *
 * @property DivisionesGeopolitica $DivisionesGeopolitica
 * @property TiposCaracteristicasDivisionesGeopolitica $TiposCaracteristicasDivisionesGeopolitica
 */
class CaracteristicasDivisionesGeopolitica extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dato_caracteristica';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dato_caracteristica' => array(
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
		'DivisionesGeopolitica' => array(
			'className' => 'DivisionesGeopolitica',
			'foreignKey' => 'divisiones_geopolitica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposCaracteristicasDivisionesGeopolitica' => array(
			'className' => 'TiposCaracteristicasDivisionesGeopolitica',
			'foreignKey' => 'tipos_caracteristicas_divisiones_geopolitica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
