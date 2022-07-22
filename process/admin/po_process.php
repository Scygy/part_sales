<?php 
include '../conn.php';

$method = $_POST['method'];
if ($method == 'fetch_po') {
	$po_num = $_POST['po_num'];
	$status = $_POST['status'];
	$c = 0;
	// Old query
	// $query = "SELECT * FROM pss_po_details,pss_stocks WHERE pss_po_details.parts_name = pss_stocks.parts_name AND pss_po_details.customer_code LIKE '$customer_code%' AND pss_po_details.po_num LIKE '$po_num%' AND pss_po_details.Status = 'Open' GROUP BY pss_po_details.parts_name";

	$query = "SELECT id, po_num, parts_code, parts_name, description, supplier_code, quantity, shipping_mode, date_created, neopos_no, Status FROM pss_po_details WHERE po_num LIKE '$po_num%' AND Status = 'Open' GROUP BY po_num";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach ($stmt->fetchALL() as $j) {
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					// echo '<td style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#purchase_order_modal" onclick="get_po_details(&quot;'.$j['id'].'~!~'.$j['po_num'].'~!~'.$j['parts_code'].'~!~'.$j['parts_name'].'~!~'.$j['description'].'~!~'.$j['supplier_code'].'~!~'.$j['quantity'].'~!~'.$j['shipping_mode'].'~!~'.$j['date_created'].'~!~'.$j['neopos_no'].'~!~'.$j['Status'].'&quot;)">'.$j['po_num'].'</td>';
					echo '<td style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#purchase_order_modal" onclick="get_po_details(&quot;'.$j['id'].'~!~'.$j['po_num'].'~!~'.$j['Status'].'&quot;)">'.$j['po_num'].'</td>';
					echo '<td>'.$j['Status'].'</td>';
				echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan = "11" style="color:red;">No Result!</td>';
		echo '</tr>';
	}
}


if ($method ==  'load_po_details_modal') {
	// $id = $_POST['id'];
	$po_num = $_POST['po_num'];
	$c = 0;

	$query = "SELECT po_num, parts_code, parts_name, description, supplier_code, quantity, neopos_no FROM pss_po_details WHERE po_num = '$po_num'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		foreach ($stmt->fetchALL() as $j) {
			$c++;

			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['parts_code'].'</td>';
				echo '<td>'.$j['parts_name'].'</td>';
				echo '<td>'.$j['description'].'</td>';
				echo '<td>'.$j['supplier_code'].'</td>';
				echo '<td>'.$j['quantity'].'</td>';
				echo '<td>'.$j['neopos_no'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<td>';
			echo '<td colspan = "11"> Wala Talaga</td>';
		echo '<td>';
	}
}

$conn = NULL;


?>