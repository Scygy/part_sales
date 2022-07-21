<script type="text/javascript">
	
const load_po =()=>{
	var po_num = document.getElementById('po_num').value;
	var status = document.getElementById('status').value;
	// console.log('status');
	// if (po_num == '') {
	// 	swal('Information','Please Input Purchase Order No.','info');
	// }else{
	$('#spinner').css('display','block');
	$.ajax({
		url: '../../process/admin/po_process.php',
		type: 'POST',
		cache: false,
		data:{
			method: 'fetch_po',
			po_num:po_num,
			status:status
		},success:function(response){
			document.getElementById('view_po_data').innerHTML = response;
			$('#spinner').fadeOut(function(){
				// body...
			});
		}
	});
}
// }


const get_po_details =(param)=>{
	var string = param.split('~!~');
	var id = string[0];
	var po_num = string[1];
	// var parts_code = string[2];
	// var parts_name = string[3];
	// var description = string[4];
	// var supplier_code = string[5];
	// var quantity = string[6];
	// var shipping_mode = string[7];
	// var date_created = string[8];
	var neopos_no = string[2];
	var Status = string[3];

document.getElementById('id_po_details').value = id;
document.getElementById('po_num_details').value = po_num;
// document.getElementById('parts_code_po_details').value = parts_code;
// document.getElementById('parts_name_po_details').value = parts_name;
// document.getElementById('description_po_details').value = description;
// document.getElementById('supplier_code_po_details').value = supplier_code;
// document.getElementById('quantity_po_details').value = quantity;
// document.getElementById('shipping_mode_po_details').value = shipping_mode;
// document.getElementById('date_created_po_details').value = date_created;
document.getElementById('neopos_no_po_details').value = neopos_no;
document.getElementById('Status_po_details').value = Status;

}

</script>