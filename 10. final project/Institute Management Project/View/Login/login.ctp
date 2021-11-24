<div style="margin: 0px auto; width:450px;height:250px; border:solid 1px">

<?php 

echo $this->Form->create('User');

echo $this->Form->input('username', array(
					'label' => 'User Name: ' ,
					 'id'=>'username',
					 'type' => 'text',
					'style' => 'margin:10px;padding:10px;width:150px',
					));
					
echo $this->Form->input('password', array(
					'label' => 'Password: ' ,
					 'id'=>'password',
					'style' => 'margin:10px;padding:10px;width:150px',
					));
					
echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
							'class' => 'button_class',
							'style' => 'margin:10px;padding:10px;float:left',
									)
						);			
echo $this->Form->end(); //End form					

?>
</div>