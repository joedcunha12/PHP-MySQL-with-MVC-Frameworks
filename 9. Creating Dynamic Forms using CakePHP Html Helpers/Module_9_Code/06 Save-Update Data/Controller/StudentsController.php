<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	var $helpers = array('Form');
	
	public function index(){
		
	}//end of index
	
	public function add(){
		$this->set('title','Add Student');
		$this->layout = 'plain_layout';
		$student_id = 3;		
		if($this->request->is('post')){
			//save the record using request data
			$this->Student->save($this->request->data);
			//If we are updating the record, then the field will be already populated
			//else if new student record is added then the field will contain newly
			//created roll_no (primaryKey field)
			$student_id = $this->Student->id;
		}//end of is(post)
		
		//Load the record and move data in request object to auto populate in the form
		$this->request->data = $this->Student->find('first', array(
															'conditions' => array('roll_no' => $student_id)
															)
													);
	}//end of add
	
}//End of StudentsController class
?>