<?php
	echo "<h3 style='text-align:center'>Courses List </h3>";
	echo $this->Html->link('Add New Course',array('action' => 'course_details'),
											array('style' => 'padding:5px'));

	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<th> Course Name </th>";
	echo "<th> Course Duration</th>";
	echo "<th> Course Type </th>";
	echo "<th> Course Fees </th>";
	echo "<th colspan=2> Action</th>";
	echo "</tr>";
	if(isset($course_record)){
		foreach($course_record as $row){

			echo "<tr>";
			echo "<td>{$row['Course']['course_name']}</td>";
			echo "<td> {$row['Course']['duration']}</td>";
			echo "<td>{$row['Course']['course_type']}</td>";
			echo "<td>{$row['Course']['course_fees']}</td>";
			echo "<td> ";
				
				echo $this->Html->image("edit.png", array(
					"alt" => "Edit",
					'url' => array('action' => 'course_details',
								   '?' => array('course_id' => $row['Course']['course_id']),
									),
					'style' => 'height:20px;width:20px;padding:2px'
				));
				
				echo "|";
				echo $this->Html->image("delete.png", array(
					"alt" => "Delete",
					'url' => array('action' => 'delete',
								   '?' => array('course_id' => $row['Course']['course_id']),
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