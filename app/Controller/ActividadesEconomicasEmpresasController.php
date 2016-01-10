<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesEconomicasEmpresas Controller
 *
 * @property ActividadesEconomicasEmpresa $ActividadesEconomicasEmpresa
 * @property PaginatorComponent $Paginator
 */
class ActividadesEconomicasEmpresasController extends AppController {

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
		$this->ActividadesEconomicasEmpresa->recursive = 0;
		$this->set('actividadesEconomicasEmpresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesEconomicasEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economicas empresa'));
		}
		$options = array('conditions' => array('ActividadesEconomicasEmpresa.' . $this->ActividadesEconomicasEmpresa->primaryKey => $id));
		$this->set('actividadesEconomicasEmpresa', $this->ActividadesEconomicasEmpresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesEconomicasEmpresa->create();
			if ($this->ActividadesEconomicasEmpresa->save($this->request->data)) {
				$this->Flash->success(__('The actividades economicas empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economicas empresa could not be saved. Please, try again.'));
			}
		}
		$actividadesEconomicas = $this->ActividadesEconomicasEmpresa->ActividadesEconomica->find('list');
		$this->set(compact('actividadesEconomicas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActividadesEconomicasEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economicas empresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActividadesEconomicasEmpresa->save($this->request->data)) {
				$this->Flash->success(__('The actividades economicas empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economicas empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActividadesEconomicasEmpresa.' . $this->ActividadesEconomicasEmpresa->primaryKey => $id));
			$this->request->data = $this->ActividadesEconomicasEmpresa->find('first', $options);
		}
		$actividadesEconomicas = $this->ActividadesEconomicasEmpresa->ActividadesEconomica->find('list');
		$this->set(compact('actividadesEconomicas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActividadesEconomicasEmpresa->id = $id;
		if (!$this->ActividadesEconomicasEmpresa->exists()) {
			throw new NotFoundException(__('Invalid actividades economicas empresa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActividadesEconomicasEmpresa->delete()) {
			$this->Flash->success(__('The actividades economicas empresa has been deleted.'));
		} else {
			$this->Flash->error(__('The actividades economicas empresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
