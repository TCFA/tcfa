<?php

class TcfaController extends AppController {
	public $uses = array('News');

	public function index() {
		$news = $this->News->find('all',array(
				'order' => 'created DESC'
			)
		);
		$this->set('news', $news);
	}

	public function about() {

	}

	public function teams() {

	}

	
	public function sport() {
		
	}

	public function contact() {

	}
}
