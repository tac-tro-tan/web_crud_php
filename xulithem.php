<?php
//if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;// xóa post cũ
$t10=NULL;$t8=NULL;$t9=NULL;
if(isset($_POST["t8"])) { $t8= $_POST["t8"]; }
if(isset($_POST["t9"])) { $t9= $_POST["t9"]; }
if(isset($_POST["t10"])) { $t10= $_POST["t10"]; }
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$sql = "INSERT INTO phongban VALUES ('$t10','$t8', '$t9');";

$result = mysqli_query($chuoi_ket_noi,$sql); //lấy dữ liệu trong bảng 
if($result){
			echo 'Data INSERT';
			header("Location: mucluc.php");
		}
		else{
			echo 'ERROR NOT FOUND 404';
		}
mysqli_close($chuoi_ket_noi);
?>