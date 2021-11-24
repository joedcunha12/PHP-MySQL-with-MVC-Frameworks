<!-- <?php
class StudentsController1 extends AppController{
	var $components = array('Session');
    public function index(){
		$var1 = '';
		$var2 = '';
		$var3 = '';
		
		if($this->request->is('post')){ //check if data is posted
			$student_name = $this->request->data['name'];
			$student_email = $this->request->data['email'];
			$student_contact = $this->request->data['contactno'];
		}//end of is('post')
		
		//write session variables
		$this->Session->write('sess-student_name',$student_name);
        $this->Session->write('sess-student_email',$student_email);
        $this->Session->write('sess-student_contact',$student_contact);

        $this->redirect(array('controller'=>'students','action'=>'display'));

	}//end of display

    $this->set('title','Student Home');
    $this->layout = 'custom_layout';


	public function display(){
		if($this->session->check('sess_student_name')){
            $student_name = $this->Session->read('sess_student_name');
        } else{
            $student_name = '';
        }
        if($this->Session->check('sess_student_email')){
            $student_email = $this->Session->read('sess_student_email');
        }else{
            $student_email = '';
        }
        if($this->Session->check('sess_student_contact')){
            $student_contact = $this->Session->read('sess_student_contact');
        }else{
            $student_contact = '';
        }

$this->set('student_name',$student_name);
$this->set('student_email',$student_email);
$this->set('student_contact',$student_contact);

$this->set('title','Student Information');
$this->layout = 'custom_layout';





	}//end of index
}//End of StudentsController class
?> -->
