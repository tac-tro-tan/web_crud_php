<?php
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$sql = "DELETE FROM phongban ;";
$sql1 = "DELETE FROM nhanvien;";

$result1 = mysqli_query($chuoi_ket_noi,$sql1);
$result = mysqli_query($chuoi_ket_noi,$sql); //lấy dữ liệu trong bảng 
if($result && $result1){
			echo 'Data DELETE';
			header("Location: mucluc.php");
		}
		else{
			echo 'ERROR NOT FOUND 404';
		}
mysqli_close($chuoi_ket_noi);
?>