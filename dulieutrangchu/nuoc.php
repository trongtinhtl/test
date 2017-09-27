<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dữ liệu nước</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- mapbox -->
	<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  	<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
	<style type="text/css">
		.map{
			height: 400px;
			margin: 10px 0px;
		}
		body{
			background-image: url("../img/back.gif");
			background-repeat: initial;
		}
	</style>

</head>
<body>
 
	<div class="container">
		<div class="row">
		<div class="col-md-10">
			<div class="col-md-5 tieude col-md-offset-4"><h3><b>Giám Sát Chất Lượng Nước</b></h3></div><!-- tieude -->
			<div class="col-md-12">
				<h4 id='hethongcactramquantrac'><b>1. Hệ Thống Các Trạm Quan Trắc Nước Mặt Ở TP.HCM</b></h4>
				<div class="col-md-7 col-md-offset-3">
					<h4>Các vị trí quan trắc chất lượng nước mặt khu vực. TPHCM</h4>
				</div>
				<div class="col-md-8 col-md-offset-2 table-responsive">
					<table class="table table-bordered ">
						<thead>
							<tr class="info">
								<th>STT</th>
								<th>Tên Trạm</th>
								<th>Ký hiệu</th>
								<th>Tên Sông</th>
								<th>QCVN so sánh</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Nhà Bè</td>
								<td>NB</td>
								<td>Sông Sài Gòn</td>
								<td>QCVN 08:2013/BTNMT loại A1</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Tam Thôn Hiệp</td>
								<td>TTH</td>
								<td>Sông Lòng Tàu</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Vàm Sát</td>
								<td>VS</td>
								<td>Sông Soài Rạp</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Vàm Cỏ</td>
								<td>VC</td>
								<td>Sông Vàm Cỏ</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Cát Lái</td>
								<td>CL</td>
								<td>Sông Soài Rạp</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Cửa Đồng Tranh</td>
								<td>CĐT</td>
								<td>Sông Đồng Tranh</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Cửa Ngã Bảy</td>
								<td>CNB</td>
								<td>Sông Lòng Tàu</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Cửa Cái Mép</td>
								<td>CCM</td>
								<td>Sông Đồng Tranh</td>
								<td>QCVN 08:2013/BTNMT loại B1</td>
							</tr>         
						</tbody> 
					</table>
				</div>
			</div><!-- muc 1 -->

			<div class="col-md-12">
				<h4><b>2. Bản đồ các trạm quan trắc chất lượng nước mặt ờ Tp. Hồ Chí Minh</b></h4>
				<div class="col-md-10 col-md-offset-1">
					<div id='map_geo' class='map'></div>
					<script>
					L.mapbox.accessToken = 'pk.eyJ1IjoiZHVjdmluaCIsImEiOiJjaXpvN2Vlem4wM2w4Mndscmt5bHN5cGhjIn0.NjkMjUn3BGdfnPx_F9cU0w';
					var geojson = [
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.7740225 ,10.67234316]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Nhà Bè</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.8682639,10.60536511]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Tam Thôn Hiệp</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.7982261,10.48993272]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Vàm Sát</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.7906735,10.75482174]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Cát Lái</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.7312788,10.49398384]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Vàm Cỏ</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.8672342,10.44874456]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Cửa Đồng Tranh</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [106.9412483,10.47364218]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Cửa Ngã Bảy</b>',
							'marker-symbol': 'star'
						}
					},
					{
						type: 'Feature',
						geometry: {
							type: 'Point',
							coordinates: [107.0023595,10.50419277]
						},
						properties: {
							'marker-color': '#3bb2d0',
							'description' : '<b>Trạm Cửa Cái Mép</b>',
							'marker-symbol': 'star'
						}
					},
					];

					var mapGeo = L.mapbox.map('map_geo', 'mapbox.streets')
					.setView([10.55797,106.8706], 10);

					var myLayer = L.mapbox.featureLayer().setGeoJSON(geojson).addTo(mapGeo);
				</script>
				</div><!-- map -->
			</div> <!-- muc 2 -->
			
			<div class="col-md-12">
				<h4><b>3. Tần suất và thông số đo đạc</b></h4>
				<h4 style="text-indent: 20px">+ Tần suất</h4>
				<p style="font-size: 15px;text-indent: 30px; text-align:justify;">
					Tần suất quan trắc: Từ năm 2011 – 2014, hàng tháng lấy mẫu vào 4 ngày: 1, 8, 15 và 22. Mẫu nước được lấy vào hai thời điểm chân triều thấp và đỉnh triều cao. Năm 2015 tần suất lấy mẫu thay đổi như sau: tháng 1 lấy mẫu vào các ngày  1, 7, 15 và 22; Từ tháng 2 trở đi, tần suất giảm còn 2 lần/tháng. Mẫu nước được lấy vào hai thời điểm chân triều thấp và đỉnh triều cao </p>
				<h4 style="text-indent: 20px">+ Thông số đo đạc</h4>
				<p style="font-size: 15px;text-indent: 30px; text-align:justify; margin-bottom: 10px">
					Thông số quan trắc: Hệ thống các chỉ tiêu phân tích được trình bày trong bảng bên dưới. Các phương pháp phân tích được áp dụng theo tiêu chuẩn Việt Nam và tiêu chuẩn phân tích (Standard method) hiện đang áp dụng tại đa số các phòng thí nghiệm môi trường trong nước cũng như trong khu vực
				</p>
				<h4 style="text-indent: 20px">+ Các thông số phân tích, phương pháp áp dụng</h4>
				<div class="col-md-8 col-md-offset-2 table-responsive">
					<table class="table table-bordered ">
						<thead>
							<tr class="info">
								<th>Thông số phân tích</th>
								<th>Phương pháp phân tích</th>
								<th>Giới hạn phát hiện</th>
								<th>Ghi chú</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Nhiệt độ</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>pH</td>
								<td>TCVN 6492:1999</td>
								<td>2</td>	
								<td>PP được VILAS công nhận</td>
							</tr>

							<tr>
								<td>TSS (mg/l)</td>
								<td>TCVN 6625:2000</td>
								<td>0.5</td>	
								<td></td>
							</tr> 

							<tr>
								<td>Độ mặn (g/l)</td>
								<td>SMEWW 2510B.20050</td>
								<td>0,005</td>	
								<td>PP được VILAS công nhận</td>
							</tr>

							<tr>
								<td>Độ đục (NTU)</td>
								<td>TCVN 6184:1996</td>
								<td>0.2</td>	
								<td></td>
							</tr>

							<tr>
								<td>Ammonia  (mg/l)</td>
								<td>SM 4500NH3 F. 2005</td>
								<td>SM 4500NH3 F. 2005</td>	
								<td>PP được VILAS công nhận</td>
							</tr>


							<tr>
								<td>COD (mg/l)</td>
								<td>TCVN 6186:1996</td>
								<td>0.5</td>	
								<td>PP được VILAS công nhận</td>
							</tr>

							<tr>
								<td>BOD5 (mg/L)</td>
								<td>TCVN 6001-1:2008</td>
								<td>2</td>	
								<td>PP được VILAS công nhận</td>
							</tr>
							
							<tr>
								<td>DO (mg/l)</td>
								<td>TCVN 7324:2004</td>
								<td>0.02</td>	
								<td>PP được VILAS công nhận</td>
							</tr>
							
							<tr>
								<td>Pb, Cu, Cd (mg/l)</td>
								<td>SMEWW 3113B</td>
								<td>0.002</td>	
								<td>PP được VILAS công nhận</td>
							</tr>

							<tr>
								<td>Thủy ngân (mg/l)</td>
								<td>TCVN 5989:1995</td>
								<td>0.001</td>	
								<td>PP được VILAS công nhận</td>
							</tr>

							<tr>
								<td>Tổng Coliform</td>
								<td>TCVN 6187-2:1996</td>
								<td>3</td>	
								<td></td>
							</tr>
							
							<tr>
								<td>E.Coli	</td>
								<td>TCVN 6187-2:1996</td>
								<td>3</td>	
								<td></td>
							</tr>		


						</tbody>
					</table>
				</div>
			</div> 
			</div>
		</div>
	</div>


</body>
</html>
