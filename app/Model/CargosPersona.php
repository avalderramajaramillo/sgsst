<?php
App::uses('AppModel', 'Model');
/**
 * CargosPersona Model
 *
 * @property EmpresasPersona $EmpresasPersona
 * @property Organigrama $Organigrama
 * @property EvaluacionesEmpresa $EvaluacionesEmpresa
 * @property IntegrantesGruposApoyo $IntegrantesGruposApoyo
 */
class CargosPersona extends AppModel {


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
		),
		'Organigrama' => array(
			'className' => 'Organigrama',
			'foreignKey' => 'organigrama_id',
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
		'EvaluacionesEmpresa' => array(
			'className' => 'EvaluacionesEmpresa',
			'foreignKey' => 'cargos_persona_id',
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
		'IntegrantesGruposApoyo' => array(
			'className' => 'IntegrantesGruposApoyo',
			'foreignKey' => 'cargos_persona_id',
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
