<?php
	echo "<h3 style='text-align:center'>Students List </h3>";
	echo $this->Html->link('Add New Student',array('action' => 'student_details'),
											array('style' => 'padding:5px'));

	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<th> Student ID </th>";
	echo "<th> Student Name</th>";
	echo "<th> Address </th>";
	echo "<th> Contact No </th>";
	echo "<th> Action</th>";
	echo "</tr>";
	if(isset($student_record)){
		foreach($student_record as $row){

			echo "<tr>";
			echo "<td>{$row['Student']['student_id']}</td>";
			echo "<td> {$row['Student']['student_name']}</td>";
			echo "<td> {$row['Student']['address']} </td>";
			echo "<td>{$row['Student']['contact_no']}</td>";
			echo "<td> ";
				echo $this->Html->image("edit.png", array(
					"alt" => "Edit",
					'url' => array('action' => 'student_details',
								   '?' => array('student_id' => $row['Student']['student_id']),
									),
					'style' => 'height:20px;width:20px;padding:2px'
				));
				
				echo "|";
				echo $this->Html->image("delete.png", array(
					"alt" => "Delete",
					'url' => array('action' => 'delete',
								   '?' => array('student_id' => $row['Student']['student_id']),
									),
					'style' => 'height:20px;width:20px;padding:2px'
				));
			echo	"</td>";
			echo "</tr>";
		}//end of foreach
	}else{
		echo "<tr>";
		echo "<td colspan=3>No Records found</td>";
		echo "</tr>";
	}//end of if isset
	echo "</table>";	
	echo $this->Element('home_link');
?>