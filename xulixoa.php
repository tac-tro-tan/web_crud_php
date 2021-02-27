<?php
//if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;// xóa post cũ
$t11=NULL;
if(isset($_POST["t11"])) { $t11= $_POST["t11"]; }
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$sql1 = "DELETE FROM nhanvien WHERE nhanvien.IDPB = $t11;";
$sql = "DELETE FROM phongban WHERE phongban.IDPB = $t11;";

$result1 = mysqli_query($chuoi_ket_noi,$sql1); //lấy dữ liệu trong bảng 
$result = mysqli_query($chuoi_ket_noi,$sql);
if($result && $result1){
			header("Location: mucluc.php");
		}
		else{
			echo 'ERROR NOT FOUND 404';
		}
mysqli_close($chuoi_ket_noi);
?>