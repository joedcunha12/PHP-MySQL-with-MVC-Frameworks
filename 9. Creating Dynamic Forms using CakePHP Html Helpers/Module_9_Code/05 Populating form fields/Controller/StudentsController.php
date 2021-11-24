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
		//Load the record and move data in request object to auto populate in the form
		//Fields in $this->request->data automatically mapped to the fields in teh form
		//using name. Extra fields which are not present in the request->data object or 
		//in the form are ignored. 
		$this->request->data = $this->Student->find('first', array(
															'conditions' => array('roll_no' => $student_id)
															)
													);
	}//end of add
	
}//End of StudentsController class
?>