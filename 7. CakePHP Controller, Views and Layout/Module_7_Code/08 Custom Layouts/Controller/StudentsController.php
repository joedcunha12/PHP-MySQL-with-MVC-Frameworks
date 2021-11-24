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
		
		$this->set('title' , 'Student Information');
		$this->layout = 'custom_layout';//
	}//end of display

	public function index(){
		//Change layout using the layout file name without extension
		$this->title = 'Home Page';
		$this->layout = 'custom_layout';//
	}//end of index
}//End of StudentsController class
?> -->
