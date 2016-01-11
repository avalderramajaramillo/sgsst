<?php
App::uses('AppController', 'Controller');
/**
 * AdministradorasFondosPensiones Controller
 *
 * @property AdministradorasFondosPensione $AdministradorasFondosPensione
 * @property PaginatorComponent $Paginator
 */
class AdministradorasFondosPensionesController extends AppController {

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
		$this->AdministradorasFondosPensione->recursive = 0;
		$this->set('administradorasFondosPensiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdministradorasFondosPensione->exists($id)) {
			throw new NotFoundException(__('Invalid administradoras fondos pensione'));
		}
		$options = array('conditions' => array('AdministradorasFondosPensione.' . $this->AdministradorasFondosPensione->primaryKey => $id));
		$this->set('administradorasFondosPensione', $this->AdministradorasFondosPensione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdministradorasFondosPensione->create();
			if ($this->AdministradorasFondosPensione->save($this->request->data)) {
				$this->Flash->success(__('The administradoras fondos pensione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The administradoras fondos pensione could not be saved. Please, try again.'));
			}
		}
		$empresasPersonas = $this->AdministradorasFondosPensione->EmpresasPersona->find('list');
		$this->set(compact('empresasPersonas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdministradorasFondosPensione->exists($id)) {
			throw new NotFoundException(__('Invalid administradoras fondos pensione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdministradorasFondosPensione->save($this->request->data)) {
				$this->Flash->success(__('The administradoras fondos pensione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The administradoras fondos pensione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdministradorasFondosPensione.' . $this->AdministradorasFondosPensione->primaryKey => $id));
			$this->request->data = $this->AdministradorasFondosPensione->find('first', $options);
		}
		$empresasPersonas = $this->AdministradorasFondosPensione->EmpresasPersona->find('list');
		$this->set(compact('empresasPersonas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdministradorasFondosPensione->id = $id;
		if (!$this->AdministradorasFondosPensione->exists()) {
			throw new NotFoundException(__('Invalid administradoras fondos pensione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdministradorasFondosPensione->delete()) {
			$this->Flash->success(__('The administradoras fondos pensione has been deleted.'));
		} else {
			$this->Flash->error(__('The administradoras fondos pensione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
