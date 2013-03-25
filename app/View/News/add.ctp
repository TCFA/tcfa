<?php

echo '<h1>' . __('Luo uutinen') . '</h1>';

$this->TinyMCE->editor(array('theme' => 'simple', 'mode' => 'textareas'));
echo $this->Form->create('News');
echo $this->Form->input('subject', array('label' => __('Otsikko')));
echo $this->Form->input('content', array('label' => __('Uutinen')));
echo $this->Form->input('user_id', array('type' => 'hidden', 'default' => $this->Session->read('Auth.User.id')));
echo $this->Form->end(__('Tallenna'));