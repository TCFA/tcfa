<div class='login-form'>
<?php
if ( empty($user) ) {
	echo $this->Form->create('User', array('controller' => 'user', 'action' => 'login',
		'inputDefaults' => array(
			'div' => false
		)
	)
);
echo $this->Form->input('username', array('size' => 8, 'label' => false));
echo $this->Form->input('password', array('size' => 5, 'label' => false));
echo $this->Form->end('Kirjaudu');

} else {
	debug($user);
}

?>
</div>