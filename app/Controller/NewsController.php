<?php

class NewsController extends AppController {
	
	public function view($id) {
		$news = $this->News->find('first', array('conditions' => array('News.id' => $id)));
		$this->set('news', $news);
		$this->set('referer', $this->referer());
	}

	public function add() {
		$this->helpers = array('TinyMCE.TinyMCE');
		if ( $this->request->is('post') ) {
			if ( $this->News->save($this->request->data) ) {
				$this->Session->setFlash(__('Uutinen tallennettu'));
				$this->redirect('/');
			} else {
				$this->Session->setFlash(__('Tallennus epäonnistui'));
			}
		}
	}
}
