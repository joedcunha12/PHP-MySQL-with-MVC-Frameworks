<?php
class UsersController extends AppController{
	var $uses = array('User');
	var $helpers = array('Form');
	
	public function index(){
		$this->set('title','User Details');
		$user_record = $this->User->find('all');
		$this->set('user_record',$user_record);
		
	}//end of index
	
	public function user_details(){

		$this->set('title','Add/Edit User');
		
		//get user_id from query string param
		if(isset($this->request->query['user_id'])){
			$user_id = $this->request->query['user_id'];			
		}else{
			$user_id=0;
		}
		
		if($this->request->is('post')){
			//set the record to model for validation
			$this->User->set($this->request->data);
			//validate the record
			if($this->User->validates()){
				//save only if validated
				$this->User->save($this->request->data);				
				$user_id = $this->User->id;
				$this->Session->setFlash('Data saved successfully');
			}else{
				$this->render();
			}
		}//end of is(post)
		
		//Load user record only if user_id is set. 
		//Record will be updated in the table if $this->requst->data[id] is populated
		//otherwise new record will be added
	
		if($user_id > 0){
			$this->request->data = $this->User->find('first', array(
																'conditions' => array('user_id' => $user_id)
																)
														);		
		}//end of if
		
	}//end of add
	
	public function delete(){
		$this->set('title','Add User');
		//$this->layout = 'plain_layout';
		
		$user_id = 0;
		//get user_id from query string param
		$user_id = $this->request->query['user_id'];
		if($this->request->is('post')){
			if($this->User->delete($user_id)){
				$this->Session->setFlash("User record deleted!!");
				$this->set('deleted','Y');//set this field as a check so that we can hide the delete button in the form
			}else{
				$this->Session->setFlash("Cannot delete user record, please try later!!");
			}
		}else{
			$this->Session->setFlash("You are about to delete user :$user_id. Please confirm delete" );
		}
	}
}//End of UsersController class
?>