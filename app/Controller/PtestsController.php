<?php
App::uses('AppController', 'Controller');
session_start();
/**
 * Ptests Controller
 *
 * @property Ptest $Ptest
 * @property PaginatorComponent $Paginator
 */
class PtestsController extends AppController {
var $uses = array('Ptest','Test','Invoice');

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
		$this->Ptest->recursive = 0;
		$this->Paginator->settings = array(
        'conditions' => array('Ptest.pid =' => $_SESSION['add_ptest_to_user'])
    	);
		$this->set('ptests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ptest->exists($id)) {
			throw new NotFoundException(__('Invalid ptest'));
		}
		$options = array('conditions' => array('Ptest.' . $this->Ptest->primaryKey => $id));
		$this->set('ptest', $this->Ptest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ptest->create();
			if ($this->Ptest->save($this->request->data)) {
				$this->Flash->success(__('The ptest has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ptest could not be saved. Please, try again.'));
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
		if (!$this->Ptest->exists($id)) {
			throw new NotFoundException(__('Invalid ptest'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ptest->save($this->request->data)) {
				$this->Flash->success(__('The ptest has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ptest could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ptest.' . $this->Ptest->primaryKey => $id));
			$this->request->data = $this->Ptest->find('first', $options);
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
		$this->Ptest->id = $id;
		if (!$this->Ptest->exists()) {
			throw new NotFoundException(__('Invalid ptest'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ptest->delete()) {
			$this->Flash->success(__('The ptest has been deleted.'));
		} else {
			$this->Flash->error(__('The ptest could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}










	public function add_norefresh() {

		$this->autoRender=false;
		$this->layout=false;

		if ($this->request->is('post')) {

			$this->request->data['Ptest']['pid']=$_SESSION['add_ptest_to_user'];
			$tid=$this->Test->find('first',array('conditions'=>array('Test.name' =>$this->request->data['tname'])));


			$this->request->data['Ptest']['tid']=$tid['Test']['id'];

			$this->Ptest->create();

			if ($this->Ptest->save($this->request->data)) {


				$this->Invoice->id=$_SESSION['new_invoice_id'];

				$invoice_data=$this->Invoice->find('first',array('conditions'=>array('id' =>$this->Invoice->id)));

				$new_invoice['Invoice']['totalamount']=$invoice_data['Invoice']['totalamount'] + $tid['Test']['cost'];

				if ($invoice_data['Invoice']['discount']>0) {
					
					$new_invoice['Invoice']['amount']=$new_invoice['Invoice']['totalamount']-(($new_invoice['Invoice']['totalamount'])/$invoice_data['Invoice']['discount']);
				}
				else{
					$new_invoice['Invoice']['amount']=$new_invoice['Invoice']['totalamount'];
				}

				$new_invoice['Invoice']['balance']=$new_invoice['Invoice']['amount'] - $invoice_data['Invoice']['advance'];

				$this->Invoice->save($new_invoice);




				// $this->Flash->success(__('The ptest has been saved.'));
				// return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Patient test could not be saved. Please, try again.'));
			}
		}
	}




	public function remove_norefresh() {


		$this->autoRender=false;
		$this->layout=false;

		if ($this->request->is('post')) {

			$this->request->data['Ptest']['pid']=$_SESSION['add_ptest_to_user'];
			$tid=$this->Test->find('first',array('conditions'=>array('Test.name' =>$this->request->data['tname'])));

			$this->request->data['Ptest']['tid']=$tid['Test']['id'];
			

			$sql="DELETE FROM ptests WHERE pid = ".$this->request->data['Ptest']['pid']." AND tid=".$this->request->data['Ptest']['tid'].";";

			$this->Ptest->query($sql);

	


	}

	}




}
