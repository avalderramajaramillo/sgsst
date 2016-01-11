<?php
App::uses('AppModel', 'Model');
/**
 * CaracteristicasSede Model
 *
 * @property Sede $Sede
 * @property TiposCaracteristicasSede $TiposCaracteristicasSede
 */
class CaracteristicasSede extends AppModel {

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
		'Sede' => array(
			'className' => 'Sede',
			'foreignKey' => 'sede_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposCaracteristicasSede' => array(
			'className' => 'TiposCaracteristicasSede',
			'foreignKey' => 'tipos_caracteristicas_sede_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
