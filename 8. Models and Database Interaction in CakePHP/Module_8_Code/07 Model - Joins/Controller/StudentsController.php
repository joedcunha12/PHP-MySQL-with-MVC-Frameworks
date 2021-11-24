<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student','ObtainedMark');
	public function index(){
		
		$options['joins'] = array(
			array(
				'table' => 'student_courses',
				'alias' => 'StudentCourse',
				'type' => 'LEFT',
				'conditions' => 'Student.roll_no = StudentCourse.roll_no'
			)
		);
		
		$options['fields'] = array('StudentCourse.*','Student.*');
		
		$student_record = $this->Student->find('all',$options);
		echo '<pre>';
		print_r($student_record);
		
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	var $uses = array("Student","ObtainedMark");

	public function index(){
		$options['joins'] = array(
			array(
				'table' => 'student_courses',
				'alias' => 'StudentCourse',
				'type' => 'LEFT',
				'conditions' => 'Student.roll_no = StudentCourse.roll_no'
			)
			);

			$options['fields'] = array('StudentCourse.*','Student.*');

			$student_record = $this->Student->find('all',$options);
			echo '<pre>';
			print_r($student_record);
	}


}
?>