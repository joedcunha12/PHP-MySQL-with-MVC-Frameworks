<?php 
class Student extends AppModel{
	public $name = 'student';
	public $primaryKey = 'roll_no';
	
	public $validate = array(
				'name' => array(
					'NoEmpty' => array(
						'rule' => 'notEmpty',
						'message' => 'Name is mandatory'
					),
					'MinLength' =>array(
						'rule' => array('minLength' , 5),
						'message' => 'Minimum Name length is 5'
					),
				),
				'contactno' =>array(
					'NoEmpty' => array(
						'rule' => 'notEmpty',
						'message' => 'Mobile No is required'
					),
					'MinLength' =>array(
						'rule' => array('minLength' , 10),
						'message' => 'Minimum mobile no length is 10'
					),					
				),
                'email' =>array(
					'email_id_rule' => array(
						'rule' => 'email',
						'message' => 'email id is required'
                    ),
				),
	);
	
}//end of class
?> 