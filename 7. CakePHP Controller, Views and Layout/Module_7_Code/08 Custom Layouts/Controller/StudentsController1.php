<!-- <?php
class StudentsController1 extends AppController{

    public function display(){
		$var1 = '';
		$var2 = '';
		$var3 = '';
		
		if($this->request->is('post')){ //check if data is posted
			$var1 = $this->request->data['name'];
			$var2 = $this->request->data['email'];
			$var3 = $this->request->data['contactno'];
		}//end of is('post')
		
		$this->set('student_name',$var1);
        $this->set('student_email',$var2);
        $this->set('student_contact',$var3);

        $this->set('title','Student Home');
    $this->layout = 'custom_layout';
	}//end of display

    public function index(){
        $this->title = 'Home page';
        $this->layout = 'custom_layout';
    }

?> -->
