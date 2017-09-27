<?php
	if(isset($_POST['them'])){
		require("../conn.php");
		$tennguoidung = $_POST['tennguoidung'];
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];
		$mail = $_POST['email'];
		$them = "INSERT INTO taikhoan(tentaikhoan,tennguoidung,matkhau,mail) values ('$taikhoan','$tennguoidung','$matkhau','$mail')";
		$result_them = pg_query($conn , "$them");
		if($result_them== true){
			echo "<h3>Thêm dữ liệu thành công, bấm vào <a href=\"dashboard.php?username=admin&active=thongtinnv\"> đây </a> để quay lại</h3>";
		}
	} 
 ?>