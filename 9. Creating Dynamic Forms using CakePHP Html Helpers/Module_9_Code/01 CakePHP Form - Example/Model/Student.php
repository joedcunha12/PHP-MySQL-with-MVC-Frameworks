<!-- <?php 
class Student extends AppModel{
	public $name = 'student';
	public $primaryKey = 'roll_no';
	public $hasOne = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'roll_no'
		)
	);
	public $hasMany = array(
		'ObtainedMark' => array(
			'className' => 'ObtainedMark',
			'foreignKey' => 'roll_no',
		)
	);
}//end of class
?> -->

<?php
class Student extends AppModel{
	public $name = 'student';
	public $primaryKey = 'roll_no';
	public $hasOne = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'roll_no'
		)
		);

		public $hasMany = array(
			'ObtainedMark' => array(
				'className' => 'ObtainedMark',
				'foreignKey' => 'roll_no',
			)
			);
}
?>