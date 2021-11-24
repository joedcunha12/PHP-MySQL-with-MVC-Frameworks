<?php 
if(isset($this->request->data['Student']['student_id'])){
	echo "<h3 style='text-align:center'>Edit Student Details</h3>";
}else{
	echo "<h3 style='text-align:center'>Add Student Details</h3>";
}
echo $this->Form->create('Student',array('type' => 'post')); //Start form

echo $this->Form->input('student_id', array(
					'label' => 'Student ID: ' ,
					 'id'=>'student_id',
					 'type' => 'text',
					'style' => 'margin:10px;padding:10px',
					'readonly' => true,
					));
					
echo $this->Form->input('student_name', array(
					'label' => 'Student Name: ' ,
					 'id'=>'student_name',
					'title' => 'Enter student name',
					'style' => 'margin:10px;padding:10px',
					'required' => false,
					));

echo $this->Form->input('address',array(
							'label' => 'Address: ',
							'id' => 'address',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
										)
						);
echo $this->Form->input('contact_no',array(
							'label' => 'Mobile no: ',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
									));
echo $this->Form->input('email_id',array(
							'label' => 'Email: ',
							'type' => 'text',
							'id' => 'email',
							'style' => 'margin:10px;padding:10px;',
							'required' => false,
									)
						);

echo $this->Form->input('course_id',array(
							'label' => 'Course Name: ',
							'type' => 'select',
							'options' => $course_list,
							'id' => 'course_id',
							'empty' => '---Please select---',
							'style' => 'margin:10px;padding:10px;',
							'required' => false,
									)
						);						
						
echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
							'class' => 'button_class',
							'style' => 'margin:10px;padding:10px;',
									)
						);			
echo $this->Html->link('Back to list',array('action' => 'index'));
echo $this->Form->end(); //End form
?>