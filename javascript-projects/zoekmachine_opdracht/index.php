<!DOCTYPE html>
<html>
	<title>Proefopdracht</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#resultaat').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"search.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".search").html("");
							$("#webdata-grid").append('<tbody class="webdata-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#webdata-grid_processing").css("display","none");
							
						}
					}
				} );
			} );
		</script>
		<!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/bootstrap.min.css" rel="stylesheet">
		<style>
			 .box {padding: 0 5px 0 5px;}
    .body{ padding: 0px; }
    .container{ padding-top: 10px; }
    .button .btn{ border-radius: 0; }
    .form-control{ border-radius: 0; }
    .menu ul li  {list-style-type: none;
      float: left;}
      .menu ul li a  {padding-right: 3px;}
      .menu{ padding-bottom: 20px}
      .stylish-input-group .input-group-addon{
        background: white !important; 
      }
      .stylish-input-group .form-control{
        border-right:0; 
        box-shadow:0 0 0; 
        border-color:#ccc;
      }
      .stylish-input-group button{
        border:0;
        background:transparent;
      }
		</style>
	</head>
	<body>
	<?php include 'breadcrumb.php' ?>

		<div style="margin-top:10px;" class="container">
		<legend>Virtuelehelden Database:</legend>
			<table id="resultaat"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
					<thead>
						<tr>
							<th>Web Name</th>
							<th>ftpAdres</th>
							<th>ftpUsername</th>
							<th>ftpPass</th>
							<th>dbName</th>
							<th>dbUsername</th>
							<th>dbPass</th>
						</tr>
					</thead>
			</table>
		</div>
	</body>
</html>
