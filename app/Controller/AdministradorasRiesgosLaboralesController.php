<?php
App::uses('AppController', 'Controller');
/**
 * AdministradorasRiesgosLaborales Controller
 *
 * @property AdministradorasRiesgosLaborale $AdministradorasRiesgosLaborale
 * @property PaginatorComponent $Paginator
 */
class AdministradorasRiesgosLaboralesController extends AppController {

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
		$this->AdministradorasRiesgosLaborale->recursive = 0;
		$this->set('administradorasRiesgosLaborales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdministradorasRiesgosLaborale->exists($id)) {
			throw new NotFoundException(__('Invalid administradoras riesgos laborale'));
		}
		$options = array('conditions' => array('AdministradorasRiesgosLaborale.' . $this->AdministradorasRiesgosLaborale->primaryKey => $id));
		$this->set('administradorasRiesgosLaborale', $this->AdministradorasRiesgosLaborale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdministradorasRiesgosLaborale->create();
			if ($this->AdministradorasRiesgosLaborale->save($this->request->data)) {
				$this->Flash->success(__('The administradoras riesgos laborale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The administradoras riesgos laborale could not be saved. Please, try again.'));
			}
		}
		$empresasPersonas = $this->AdministradorasRiesgosLaborale->EmpresasPersona->find('list');
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
		if (!$this->AdministradorasRiesgosLaborale->exists($id)) {
			throw new NotFoundException(__('Invalid administradoras riesgos laborale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdministradorasRiesgosLaborale->save($this->request->data)) {
				$this->Flash->success(__('The administradoras riesgos laborale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The administradoras riesgos laborale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdministradorasRiesgosLaborale.' . $this->AdministradorasRiesgosLaborale->primaryKey => $id));
			$this->request->data = $this->AdministradorasRiesgosLaborale->find('first', $options);
		}
		$empresasPersonas = $this->AdministradorasRiesgosLaborale->EmpresasPersona->find('list');
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
		$this->AdministradorasRiesgosLaborale->id = $id;
		if (!$this->AdministradorasRiesgosLaborale->exists()) {
			throw new NotFoundException(__('Invalid administradoras riesgos laborale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdministradorasRiesgosLaborale->delete()) {
			$this->Flash->success(__('The administradoras riesgos laborale has been deleted.'));
		} else {
			$this->Flash->error(__('The administradoras riesgos laborale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
