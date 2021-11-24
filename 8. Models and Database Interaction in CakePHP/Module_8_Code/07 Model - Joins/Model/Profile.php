<?php 
class Profile extends AppModel{
	public $useTable = 'student_profiles';
	public $primaryKey = 'profile_id';
	
	public $hasOne = 'Student';
}//end of class

?>