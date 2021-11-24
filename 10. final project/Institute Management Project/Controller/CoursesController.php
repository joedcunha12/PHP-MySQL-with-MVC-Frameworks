<?php
class CoursesController extends AppController{
	var $uses = array('Course');
	var $helpers = array('Form','Time');
	
	public function index(){
		$this->set('title','Course Details');
		$course_record = $this->Course->find('all');
		$this->set('course_record',$course_record);
		
	}//end of index
	
	public function course_details(){

		$this->set('title','Add/Edit Course');
		
		//get course_id from query string param
		if(isset($this->request->query['course_id'])){
			$course_id = $this->request->query['course_id'];			
		}else{
			$course_id=0;
		}

		if($this->request->is('post')){
			//set the record to model for validation
			$this->Course->set($this->request->data);
			//validate the record
			if($this->Course->validates()){
				//save only if validated
				$this->Course->save($this->request->data);				
				$course_id = $this->Course->id;
				$this->Session->setFlash('Data saved successfully');
			}else{
				$this->render();
			}
		}//end of is(post)
		
		//Load Course record only if course_id is set. 
		//Record will be updated in the table if $this->requst->data[id] is populated
		//otherwise new record will be added
		
		if($course_id > 0){
			$this->request->data = $this->Course->find('first', array(
																'conditions' => array('course_id' => $course_id)
																)
														);		
		}//end of if
	}//end of add
	
	public function delete(){
		$this->set('title','Add Course');
		//$this->layout = 'plain_layout';
		
		$course_id = 0;
		//get course_id from query string param
		$course_id = $this->request->query['course_id'];
		if($this->request->is('post')){
			if($this->Course->delete($course_id)){
				$this->Session->setFlash("Course record deleted!!");
				$this->set('deleted','Y');//set this field as a check so that we can hide the delete button in the form
			}else{
				$this->Session->setFlash("Cannot delete Course record, please try later!!");
			}
		}else{
			$this->Session->setFlash("You are about to delete course :$course_id. Please confirm delete" );
		}
	}
}//End of CoursesController class
?>