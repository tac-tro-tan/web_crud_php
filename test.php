<?php

    // Khởi tạo session PHP nếu chưa khởi tạo
    if (session_id() === '')
    session_start();
	$_SESSION["user_id"] = "TT123456";
	$_SESSION["username"] = "david123";
    if( isset( $_SESSION['countr'] ) )
    {
        // Đếm mỗi lần truy cập
        $_SESSION['countr'] += 1;

    }
    else
    {
        // Lần đầu truy cập
        $_SESSION['countr'] = 1;
    }

    $msg = "<p>Bạn là vào truy cập ".  $_SESSION['countr'] . ' lần vào trang</p>';
    echo $msg;
?>
<form name="user_form">
  <div>
    <label>Email:</label>
    <input id="user_email" name="user_email" type="email">
  </div>
  <div>
    <label>Password:</label>
    <input id="user_password" name="user_password" type="password">
  </div>
  <div>
    <input id="login" type="submit" value="Login" onclick="return loginUser()">
  </div>
  <div>
    <input id="register" type="submit" value="Register" onclick="return registerUser()">
  </div>
  <script language='javascript'>
  	function loginUser() {
  document.user_form.action = "login.html";
  alert(document.user_form.action);
  return false;
}

function registerUser() {
  document.user_form.action = "register.html";
  alert(document.user_form.action);
  return false;
}
  </script>
</form>

