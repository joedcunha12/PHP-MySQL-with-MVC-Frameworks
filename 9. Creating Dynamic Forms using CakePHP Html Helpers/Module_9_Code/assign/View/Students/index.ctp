<?php

	echo "<b>Students List </b> <br>";

	// echo $this->Html->link('Add New Student',array('action' => 'student_details'),
	// 										array('style' => 'padding:5px'));

	echo $this->Html->link("Add New Student", array('action' => 'student_details'),
	array('style' => 'padding:5px'));

	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<td> Roll No </td>";
	echo "<td> Student Name</td>";
	echo "<td> Birth Date </td>";
	echo "<td> Contact No </td>";
	echo "<td> &nbsp</td>";
	echo "</tr>";
	if(isset($student_record)){
		foreach($student_record as $row){
			// $date_of_birth = $this->Time->format($row['Student']['date_of_birth'],'%d-%m-%Y');
			$date_of_birth = $this->Time->format($row['Student']['date_of_birth'],'%d-%m-%Y');
			echo "<tr>";
			echo "<td>{$row['Student']['roll_no']}</td>";
			echo "<td> {$row['Student']['name']}</td>";
			echo "<td> $date_of_birth </td>";
			echo "<td>{$row['Student']['contactno']}</td>";
			echo "<td> ";
				// echo $this->Html->link('Edit',array(
				// 								'action' => 'student_details',
				// 								'?' => array(
				// 										'roll_no' => $row['Student']['roll_no']),
				// 									),
				// 							array('style' => 'padding:5px')		
				// 						);
				// echo "|";
				// 	echo $this->Html->link('Delete',array(
				// 									'action' => 'delete',
				// 									'?' => array(
				// 											'roll_no' => $row['Student']['roll_no']),
				// 										),
				// 								array('style' => 'padding:5px')		
				// 							);
				echo $this->Html->link('Edit',array('action' => 'student_details', '?' => array('roll_no' => $row['Student']['roll_no']),
				),
				array('style' => 'padding:5px'));
				echo $this->Html->link('Delete',array('action' => 'delete', '?' => array('roll_no' => $row['Student']['roll_no']),
				),
				array('style' => 'padding:5px'));


			echo	"</td>";
			echo "</tr>";
		}//end of foreach
	}else{
		echo "<tr>";
		echo "<td colspan=3>No Records found</td>";
		echo "</tr>";
	}//end of if isset
	echo "</table>";	
?>