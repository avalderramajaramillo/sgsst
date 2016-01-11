<?php
App::uses('AppController', 'Controller');
/**
 * ElementosProteccionesPersonalesRiesgos Controller
 *
 * @property ElementosProteccionesPersonalesRiesgo $ElementosProteccionesPersonalesRiesgo
 * @property PaginatorComponent $Paginator
 */
class ElementosProteccionesPersonalesRiesgosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ElementosProteccionesPersonalesRiesgo->recursive = 0;
		$this->set('elementosProteccionesPersonalesRiesgos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ElementosProteccionesPersonalesRiesgo->exists($id)) {
			throw new NotFoundException(__('Invalid elementos protecciones personales riesgo'));
		}
		$options = array('conditions' => array('ElementosProteccionesPersonalesRiesgo.' . $this->ElementosProteccionesPersonalesRiesgo->primaryKey => $id));
		$this->set('elementosProteccionesPersonalesRiesgo', $this->ElementosProteccionesPersonalesRiesgo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ElementosProteccionesPersonalesRiesgo->create();
			if ($this->ElementosProteccionesPersonalesRiesgo->save($this->request->data)) {
				$this->Flash->success(__('The elementos protecciones personales riesgo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The elementos protecciones personales riesgo could not be saved. Please, try again.'));
			}
		}
		$riesgos = $this->ElementosProteccionesPersonalesRiesgo->Riesgo->find('list');
		$this->set(compact('riesgos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ElementosProteccionesPersonalesRiesgo->exists($id)) {
			throw new NotFoundException(__('Invalid elementos protecciones personales riesgo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ElementosProteccionesPersonalesRiesgo->save($this->request->data)) {
				$this->Flash->success(__('The elementos protecciones personales riesgo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The elementos protecciones personales riesgo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ElementosProteccionesPersonalesRiesgo.' . $this->ElementosProteccionesPersonalesRiesgo->primaryKey => $id));
			$this->request->data = $this->ElementosProteccionesPersonalesRiesgo->find('first', $options);
		}
		$riesgos = $this->ElementosProteccionesPersonalesRiesgo->Riesgo->find('list');
		$this->set(compact('riesgos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ElementosProteccionesPersonalesRiesgo->id = $id;
		if (!$this->ElementosProteccionesPersonalesRiesgo->exists()) {
			throw new NotFoundException(__('Invalid elementos protecciones personales riesgo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ElementosProteccionesPersonalesRiesgo->delete()) {
			$this->Flash->success(__('The elementos protecciones personales riesgo has been deleted.'));
		} else {
			$this->Flash->error(__('The elementos protecciones personales riesgo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
