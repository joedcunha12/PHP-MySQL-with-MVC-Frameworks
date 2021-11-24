<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function index(){
		//Following line is similar to select * from students;
		//But we don't have to call anything explicitly 
		//e.g. creating connection, writing query, calling the query etc, 
		//CakePHP takes care of it
		$students_record = $this->Student->find('all');
		
		//Make the data available to the view
		$this->set('students_record',$students_record);
	}//end of index
}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	var $uses= array('Student');
	public function index(){
		$students_record = $this->Student->find('all');

		$this->set('students_record',$students_record);
	}
}
?>