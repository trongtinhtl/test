<?php
	if(isset($_POST['test'])){
		if(isset($_POST['ngay_option']) && isset($_POST['thang_option']) && isset($_POST['nam_option'])){
			if($_POST['ngay_option'] != 'chonngay' && $_POST['thang_option'] != 'chonthang' &&   $_POST['nam_option'] != 'chonnam' && $_POST['tentram_option'] == 'chontram') {
				require("baocao_ngay.php");
			} else if($_POST['ngay_option'] != 'chonngay' && $_POST['thang_option'] != 'chonthang' &&   $_POST['nam_option'] != 'chonnam' && $_POST['tentram_option'] != 'chontram'){
				require("baocao_ngay_tram.php");
			} else if ($_POST['ngay_option'] == 'chonngay' && $_POST['thang_option'] != 'chonthang' && $_POST['nam_option'] != 'chonnam' && $_POST['tentram_option']== 'chontram') {
				require("baocao_thang.php");
			} else{
				require("baocao_thang_tram.php");
			}
		}
	}
	
 ?>