<?php
$tentk = '';
$tenfile ='';
if(isset($_GET['tentaikhoan'])){
	$tentk = $_GET['tentaikhoan'];
	$tenfile = $_GET['tenfile'];
	$tenfile_ngay = $_GET['tenfile']."_ngay";
	$tenfile_thang = $_GET['tenfile']."_thang";

}
require("../conn.php");
$delete_data= " DELETE from dulieufilewqi where tentaikhoan='$tentk' and tenfile='$tenfile'";

$drop_tbl = "DROP TABLE $tenfile";
$drop_tbl_thang = "DROP TABLE $tenfile_thang";
pg_query($conn,"$drop_tbl");
pg_query($conn,"$drop_tbl_thang");

$result =pg_query($conn,"$delete_data");
if($result== true){
	echo "<h3>Bạn đã xóa dữ liệu thành công, bấm vào"."<a href=\"dashboard.php?username=admin&active=dulieuwqi\"> đây </a>". "để quay lại !</h3>";
}
 
?>
