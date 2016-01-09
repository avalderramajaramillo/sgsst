<?php
App::uses('AppModel', 'Model');
/**
 * CorreosSede Model
 *
 * @property Sede $Sede
 * @property TiposCorreo $TiposCorreo
 */
class CorreosSede extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'correo_electronico';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'correo_electronico' => array(
			'email' => array(
				'rule' => array('email'),
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
		'TiposCorreo' => array(
			'className' => 'TiposCorreo',
			'foreignKey' => 'tipos_correo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
