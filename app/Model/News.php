<?php

App::uses('AppModel', 'Model');
class News extends AppModel {
	public $name = 'News';

	public $belongsTo = array('User');

	public function afterFind($results, $primary = false) {
		foreach($results as &$result) {
			if ( isset($result['News']['created']) ) {
				// Format timestamp to "dd.mm.yyyy"
				$result['News']['created'] = date('j.n.Y', strtotime($result['News']['created']));
		
			}
		}
		return $results;
	}	
}
