<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function index(){
		// $students_record = $this->Student->find('count',array(
		// 									'conditions'=>array('roll_no >' => '5')));
		// $this->set('students_record',$students_record);

$students_record = $this->Student->find('count',array('conditions'=>array('roll_no >' => '5')));
$this->set('students_record',$students_record);


	}//end of index
}//End of StudentsController class
?>