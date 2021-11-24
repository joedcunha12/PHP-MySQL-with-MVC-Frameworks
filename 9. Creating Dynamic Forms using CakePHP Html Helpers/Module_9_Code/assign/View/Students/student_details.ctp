<style>
.error-message{
	color:red;
}

label{
	display:block;
}
</style>
<?php 
echo $this->Form->create('Student',array('type' => 'post')); //Start form

echo $this->Form->input('roll_no', array(
					'label' => 'Roll No: ' ,
					 'id'=>'roll_no',
					 'type' => 'text',
					'style' => 'margin:10px;padding:10px',
					'readonly' => true,
					));
					
echo $this->Form->input('name', array(
					'label' => 'Student Name: ' ,
					 'id'=>'name',
					'title' => 'Enter student name',
					'style' => 'margin:10px;padding:10px',
					'required' => false,
					));

echo $this->Form->input('date_of_birth',array(
							'label' => 'Birth Date: ',
							'id' => 'date_of_birth',
							'style' => 'margin:10px;padding:10px',
							'dateformat' => 'DMY',
							'minDate' => '-100y',
							'maxDate' => '-3y',
							'required' => false,
										)
						);
echo $this->Form->input('contactno',array(
							'label' => 'Mobile no: ',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
									));
echo $this->Form->input('email',array(
							'label' => 'Email: ',
							'id' => 'email',
							'style' => 'margin:10px;padding:10px;',
							'required' => false,
									)
						);

echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
							'class' => 'button_class',
							'style' => 'margin:10px;padding:10px;float:left',
									)
						);			
echo $this->Html->link('Back to list',array('action' => 'index'));
echo $this->Form->end(); //End form
?>