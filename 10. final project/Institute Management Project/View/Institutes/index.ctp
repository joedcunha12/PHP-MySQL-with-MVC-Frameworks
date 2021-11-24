<?php
	echo "<h3 style='text-align:center'>Institutes List </h3>";
	echo $this->Html->link('Add New Institute',array('action' => 'institute_details'),
											array('style' => 'padding:5px'));
	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<th> Institute ID </th>";
	echo "<th> Institute Name </th>";
	echo "<th> Institute Type </th>";
	echo "<th> Institute Code </th>";
	echo "<th colspan=2> Action</th>";
	echo "</tr>";
	
	if(isset($institute_record)){
		foreach($institute_record as $row){

			echo "<tr>";
			echo "<td>{$row['Institute']['institute_id']}</td>";			
			echo "<td>{$row['Institute']['institute_name']}</td>";
			echo "<td>{$row['Institute']['institute_type']}</td>";
			echo "<td>{$row['Institute']['institute_code']}</td>";
			echo "<td> ";
				
				echo $this->Html->image("edit.png", array(
					"alt" => "Edit",
					'url' => array('action' => 'institute_details',
								   '?' => array('institute_id' => $row['Institute']['institute_id']),
									),
					'style' => 'height:20px;width:20px;padding:2px'
				));
				
				echo "|";
				echo $this->Html->image("delete.png", array(
					"alt" => "Delete",
					'url' => array('action' => 'delete',
								   '?' => array('institute_id' => $row['Institute']['institute_id']),
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