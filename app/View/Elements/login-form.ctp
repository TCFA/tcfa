<div class='login-form'>
<?php
$user = $this->Session->read('Auth.User');
if ( empty($user) ) {
	echo $this->Form->create('User', array('controller' => 'user', 'action' => 'login',
		'inputDefaults' => array(
			'div' => false
		)
	)
);
echo $this->Form->input('username', array('label' => __('Käyttäjätunnus')));
echo $this->Form->input('password', array('label' => __('Salasana')));
echo $this->Form->end('Kirjaudu');

} else {
	//debug($user);
}

?>
</div>