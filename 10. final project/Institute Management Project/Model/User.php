<?php 
class User extends AppModel{
	public $name = 'user';
	public $primaryKey = 'user_id';
	
	public $validate = array(
				'username' => array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Name is mandatory'
					),
				),
				'password' =>array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Password is required'
					),
					'MinLength' =>array(
						'rule' => array('minLength' , 8),
						'message' => 'Minimum Password length is 8'
					),					
				),
				'email_id' =>array(
					'email_id_rule' =>array(
						'rule' => 'email',
						'message' => 'Please enter valid email ID',
						'allowEmpty' => true
					),					
				),				
	);
	
}//end of class
?>