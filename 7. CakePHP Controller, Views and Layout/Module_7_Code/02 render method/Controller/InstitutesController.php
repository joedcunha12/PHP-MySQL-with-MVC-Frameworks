<!-- <?php
class InstitutesController extends AppController{

	public function index(){
		$this->render('alt_index'); //loads alt_index.ctp file
	}//end of index

	public function force_render(){
		$this->set('var','Variable set before render');
		$this->render();//execution will stop here and view will be loaded
		$this->set('var1','Variable set after render'); //this is never set
	}

}//End of InstitutesController class
?> -->

<?php
class InnstitutesController extends AppController{

	public function index(){
		$this->render("alt_index");
	}
	public function force_render(){
		$this->set('var',"variable set before render");
		$this->render();
		$this->set("var1","variable set after render")
	}
}
?>