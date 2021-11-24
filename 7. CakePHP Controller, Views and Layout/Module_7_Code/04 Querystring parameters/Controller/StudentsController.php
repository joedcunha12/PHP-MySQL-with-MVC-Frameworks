<!-- <?php
class StudentsController extends AppController{
	public function display(){
		//URL: http://localhost/students/add?student_id=23&student_name=John
		$var1 = $this->request->query('student_id');
		$var2 = $this->request->query('student_name');
		//Make available for view
		$this->set('var1',$var1);
		$this->set('var2',$var2);
	}//end of display

	public function index(){
		echo "Students index function";
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	public function display(){
		$var1 = $this->request->query('student_id');
		$var2 = $this->request->query('student_name');

		$this->set('var1',$var1);
		$this->set('var2',$var2);
	}
	public function index(){
		echo "Students index function";
	}
}
?>