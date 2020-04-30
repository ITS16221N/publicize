<?php  //update_form.php
include_once('conn_course.php');
$id = $_GET["id"];
$sql = ("SELECT
			Course_id
		,	Course_name
		,	Course_nameENG
		,	Course_price
		FROM course 
		WHERE id = $id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$Course_id = $row["Course_id"];
	$Course_name = $row["Course_name"];
	$Course_nameENG = $row["Course_nameENG"];
	$Course_price = $row["Course_price"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_course.php" method="post">
<input type="hidden" name="id" value=<?php echo $id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลหลักสูตรระยะสั้น</td></tr></table>
	<table align = center width = "30%" border = "0">
	<tr><td align=right><b>รหัสหลักสูตร :</td><td><input type="text"name="Course_id" value="<?php echo $Course_id; ?>"></td></tr>
	<tr><td align=right><b>ชื่อหลักสูตร :</td><td><input type="text"name="Course_name" value="<?php echo $Course_name; ?>"></td></tr>
	<tr><td align=right><b>ชื่อหลักสูตร(ENG) :</td><td><input type="text"name="Course_nameENG"value="<?php echo $Course_nameENG; ?>"> <font color="red">*กรุณากรอกชื่อหลักสูตรเป็นภาษาอังกฤษ</font></td></tr>
	<tr><td align=right><b>ราคา/หลักสูตร :</td><td><input type="text"name="Course_price" value="<?php echo $Course_price; ?>"></td></tr>
	<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
	<td><input type= "submit" value="แก้ไขข้อมูล">
	<input type= "reset" value="ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>
