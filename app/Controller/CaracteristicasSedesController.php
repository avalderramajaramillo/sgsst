<?php
App::uses('AppController', 'Controller');
/**
 * CaracteristicasSedes Controller
 *
 * @property CaracteristicasSede $CaracteristicasSede
 * @property PaginatorComponent $Paginator
 */
class CaracteristicasSedesController extends AppController {

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
		$this->CaracteristicasSede->recursive = 0;
		$this->set('caracteristicasSedes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CaracteristicasSede->exists($id)) {
			throw new NotFoundException(__('Invalid caracteristicas sede'));
		}
		$options = array('conditions' => array('CaracteristicasSede.' . $this->CaracteristicasSede->primaryKey => $id));
		$this->set('caracteristicasSede', $this->CaracteristicasSede->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CaracteristicasSede->create();
			if ($this->CaracteristicasSede->save($this->request->data)) {
				$this->Flash->success(__('The caracteristicas sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The caracteristicas sede could not be saved. Please, try again.'));
			}
		}
		$sedes = $this->CaracteristicasSede->Sede->find('list');
		$tiposCaracteristicasSedes = $this->CaracteristicasSede->TiposCaracteristicasSede->find('list');
		$this->set(compact('sedes', 'tiposCaracteristicasSedes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CaracteristicasSede->exists($id)) {
			throw new NotFoundException(__('Invalid caracteristicas sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CaracteristicasSede->save($this->request->data)) {
				$this->Flash->success(__('The caracteristicas sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The caracteristicas sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CaracteristicasSede.' . $this->CaracteristicasSede->primaryKey => $id));
			$this->request->data = $this->CaracteristicasSede->find('first', $options);
		}
		$sedes = $this->CaracteristicasSede->Sede->find('list');
		$tiposCaracteristicasSedes = $this->CaracteristicasSede->TiposCaracteristicasSede->find('list');
		$this->set(compact('sedes', 'tiposCaracteristicasSedes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CaracteristicasSede->id = $id;
		if (!$this->CaracteristicasSede->exists()) {
			throw new NotFoundException(__('Invalid caracteristicas sede'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CaracteristicasSede->delete()) {
			$this->Flash->success(__('The caracteristicas sede has been deleted.'));
		} else {
			$this->Flash->error(__('The caracteristicas sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
