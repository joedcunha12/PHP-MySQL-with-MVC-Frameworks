<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	var $helpers = array('Form','Time');
	
	public function index(){
		$this->set('title','Student Details');
		$this->layout = 'plain_layout';
		$student_record = $this->Student->find('all');
		$this->set('student_record',$student_record);
		
	}//end of index
	
	public function student_details(){
		/*
		This function handles both, adding new record and updating existing record.
		If roll_no is passed in URL using the query string param then we will load 
		the student record with the roll no. The record will be set to the 
		$this->request->data variable. This will automatically set the ID field in 
		the variable and hence the save() operation will UPDATE the data. If no student 
		record found then a blank form with no ID field set is displayed. Hence if we 
		perform a save() on this then data will be inserted into the table.
		*/
		$this->set('title','Add/Edit Student');
		$this->layout = 'plain_layout';
		
		//get roll_no from query string param
		if(isset($this->request->query['roll_no'])){
			$roll_no = $this->request->query['roll_no'];			
		}else{
			$roll_no=0;
		}

		
		if($this->request->is('post')){
			//set the record to model for validation
			$this->Student->set($this->request->data);
			//validate the record
			if($this->Student->validates()){
				//save only if validated
				$this->Student->save($this->request->data);				
				$roll_no = $this->Student->id;
				$this->Session->setFlash('Data saved successfully');
			}else{
				$this->render();
			}
		}//end of is(post)
		
		//Load student record only if roll_no is set. 
		//Record will be updated in the table if $this->requst->data[id] is populated
		//otherwise new record will be added
		
		if($roll_no > 0){
			$this->request->data = $this->Student->find('first', array(
																'conditions' => array('roll_no' => $roll_no)
																)
														);
		}//end of if
	}//end of add
	
	public function delete(){
		$this->set('title','Add Student');
		$this->layout = 'plain_layout';
		
		$roll_no = 0;
		//get roll_no from query string param
		$roll_no = $this->request->query['roll_no'];
		if($this->request->is('post')){
			if($this->Student->delete($roll_no)){
				$this->Session->setFlash("Student record deleted!!");
				$this->set('deleted','Y');//set this field as a check so that we can hide the delete button in the form
			}else{
				$this->Session->setFlash("Cannot delete student record, please try later!!");
			}
		}else{
			$this->Session->setFlash("You are about to delete student :$roll_no. Please confirm delete" );
		}
	}
}//End of StudentsController class
?>