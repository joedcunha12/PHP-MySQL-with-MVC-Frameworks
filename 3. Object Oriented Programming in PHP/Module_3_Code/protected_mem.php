 <?php
class student {
	protected $name;
}//end of student 

class Discountstudent extends student {
	private $Discount;
	public function setData($name, $discount) {
		/*this is storing $name to the student. 
		$name variableis a protected variable so it can access here*/
		$this->name = $name; 
		$this->Discount = $discount;
	}
	public function getDiscount(){
		return $this->Discount;
	}
}//end of Discountstudent

$disstud = new Discountstudent();
$disstud ->setData("Sharla",10);
echo $disstud->getDiscount();
/* this does not work as $name is protected and 
hence only available in student and Discountstudent class 
not outside the class*/
#echo $disstud ->name; //uncomment to see error
?> 