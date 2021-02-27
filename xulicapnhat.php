<?php
session_start();
$idpb_updated = $_SESSION['temp'];
if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;// xóa post cũ
$t1=NULL;$t2=NULL;
if(isset($_POST["t6"])) { $t6= $_POST["t6"]; }
if(isset($_POST["t7"])) { $t7= $_POST["t7"]; }
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$sql = "UPDATE phongban SET tenPB='$t6', mota='$t7' WHERE phongban.IDPB = $idpb_updated  ";
$result = mysqli_query($chuoi_ket_noi,$sql); //lấy dữ liệu trong bảng 
if($result){
			echo 'Data Updated';
			header("Location: capnhat.php");
		}
		else{
			echo 'ERROR NOT FOUND 404';
		}
mysqli_close($chuoi_ket_noi);
?>