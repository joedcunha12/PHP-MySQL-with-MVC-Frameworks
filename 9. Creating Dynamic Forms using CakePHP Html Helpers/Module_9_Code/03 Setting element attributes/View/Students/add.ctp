<?php 
echo $this->Form->create('Student'); //Start form

echo $this->Form->input('roll_no');
echo $this->Form->input('name', array(
					'label' => 'Student Name: ' ,
					 'id'=>'name',
					'title' => 'Enter student name',
					'style' => 'margin:10px;padding:10px'
					));

echo $this->Form->input('admission_date',array(
							'label' => 'Admission Date: ',
							'id' => 'admission_date',
							'style' => 'margin:10px;padding:10px',
							'dateformat' => 'DMY',
										)
						);
echo $this->Form->input('contactno',array(
							'label' => 'Mobile no: ',
							'style' => 'margin:10px;padding:10px',
									));
echo $this->Form->input('is_active',array(
							'label' => 'Studet record active: ',
							'id' => 'is_active',
							'style' => 'margin:10px;padding:10px',
									)
						);
				  
echo $this->Form->input('Add Student',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
							'class' => 'button_class',
									)
						);				  
echo $this->Form->end(); //End form
?>