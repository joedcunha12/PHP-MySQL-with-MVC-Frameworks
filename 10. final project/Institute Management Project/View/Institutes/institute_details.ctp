<?php 
if(isset($this->request->data['Institute']['institute_id'])){
	echo "<h3 style='text-align:center'>Edit Institute Details</h3>";
}else{
	echo "<h3 style='text-align:center'>Add Institute Details</h3>";
}

echo $this->Form->create('Institute',array('type' => 'post')); //Start form

echo $this->Form->input('institute_id', array(
					'label' => 'Institute ID: ' ,
					 'id'=>'institute_id',
					'style' => 'margin:10px;padding:10px',
					'readonly' => true,
					));
					
echo $this->Form->input('institute_name', array(
					'label' => 'Institute Name: ' ,
					 'id'=>'institute_name',
					'title' => 'Enter Institute name',
					'style' => 'margin:10px;padding:10px',
					'required' => false,
					));

echo $this->Form->input('institute_type',array(
							'label' => 'Institute Type: ',
							'id' => 'duration',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
										)
						);
echo $this->Form->input('institute_code',array(
							'label' => 'Institute Code: ',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
									));

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