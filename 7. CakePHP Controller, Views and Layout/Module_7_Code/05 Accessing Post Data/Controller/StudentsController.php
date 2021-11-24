<!-- <?php
class StudentsController extends AppController{
	public function display(){
		$var1 = '';
		$var2 = '';
		$var3 = '';
		
		if($this->request->is('post')){ //check if data is posted
			$var1 = $this->request->data['name'];
			$var2 = $this->request->data['email'];
			$var3 = $this->request->data['contactno'];
		}//end of is('post')
		
		//make data available for view
		$this->set('student_name',$var1);
		$this->set('student_email',$var2);
		$this->set('student_contact',$var3);

	}//end of display

	public function index(){
		echo "Students index function";
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	public function display(){
		$var1 = '';
		$var2 = '';
		$var3 = '';

		if($this->request->is("post")){
			$var1 = $this->request->data['name'];
			$var2 =$this->request->data['email'];
			$var3 =$this->request->data['contactno'];
		}

		$this->set("student_name",$var1);
		$this->set("student_email",$var2);
		$this->set("student_contact",$var3);
	}

	public function index(){
		echo "student index function";
	}
}
?>