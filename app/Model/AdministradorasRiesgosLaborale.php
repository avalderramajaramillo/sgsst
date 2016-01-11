<?php
App::uses('AppModel', 'Model');
/**
 * AdministradorasRiesgosLaborale Model
 *
 * @property EmpresasPersona $EmpresasPersona
 */
class AdministradorasRiesgosLaborale extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_abreviado';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_abreviado' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'codigo_arl' => array(
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
		'EmpresasPersona' => array(
			'className' => 'EmpresasPersona',
			'foreignKey' => 'empresas_persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
