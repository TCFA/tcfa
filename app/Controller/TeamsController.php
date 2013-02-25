<?php

class TeamsController extends AppController {

	public $uses = array('Player');
	
	public function index() {
		
	}

	public function mavericks() {
		$players = $this->Player->find('all', array(
			'conditions' => array('team' => 'Mavericks'),
			'order' => array('last_name' => 'ASC')
		));
		$this->set('players', $players);

	}

	public function titans() {
		$players = $this->Player->find('all', array(
			'conditions' => array('team' => 'Titans'),
			'order' => array('last_name' => 'ASC')
		));
		$this->set('players', $players);
	}
}
