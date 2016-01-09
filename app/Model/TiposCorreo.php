<?php
App::uses('AppModel', 'Model');
/**
 * TiposCorreo Model
 *
 * @property Correo $Correo
 * @property CorreosSede $CorreosSede
 */
class TiposCorreo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipo_correo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo_correo' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Correo' => array(
			'className' => 'Correo',
			'foreignKey' => 'tipos_correo_id',
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
		'CorreosSede' => array(
			'className' => 'CorreosSede',
			'foreignKey' => 'tipos_correo_id',
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
