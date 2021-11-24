<!-- <?php
class StudentsController extends AppController{
	public function index(){
		//Change layout using the layout file name without extension
		$this->title = 'Home Page';
		//Set the layout
		$this->layout = 'custom_layout';//
	}//end of index

}//End of StudentsController class
?> -->

<?php
class StudentsController extends AppController{
	public function index(){
		$this->title = 'Home Page';
		$this->layout = 'custom_layout';
	}
}
?>