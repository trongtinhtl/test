<?php
	require("conn.php");
	if(isset($_POST['dangnhap']) && isset($_POST['taikhoan']) && isset($_POST['matkhau'])) {
		$slc_taikhoan = "SELECT tentaikhoan,matkhau from taikhoan";
		$query_taikhoan = pg_query($conn,"$slc_taikhoan");
		$tentaikhoan = $_POST['taikhoan'];
		$matkhau =$_POST['matkhau'];
		if($tentaikhoan == 'admin'){
			header('Location: quanly/dashboard.php');
		}elseif($tentaikhoan == '' || $matkhau ==''){
			header('Location: index.php');
		}else{
			if($query_taikhoan==true){
				$stt = 0; 
			while ($row = pg_fetch_array($query_taikhoan)) {
				if( $tentaikhoan==$row[0] && $matkhau ==$row[1]){
					$stt ++ ;
				}// ->end if kiem tra
			}
			if($stt==1){
				header("Location: index-user.php?username=$tentaikhoan");
			}else{
				require("index-error.php");
			}
		}
	}
	}else{
		header('Location: index.php');
	} 
?>