<!-- <?php
class StudentsController extends AppController{
	var $uses = array('Student');
	public function index(){
		$students_record = $this->Student->find('list',array(
											'fields'=>array('roll_no','name')));
		$this->set('students_record',$students_record);
	}//end of index
}//End of StudentsController class
?> -->


<?php
class StudentsController extends AppController{
	var $uses= array('Student');
	public function index(){
		$students_record = $this->Student->find('list',array('feilds'=>array('roll_no','name')));

		$this->set('students_record',$students_record);
	}
}
?>