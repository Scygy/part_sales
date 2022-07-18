<script type="text/javascript">
	
	const load_stocks_history =()=>{
		var id = document.getElementById('id_restore').value;
		var parts_name = document.getElementById('parts_name').value;
		$.ajax({
			url: '../../process/admin/history.php',
			type: 'POST',
			cache: false,
			data:{
				method: 'stocks_history',
				id:id,
				parts_name:parts_name
			},success:function(response) {
				 document.getElementById('view_stocks_history').innerHTML = response;
				 $('#spinner').fadeOut(function(){
				// body...
			});
				 
			}
		});
	}



	// const get_back_stock =(param)=>{
	// 	var data = param.split('~!~');
	// 	var id = data[0];
	// 	var parts_code = data[1];
		// var parts_name = data[2];
		// var supplier_code = data[3];
		// var description = data[4];
		// var qty_per_box = data[5];
		// var net = data[6];
		// var box_weight = data[7];
		// var gross = data[8];
		// var remaining_stck = data[9];
		// var unit = data[10];
  //   	var date_registered = data[11];
  //   	var date_updated = data[12];

 //  	$('#id_restore').val(id);
	// $('#parts_code_restore').val(parts_code);

	const get_back_stock =(param)=>{
		var string = param.split('~!~');
		var id = string[0];
		var parts_code = string[1];
		var parts_name = string[2];
		var supplier_code = string[3];
		var description = string[4];
		var qty_per_box = string[5];
		var net = string[6];
		var box_weight = string[7];
		var gross = string[8];
		var remaining_stck = string[9];
		// var unit = string[10];
  //   	var date_registered = string[11];
  //   	var date_updated = string[12];

	document.getElementById('id_restore').value = id;
	document.getElementById('parts_code_restore').value = parts_code;
	document.getElementById('parts_name_restore').value = parts_name;
	document.getElementById('supplier_code_restore').value = supplier_code;
	document.getElementById('description_restore').value = description;
	document.getElementById('qty_per_box_restore').value = qty_per_box;
	document.getElementById('net_restore').value = net;
	document.getElementById('box_weight_restore').value = box_weight;
	document.getElementById('gross_restore').value = gross;
	document.getElementById('remaining_stck_restore').value = remaining_stck;
	// document.getElementById('unit_restore').value = unit;
	// document.getElementById('date_registered_restore').value = date_registered;
	// document.getElementById('date_updated_restore').value = date_updated;

}


const restore_stocks =()=>{

	var id = document.getElementById('id_restore').value;
	var parts_code = document.getElementById('parts_code_restore').value;
	var parts_name = document.getElementById('parts_name_restore').value;

	$.ajax({
		url:'../../process/admin/history.php',
		type: 'POST',
		cache: false,
		data:{
			method: 'restore_stocks',
			id:id,
			parts_code:parts_code,
			parts_name:parts_name
		},success:function (k) {
			if (k == 'success') {
				swal('Information','Stocks have been Restored','info');
				load_stocks_history();
			}else{
				swal('Error','Error','error');
			}
		}
	});
}

</script>