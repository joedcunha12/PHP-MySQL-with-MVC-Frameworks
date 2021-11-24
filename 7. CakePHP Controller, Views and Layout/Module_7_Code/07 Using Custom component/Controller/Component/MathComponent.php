<!-- <?php
class MathComponent extends Component{
	public function add($var1,$var2){
		return $var1+$var2;
	}//end of add

	public function subtract($var1,$var2){
		return $var1-$var2;
	}//end of subtract		
	
	public function multiply($var1,$var2){
		return $var1*$var2;
	}//end of multiply
	
	public function divide($var1,$var2){
		return $var1/$var2;
	}//end of divide
		
}//end of component class

?> -->

<?php
class MathComponent extends Component{
	public function add($var1,$var2){
		return $var1+$var2;
	}
	public function substract($var1,$var2){
		return $var1-$var2;
	}
	public function multiply($var1,$var2){
		return $var1*$var2;
	}
	public function divide($var1,$var2){
		return $var1/$var2;
	}
}
?>