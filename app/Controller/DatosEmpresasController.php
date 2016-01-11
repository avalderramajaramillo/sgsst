<?php
App::uses('AppController', 'Controller');
/**
 * DatosEmpresas Controller
 *
 * @property DatosEmpresa $DatosEmpresa
 * @property PaginatorComponent $Paginator
 */
class DatosEmpresasController extends AppController {

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
		$this->DatosEmpresa->recursive = 0;
		$this->set('datosEmpresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatosEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid datos empresa'));
		}
		$options = array('conditions' => array('DatosEmpresa.' . $this->DatosEmpresa->primaryKey => $id));
		$this->set('datosEmpresa', $this->DatosEmpresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatosEmpresa->create();
			if ($this->DatosEmpresa->save($this->request->data)) {
				$this->Flash->success(__('The datos empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The datos empresa could not be saved. Please, try again.'));
			}
		}
		$empresasPersonas = $this->DatosEmpresa->EmpresasPersona->find('list');
		$actividadesEconomicas = $this->DatosEmpresa->ActividadesEconomica->find('list');
		$clasesRiesgos = $this->DatosEmpresa->ClasesRiesgo->find('list');
		$this->set(compact('empresasPersonas', 'actividadesEconomicas', 'clasesRiesgos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatosEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid datos empresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatosEmpresa->save($this->request->data)) {
				$this->Flash->success(__('The datos empresa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The datos empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatosEmpresa.' . $this->DatosEmpresa->primaryKey => $id));
			$this->request->data = $this->DatosEmpresa->find('first', $options);
		}
		$empresasPersonas = $this->DatosEmpresa->EmpresasPersona->find('list');
		$actividadesEconomicas = $this->DatosEmpresa->ActividadesEconomica->find('list');
		$clasesRiesgos = $this->DatosEmpresa->ClasesRiesgo->find('list');
		$this->set(compact('empresasPersonas', 'actividadesEconomicas', 'clasesRiesgos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatosEmpresa->id = $id;
		if (!$this->DatosEmpresa->exists()) {
			throw new NotFoundException(__('Invalid datos empresa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatosEmpresa->delete()) {
			$this->Flash->success(__('The datos empresa has been deleted.'));
		} else {
			$this->Flash->error(__('The datos empresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
