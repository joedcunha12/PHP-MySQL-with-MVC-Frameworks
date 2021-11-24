<!-- <?php
class student {
public $name;
public function setName($name) {
$this->name = $name;
}
public function getName() {
return $this->name;
} }
$stud = new student();
$stud->setName("Sharla ");
echo $stud->name;  // this will work as it is public
$stud->name = "Sheela" ;  // this does not give an error
?> -->

<?php
class student1 {
    public $name;
    public function setName1($name){
        $this->name = $name;
    }
    public function getName1(){
        return $this->name;
    }
}

$student1 = new student1();
//  $student1->setName1("joe");
$student1->name = "joseph";
echo $student1->name;

?>
