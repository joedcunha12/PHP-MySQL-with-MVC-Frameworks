<?php
echo $this->Form->create(false,array('type' => 'post')); //form with no model
//show the Confirm button only when record NOT deleted. Hide it when the
//record is deleted
if(!isset($deleted)){
	echo $this->Form->input('Confirm Delete',array('label' => false, 
												   'type' => 'submit'));
}
echo $this->Element('home_link');
echo $this->Form->end();
?>