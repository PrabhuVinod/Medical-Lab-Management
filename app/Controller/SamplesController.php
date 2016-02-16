<?php
App::uses('AppController', 'Controller');
/**
 * Samples Controller
 *
 * @property Sample $Sample
 * @property PaginatorComponent $Paginator
 */
class SamplesController extends AppController {

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
		$this->Sample->recursive = 0;
		$this->set('samples', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sample->exists($id)) {
			throw new NotFoundException(__('Invalid sample'));
		}
		$options = array('conditions' => array('Sample.' . $this->Sample->primaryKey => $id));
		$this->set('sample', $this->Sample->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sample->create();
			if ($this->Sample->save($this->request->data)) {
				$this->Flash->success(__('The sample has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sample could not be saved. Please, try again.'));
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
		if (!$this->Sample->exists($id)) {
			throw new NotFoundException(__('Invalid sample'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sample->save($this->request->data)) {
				$this->Flash->success(__('The sample has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sample could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sample.' . $this->Sample->primaryKey => $id));
			$this->request->data = $this->Sample->find('first', $options);
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
		$this->Sample->id = $id;
		if (!$this->Sample->exists()) {
			throw new NotFoundException(__('Invalid sample'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sample->delete()) {
			$this->Flash->success(__('The sample has been deleted.'));
		} else {
			$this->Flash->error(__('The sample could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
