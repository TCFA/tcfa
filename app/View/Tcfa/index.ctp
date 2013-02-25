<h1><?php echo __('Tervetuloa')?> </h1>
<div class="frontpage-text">
<p><strong>Tampere Collegiate Football Association</strong> on tamperelaisten korkeakoulujen amerikkalaisen jalkapallon parissa toimiva yhdistys.</p>
<p>Korkeakoulujenkkifutiksessa kaudella 2013 TCFA:ta edustaa kaksi joukkuetta, jotka koostuvat Tampereen teknillisen yliopiston, Tampereen yliopiston ja Tampereen ammattikorkeakoulun opiskelijoista.</p>
<p>Kaudella 2013 TCFA järjestää Tampereella 12-13.4 amerikkalaisen jalkapallon Opiskelijoiden SM-kisat.</p>
</div>
<h2><?php echo __('Uutiset')?></h2>
<div id="news-container">
<?php

foreach( $news as $item ) {
	echo '<div class="news-row" id="news-row-'.$item['News']['id'].'">';
	echo '<span class="news-date">'.$item['News']['created'].' - </span>';
	echo '<span class="news-subject">';
	echo $this->Html->link($item['News']['subject'], array(
			'controller' => 'news',
			'action' => 'view',
			$item['News']['id']
		)
	);
	echo '</span>'. "\n";
	echo '</div>'. "\n";
}
?>
</div>
