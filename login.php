<?php
include_once('conn_course.php');
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "level";
  $MM_redirectLoginSuccess = "indexadmin.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_MyConnection, $MyConnection);
  	
  $LoginRS__query=sprintf("SELECT username, password, level FROM login WHERE username=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $MyConnection) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'level');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.น {text-align: center;
}
body {
	background-image: url();
	background-color: rgb(102,255,204);
}
</style>
</head>

<body>
<table width="1000" height="1105" border="1" align="center">
  <tr>
    <td height="52" colspan="6"><img src="ภาพ/แท็บบนสุด2.jpg" width="1000" height="52" border="0" /></td>
  </tr>
  <tr>
    <td height="62" colspan="6">โลโก้</td>
  </tr>
  <tr>
    <td height="56" colspan="6"><img src="ภาพ/หน้าแรก2.jpg" width="1000" height="56" usemap="#Map" border="0" /></td>
  </tr>
  <tr>
    <td width="231" colspan="6" valign="top" bgcolor="#FFFFFF"><h1 class="น">&nbsp;</h1>
      <table width="42%" border="0" align="center">
        <tr>
          <th align="center" scope="col"><img src="ภาพ/login8.jpg" width="186" height="183" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
      <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
        <table width="42%" border="0" align="center" cellspacing="1">
          <tr>
            <td height="30" colspan="2" align="center" bgcolor="#FFFF33"><span class="น">เข้าสู่ระบบ</span></td>
          </tr>
          <tr>
            <td width="31%" align="center" bgcolor="#66FFCC">Username</td>
            <td width="69%" align="left" bgcolor="#66FFCC"><label for="username"></label>
            <input type="text" name="username" id="username" /></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#66FFCC">Password</td>
            <td align="left" bgcolor="#66FFCC"><label for="password"></label>
            <input type="password" name="password" id="password" /></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFF33">&nbsp;</td>
            <td align="left" bgcolor="#FFFF33"><input type="submit" name="button" id="button" value="Login !!" /> 
              <a href="register.php">สมัครสมาชิก</a></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="382" colspan="6"><img src="ภาพ/หน้าติดต่อสื่อสาร.jpg" width="1000" height="378" /></td>
  </tr>
  <tr>
    <td height="20" colspan="6" align="center">จำนวนเข้าชม</td>
  </tr>
  <tr>
    <td height="20" colspan="6" align="center">Powered by JAABIT.com</td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="43,6,211,49" href="home1.php" target="_parent" />
  <area shape="rect" coords="218,7,388,50" href="search.php" target="_parent" />
  <area shape="rect" coords="397,6,573,52" href="indexproduct.php" />
  <area shape="rect" coords="582,9,768,53" href="hotproduct.php" />
  <area shape="rect" coords="776,8,967,53" href="about_us.php" />
</map>
</body>
</html>