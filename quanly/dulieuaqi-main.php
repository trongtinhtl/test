<?php
$tentk = '';
$tenfile ='';
if(isset($_GET['tentaikhoan'])){
	$tentk = $_GET['tentaikhoan'];
	$tenfile = $_GET['tenfile'];
	$tenfile_ngay = $_GET['tenfile']."_ngay";

}
require("../conn.php");
$delete_data= " DELETE from dulieufileaqi where tentaikhoan='$tentk' and tenfile='$tenfile'";

$drop_tbl = "DROP TABLE $tenfile";
$drop_tbl_ngay = "DROP TABLE $tenfile_ngay";
pg_query($conn,"$drop_tbl");
pg_query($conn,"$drop_tbl_ngay");


$result =pg_query($conn,"$delete_data");
if($result== true){
	echo "<h3>Bạn đã xóa dữ liệu thành công, bấm vào"."<a href=\"dashboard.php?username=admin&active=dulieuaqi\"> đây </a>". "để quay lại !</h3>";
}
 
?>
