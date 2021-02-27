<?php
session_start();
//if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;// xóa post cũ
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result = mysqli_query($chuoi_ket_noi,"Select * from admin"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
$t1=NULL;$t2=NULL;
if(isset($_POST["t1"])) { $t1= $_POST["t1"]; }
if(isset($_POST["t2"])) { $t2= $_POST["t2"]; }
if($num > 0){
while ( $row= mysqli_fetch_array($result)) {
# code...
  if($t1==$row['username'] && $t2==$row['password']){
    if(mysqli_num_rows($result)==0)
    	header("Location:login.php");
    else{$_SESSION['use']=$t1;
    	 $_SESSION['pass']=$t2;
    	 header("Location:mucluc.php");
    	} 
  }
  else{	header("Location:login.php");
	}
}
}
mysqli_close($chuoi_ket_noi);
?>