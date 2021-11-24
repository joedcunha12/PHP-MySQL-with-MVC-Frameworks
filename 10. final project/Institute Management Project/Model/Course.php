<?php 
class Course extends AppModel{
	public $name = 'course';
	public $primaryKey = 'course_id';
	
	public $validate = array(
				'course_name' => array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Course Name is mandatory'
					),
				),
				'course_fees' =>array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Course fees is mandatory'
					),
				),
				'duration' =>array(
					'NoEmpty_rule' => array(
						'rule' => 'notEmpty',
						'message' => 'Course duration is mandatory',
						'allowEmpty' => true
					),					
				),				
	);
	
}//end of class
?>