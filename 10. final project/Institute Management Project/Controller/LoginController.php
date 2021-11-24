<?php 
class LoginController extends AppController{
	var $uses = array('User');
	var $components = array('Session');
	
	public function login(){
		
		//Check if user has an active login session. If yes then redirect to home page
		$this->set('title','IMS - Login');
		//Here we are just checking if there is an active user session available.
		//if yes then automatically redirect to the home page
		if($this->Session->check('user_id')){
			$this->redirect(array('controller' => 'home', 'action' => 'index'));
		}
		
		if($this->request->is('post')){
			$user_name = $this->request->data['User']['username'];
			$pwd = $this->request->data['User']['password'];
			
			$user_record = $this->User->find('first',array('conditions' => array(
																'username' => $user_name , 
																'password' => $pwd)));
			
			//check if the result is empty. 
			//if empty means no record found in DB matching with the uname and passwd
			if(!empty($user_record)){
				//set the session variable to be read in other controller
				$this->Session->write('user_id',$user_record['User']['user_id']);
				$this->Session->write('user_name',$user_record['User']['username']);
				//Redirect to home page
				$this->redirect(array('controller' => 'home', 'action' => 'index'));
			}else{
				//
				$this->Session->setFlash("Login Failed!!");
			}
		}
	}//end of login function
	
	public function logout(){
		$this->Session->delete('user_id');
		$this->Session->delete('user_name');
		$this->redirect(array('action' => 'login'));
	}
}//end of class
?>