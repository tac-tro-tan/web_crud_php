<?php if (session_id() === '')session_start();?>
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
    table{
    width: 100%;
	}
	th{
    width: 20%;
    text-align: center;
	}
</style>
</HEAD>
<BODY>
<form name="f2" method="" value="">
    <div class="blue-square-container">
    <div class="blue-square">
<TABLE >
<caption style=color:red;>DU LIEU PHONG BAN</caption>
<tr>
  	<th>
  		<a href="http://localhost/bt2/capnhat.php">cập nhật</a>
  	</th>
	<th>
		<a href="http://localhost/bt2/formthem.php">thêm</a>
	</th>
	<th>
		<a href="http://localhost/bt2/formxoa.php">xóa</a>
	</th>
	<th>
		<a href="http://localhost/bt2/formxoatatca.php">xóa tất cả</a>
	</th>
  <th>
    <a href="http://localhost/bt2/dangxuat.php"><?php echo $_SESSION['use']; ?> đăng xuất</a>
  </th>
</tr>
<?php

$chuoi_ket_noi1=  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result1 = mysqli_query($chuoi_ket_noi1,"Select * from admin"); //lấy dữ liệu trong bảng 
$num1 = mysqli_num_rows($result1);
if($num1 > 0){
while ( $row= mysqli_fetch_array($result1)) {
# code...
if($_SESSION['use']==$row['username'] && $_SESSION['pass']==$row['password']){

$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result = mysqli_query($chuoi_ket_noi,"Select * from phongban"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
if($num > 0){
      echo "<table border='1' cellpadding = '5'>
            <tr>         
              <td>IDPB</td>
              <td>tenPB</td>
              <td>mota</td>
            </tr>";
while ( $row= mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['IDPB']."</td>";
        echo "<td>".$row['tenPB']."</td>";
        echo "<td>".$row['mota']."</td>";
        echo "</tr>";
}
echo "</table>";
echo '</br>';
}
mysqli_close($chuoi_ket_noi);
mysqli_close($chuoi_ket_noi1);
}else{header("Location:login.php");}
}
}
?>
</div>
</div>
</form>
</BODY>
</HTML>