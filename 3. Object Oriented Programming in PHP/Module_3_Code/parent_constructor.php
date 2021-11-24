 <?php
class employee{
   var $firstName;
   var $lastName;
   function employee ($first_name, $last_name){
	   echo "Parent constructor called...";
	   $this->firstName = $first_name;
	   $this->lastName = $last_name;
   }
}//end of employee
class employee1 extends employee{
	var $Initial;
	function employee1($first_name, $middle_initial, $last_name){
		employee::employee($first_name, $last_name);//call parent constructor
		$this->_middleInitial = $middle_initial;
	}
}//end of employee1
$obj = new employee1("first","middle","last");



?> 
