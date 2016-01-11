<?php
App::uses('AppModel', 'Model');
/**
 * ContactosEmpresa Model
 *
 * @property TiposContacto $TiposContacto
 * @property EmpresasPersona $EmpresasPersona
 */
class ContactosEmpresa extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposContacto' => array(
			'className' => 'TiposContacto',
			'foreignKey' => 'tipos_contacto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EmpresasPersona' => array(
			'className' => 'EmpresasPersona',
			'foreignKey' => 'empresas_persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
