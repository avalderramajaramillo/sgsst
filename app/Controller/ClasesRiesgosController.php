<?php
App::uses('AppController', 'Controller');
/**
 * ClasesRiesgos Controller
 *
 * @property ClasesRiesgo $ClasesRiesgo
 * @property PaginatorComponent $Paginator
 */
class ClasesRiesgosController extends AppController {

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
		$this->ClasesRiesgo->recursive = 0;
		$this->set('clasesRiesgos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClasesRiesgo->exists($id)) {
			throw new NotFoundException(__('Invalid clases riesgo'));
		}
		$options = array('conditions' => array('ClasesRiesgo.' . $this->ClasesRiesgo->primaryKey => $id));
		$this->set('clasesRiesgo', $this->ClasesRiesgo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClasesRiesgo->create();
			if ($this->ClasesRiesgo->save($this->request->data)) {
				$this->Flash->success(__('The clases riesgo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The clases riesgo could not be saved. Please, try again.'));
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
		if (!$this->ClasesRiesgo->exists($id)) {
			throw new NotFoundException(__('Invalid clases riesgo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClasesRiesgo->save($this->request->data)) {
				$this->Flash->success(__('The clases riesgo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The clases riesgo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClasesRiesgo.' . $this->ClasesRiesgo->primaryKey => $id));
			$this->request->data = $this->ClasesRiesgo->find('first', $options);
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
		$this->ClasesRiesgo->id = $id;
		if (!$this->ClasesRiesgo->exists()) {
			throw new NotFoundException(__('Invalid clases riesgo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClasesRiesgo->delete()) {
			$this->Flash->success(__('The clases riesgo has been deleted.'));
		} else {
			$this->Flash->error(__('The clases riesgo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
