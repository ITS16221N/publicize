<?php?>
<!DOCTYPE html>
<html>
<body>
<form action = "insert_course.php" method = "post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลหลักสูตรระยะสั้น</td></tr></table>
	<table align = center width = "30%" border = "0">
		<tr><td align=right><b>รหัสหลักสูตร :</td><td><input type = "text" name = "Course_id"> </td></tr>
		<tr><td align=right><b>ชื่อหลักสูตรภาษาไทย :</td><td><input type = "text" name = "Course_name"> </td></tr>
		<tr><td align=right><b>ชื่อหลักสูตรภาษาอังกฤษ :</td><td><input type = "text" name = "Course_nameENG"><font color="red"> *กรุณากรอกชื่อหลักสูตรเป็นภาษาอังกฤษ</font><br> </td></tr>
		<tr><td align=right><b>ราคา/หลักสูตร :</td><td><input type = "text" name = "Course_price"> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type = "submit" value = "บันทึก">
			 <input type = "reset" value = "ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>