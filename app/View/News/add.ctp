<?php

echo '<h1>' . __('Luo uutinen') . '</h1>';

$this->TinyMCE->editor(array('theme' => 'advanced', 'mode' => 'textareas'));
echo $this->Form->create('News');
echo $this->Form->input('subject');
echo $this->Form->input('content');
echo $this->Form->input('user_id', array('type' => 'hidden', 'default' => 1));
echo $this->Form->end(__('Tallenna'));