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
<form name="f1" method="" value="">
  <div class="blue-square-container">
    <div class="blue-square">

<?php
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result = mysqli_query($chuoi_ket_noi,"Select * from nhanvien"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
if($num > 0){
      echo "<table border='1' cellpadding = '5'>
      		<caption><h3>du lieu nhan vien<h3></caption>
            <tr>
              <td>IDNV</td>
              <td>hoten</td>
              <td>IDPB</td>
              <td>diachi</td>
            </tr>";
while ( $row= mysqli_fetch_array($result)) {
# code...
        echo "<tr>";
        echo "<td>".$row['IDNV']."</td>";
        echo "<td>".$row['hoten']."</td>";
        echo "<td>".$row['IDPB']."</td>";
        echo "<td>".$row['DIACHI']."</td>";
        echo "</tr>";
}
echo "</table>";
}
mysqli_close($chuoi_ket_noi);
?>
</div>
</div>
</form>
</BODY>
</HTML>