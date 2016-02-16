<?php
App::uses('AppController', 'Controller');
/**
 * Patients Controller
 *
 * @property Patient $Patient
 * @property PaginatorComponent $Paginator
 */
class PatientsController extends AppController {

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
		$this->Patient->recursive = 0;
		$this->set('patients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patient->exists($id)) {
			throw new NotFoundException(__('Invalid patient'));
		}
		$options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
		$this->set('patient', $this->Patient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patient->create();
			if ($this->Patient->save($this->request->data)) {
				$this->Flash->success(__('The patient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The patient could not be saved. Please, try again.'));
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
		if (!$this->Patient->exists($id)) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patient->save($this->request->data)) {
				$this->Flash->success(__('The patient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The patient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
			$this->request->data = $this->Patient->find('first', $options);
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
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Patient->delete()) {
			$this->Flash->success(__('The patient has been deleted.'));
		} else {
			$this->Flash->error(__('The patient could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
