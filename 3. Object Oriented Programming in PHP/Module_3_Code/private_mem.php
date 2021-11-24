 <?php
class student {
	private $name;
		public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	} 
}//end of class

$stud = new student();
// it works because the function is declared as public
$stud->setName("Sharla"); 
//error, $name cannot be accessed from outside the class
#echo $stud ->name; //uncomment to see error
//this works, as the methods of the class have access
echo $stud->getName(); 
?> 

