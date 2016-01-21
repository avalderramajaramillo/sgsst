<?php
App::uses('AppModel', 'Model');
/**
 * Organigrama Model
 *
 * @property Organigrama $ParentOrganigrama
 * @property CargosPersona $CargosPersona
 * @property FuncionesGruposApoyo $FuncionesGruposApoyo
 * @property FuncionesGruposApoyosGlobale $FuncionesGruposApoyosGlobale
 * @property Organigrama $ChildOrganigrama
 * @property Proceso $Proceso
 */
class Organigrama extends AppModel {
        var $name = 'Organigrama'; 
        var $actsAs = array('Tree'); 
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cargo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cargo' => array(
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
		'ParentOrganigrama' => array(
			'className' => 'Organigrama',
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
		'CargosPersona' => array(
			'className' => 'CargosPersona',
			'foreignKey' => 'organigrama_id',
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
		'FuncionesGruposApoyo' => array(
			'className' => 'FuncionesGruposApoyo',
			'foreignKey' => 'organigrama_id',
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
		'FuncionesGruposApoyosGlobale' => array(
			'className' => 'FuncionesGruposApoyosGlobale',
			'foreignKey' => 'organigrama_id',
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
		'ChildOrganigrama' => array(
			'className' => 'Organigrama',
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
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Proceso' => array(
			'className' => 'Proceso',
			'joinTable' => 'organigramas_procesos',
			'foreignKey' => 'organigrama_id',
			'associationForeignKey' => 'proceso_id',
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
