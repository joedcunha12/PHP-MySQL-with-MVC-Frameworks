<?php
class InstitutesController extends AppController{
	var $uses = array('Institute');
	var $helpers = array('Form');
	
	public function index(){
		$this->set('title','Institute Details');
		$institute_record = $this->Institute->find('all');
		$this->set('institute_record',$institute_record);
		
	}//end of index
	
	public function institute_details(){

		$this->set('title','Add/Edit Institute');
		
		//get institute_id from query string param
		if(isset($this->request->query['institute_id'])){
			$institute_id = $this->request->query['institute_id'];			
		}else{
			$institute_id=0;
		}

		if($this->request->is('post')){
			//set the record to model for validation
			$this->Institute->set($this->request->data);
			//validate the record
			if($this->Institute->validates()){
				//save only if validated
				$this->Institute->save($this->request->data);
				$institute_id = $this->Institute->id;
				
				$this->Session->setFlash('Data saved successfully');
			}else{
				$this->render();
			}
		}//end of is(post)
		
		//Load institute record only if institute_id is set. 
		//Record will be updated in the table if $this->requst->data[id] is populated
		//otherwise new record will be added
		
		if($institute_id > 0){
			$this->request->data = $this->Institute->find('first', array(
																'conditions' => array('institute_id' => $institute_id)
																)
														);		
		}//end of if
		
	}//end of institute_details
	
	public function delete(){
		$this->set('title','Add Institute');
		
		$institute_id = 0;
		//get institute_id from query string param
		$institute_id = $this->request->query['institute_id'];
		if($this->request->is('post')){
			if($this->Institute->delete($institute_id)){
				$this->Session->setFlash("Institute record deleted!!");
				//set this field as a check so that we can hide the delete button in the form
				$this->set('deleted','Y');
			}else{
				$this->Session->setFlash("Cannot delete institute record, please try later!!");
			}
		}else{
			$this->Session->setFlash("You are about to delete institute :
										$institute_id. Please confirm delete" );
		}//end of is(post)
	}//end of delete()
}//End of InstitutesController class
?>