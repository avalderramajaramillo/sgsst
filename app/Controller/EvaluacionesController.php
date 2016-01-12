<?php
App::uses('AppController', 'Controller');
/**
 * Evaluaciones Controller
 *
 * @property Evaluacione $Evaluacione
 * @property PaginatorComponent $Paginator
 */
class EvaluacionesController extends AppController {

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
		$this->Evaluacione->recursive = 0;
		$this->set('evaluaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
		$this->set('evaluacione', $this->Evaluacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluacione->create();
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Flash->success(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evaluacione could not be saved. Please, try again.'));
			}
		}
		$parentEvaluaciones = $this->Evaluacione->ParentEvaluacione->find('list');
		$this->set(compact('parentEvaluaciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Flash->success(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evaluacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
			$this->request->data = $this->Evaluacione->find('first', $options);
		}
		$parentEvaluaciones = $this->Evaluacione->ParentEvaluacione->find('list');
		$this->set(compact('parentEvaluaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Evaluacione->id = $id;
		if (!$this->Evaluacione->exists()) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Evaluacione->delete()) {
			$this->Flash->success(__('The evaluacione has been deleted.'));
		} else {
			$this->Flash->error(__('The evaluacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
