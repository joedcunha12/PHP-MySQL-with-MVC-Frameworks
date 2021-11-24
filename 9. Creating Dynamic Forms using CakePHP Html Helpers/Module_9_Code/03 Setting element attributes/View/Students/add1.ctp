<?php
echo $this->Form->create('Student');

echo $this->Form->input('roll_no');
echo $this->Form->input('name',array(
    'label' => 'Student Name: ' ,
    'id' => 'name',
    'title' => 'Enter Student name',
    'style' => 'margin:10px;padding:10px'
));

echo $this->Form->input('admission_date',array(
    'label' => 'Admission Date ' ,
    'id' => 'Admission_date',
    'style' => 'margin:10px;padding:10px',
    'dateformat' => 'DMY',
    )
);
echo $this->Form->input('contactno',array(
    'label' => 'Mobile no: ' ,
    'style' => 'margin:10px;padding:10px'
));

echo $this->Form->input('is_active',array(
    'label' => 'Student record active: ' ,
    'id' => 'is_active',
    'style' => 'margin:10px;padding:10px'
));

echo $this->Form->input('Add Student',array(
    'label' => false,
    'id' => 'submit_button',
    'type' => 'submit',
    'class' => 'button_class'
));

echo $this->Form->end();
?>