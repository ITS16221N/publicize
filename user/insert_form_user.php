<?php?>
<!DOCTYPE html>
<html>
<body>
<form action = "insert_user.php" method = "post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลสมาชิก</td></tr></table>
	<table align = center width = "40%" border = "0">
		<tr><td align=right><b>Username :</td><td><input type = "text" name = "User_username"> </td></tr>
		<tr><td align=right><b>Password :</td><td><input type = "text" name = "User_password"> </td></tr>
		<tr><td align=right><b>ชื่อ-นามสกุล(ไทย) :</td><td><input type = "text" name = "User_name"> </td></tr>
		<tr><td align=right><b>ชื่อ-นามสกุล(ENG) :</td><td><input type = "text" name = "User_nameENG"><font color="red"> *กรุณากรอกชื่อหลักสูตรเป็นภาษาอังกฤษ</font><br> </td></tr>
		<tr><td align=right><b>เบอร์ติดต่อ :</td><td><input type = "text" name = "User_phone"> </td></tr>
		<tr><td align=right><b>ที่อยู่ :</td><td><input type = "text" name = "User_add"> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type = "submit" value = "บันทึก">
			 <input type = "reset" value = "ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>