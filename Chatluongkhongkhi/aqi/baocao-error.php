<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Bootstrap Exampl</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if(isset($_GET['username'])){
			$name = $_GET['username'];
		} 
	 ?>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5 col-md-offset-4">
								<h3 class="modal-title"><b>Thông Báo</b></h3>
							</div>
						</div>
					</div>
				</div> <!-- end header -->

					<div class="modal-body">
						<div class="row form-group">
							<div class="col-md-8 col-md-offset-2">					
								<h4>Bạn Cần Chọn Dữ Liệu Để Lập Báo Cáo </h4>
							</div>
						</div> 
					</div>

				<div class="modal-footer">
					<a class="btn btn-default" href="dashboard-aqi.php?username=<?php echo $name ?>"> OK<a>
				</div> <!-- end footer -->

			</div> <!-- end content -->

			</div>
		</div> <!-- end modal -->

</body>
</html>
<script type="text/javascript">
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});
	</script> <!-- auto modal -->

	<script type="text/javascript">
		jQuery('#myModal').modal('show').on('hide.bs.modal', function (e) {
  		e.preventDefault();
	});
	</script>