<?php
	$idpb_update = $_GET['id_pb'];
	session_start();
	$_SESSION['temp'] = $idpb_update;
?>
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
<form name="f1" method="post" action="http://localhost/bt2/xulicapnhat.php" value="">
	<div class="blue-square-container">
    <div class="blue-square">
<TABLE >
<CAPTION> FORMCAPNHAT </CAPTION>
<TR>
  <TH>tenPB:<input type="Text" name="t6" value=""></TH>
</TR>
<TR>
  <TH>mota:<input type="text" name="t7" value=""></TH>
</TR>
<TR>
 <TH>
  <input type="submit" id="btn" value="OK"/>
  <button type="button" onclick="quay_lai_trang_truoc()">BACK</button>
</TH>
  <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
</TR>
</TABLE>
</div>
</div>
</form>
</BODY>
</HTML>
