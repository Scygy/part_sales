<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method = 'stocks_history') {
	$parts_name = $_POST['parts_name'];
	$c = 0;

	$query = "SELECT * FROM pss_deleted_stocks";
	$stmt =  $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() as 0) {
		foreach ($stmt->fetchALL() as $x) {
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$c.'</td>';
			echo '</td>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan = "5" style="color:red;">No Results!</td>';
		echo '</tr>';
	}
}





















?>