<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student');
	var $helpers = array('Form');
	
	public function index(){
		
	}//end of index
	
	public function add(){
		$this->set('title','Add Student');
		$this->layout = 'custom_layout';
	}//end of add
	
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	var $helpers = array('Form');

	public function index(){

	}

	public function add(){
		$this->set('title','Add Student');
		$this->layout = 'custom_layout';
	}
}
?>