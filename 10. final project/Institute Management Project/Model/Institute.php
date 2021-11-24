<?php 
class Institute extends AppModel{
	public $name = 'institute';
	public $primaryKey = 'institute_id';
	
	public $validate = array(
				'institute_name' => array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Institute Name is mandatory'
					),
				),
				'institute_code' =>array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Institute code is mandatory'
					),
				),
	);
	
}//end of class
?>