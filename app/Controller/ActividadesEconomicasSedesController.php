<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesEconomicasSedes Controller
 *
 * @property ActividadesEconomicasSede $ActividadesEconomicasSede
 * @property PaginatorComponent $Paginator
 */
class ActividadesEconomicasSedesController extends AppController {

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
		$this->ActividadesEconomicasSede->recursive = 0;
		$this->set('actividadesEconomicasSedes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesEconomicasSede->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economicas sede'));
		}
		$options = array('conditions' => array('ActividadesEconomicasSede.' . $this->ActividadesEconomicasSede->primaryKey => $id));
		$this->set('actividadesEconomicasSede', $this->ActividadesEconomicasSede->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesEconomicasSede->create();
			if ($this->ActividadesEconomicasSede->save($this->request->data)) {
				$this->Flash->success(__('The actividades economicas sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economicas sede could not be saved. Please, try again.'));
			}
		}
		$actividadesEconomicas = $this->ActividadesEconomicasSede->ActividadesEconomica->find('list');
		$sedes = $this->ActividadesEconomicasSede->Sede->find('list');
		$this->set(compact('actividadesEconomicas', 'sedes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActividadesEconomicasSede->exists($id)) {
			throw new NotFoundException(__('Invalid actividades economicas sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActividadesEconomicasSede->save($this->request->data)) {
				$this->Flash->success(__('The actividades economicas sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividades economicas sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActividadesEconomicasSede.' . $this->ActividadesEconomicasSede->primaryKey => $id));
			$this->request->data = $this->ActividadesEconomicasSede->find('first', $options);
		}
		$actividadesEconomicas = $this->ActividadesEconomicasSede->ActividadesEconomica->find('list');
		$sedes = $this->ActividadesEconomicasSede->Sede->find('list');
		$this->set(compact('actividadesEconomicas', 'sedes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActividadesEconomicasSede->id = $id;
		if (!$this->ActividadesEconomicasSede->exists()) {
			throw new NotFoundException(__('Invalid actividades economicas sede'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActividadesEconomicasSede->delete()) {
			$this->Flash->success(__('The actividades economicas sede has been deleted.'));
		} else {
			$this->Flash->error(__('The actividades economicas sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
