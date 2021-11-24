<!-- <?php
class InstitutesController extends AppController{
	
	public function index(){
		//Redirects to students controller and calls the add action 
		$this->redirect(array('controller'=>'students','action'=>'add'));
	}//end of index

	public function redirect_ext(){
		//redirects to external website
		$this->redirect('http://www.edureka.co');
	}

}//End of InstitutesController class
?> -->

<?php
class InstitutesController extends AppController {
	public function index(){
		$this->redirect(array("controller"=>"students","action"=>'add'));
	}

	public function redirect_ext(){
		$this->redirect("http://www.edureka.co");
	}
}
?>