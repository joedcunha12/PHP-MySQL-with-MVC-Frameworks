<?php 
if(isset($this->request->data['Course']['course_id'])){
	echo "<h3 style='text-align:center'>Edit Course Details</h3>";
}else{
	echo "<h3 style='text-align:center'>Add Course Details</h3>";
}
echo $this->Form->create('Course',array('type' => 'post')); //Start form

echo $this->Form->input('course_id', array(
					'label' => 'Course ID: ' ,
					 'id'=>'course_id',
					'style' => 'margin:10px;padding:10px',
					'readonly' => true,
					));
					
echo $this->Form->input('course_name', array(
					'label' => 'Course Name: ' ,
					 'id'=>'course_name',
					'title' => 'Enter Course name',
					'style' => 'margin:10px;padding:10px',
					'required' => false,
					));

echo $this->Form->input('duration',array(
							'label' => 'Course Duration: ',
							'id' => 'duration',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
										)
						);
echo $this->Form->input('course_type',array(
							'label' => 'Course Type: ',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
									));
echo $this->Form->input('course_fees',array(
							'label' => 'Course Fees: ',
							'type' => 'text',
							'id' => 'course_fees',
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