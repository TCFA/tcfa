<?php

class UsersController extends AppController {
	public $uses = array('User');

	public function index() {
		$users = $this->User->find('all');

		$this->set('users', $users);

	}

	public function create() {
		if ( $this->request->is('post') ) {
			$this->User->create();
			if ( $this->User->save($this->request->data) ) {
				$uname = $this->User->field('username');
				$this->Session->setFlash(__("Käyttäjä '$uname' luotu"));
				$this->redirect(array('controller' => 'tcfa'));
			}
		}
	}

	public function login() {
		if ( $this->request->is('post') ) {
			if ( $this->Auth->login() ) {
				$this->Session->setFlash('Olet kirjautunut sisään');
				
				debug($this->Auth->user);
				exit;
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Kirjautuminen ei onnistunut');
			}
		}
	}
}
