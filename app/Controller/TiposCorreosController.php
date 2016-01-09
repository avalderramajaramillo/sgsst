<?php
App::uses('AppController', 'Controller');
/**
 * TiposCorreos Controller
 *
 * @property TiposCorreo $TiposCorreo
 * @property PaginatorComponent $Paginator
 */
class TiposCorreosController extends AppController {

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
		$this->TiposCorreo->recursive = 0;
		$this->set('tiposCorreos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TiposCorreo->exists($id)) {
			throw new NotFoundException(__('Invalid tipos correo'));
		}
		$options = array('conditions' => array('TiposCorreo.' . $this->TiposCorreo->primaryKey => $id));
		$this->set('tiposCorreo', $this->TiposCorreo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposCorreo->create();
			if ($this->TiposCorreo->save($this->request->data)) {
				$this->Flash->success(__('The tipos correo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipos correo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TiposCorreo->exists($id)) {
			throw new NotFoundException(__('Invalid tipos correo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TiposCorreo->save($this->request->data)) {
				$this->Flash->success(__('The tipos correo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipos correo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TiposCorreo.' . $this->TiposCorreo->primaryKey => $id));
			$this->request->data = $this->TiposCorreo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TiposCorreo->id = $id;
		if (!$this->TiposCorreo->exists()) {
			throw new NotFoundException(__('Invalid tipos correo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TiposCorreo->delete()) {
			$this->Flash->success(__('The tipos correo has been deleted.'));
		} else {
			$this->Flash->error(__('The tipos correo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
