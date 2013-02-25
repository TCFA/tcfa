<h1><?php echo __('Joukkueet') ?></h1>
<div class="teams-container">
	<div class="teams-text">
		<p>Kaudella 2013 TCFA osallistuu <a href="http://www.sajl.fi/sarjat/korkeakoulujenkkifutis/">SAJL:n korkeakoulusarjaan</a>
			kahden joukkueen voimin.</p>
		<p><strong class="team-name"><?php echo $this->Html->link('TCFA Titans', array('action' => 'titans')); ?></strong> koostuu Tampereen yliopiston ja Tampereen ammattikorkeakoulun opiskelijoista.</p>
		<p><strong class="team-name"><?php echo $this->Html->link('Tampere Tech Mavericks', array('action' => 'mavericks')); ?></strong> on puolestaan Tampereen teknillisen yliopiston oma joukkue.</p>
		<div class="team-images">
		<?php
			echo '<div class="team-image-link">';
			echo $this->Html->image('titans_shield_250_2.png', array(
				'url' => array('controller' => 'teams', 'action' => 'titans')
				)
			);
			echo '</div>';
			echo '<div class="team-image-link">';
			echo $this->Html->image('mavericks_300.png', array(
				'url' => array('controller' => 'teams', 'action' => 'mavericks'),
				)
			);
			echo '</div>';
		?>
		</div>
	</div>
</div>