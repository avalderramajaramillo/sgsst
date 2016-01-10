<?php
App::uses('AppModel', 'Model');
/**
 * ActividadesEconomicasSede Model
 *
 * @property ActividadesEconomica $ActividadesEconomica
 * @property Sede $Sede
 */
class ActividadesEconomicasSede extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'es_principal';


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
		),
		'Sede' => array(
			'className' => 'Sede',
			'foreignKey' => 'sede_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
