<div class="row">
	<?php echo $this->Html->image('headeri241.png') ?>
</div>
<div class="row">
<div id="nav" class="eightcol">
<ul>
<li><?php echo $this->Html->link(__('Etusivu'), array('controller' => 'tcfa', 'action' => 'index')) ?></li>
<li><?php echo $this->Html->link(__('Joukkueet'), array('controller' => 'teams', 'action' => 'index')) ?></li>
<li><?php echo $this->Html->link(__('TCFA ry'), array('controller' => 'tcfa', 'action' => 'about')) ?></li>
<li><?php echo $this->Html->link(__('Laji'), array('controller' => 'tcfa', 'action' => 'sport')) ?></li>
<li><?php echo $this->Html->link(__('Yhteystiedot'), array('controller' => 'tcfa', 'action' => 'contact')) ?></li>
</ul>
</div>
	<div class="fourcol last">
		<?php 
			if ( AuthComponent::user('id') ) {
				echo '<div class="logged-in">';
				echo '<span id="username">'.AuthComponent::user('username').'</span>';
				echo $this->Html->link(__('Kirjaudu ulos'), array('controller' => 'users', 'action' => 'logout'));
				echo '</div>';
			} else {
				echo '<div class="login-link">';
				echo $this->Html->link(__('Kirjaudu sisään'), array('controller' => 'users', 'action' => 'login'));
				echo '</div>';
			}
		?>
 	</div>

</div>