<!-- <?php 

echo $this->Form->create('Student'); //Start form

//set submit button properties
$options = array ('label'=>'Update',
				  'div' => array('class' => 'blue_button')
				  );
echo $this->Form->end($options); //End form

?> -->

<?php
echo $this->Form->create('Student');

$options = array('label'=>'Update',
'div' => array('class' => 'blue_button'));

echo $this->Form->end($options);


?>