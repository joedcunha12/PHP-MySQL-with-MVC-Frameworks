<!-- <?php
class InstitutesController extends AppController{

	public function index(){
		$this->set('institute_name','Edureka');
	}//end of index

	public function add(){
		$institute = array("institute_id"=>"1",
						   "institute_name" => "Edureka");
		$this->set('institute_array',$institute);
	}//end of add

}//End of InstitutesController class
?> -->

<?php
class InstituteController extends AppController {
	public function index () {
		$this->set('institute_name','Edureka');
	}
	public function add(){
		$institute = array("institute_id"=>"1",
		"institute_name"=> "Edureka");
		$this->set('institute_array',$institute);
	}
}

?>