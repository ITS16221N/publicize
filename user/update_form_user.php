<?php  //update_form.php
include_once('conn_user.php');
$User_id= $_GET["User_id"];
$sql = ("SELECT
			User_username
		,	User_password
		,	User_name
		,	User_nameENG
		,	User_phone
		,	User_add
		FROM user 
		WHERE User_id = $User_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$User_username = $row["User_username"];
	$User_password = $row["User_password"];
	$User_name = $row["User_name"];
	$User_nameENG = $row["User_nameENG"];
	$User_phone = $row["User_phone"];
	$User_add = $row["User_add"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_user.php" method="post">
<input type="hidden" name="User_id" value=<?php echo $User_id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลสมาชิก</td></tr></table>
	<table align = center width = "30%" border = "0">
	<tr><td align=right><b>รหัสผู้สมัคร :</td><td><input type="text"name="User_id" value=<?php echo $User_id; ?>></td></tr>
	<tr><td align=right><b>Username :</td><td><input type="text"name="User_username" value=<?php echo $User_username; ?>></td></tr>
	<tr><td align=right><b>Password :</td><td><input type="text"name="User_password" value=<?php echo $User_password; ?>></td></tr>
	<tr><td align=right><b>ชื่อ-นามสกุล(ไทย) :</td><td><input type="text"name="User_name" value=<?php echo $User_name; ?>></td></tr>
	<tr><td align=right><b>ชื่อ-นามสกุล(ENG):</td><td><input type="text"name="User_nameENG"value=<?php echo $User_nameENG; ?>> <font color="red">*กรุณากรอกชื่อหลักสูตรเป็นภาษาอังกฤษ</font></td></tr>
	<tr><td align=right><b>เบอร์ติดต่อ :</td><td><input type="text"name="User_phone" value=<?php echo $User_phone; ?>></td></tr>
	<tr><td align=right><b>ที่อยู่ :</td><td><input type="text"name="User_add" value=<?php echo $User_add; ?>></td></tr>
	<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
	<td><input type= "submit" value="แก้ไขข้อมูล">
	<input type= "reset" value="ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>
