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
$result = mysqli_query($chuoi_ket_noi,"Select * from phongban"); //lấy dữ liệu trong bảng 
$num = mysqli_num_rows($result);
if($num > 0){
    echo "<table border='1' cellpadding = '5'>
      	<caption>du lieu phong ban</caption>
        <tr>         
            <td>IDPB</td>
            <td>tenPB</td>
            <td>mota</td>
            <td>nhân viên thuộc PB</td>
        </tr>";
while ( $row= mysqli_fetch_array($result)) {
    $IDPB=$row["IDPB"];
    $connect = "http://localhost/bt2/thongtinnvpb2.php?id_pb=".$IDPB ;
    echo "<tr>";
    echo "<td>".$row['IDPB']."</td>";
    echo "<td>".$row['tenPB']."</td>";
    echo "<td>".$row['mota']."</td>";
    echo "<td><a href='$connect'>xemnv</a></td>";
    echo "</tr>";
}
echo "</table>";
echo '</form></br>';

}
mysqli_close($chuoi_ket_noi);
?>
</div>
</div>
</form>
</BODY>
</HTML>