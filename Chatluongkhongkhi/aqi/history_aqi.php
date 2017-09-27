<?php
  $tentaikhoan = '';
  if(isset($_GET['username'])){
    $tentaikhoan = $_GET['username'];
  }
 ?>
<div class="card" style="height: 500px">
	<div class="header">
		<form action="" method="POST" role="form" enctype="multipart/form-data"> 
			<input type="file" name="excelfile"><br><input class="btn btn-primary" type="submit" value="Thêm mới dữ liệu" name="btn-import">
		</form>
		<div class="tieude" style="text-align: center;" >
			<h3>Lịch sử lưu trữ dữ liệu</h3>
		</div>
	</div>

	<?php
	$tentaikhoan = '';
  	if(isset($_GET['username'])){
    $tentaikhoan = $_GET['username'];
  	}

		$conn = pg_connect("host=localhost port=5432 dbname=test user=postgres password=tranthaison"); 
		$name[0]="";
		if (isset($_POST['btn-import'])) {
			if (!empty($_FILES["excelfile"]["name"])) {
				$name = explode('.', $_FILES['excelfile']['name']);
				if($name[1] == "csv" && $name[0]!="") {
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$thoigian = date('d/m/Y H:i:s');
					$check = "SELECT * FROM dulieufileaqi where tenfile = '$name[0]' ";
					$result_check = pg_query($conn, "$check");
					if($result_check  == true){
						$count_rows = pg_num_rows($result_check);
						if($count_rows==0){
							$quanly_fileaqi = "INSERT INTO dulieufileaqi(tentaikhoan,tenfile,thoigian) VALUES('$tentaikhoan','$name[0]','$thoigian')";
							$insert_quanly_fileaqi = pg_query($conn,"$quanly_fileaqi");

							if($insert_quanly_fileaqi==true){
								$create_tblaqi = "CREATE TABLE $name[0] (

							-- id serial PRIMARY KEY,
									id serial PRIMARY KEY,
									tentram varchar(50),
									x float,
									y float,
									thoigian timestamp,
									so2 float,
									co float,
									no2 float,
									o3 float,
									tsp float,
									pm10 float,
									pm25 float,
									pb float,
									aqi_h_so2 float,
									aqi_h_co float,
									aqi_h_no2 float,
									aqi_h_o3 float,
									aqi_h_tsp float,
									aqi_h_pm10 float,
									aqi_h_pm25 float,
									aqi_h_pb float,
									aqi_h_tram float,
									thongso_h_max varchar(50)
									)" ;

									$create_tblaqi_ngay = "CREATE TABLE $name[0]_ngay (
									id serial PRIMARY KEY,
									tentram varchar(50),
									x float,
									y float,
									thoigian date,
									aqi_ngay_so2 float,
									aqi_ngay_co float,
									aqi_ngay_no2 float,
									aqi_ngay_o3 float,
									aqi_ngay_tsp float,
									aqi_ngay_pm10 float,
									aqi_ngay_pm25 float,
									aqi_ngay_pb float,
									aqi_ngay_tram float,
									thongso_ngay_max varchar(50)
									)";


								$tbl_aqi = pg_query($conn,"$create_tblaqi");
								$tbl_aqi_ngay = pg_query($conn,"$create_tblaqi_ngay");	
								

								if($tbl_aqi == true && $tbl_aqi_ngay==true){
									$file = $_FILES["excelfile"]["tmp_name"];
									$openfile  = fopen($file,'r');
									$data = fgetcsv($openfile,3000,',');
									$number =0;
									while ( $data = fgetcsv($openfile,3000,',')) {
									$number ++ ;
									$tentram = $data[0];
									$x= $data[1];
									$y= $data[2];
									$thoigian = $data[3];
									$so2= $data[4];
									$co= $data[5];
									$no2= $data[7];
									$o3= $data[6];
									$tsp= $data[8];
									$pm10= $data[9];
									$pm25 = $data[10];
									$pb = $data[11];
									if($number!=0){
										$id[] = $number;
										$data_aqi = " INSERT INTO $name[0](tentram, x, y,thoigian,so2 ,co, no2,o3,tsp,pm10,pm25,pb)
										VALUES ('$tentram', '$x', '$y','$thoigian','$so2','$co','$no2','$o3','$tsp','$pm10','$pm25','$pb')";
										$result_tblaqi= pg_query($conn,"$data_aqi");
										if($result_tblaqi==true){

											$aqi_h_so2 = 0;
											$aqi_h_co = 0;
											$aqi_h_no2 = 0 ;
											$aqi_h_o3 = 0;
											$aqi_h_tsp = 0;
											$aqi_h_pm10 = 0;
											$aqi_h_pm25 = 0;
											$thongso_h_max ='';

											if($so2!=-1){
												$aqi_h_so2= round($so2*10/35 , 0, PHP_ROUND_HALF_UP);
												$arr_h_so2[] = $aqi_h_so2;
											}else{
												$aqi_h_so2 = -1; 
												$arr_h_so2[] = $aqi_h_so2;
											}//-> end so2

											if ($co!=-1) {
												$aqi_h_co= round($co/300 , 0, PHP_ROUND_HALF_UP);
												$arr_h_co[] = $aqi_h_co;
											}else{
												$aqi_h_co = -1; 
												$arr_h_co[] = $aqi_h_co;
											}//-> end co

											if($no2!=-1) {
												$aqi_h_no2= round($no2/2 , 0, PHP_ROUND_HALF_UP);
												$arr_h_no2[] = $aqi_h_no2;
											}else{
												$aqi_h_no2= -1;
												$arr_h_no2[]= $aqi_h_no2; 
											}//-> no2

											if($o3!=-1){
												$aqi_h_o3= round($o3/2 , 0, PHP_ROUND_HALF_UP);
												$arr_h_o3[] = $aqi_h_o3;
											}else{
												$aqi_h_o3= -1;
												$arr_h_o3[] = $aqi_h_o3;
											}//->end o3

											if($tsp!=-1){
												$aqi_h_tsp= round($tsp/3 , 0, PHP_ROUND_HALF_UP);
												$arr_h_tsp[] = $aqi_h_tsp;
											}else{
												$aqi_h_tsp= -1;
												$arr_h_tsp[] = $aqi_h_tsp;
											}//->end tsp

										

											$arr_h_pm10[] = -1;

											$arr_h_pm25[] = -1;

											$arr_h_pb[] = -1;


											$aqi_h_tram=max($aqi_h_so2,$aqi_h_co,$aqi_h_no2,$aqi_h_o3,$aqi_h_tsp);

											$arr_h_tram[] = $aqi_h_tram;

										if($aqi_h_tram >0){
											if($aqi_h_tram == $aqi_h_so2){
												$thongso_h_max ="SO2";
												$arr_thongso_h_max[]= $thongso_h_max;
												
											}elseif($aqi_h_tram == $aqi_h_no2){
												$thongso_h_max ="NO2";
												$arr_thongso_h_max[]= $thongso_h_max;
												
											}elseif($aqi_h_tram == $aqi_h_co){
												$thongso_h_max ="CO";
												$arr_thongso_h_max[]= $thongso_h_max;
												
											}elseif($aqi_h_tram == $aqi_h_o3){
												$thongso_h_max ="O3";
												$arr_thongso_h_max[]= $thongso_h_max;
											
											}else{
												$thongso_h_max ="TSP";
												$arr_thongso_h_max[]= $thongso_h_max;
											}	

										}else{
											$thongso_h_max ="(Trống)";
											$arr_thongso_h_max[]= $thongso_h_max;
										}
								
											}//-> end tinh toan aqi gio
							
										} 
									} //-> end while

									$arrlength = count($arr_h_tsp);
									for($x = 0; $x < $arrlength; $x++) {
									$update_aqi_h = "UPDATE $name[0] SET aqi_h_so2 = $arr_h_so2[$x],aqi_h_co = $arr_h_co[$x],aqi_h_no2 = $arr_h_no2[$x],aqi_h_o3 = $arr_h_o3[$x],aqi_h_tsp = $arr_h_tsp[$x],aqi_h_pm10 = $arr_h_pm10[$x], aqi_h_pm25 = $arr_h_pm25[$x], aqi_h_pb = $arr_h_pb[$x],aqi_h_tram = $arr_h_tram[$x],thongso_h_max='$arr_thongso_h_max[$x]'
										where id = $id[$x]";
									pg_query($conn,"$update_aqi_h");

									}; //->update aqi thongso	

									//-> aqi_ngay

									$data_aqi_ngay = "SELECT distinct  tentram, x,y, date(thoigian)as ngay  from $name[0] order by tentram asc";
									$result_aqi_ngay = pg_query($conn,"$data_aqi_ngay");

									if($result_aqi_ngay==true){
										while($row = pg_fetch_array($result_aqi_ngay)){
										$tentram_ngay = $row[0];
										$arr_tentram_ngay[] = $tentram_ngay;
										$thoigian_ngay = $row[3];
										$arr_thoigian_ngay[] =$thoigian_ngay;
										$toadox[] = $row[1];
										$toadoy[] = $row[2]; 
										}
										$arrlength_ngay = count($arr_thoigian_ngay);

										for($x = 0; $x < $arrlength_ngay; $x++){
										$insert_aqi_ngay = "INSERT INTO $name[0]_ngay(tentram,x, y,thoigian) VALUES('$arr_tentram_ngay[$x]','$toadox[$x]','$toadoy[$x]','$arr_thoigian_ngay[$x]') ";
										pg_query($conn,"$insert_aqi_ngay");
										}
									}//-> table aqi ngay
									
									$selectdata_ngay = "SELECT tentram,thoigian from $name[0]_ngay";
									$result_selectdata_ngay = pg_query($conn,"$selectdata_ngay");
									if($result_selectdata_ngay== true){
										$sodong_ngay=0;
										while($row_ngay = pg_fetch_array($result_selectdata_ngay)){
											$sodong_ngay ++;
											$idi[]=$sodong_ngay;
											$select_tbl_aqi_h = " SELECT * FROM $name[0] where tentram = '$row_ngay[0]' and date(thoigian) = '$row_ngay[1]' ";
											$result_select_tbl_aqi_h= pg_query($conn,"$select_tbl_aqi_h");
											if($result_select_tbl_aqi_h==true){
												$so2_tb = 0 ;
												$row_so2_empty = 0;
												$sodong_so2 = 0;

												$no2_tb = 0;
												$row_no2_empty = 0;
												$sodong_no2 = 0;

												$tsp_tb = 0 ;
												$row_tsp_empty = 0;
												$sodong_tsp = 0;

												$pm10_tb = 0;
												$row_pm10_empty = 0;
												$sodong_pm10 = 0;

												$pm25_tb = 0 ;
												$row_pm25_empty = 0;
												$sodong_pm25 = 0;

												$pb_tb = 0;
												$row_pb_empty = 0;
												$sodong_pb = 0;

												$sodong = 0;

												unset($arr_aqi_h_so2);
												unset($arr_aqi_h_no2);
												unset($arr_aqi_h_tsp);
												unset($arr_aqi_h_pm10);
												unset($arr_aqi_h_pm25);
												unset($arr_aqi_h_pb);
												while($row_gio = pg_fetch_array($result_select_tbl_aqi_h)){
													$arr_aqi_h_so2[] = $row_gio['aqi_h_so2'];
													$arr_aqi_h_no2[] = $row_gio['aqi_h_no2'];
													$arr_aqi_h_co[] = $row_gio['aqi_h_co'];
													$arr_aqi_h_o3[] = $row_gio['aqi_h_o3'];
													$arr_aqi_h_tsp[] = $row_gio['aqi_h_tsp'];
													$arr_aqi_h_pm10[] = $row_gio['aqi_h_pm10'];
													$arr_aqi_h_pm25[] = $row_gio['aqi_h_pm25'];
													$arr_aqi_h_pb[] = $row_gio['aqi_h_pb'];

													$sodong++;

													//->so2
													if($row_gio['so2']!=-1){
														$so2_tb += $row_gio['so2'];
														$sodong_so2 ++ ;
													}else{
														$row_so2_empty ++ ;}

													//->no2
													if($row_gio['no2'] !=-1){
														$no2_tb += $row_gio['no2'];
														$sodong_no2 ++ ;
													}else{$row_no2_empty ++ ;}

													//->tsp
													if($row_gio['tsp']!=-1){
													$tsp_tb += $row_gio['tsp'];
													$sodong_tsp ++ ;
													}else{$row_tsp_empty ++ ;}

													//->pm10
													if($row_gio['pm10']!=-1){
													$pm10_tb += $row_gio['pm10'];
													$sodong_pm10 ++ ;
													}else{$row_pm10_empty ++ ;}

													//->pm25
													if($row_gio['pm25']!=-1){
													$pm25_tb += $row_gio['pm25'];
													$sodong_pm25 ++ ;
													}else{$row_pm25_empty ++ ;}

													//->pb
													if($row_gio['pb']!=-1){
													$pb_tb += $row_gio['pb'];
													$sodong_pb ++ ;
													}else{$row_pb_empty ++ ;}

												}// end while tramngay

													$aqi_so2_24h = 0;
													$aqi_no2_24h = 0;
													$aqi_tsp_24h = 0;
													$aqi_pm10_24h = 0;
													$aqi_pm25_24h = 0;
													$aqi_pb_24h = 0;

													//->aqi_tb_24h_so2
													if($row_so2_empty!=$sodong){
													$aqi_so2_24h = round(($so2_tb/$sodong_so2)*100/125 , 0, PHP_ROUND_HALF_UP);
													}else{$aqi_so2_24h = -1 ;}

													//->aqi_tb_24h_no2
													if($row_no2_empty!=$sodong){
														$aqi_no2_24h = round(($no2_tb/$sodong_no2), 0, PHP_ROUND_HALF_UP);
													}else{$aqi_no2_24h = -1 ;}

													//->aqi_tb_24h_tsp
													if($row_tsp_empty!=$sodong){
														$aqi_tsp_24h = round(($tsp_tb/$sodong_tsp)/2 , 0, PHP_ROUND_HALF_UP);
													}else{$aqi_tsp_24h = -1 ;}

													//->aqi_ngay_pm10
													if($row_pm10_empty!=$sodong){
														$aqi_pm10_24h = round(($pm10_tb/$sodong_pm10)*10/15 , 0, PHP_ROUND_HALF_UP);
													}else{$aqi_pm10_24h = -1 ;}

													//->aqi_ngay_pm25
													if($row_pm25_empty!=$sodong){
														$aqi_pm25_24h = round(($pm25_tb/$sodong_pm25)*2 , 0, PHP_ROUND_HALF_UP);
													}else{$aqi_pm25_24h = -1 ;}

													//->aqi_ngay_pb
													if($row_pb_empty!=$sodong){
														$aqi_pb_24h = round(($pb_tb/$sodong_pb)*100/1.5 , 0, PHP_ROUND_HALF_UP);
													}else{$aqi_pb_24h = -1 ;}

													$arr_aqi_so2_ngay[] = max(max($arr_aqi_h_so2),$aqi_so2_24h);
													$arr_aqi_no2_ngay[] = max(max($arr_aqi_h_no2),$aqi_no2_24h);
													$arr_aqi_co_ngay[] = max($arr_aqi_h_co);
													$arr_aqi_o3_ngay[] = max($arr_aqi_h_o3);
													$arr_aqi_tsp_ngay[] = max(max($arr_aqi_h_tsp),$aqi_tsp_24h);
													$arr_aqi_pm10_ngay[] = max(max($arr_aqi_h_pm10),$aqi_pm10_24h);
													$arr_aqi_pm25_ngay[] = max(max($arr_aqi_h_pm25),$aqi_pm25_24h);
													$arr_aqi_pb_ngay[] = max(max($arr_aqi_h_pb),$aqi_pb_24h);

													$arr_aqi_tram_ngay[] =max(max(max($arr_aqi_h_so2),$aqi_so2_24h),max(max($arr_aqi_h_no2),$aqi_no2_24h),max($arr_aqi_h_co),max($arr_aqi_h_o3),max(max($arr_aqi_h_tsp),$aqi_tsp_24h),max(max($arr_aqi_h_pm10),$aqi_pm10_24h),max(max($arr_aqi_h_pm25),$aqi_pm25_24h),max(max($arr_aqi_h_pb),$aqi_pb_24h));


											}

										}
										for($x = 0; $x < $sodong_ngay; $x++){
										$tenthongso="";
										if($arr_aqi_tram_ngay[$x] == $arr_aqi_so2_ngay[$x]){
											$tenthongso= "SO2";
											
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_no2_ngay[$x]){
											$tenthongso= "NO2";
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_co_ngay[$x]){
											$tenthongso= "CO";
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_o3_ngay[$x]){
											$tenthongso= "O3";
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_tsp_ngay[$x]){
											$tenthongso= "TSP";
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_pm10_ngay[$x]){
											$tenthongso= "PM10";
											$tenthongso_max[] = $tenthongso;
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_pm25_ngay[$x]){
											$tenthongso= "PM25";
											$tenthongso_max[] = $tenthongso; 
										}

										if($arr_aqi_tram_ngay[$x] == $arr_aqi_pb_ngay[$x]){
											$tenthongso= "Pb";
											$tenthongso_max[] = $tenthongso;
										}
										}
									} //-> tinh toan chi so aqi_ngay

									
									for($x = 0; $x < $sodong_ngay; $x++){
										$update_aqi_h = "UPDATE $name[0]_ngay SET aqi_ngay_so2='$arr_aqi_so2_ngay[$x]',aqi_ngay_co='$arr_aqi_co_ngay[$x]',aqi_ngay_no2='$arr_aqi_no2_ngay[$x]',aqi_ngay_o3='$arr_aqi_o3_ngay[$x]',aqi_ngay_tsp='$arr_aqi_tsp_ngay[$x]',aqi_ngay_pm10='$arr_aqi_pm10_ngay[$x]',aqi_ngay_pm25='$arr_aqi_pm25_ngay[$x]',aqi_ngay_pb='$arr_aqi_pb_ngay[$x]',aqi_ngay_tram='$arr_aqi_tram_ngay[$x]',thongso_ngay_max='$tenthongso_max[$x]'
											where id = $idi[$x] ";
											pg_query($conn,"$update_aqi_h");
									}
								}//->ket thuc if content
							}
						}else{
							?>
							<script type="text/javascript">alert("Tên file đã tồn tại !");</script>
							<?php
						}
					}
				}
			}
		} //-> end btnimport	
	 ?>
	 <div class="content table-responsive" style="background-color :white ">
		<table class="table table-bordered" style="margin-top:15px" id="tbl-aqihistory">
			<thead>
				<tr class="warning">
					<th>Tên File</th>
					<th>Thời gian</th>
					<th>Chức năng</th>
				</tr>
				</thead>
				<?php
				$tenfile = "SELECT * FROM dulieufileaqi where tentaikhoan = '$tentaikhoan' ";
				$result_tenfile = pg_query($conn, "$tenfile");
				if($result_tenfile==true){
					$count_rows_tenfile = pg_num_rows($result_tenfile);
					if($count_rows_tenfile==0){
						?>
						<tr class="success"><td colspan="3" style="text-align: center;"><h4>Không có file lưu trữ...</h4></td></tr>
						<?php 
					}else{
						while($row = pg_fetch_row($result_tenfile)) {
							?>
							<tbody>
								<tr>
									<td> <a style="color:#0000cc" href="dashboard-aqi.php?username=<?php echo $tentaikhoan ?>&active=dulieuuser&&filename=<?php echo $row[2];?>" > <?php  echo $row[2];?></a></td>
									<td><?php echo $row[3]; ?></td>
									<td><a href="aqi-history-xoa.php?username=<?php echo $tentaikhoan ?>&tenfile=<?php echo $row[2]; ?>" class="btn" style="color:white;background: red; margin-left:20px">Xóa</a></td>    
								</tr>
							</tbody>
							<?php
						}
					} 
				} ?>
			
		</table>
	</div><!-- End tbl-history -->
</div> <!-- end -->

<script type="text/javascript">
    $(document).ready( function () {
    $('#tbl-history').DataTable();
} );
  </script>
<script type="text/javascript">
		$(document).ready( function () {
			$('#tbl-aqihistory').DataTable();
		} );

		$('#tbl-aqihistory').dataTable( {

			"lengthMenu": [ 7,15, 25, 50, 100 ],

			"language": {
				"search": "Tìm Kiếm",
				"lengthMenu": "Hiển thị _MENU_ dòng",
				"paginate": {
					"first":      "First",
					"last":       "Last",
					"next":       "Sau",
					"previous":   "Trước",
				},
				"info":"",
				"infoFiltered":"",
				"infoEmpty":"",
				 "zeroRecords":    "Không có kết quả tìm kiếm",
			}
		});

</script>
