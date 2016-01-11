<?php
App::uses('AppController', 'Controller');
/**
 * DivisionesGeopoliticas Controller
 *
 * @property DivisionesGeopolitica $DivisionesGeopolitica
 * @property PaginatorComponent $Paginator
 */
class DivisionesGeopoliticasController extends AppController {

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
		$this->DivisionesGeopolitica->recursive = 0;
		$this->set('divisionesGeopoliticas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DivisionesGeopolitica->exists($id)) {
			throw new NotFoundException(__('Invalid divisiones geopolitica'));
		}
		$options = array('conditions' => array('DivisionesGeopolitica.' . $this->DivisionesGeopolitica->primaryKey => $id));
		$this->set('divisionesGeopolitica', $this->DivisionesGeopolitica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DivisionesGeopolitica->create();
			if ($this->DivisionesGeopolitica->save($this->request->data)) {
				$this->Flash->success(__('The divisiones geopolitica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The divisiones geopolitica could not be saved. Please, try again.'));
			}
		}
		$parentDivisionesGeopoliticas = $this->DivisionesGeopolitica->ParentDivisionesGeopolitica->find('list');
		$sedes = $this->DivisionesGeopolitica->Sede->find('list');
		$this->set(compact('parentDivisionesGeopoliticas', 'sedes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DivisionesGeopolitica->exists($id)) {
			throw new NotFoundException(__('Invalid divisiones geopolitica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DivisionesGeopolitica->save($this->request->data)) {
				$this->Flash->success(__('The divisiones geopolitica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The divisiones geopolitica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DivisionesGeopolitica.' . $this->DivisionesGeopolitica->primaryKey => $id));
			$this->request->data = $this->DivisionesGeopolitica->find('first', $options);
		}
		$parentDivisionesGeopoliticas = $this->DivisionesGeopolitica->ParentDivisionesGeopolitica->find('list');
		$sedes = $this->DivisionesGeopolitica->Sede->find('list');
		$this->set(compact('parentDivisionesGeopoliticas', 'sedes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DivisionesGeopolitica->id = $id;
		if (!$this->DivisionesGeopolitica->exists()) {
			throw new NotFoundException(__('Invalid divisiones geopolitica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DivisionesGeopolitica->delete()) {
			$this->Flash->success(__('The divisiones geopolitica has been deleted.'));
		} else {
			$this->Flash->error(__('The divisiones geopolitica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
