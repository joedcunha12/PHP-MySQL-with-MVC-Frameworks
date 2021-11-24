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
			//set the record to model for validation
			$this->Student->set($this->request->data);
			//validate the record
			if($this->Student->validates()){
				//save only if validated
				$this->Student->save($this->request->data);				
				$student_id = $this->Student->id;
				$this->Session->setFlash('Data saved successfully');
			}else{
				$this->render();
			}
		}//end of is(post)
		
		//Load the record and move data in request object to auto populate in the form
		$this->request->data = $this->Student->find('first', array(
															'conditions' => array('roll_no' => $student_id)
															)
													);
	}//end of add
	
}//End of StudentsController class
?>