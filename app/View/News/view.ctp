<?php
echo '<div class="back-link">';
echo '&larr;' . $this->Html->link(__('Takaisin'), $referer);
echo '</div>';
echo '<h1>'. $news['News']['subject'].'</h1>';
echo '<div class="text-content">';
echo '<div class="news-info">';
echo '<div class="created">'.$news['News']['created'].'</div>';
echo '<div class="writer">'. __('Kirjoittanut').': '.$news['User']['username'].'</div>';
echo '</div>';
echo '<div class="news-content">';
echo $news['News']['content'];
echo '</div>';
echo '</div>';
