<?php
App::uses('AppController', 'Controller');
/**
 * EmpresasPersonas Controller
 *
 * @property EmpresasPersona $EmpresasPersona
 * @property PaginatorComponent $Paginator
 */
class EmpresasPersonasController extends AppController {

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
		$this->EmpresasPersona->recursive = 0;
		$this->set('empresasPersonas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpresasPersona->exists($id)) {
			throw new NotFoundException(__('Invalid empresas persona'));
		}
		$options = array('conditions' => array('EmpresasPersona.' . $this->EmpresasPersona->primaryKey => $id));
		$this->set('empresasPersona', $this->EmpresasPersona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpresasPersona->create();
			if ($this->EmpresasPersona->save($this->request->data)) {
				$this->Flash->success(__('The empresas persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresas persona could not be saved. Please, try again.'));
			}
		}
		$tiposDocumentos = $this->EmpresasPersona->TiposDocumento->find('list');
		$divisionesGeopoliticas = $this->EmpresasPersona->DivisionesGeopolitica->find('list');
		$tiposSexos = $this->EmpresasPersona->TiposSexo->find('list');
		$tiposClientes = $this->EmpresasPersona->TiposCliente->find('list');
		$this->set(compact('tiposDocumentos', 'divisionesGeopoliticas', 'tiposSexos', 'tiposClientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmpresasPersona->exists($id)) {
			throw new NotFoundException(__('Invalid empresas persona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresasPersona->save($this->request->data)) {
				$this->Flash->success(__('The empresas persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresas persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresasPersona.' . $this->EmpresasPersona->primaryKey => $id));
			$this->request->data = $this->EmpresasPersona->find('first', $options);
		}
		$tiposDocumentos = $this->EmpresasPersona->TiposDocumento->find('list');
		$divisionesGeopoliticas = $this->EmpresasPersona->DivisionesGeopolitica->find('list');
		$tiposSexos = $this->EmpresasPersona->TiposSexo->find('list');
		$tiposClientes = $this->EmpresasPersona->TiposCliente->find('list');
		$this->set(compact('tiposDocumentos', 'divisionesGeopoliticas', 'tiposSexos', 'tiposClientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmpresasPersona->id = $id;
		if (!$this->EmpresasPersona->exists()) {
			throw new NotFoundException(__('Invalid empresas persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresasPersona->delete()) {
			$this->Flash->success(__('The empresas persona has been deleted.'));
		} else {
			$this->Flash->error(__('The empresas persona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
