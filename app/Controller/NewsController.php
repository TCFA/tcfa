<?php

class NewsController extends AppController {
	
	public function view($id) {
		$news = $this->News->find('first', array('conditions' => array('News.id' => $id)));
		$this->set('news', $news);
		$this->set('referer', $this->referer());
	}
}
