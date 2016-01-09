<?php
App::uses('AppController', 'Controller');
/**
 * Correos Controller
 *
 * @property Correo $Correo
 * @property PaginatorComponent $Paginator
 */
class CorreosController extends AppController {

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
		$this->Correo->recursive = 0;
		$this->set('correos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Correo->exists($id)) {
			throw new NotFoundException(__('Invalid correo'));
		}
		$options = array('conditions' => array('Correo.' . $this->Correo->primaryKey => $id));
		$this->set('correo', $this->Correo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Correo->create();
			if ($this->Correo->save($this->request->data)) {
				$this->Flash->success(__('The correo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correo could not be saved. Please, try again.'));
			}
		}
		$empresasPersonas = $this->Correo->EmpresasPersona->find('list');
		$tiposCorreos = $this->Correo->TiposCorreo->find('list');
		$sedes = $this->Correo->Sede->find('list');
		$this->set(compact('empresasPersonas', 'tiposCorreos', 'sedes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Correo->exists($id)) {
			throw new NotFoundException(__('Invalid correo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Correo->save($this->request->data)) {
				$this->Flash->success(__('The correo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Correo.' . $this->Correo->primaryKey => $id));
			$this->request->data = $this->Correo->find('first', $options);
		}
		$empresasPersonas = $this->Correo->EmpresasPersona->find('list');
		$tiposCorreos = $this->Correo->TiposCorreo->find('list');
		$sedes = $this->Correo->Sede->find('list');
		$this->set(compact('empresasPersonas', 'tiposCorreos', 'sedes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Correo->id = $id;
		if (!$this->Correo->exists()) {
			throw new NotFoundException(__('Invalid correo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Correo->delete()) {
			$this->Flash->success(__('The correo has been deleted.'));
		} else {
			$this->Flash->error(__('The correo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
