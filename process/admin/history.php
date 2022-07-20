<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method = 'stocks_history') {
	$id = $_POST['id'];
	// $parts_name = $_POST['parts_name'];
	$c = 0;

	$query = "SELECT parts_code, parts_name, supplier_code, description, qty_per_box, net, box_weight, gross, remaining_stck, unit FROM pss_deleted_stocks GROUP BY parts_name";
	$stmt =  $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach ($stmt->fetchALL() as $x) {
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$x['parts_code'].'</td>';
				echo '<td style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#restore_stocks" onclick="get_back_stock(&quot;'.$c.'~!~'.$x['parts_code'].'~!~'.$x['parts_name'].'~!~'.$x['supplier_code'].'~!~'.$x['description'].'~!~'.$x['qty_per_box'].'~!~'.$x['net'].'~!~'.$x['box_weight'].'~!~'.$x['gross'].'~!~'.$x['remaining_stck'].'~!~'.$x['unit'].'&quot;)">'.$x['parts_name'].'</td>';
				echo '<td>'.$x['supplier_code'].'</td>';
				echo '<td>'.$x['description'].'</td>';
				echo '<td>'.$x['qty_per_box'].'</td>';
				echo '<td>'.$x['net'].'</td>';
				echo '<td>'.$x['box_weight'].'</td>';
				echo '<td>'.$x['gross'].'</td>';
				// echo '<td>'.$x['remaining_stck'].'</td>';
				// echo '<td>'.$x['unit'].'</td>';
				// echo '<td>'.$x['date_registered'].'</td>';
				// echo '<td>'.$x['date'].'</td>';
			echo '</td>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan = "5" style="color:red;">No Results!</td>';
		echo '</tr>';
	}
}


// if ($method == 'restore_stocks') {
// 	$id = $_POST['id'];

// 	$query = "INSERT INTO pss_stocks (`parts_code`,`parts_name`,`supplier_code`,`description`,`qty_per_box`,`net`,`box_weight`,`gross`,`remaining_stck`,`unit`,`customer_unit_price`,`total_amount`,`date_registered`,`date_updated`,`customer_code`) SELECT parts_code,parts_name,supplier_code,description,qty_per_box,net,box_weight,gross,remaining_stck,unit,customer_unit_price,total_amount,date_registered,date_updated,customer_code FROM pss_deleted_stocks";
// 	$stmt = $conn->prepare($query);
// 	if ($stmt->execute()) {
// 		echo 'success';
// 	}else{
// 		echo 'error';
// 	}
// }


if ($method == 'restore_stockss') {
	$id = $_POST['id'];

	$query ="INSERT INTO pss_stocks (`parts_code`,`parts_name`,`supplier_code`,`description`,`qty_per_box`,`net`,`box_weight`,`gross`,`remaining_stck`,`unit`,`customer_unit_price`,`total_amount`,`date_registered`,`date_updated`,`customer_code`) SELECT parts_code,parts_name,supplier_code,description,qty_per_box,net,box_weight,gross,remaining_stck,unit,customer_unit_price,total_amount,date_registered,date_updated,customer_code FROM pss_deleted_stocks";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}


















$conn =NULL;

?>