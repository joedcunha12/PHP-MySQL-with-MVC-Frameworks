<!-- <?php 
echo $this->Form->create('Student'); //Start form

echo $this->Form->input('roll_no');
echo $this->Form->input('name');
echo $this->Form->input('admission_date');
echo $this->Form->input('contactno');
echo $this->Form->input('is_active');

$options = array ('label'=>'Update',
				  'div' => array('class' => 'blue_button')
				  );
echo $this->Form->end($options); //End form

?> -->

<?php
echo $this->Form->create('Student');

echo $this->Form->input('roll_no');
echo $this->Form->input('name');
echo $this->Form->input('admission_date');
echo $this->Form->input('contactno');
echo $this->Form->input('is_active');

$options = array('label' => 'Update',
'div' => array('class' => 'blue_button'));
?>