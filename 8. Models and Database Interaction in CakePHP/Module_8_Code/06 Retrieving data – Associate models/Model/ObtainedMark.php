<!-- <?php 
class ObtainedMark extends AppModel{
	public $name = 'ObtainedMark';
	public $primaryKey = 'id';
	
	public $belongsTo = 'Student';

}//end of class

?> -->

<?php
class ObtainedMark extends AppModel{
	public $name = "ObtainedMark";
	public $primaryKey = 'id';

	public $belongsTo = "Student";
}
?>