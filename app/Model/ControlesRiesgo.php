<?php
App::uses('AppModel', 'Model');
/**
 * ControlesRiesgo Model
 *
 * @property Riesgo $Riesgo
 * @property Controle $Controle
 * @property PlanesAccionesControle $PlanesAccionesControle
 * @property PlanesAccionesMatrix $PlanesAccionesMatrix
 */
class ControlesRiesgo extends AppModel {


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
		),
		'Controle' => array(
			'className' => 'Controle',
			'foreignKey' => 'controle_id',
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
		'PlanesAccionesControle' => array(
			'className' => 'PlanesAccionesControle',
			'foreignKey' => 'controles_riesgo_id',
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
		'PlanesAccionesMatrix' => array(
			'className' => 'PlanesAccionesMatrix',
			'foreignKey' => 'controles_riesgo_id',
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
