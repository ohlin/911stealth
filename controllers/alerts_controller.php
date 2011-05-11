<?php
/**
 * Alerts Controller
 *
 */
class AlertsController extends AppController {

	public function postAlert($id = null) {
		$this->autoRender = false;
		if ($id == null) {
			$this->Alert->set($this->request->data);
			$this->Alert->save();
			$newId = $this->Alert->id;
			die(json_encode(array('id' => $newId)));
		} else {
			$this->Alert->id = $id;
			$this->Alert->set($this->request->data);
			$this->Alert->save();
			die(json_encode(array('id' => $id)));
		}
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Alert->recursive = 0;
		$this->set('alerts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Alert->id = $id;
		if (!$this->Alert->exists()) {
			throw new NotFoundException(__('Invalid alert'));
		}
		$this->set('alert', $this->Alert->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alert->create();
			if ($this->Alert->save($this->request->data)) {
				$this->Session->setFlash(__('The alert has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alert could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Alert->id = $id;
		if (!$this->Alert->exists()) {
			throw new NotFoundException(__('Invalid alert'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Alert->save($this->request->data)) {
				$this->Session->setFlash(__('The alert has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alert could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Alert->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Alert->id = $id;
		if (!$this->Alert->exists()) {
			throw new NotFoundException(__('Invalid alert'));
		}
		if ($this->Alert->delete()) {
			$this->Session->setFlash(__('Alert deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Alert was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
