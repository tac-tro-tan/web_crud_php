<HTML>
<HEAD>
  <style type="text/css">
  h1, h3 {
      text-align: center;
    }
    .blue-square-container {
      text-align: center;
    }
    .blue-square {
      display: inline-block;
    }
</style>
</HEAD>
<BODY>
<form name="f1" action="" method="post" value="">
  <div class="blue-square-container">
    <div class="blue-square">
          <table >
          <caption>tim kiem nhan vien</caption>
            <tr>
              <td>IDNV</td>
              <td>hoten</td>
            </tr>
            <tr>
              <td><input type='text' name='t1' value=''></td>
              <td><input type='text' name='t2' value=''></td>
            </tr>
            <tr>
              <td><button type="submit">Gửi</button>
            </td>
            </tr>
<?php
session_start();
if($_POST==NULL)$_SESSION['oldPOST']=NULL;
if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result = mysqli_query($chuoi_ket_noi,"Select * from nhanvien"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
$t1=NULL;$t2=NULL;
if(isset($_POST["t1"])) { $t1= $_POST["t1"]; }
if(isset($_POST["t2"])) { $t2= $_POST["t2"]; }
if($num > 0){
      echo  "<table border='1' cellpadding = '5'>
          <caption>du lieu nhan vien</caption>
            <tr>
              <td>IDNV</td>
              <td>hoten</td>
              <td>IDPB</td>
              <td>diachi</td>
            </tr>";
while ( $row= mysqli_fetch_array($result)) {
# code...
  if($t1==$row['IDNV']||$t2==$row['hoten'])
      { echo "<tr>";
        echo "<td>".$row['IDNV']."</td>";
        echo "<td>".$row['hoten']."</td>";
        echo "<td>".$row['IDPB']."</td>";
        echo "<td>".$row['DIACHI']."</td>";
        echo "</tr>";
      }
}
echo "</table>";
}
mysqli_close($chuoi_ket_noi);
?>
</table>
</div>
</div>
</form>
</BODY>
</HTML>
