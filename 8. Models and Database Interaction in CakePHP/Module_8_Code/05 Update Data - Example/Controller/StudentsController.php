<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function add_student(){
		$student_record = array('roll_no' => '5','name' => 'R. Atkinson');
		//As we have specified the primary key roll_no in the data, 
		//following line will update the students data for roll_no = 5
		if($this->Student->save($student_record)){
			$this->Session->setFlash('Student Updated');
		}else{
			$this->Session->setFlash('Cannot save student');
		}
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function add_student(){
	$student_record = array('roll_no'=>'5','name'=> 'R.atkison');
if($this->Student->save($student_record)){
	$this->Session->setFlash("Student Updated");
} else{
	$this->Session->setFlash("cannot save student");
}

	}
		?>