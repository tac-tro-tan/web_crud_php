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

body {
    background-color: #cccccc;
}
</style>
</HEAD>
<BODY>
<form name="f1" method="post" action="http://localhost/bt2/xulilogin.php" value="">
	<div class="blue-square-container">
    <div class="blue-square">
<?php
$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu") or die('Không thể kết nối CSDL:' . mysql_error());
$result = mysqli_query($chuoi_ket_noi,"Select * from phongban"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
if($num > 0){
	echo '<form action="xulicapnhat.php">';
      echo "<table border='1' cellpadding = '5'>
      		<caption style=color:red;>du lieu phong ban</caption>
            <tr>         
              <td>IDPB</td>
              <td>tenPB</td>
              <td>mota</td>
              <td>cap nhat</td>
            </tr>";
while ( $row= mysqli_fetch_array($result)) {
	$connect = "http://localhost/bt2/formcapnhat.php/?id_pb=".$row["IDPB"] ;
        echo "<tr>";
        echo "<td>".$row['IDPB']."</td>";
        echo "<td>".$row['tenPB']."</td>";
        echo "<td>".$row['mota']."</td>";
        echo "<td><a href='$connect'>update</a></td>";
        echo "</tr>";
}
echo "</table>";
echo '</form></br>';
echo '<button><a href="http://localhost/bt2/mucluc.php">BACK</a></button>';
}
mysqli_close($chuoi_ket_noi);
?>
</div>
</div>
</form>
</BODY>
</HTML>