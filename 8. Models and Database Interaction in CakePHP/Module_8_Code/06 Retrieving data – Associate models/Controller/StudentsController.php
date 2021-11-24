<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student','ObtainedMark');
	public function index(){
		$student_record = $this->Student->find('all',array(
												'conditions' => array(
															'Student.roll_no' => '1'
															)
													)
												);
		echo '<pre>';
		print_r($student_record);
		
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
var $uses = array("Student","ObtainedMark");

public function index(){
	$student_record = $this->Student->find('all',array('conditions' => array('Student.roll_no' => '1')));

echo '<pre>';
print_r($student_record);
}

}

?>