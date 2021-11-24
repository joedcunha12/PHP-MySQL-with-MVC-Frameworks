<!-- <?php
class OperationsController extends AppController{
	var $components = array('Math');
	
	public function index(){
		$var1=384;
		$var2=292;
		
		$this->set('add_result',$this->Math->add($var1,$var2));
		$this->set('sub_result',$this->Math->subtract($var1,$var2));
		$this->set('multi_result',$this->Math->multiply($var1,$var2));
		$this->set('div_result',$this->Math->divide($var1,$var2));
	}
}//End of controller
?> -->

<?php
class OperationsController extends AppController{
	var $components = array('Math');

	public function index(){
		$var1=124;
		$var2=457;

		$this->set('add_result',$this->Math->add($var1,$var2));
		$this->set('sub_result',$this->Math->substract($var1,$var2));
		$this->set('multi_result',$this->Math->multiply($var1,$var2));
		$this->set('divide_result',$this->Math->divide($var1,$var2));
	}
}
?>