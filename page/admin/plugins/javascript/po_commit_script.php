<script type="text/javascript">

const load_packing =()=>{
	var po_no = document.getElementById('po_no').value;
	if (po_no == '') {
		swal('Information','Please Input Purchase Order No.','info');
	}else{
	$.ajax({
		url: '../../process/admin/packing.php',
		type: 'POST',
		cache: false,
		data:{
			method: 'fetch_po_details',
			po_no:po_no
		},success:function(response){
			document.getElementById('view_po_details').innerHTML = response;
			load_stock_details();
		}
	});
}
}

const load_stock_details =()=>{
	var po_no = document.getElementById('po_no').value;
	$.ajax({
		url: '../../process/admin/packing.php',
		type: 'POST',
		cache: false,
		data:{
			method: 'fetch_stock_details',
			po_no:po_no
		},success:function(response){
			document.getElementById('view_stocks_details').innerHTML = response;
		}
	});
}

const commit =()=>{
	var po_no = document.getElementById('po_no').value;

	$.ajax({
		url: '../../process/admin/packing.php',
		type: 'POST',
		cache: false,
		data:{
			method: 'commit_po',
			po_no:po_no
		},success:function(response){
			// console.log(response);
			// if (response == 'success') {
			// 	swal('Success','Successfully Transact','success');
			// 	load_packing();
			// }else if(response == 'Lack of Stocks'){
			// 	swal('Information','Lack of Stocks','info');
			// }else{
			// 	swal('Error','Error','error');
			// }

			if(response == 'Lack of Stocks'){
				swal('Information','Lack of Stocks','info');
			}else{
				swal('Success','Successfully Transact','success');
				load_packing();
			}
		}
	});
}


</script>