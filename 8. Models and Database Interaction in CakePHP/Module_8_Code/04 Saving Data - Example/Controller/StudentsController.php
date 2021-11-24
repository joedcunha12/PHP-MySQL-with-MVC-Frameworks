<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function add_student(){
		$student_record = array(
							'Student' => array (
								'name' => 'new student',
								'email' => 'ns@gmail.com',
								'contactno' => '938393839'
							)
						);	
		
		if($this->Student->save($student_record)){
			$new_id = $this->Student->id;
			$this->Session->setFlash('Student Saved - New student ID is ' . $new_id);
		}else{
			$this->Session->setFlash('Cannot save new student');
		}
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function add_student(){
		$student_record = array(
			'student' => array (
				'name' => 'new student',
				'email' => 'ns@gmail.com',
				'contactno' => '45757847565'
			)
			);

			if($this->Student->save($student_record)){
				$new_id = $this->Student->id;
				$this->Session->setFlash('Student Saved - new student ID is ' . $new_id);
			} else{
				$this->Session->setFlash('Cannot save new student');
			}
	}
}
?>