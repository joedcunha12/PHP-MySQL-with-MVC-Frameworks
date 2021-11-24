<?php
class StudentsController extends AppController{
	var $uses = array('Student');
	var $helpers = array('Form');
	
	public function index(){
	
	}//end of index
	
	public function add(){
		$this->set('title','Add Student');
		$this->layout = 'plain_layout';
		
		$select_options = array(
							'S'=>'SELF', 
							'SP' => 'SPOUSE', 
							'C' => 'CHILD' , 
							'F' => 'FATHER', 
							'M' => 'MOTHER');
		
		$this->set('select_options',$select_options);
		if($this->request->is('post')){
			echo '<pre>';
			print_r($this->request->data);
		}
	}//end of add
}//End of StudentsController class
?>