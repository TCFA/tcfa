<table class="players-table">
	<tr class="table-header">
		<th><?php echo __('Etunimi') ?></th>
		<th><?php echo __('Sukunimi') ?></th>
		<th><?php echo __('Koulu') ?></th>
		<th><?php echo __('Numero') ?></th>
		<th><?php echo __('Pelipaikka') ?></th>
		<th><?php echo __('Kaudet') ?></th>
		<!--<th><?php echo __('Synt. vuosi') ?></th>
		<th><?php echo __('Koulu') ?></th>
		<th><?php echo __('Numero') ?></th>
		<th><?php echo __('Pelipaikka') ?></th>
		<th><?php echo __('Pituus') ?></th>
		<th><?php echo __('Paino') ?></th>
		<th><?php echo __('Muut seurat') ?></th>-->
	</tr>
	<?php
		if ( !empty($players) ) {
			foreach ($players as $player) {
				echo '<tr class="player-row">';
				echo '<td>' . (!empty($player['Player']['first_name']) ? $player['Player']['first_name'] : '-') . '</td>';
				echo '<td>' . (!empty($player['Player']['last_name']) ? $player['Player']['last_name'] : '-') . '</td>';
				//echo '<td>' . (!empty($player['Player']['birth_year']) ? $player['Player']['birth_year'] : '-') . '</td>';
				echo '<td>' . (!empty($player['Player']['school']) ? $player['Player']['school'] : '-') . '</td>';
				echo '<td>' . (!empty($player['Player']['number']) ? $player['Player']['number'] : '-') . '</td>';
				echo '<td>' . (!empty($player['Player']['position']) ? $player['Player']['position'] : '-') . '</td>';
				//echo '<td>' . (!empty($player['Player']['height']) ? $player['Player']['height'] : '-') . '</td>';
				//echo '<td>' . (!empty($player['Player']['weight']) ? $player['Player']['weight'] : '-') . '</td>';
				echo '<td>' . (!empty($player['Player']['seasons']) ? $player['Player']['seasons'] : 'R') . '</td>';
				//echo '<td>' . (!empty($player['Player']['former_teams']) ? $player['Player']['former_teams'] : '-') . '</td>';
				echo '</tr>';
				
			}
		} else {
			echo '<tr><td class="empty" colspan="5">' . __('Ei pelaajia') . '</td></tr>';
		}
	?>
</table>