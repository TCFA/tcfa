<div class="row">
	<?php echo $this->Html->image('headeri241.png') ?>
</div>
<div class="row">
<div id="nav" class="sevencol">
<ul>
<li><?php echo $this->Html->link(__('Etusivu'), array('controller' => 'tcfa', 'action' => 'index')) ?></li>
<li><?php echo $this->Html->link(__('Joukkueet'), array('controller' => 'teams', 'action' => 'index')) ?></li>
<li><?php echo $this->Html->link(__('TCFA ry'), array('controller' => 'tcfa', 'action' => 'about')) ?></li>
<li><?php echo $this->Html->link(__('Laji'), array('controller' => 'tcfa', 'action' => 'sport')) ?></li>
<li><?php echo $this->Html->link(__('Yhteystiedot'), array('controller' => 'tcfa', 'action' => 'contact')) ?></li>
</ul>
</div>
	<div class="fivecol last">
		<?php /* echo $this->element('login-form') */ ?>
 	</div>

</div>