<?php
App::uses('AppController', 'Controller');
/**
 * Parameters Controller
 *
 * @property Parameter $Parameter
 * @property PaginatorComponent $Paginator
 */
class ParametersController extends AppController {

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
		$this->Parameter->recursive = 0;
		$this->set('parameters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
		$this->set('parameter', $this->Parameter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parameter->create();
			if ($this->Parameter->save($this->request->data)) {
				$this->Flash->success(__('The parameter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The parameter could not be saved. Please, try again.'));
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
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parameter->save($this->request->data)) {
				$this->Flash->success(__('The parameter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The parameter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
			$this->request->data = $this->Parameter->find('first', $options);
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
		$this->Parameter->id = $id;
		if (!$this->Parameter->exists()) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Parameter->delete()) {
			$this->Flash->success(__('The parameter has been deleted.'));
		} else {
			$this->Flash->error(__('The parameter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
