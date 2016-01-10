<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesEconomicas Controller
 *
 * @property ActividadesEconomica $ActividadesEconomica
 * @property PaginatorComponent $Paginator
 */
class ActividadesEconomicasController extends AppController {

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
		$this->ActividadesEconomica->recursive = 0;
		$this->set('actividadesEconomicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesEconomica->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economica'));
		}
		$options = array('conditions' => array('ActividadesEconomica.' . $this->ActividadesEconomica->primaryKey => $id));
		$this->set('actividadesEconomica', $this->ActividadesEconomica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesEconomica->create();
			if ($this->ActividadesEconomica->save($this->request->data)) {
				$this->Flash->success(__('The actividades economica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economica could not be saved. Please, try again.'));
			}
		}
		$parentActividadesEconomicas = $this->ActividadesEconomica->ParentActividadesEconomica->find('list');
		$sedes = $this->ActividadesEconomica->Sede->find('list');
		$this->set(compact('parentActividadesEconomicas', 'sedes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActividadesEconomica->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActividadesEconomica->save($this->request->data)) {
				$this->Flash->success(__('The actividades economica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActividadesEconomica.' . $this->ActividadesEconomica->primaryKey => $id));
			$this->request->data = $this->ActividadesEconomica->find('first', $options);
		}
		$parentActividadesEconomicas = $this->ActividadesEconomica->ParentActividadesEconomica->find('list');
		$sedes = $this->ActividadesEconomica->Sede->find('list');
		$this->set(compact('parentActividadesEconomicas', 'sedes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActividadesEconomica->id = $id;
		if (!$this->ActividadesEconomica->exists()) {
			throw new NotFoundException(__('Invalid actividades economica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActividadesEconomica->delete()) {
			$this->Flash->success(__('The actividades economica has been deleted.'));
		} else {
			$this->Flash->error(__('The actividades economica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
