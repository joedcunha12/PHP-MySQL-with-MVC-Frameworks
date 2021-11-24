<?php
	echo "<h3 style='text-align:center'>Users List </h3>";
	echo $this->Html->link('Add New User',array('action' => 'user_details'),
											array('style' => 'padding:5px'));

	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<th> User ID </th>";
	echo "<th> User Name </th>";
	echo "<th> User Email </th>";
	echo "<th colspan=2> Action</th>";
	echo "</tr>";
	if(isset($user_record)){
		foreach($user_record as $row){

			echo "<tr>";
			echo "<td>{$row['User']['user_id']}</td>";			
			echo "<td>{$row['User']['username']}</td>";
			echo "<td>{$row['User']['email_id']}</td>";
			echo "<td> ";
				
				echo $this->Html->image("edit.png", array(
					"alt" => "Edit",
					'url' => array('action' => 'user_details',
								   '?' => array('user_id' => $row['User']['user_id']),
									),
					'style' => 'height:20px;width:20px;padding:2px'
				));
				
				echo "|";
				echo $this->Html->image("delete.png", array(
					"alt" => "Delete",
					'url' => array('action' => 'delete',
								   '?' => array('user_id' => $row['User']['user_id']),
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