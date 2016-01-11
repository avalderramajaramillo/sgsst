<?php
App::uses('AppController', 'Controller');
/**
 * EmpresasSaludPromotoras Controller
 *
 * @property EmpresasSaludPromotora $EmpresasSaludPromotora
 * @property PaginatorComponent $Paginator
 */
class EmpresasSaludPromotorasController extends AppController {

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
		$this->EmpresasSaludPromotora->recursive = 0;
		$this->set('empresasSaludPromotoras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpresasSaludPromotora->exists($id)) {
			throw new NotFoundException(__('Invalid empresas salud promotora'));
		}
		$options = array('conditions' => array('EmpresasSaludPromotora.' . $this->EmpresasSaludPromotora->primaryKey => $id));
		$this->set('empresasSaludPromotora', $this->EmpresasSaludPromotora->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpresasSaludPromotora->create();
			if ($this->EmpresasSaludPromotora->save($this->request->data)) {
				$this->Flash->success(__('The empresas salud promotora has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresas salud promotora could not be saved. Please, try again.'));
			}
		}
		$empresasPersonas = $this->EmpresasSaludPromotora->EmpresasPersona->find('list');
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
		if (!$this->EmpresasSaludPromotora->exists($id)) {
			throw new NotFoundException(__('Invalid empresas salud promotora'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresasSaludPromotora->save($this->request->data)) {
				$this->Flash->success(__('The empresas salud promotora has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresas salud promotora could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresasSaludPromotora.' . $this->EmpresasSaludPromotora->primaryKey => $id));
			$this->request->data = $this->EmpresasSaludPromotora->find('first', $options);
		}
		$empresasPersonas = $this->EmpresasSaludPromotora->EmpresasPersona->find('list');
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
		$this->EmpresasSaludPromotora->id = $id;
		if (!$this->EmpresasSaludPromotora->exists()) {
			throw new NotFoundException(__('Invalid empresas salud promotora'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresasSaludPromotora->delete()) {
			$this->Flash->success(__('The empresas salud promotora has been deleted.'));
		} else {
			$this->Flash->error(__('The empresas salud promotora could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
