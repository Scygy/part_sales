<?php 
include '../conn.php';
$method = $_POST['method'];

if ($method == 'fetch_stocks') {
	$parts_name = $_POST['parts_name'];
	$supplier_code = $_POST['supplier_code'];
	$customer_code = $_POST['customer_code'];
	$description = $_POST['description'];
	$c = 0;

	$query = "SELECT * FROM pss_stocks WHERE parts_name LIKE '$parts_name%' AND supplier_code LIKE '$supplier_code%' AND customer_code LIKE '$customer_code%' AND description LIKE '$description%' GROUP BY parts_name";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$try = $j['remaining_stck'];
			$c++;

			if ($try == 0) {
				echo '<tr >';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['parts_code'].'</td>';
					echo '<td style="cursor:pointer; color:red;" class="modal-trigger" data-toggle="modal" data-target="#update_stock" onclick="get_stock(&quot;'.$j['id'].'~!~'.$j['parts_code'].'~!~'.$j['parts_name'].'~!~'.$j['supplier_code'].'~!~'.$j['description'].'~!~'.$j['qty_per_box'].'~!~'.$j['net'].'~!~'.$j['box_weight'].'~!~'.$j['gross'].'~!~'.$j['remaining_stck'].'~!~'.$j['unit'].'~!~'.$j['date_registered'].'~!~'.$j['date_updated'].'&quot;)">'.$j['parts_name'].'</td>';
					echo '<td>'.$j['supplier_code'].'</td>';
					echo '<td>'.$j['description'].'</td>';
					echo '<td>'.$j['qty_per_box'].'</td>';
					echo '<td>'.$j['net'].'</td>';
					echo '<td>'.$j['box_weight'].'</td>';
					echo '<td>'.$j['gross'].'</td>';
					echo '<td>'.$j['remaining_stck'].'</td>';
					echo '<td>'.$j['unit'].'</td>';
					echo '<td>'.$j['date_registered'].'</td>';
					echo '<td>'.$j['date_updated'].'</td>';
				echo '</tr>';
			}else{
				echo '<tr >';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['parts_code'].'</td>';
					echo '<td style="cursor:pointer" class="modal-trigger" data-toggle="modal" data-target="#update_stock" onclick="get_stock(&quot;'.$j['id'].'~!~'.$j['parts_code'].'~!~'.$j['parts_name'].'~!~'.$j['supplier_code'].'~!~'.$j['description'].'~!~'.$j['qty_per_box'].'~!~'.$j['net'].'~!~'.$j['box_weight'].'~!~'.$j['gross'].'~!~'.$j['remaining_stck'].'~!~'.$j['unit'].'~!~'.$j['date_registered'].'~!~'.$j['date_updated'].'&quot;)">'.$j['parts_name'].'</td>';
					echo '<td>'.$j['supplier_code'].'</td>';
					echo '<td>'.$j['description'].'</td>';
					echo '<td>'.$j['qty_per_box'].'</td>';
					echo '<td>'.$j['net'].'</td>';
					echo '<td>'.$j['box_weight'].'</td>';
					echo '<td>'.$j['gross'].'</td>';
					echo '<td>'.$j['remaining_stck'].'</td>';
					echo '<td>'.$j['unit'].'</td>';
					echo '<td>'.$j['date_registered'].'</td>';
					echo '<td>'.$j['date_updated'].'</td>';
				echo '</tr>';
	}
		}
	}else{
		echo '<tr>';
			echo '<td colspan = "11" style="color:red;">No Result!</td>';
		echo '</tr>';
	}

}

if ($method == 'update_stocks') {
	$id = $_POST['id'];
	$remaining_stck = $_POST['remaining_stck'];
	$parts_code = $_POST['parts_code'];
	$parts_name = $_POST['parts_name'];

	$query = "UPDATE pss_stocks SET remaining_stck = '$remaining_stck', date_updated = '$server_date_only' WHERE parts_code = '$parts_code' AND parts_name = '$parts_name'";
	$stmt =  $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'SUCCESS';
	}else{
		echo 'error';
	}
}


if ($method == 'transfer_stocks') {
	$id = $_POST['id'];
	$parts_code = $_POST['parts_code'];
	$parts_name = $_POST['parts_name'];

	$query = "INSERT INTO pss_deleted_stocks (`parts_code`,`parts_name`,`supplier_code`,`qty_per_box`,`description`,`net`,`box_weight`,`gross`,`remaining_stck`,`unit`,`customer_unit_price`,`total_amount`,`date_registered`,`date_updated`,`customer_code`) SELECT pss_stocks.parts_code, pss_stocks.parts_name, pss_stocks.supplier_code, pss_stocks.qty_per_box, pss_stocks.description, pss_stocks.net, pss_stocks.box_weight, pss_stocks.gross, pss_stocks.remaining_stck, pss_stocks.unit, pss_stocks.customer_unit_price, pss_stocks.total_amount, pss_stocks.date_registered, pss_stocks.date_updated, pss_stocks.customer_code FROM pss_stocks WHERE parts_code = '$parts_code' AND parts_name = '$parts_name'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
	$query2 = "DELETE FROM pss_stocks WHERE parts_code = '$parts_code' AND parts_name = '$parts_name'";
	$stmt2 = $conn->prepare($query2);
	if ($stmt2->execute()) {
		echo 'success';
	}else{

		echo 'error';
	}
	}else{
		echo 'error';
	}
}



$conn = NULL;
?>