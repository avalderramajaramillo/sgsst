<?php
App::uses('AppController', 'Controller');
/**
 * CorreosSedes Controller
 *
 * @property CorreosSede $CorreosSede
 * @property PaginatorComponent $Paginator
 */
class CorreosSedesController extends AppController {

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
		$this->CorreosSede->recursive = 0;
		$this->set('correosSedes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CorreosSede->exists($id)) {
			throw new NotFoundException(__('Invalid correos sede'));
		}
		$options = array('conditions' => array('CorreosSede.' . $this->CorreosSede->primaryKey => $id));
		$this->set('correosSede', $this->CorreosSede->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CorreosSede->create();
			if ($this->CorreosSede->save($this->request->data)) {
				$this->Flash->success(__('The correos sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correos sede could not be saved. Please, try again.'));
			}
		}
		$sedes = $this->CorreosSede->Sede->find('list');
		$tiposCorreos = $this->CorreosSede->TiposCorreo->find('list');
		$this->set(compact('sedes', 'tiposCorreos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CorreosSede->exists($id)) {
			throw new NotFoundException(__('Invalid correos sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CorreosSede->save($this->request->data)) {
				$this->Flash->success(__('The correos sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correos sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CorreosSede.' . $this->CorreosSede->primaryKey => $id));
			$this->request->data = $this->CorreosSede->find('first', $options);
		}
		$sedes = $this->CorreosSede->Sede->find('list');
		$tiposCorreos = $this->CorreosSede->TiposCorreo->find('list');
		$this->set(compact('sedes', 'tiposCorreos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CorreosSede->id = $id;
		if (!$this->CorreosSede->exists()) {
			throw new NotFoundException(__('Invalid correos sede'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CorreosSede->delete()) {
			$this->Flash->success(__('The correos sede has been deleted.'));
		} else {
			$this->Flash->error(__('The correos sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
