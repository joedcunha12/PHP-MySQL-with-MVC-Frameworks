<?php 
class HomeController extends AppController{
	public function index(){
		//Check if user has an active login session. If yes then redirect to home page
		$this->set('title','IMS - Home');
		if(!$this->Session->check('user_id')){
			$this->redirect(array('controller' => 'login', 'action' => 'login'));
		}
	}//end of index function
}//end of class
?>