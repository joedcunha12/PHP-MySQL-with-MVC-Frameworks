<!-- <?php
class OperationsController extends AppController{
	var $components = array('Cookie','Session');
	
	public function index(){
		//set cookie that will expire after 3 mins (180 sec)
		$this->Cookie->write('user_name','CrisR',false,180);
		//Create session variable
		$this->Session->write('session_var','9383983');
		//Redirect to display action
		$this->redirect(array('controller'=>'operations','action'=>'display'));

	}//end of index
	
	public function display(){
		if($this->Cookie->check('user_name')){
			$this->set('cookie_var',$this->Cookie->read('user_name'));
		}else{
			$this->set('cookie_var','');
		}
		if($this->Session->check('session_var')){
			$this->set('session_var',$this->Session->read('session_var'));
		}else{
			$this->set('session_var','');
		}		
	}//end of view
}//End of controller
?> -->

<?php
class OperationsController extends AppController{
	var $components = array('Cookie','Session');

	public function index(){
		$this->Cookie->write('user_name',"JOe",false,180);
		$this->Session->write('session_var','9383983');
		$this->redirect(array('controller'=>'operations','action'=>'display'));
	}
}

public function display(){
	if($this->Cookie->check('user_name')){
		$this->set('cookie_var',$this->Cookie->read('user_name'));

	}else{
		$this->set('cookie_var','');
	}
	if($this->Session->check('session_var')){
		$this->set('session_var',$this->Cookie->read('session_var'));

	}else{
		$this->set('session_var','');
	}

}
?>