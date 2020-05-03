<?php?>
<!DOCTYPE html>
<html>
<body>
<form action = "insert_members.php" method = "post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลหลักสมาชิก</td></tr></table>
	<table align = center width = "30%" border = "0">
		<tr><td align=right><b>ชื่อสมาชิกภาษาไทย :</td><td><input type = "text" name = "mem_name_th"> </td></tr>
		<tr><td align=right><b>นามสกุลสมาชิกภาษาไทย :</td><td><input type = "text" name = "mem_surname_th"> </td></tr>
		<tr><td align=right><b>อีเมล์สมาชิก :</td><td><input type = "text" name = "mem_email"><br> </td></tr>
		<tr><td align=right><b>รหัสผ่านสมาชิก :</td><td><input type = "password" name = "mem_pass"> </td></tr>
        <tr><td align=right><b>เบอร์ติดต่อสมาชิก :</td><td><input type = "number" name = "mem_tel"> </td></tr>
        <tr><td align=right><b>ที่อยู่สมาชิก :</td><td><input type = "text" name = "mem_address"> </td></tr>
        <tr><td align=right><b>สถานะสมาชิก :</td><td><input type = "text" name = "mem_status"> </td></tr>
        <tr><td align=right><b>คำนำหน้าชื่อ :</td><td><input type = "text" name = "mem_prefix"> </td></tr>
        <tr><td align=right><b>ชื่อสมาชิกภาษาอังกฤษ :</td><td><input type = "text" name = "mem_name_en"> </td></tr>
        <tr><td align=right><b>นามสกุลสมาชิกภาษาอังกฤษ:</td><td><input type = "text" name = "mem_surname_en"> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type = "submit" value = "บันทึก">
			 <input type = "reset" value = "ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>