<?php
App::uses('AppController', 'Controller');
/**
 * CaracteristicasDivisionesGeopoliticas Controller
 *
 * @property CaracteristicasDivisionesGeopolitica $CaracteristicasDivisionesGeopolitica
 * @property PaginatorComponent $Paginator
 */
class CaracteristicasDivisionesGeopoliticasController extends AppController {

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
		$this->CaracteristicasDivisionesGeopolitica->recursive = 0;
		$this->set('caracteristicasDivisionesGeopoliticas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CaracteristicasDivisionesGeopolitica->exists($id)) {
			throw new NotFoundException(__('Invalid caracteristicas divisiones geopolitica'));
		}
		$options = array('conditions' => array('CaracteristicasDivisionesGeopolitica.' . $this->CaracteristicasDivisionesGeopolitica->primaryKey => $id));
		$this->set('caracteristicasDivisionesGeopolitica', $this->CaracteristicasDivisionesGeopolitica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CaracteristicasDivisionesGeopolitica->create();
			if ($this->CaracteristicasDivisionesGeopolitica->save($this->request->data)) {
				$this->Flash->success(__('The caracteristicas divisiones geopolitica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The caracteristicas divisiones geopolitica could not be saved. Please, try again.'));
			}
		}
		$divisionesGeopoliticas = $this->CaracteristicasDivisionesGeopolitica->DivisionesGeopolitica->find('list');
		$tiposCaracteristicasDivisionesGeopoliticas = $this->CaracteristicasDivisionesGeopolitica->TiposCaracteristicasDivisionesGeopolitica->find('list');
		$this->set(compact('divisionesGeopoliticas', 'tiposCaracteristicasDivisionesGeopoliticas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CaracteristicasDivisionesGeopolitica->exists($id)) {
			throw new NotFoundException(__('Invalid caracteristicas divisiones geopolitica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CaracteristicasDivisionesGeopolitica->save($this->request->data)) {
				$this->Flash->success(__('The caracteristicas divisiones geopolitica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The caracteristicas divisiones geopolitica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CaracteristicasDivisionesGeopolitica.' . $this->CaracteristicasDivisionesGeopolitica->primaryKey => $id));
			$this->request->data = $this->CaracteristicasDivisionesGeopolitica->find('first', $options);
		}
		$divisionesGeopoliticas = $this->CaracteristicasDivisionesGeopolitica->DivisionesGeopolitica->find('list');
		$tiposCaracteristicasDivisionesGeopoliticas = $this->CaracteristicasDivisionesGeopolitica->TiposCaracteristicasDivisionesGeopolitica->find('list');
		$this->set(compact('divisionesGeopoliticas', 'tiposCaracteristicasDivisionesGeopoliticas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CaracteristicasDivisionesGeopolitica->id = $id;
		if (!$this->CaracteristicasDivisionesGeopolitica->exists()) {
			throw new NotFoundException(__('Invalid caracteristicas divisiones geopolitica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CaracteristicasDivisionesGeopolitica->delete()) {
			$this->Flash->success(__('The caracteristicas divisiones geopolitica has been deleted.'));
		} else {
			$this->Flash->error(__('The caracteristicas divisiones geopolitica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
