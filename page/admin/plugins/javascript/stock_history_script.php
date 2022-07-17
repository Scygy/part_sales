<script type="text/javascript">
	
	const load_stocks_history =()=>{
		var parts_name = document.getElementById('parts_name').value;

		$.ajax({
			url: '../../process/admin/history.php',
			type: 'POST',
			cache: false,
			data:{
				method: 'stocks_history',
				parts_name:parts_name
			},success:function(response) {
				 document.getElementById('view_stocks_history').innerHTML = response;
				 $('#spinner').fadeOut(function(){
				// body...
			});
				 
			}
		});
	}


</script>