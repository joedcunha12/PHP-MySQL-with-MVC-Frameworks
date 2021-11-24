<?php 
if(isset($this->request->data['User']['user_id'])){
	echo "<h3 style='text-align:center'>Edit User Details</h3>";
}else{
	echo "<h3 style='text-align:center'>Add User Details</h3>";
}

echo $this->Form->create('User',array('type' => 'post')); //Start form

echo $this->Form->input('user_id', array(
					'label' => 'User ID: ' ,
					 'id'=>'user_id',
					'style' => 'margin:10px;padding:10px',
					'readonly' => true,
					));
					
echo $this->Form->input('username', array(
					'label' => 'User Name: ' ,
					 'id'=>'user_name',
					'title' => 'Enter User name',
					'style' => 'margin:10px;padding:10px',
					'required' => false,
					));

echo $this->Form->input('password',array(
							'label' => 'Password: ',
							'id' => 'password',
							'style' => 'margin:10px;padding:10px',
							'required' => false,
										)
						);
echo $this->Form->input('email_id',array(
							'label' => 'User Email: ',
							'type' => 'text',
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