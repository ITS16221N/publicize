<?php  //update_form.php
include_once('condb_members.php');
$mem_id = $_GET["mem_id"];
$sql = ("SELECT
			mem_name_th
		,	mem_surname_th
		,	mem_email
		,	mem_pass
        ,	mem_tel
        ,	mem_address
        ,	mem_status
        ,	mem_prefix
        ,	mem_name_en
        ,	mem_surname_en
		FROM members 
		WHERE mem_id = $mem_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$mem_name_th = $row["mem_name_th"];
	$mem_surname_th = $row["mem_surname_th"];
    $mem_email  = $row["mem_email"];
    $mem_pass  = $row["mem_pass"];
    $mem_tel = $row["mem_tel"];
    $mem_address = $row["mem_address"];
    $mem_status = $row["mem_status"];
    $mem_prefix = $row["mem_prefix"];
    $mem_name_en= $row["mem_name_en"];
    $mem_surname_en= $row["mem_surname_en"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_members.php" method="post">
<input type="hidden" name="mem_id" value=<?php echo $mem_id;?>>
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลสมาชิก</td></tr></table>
	<table align = center width = "30%" border = "0">
	<tr><td align=right><b>ชื่อสมาชิกภาษาไทย :</td><td><input type="text"name="mem_name_th" value="<?php echo $mem_name_th; ?>"></td></tr>
	<tr><td align=right><b>นามสกุลสมาชิกภาษาไทย :</td><td><input type="text"name="mem_surname_th" value="<?php echo $mem_surname_th; ?>"></td></tr>
	<tr><td align=right><b>อีเมล์สมาชิก :</td><td><input type="text"name="mem_email"value="<?php echo $mem_email; ?>"> </td></tr>
	<tr><td align=right><b>รหัสผ่านสมาชิก :</td><td><input type="text"name="mem_pass" value="<?php echo $mem_pass; ?>"></td></tr>
    <tr><td align=right><b>เบอร์ติดต่อสมาชิก :</td><td><input type="text"name="mem_tel" value="<?php echo $mem_tel; ?>"></td></tr>
    <tr><td align=right><b>ที่อยู่สมาชิก :</td><td><input type="text"name="mem_address" value="<?php echo $mem_address; ?>"></td></tr>
    <tr><td align=right><b>สถานะสมาชิก :</td><td><input type="text"name="mem_status" value="<?php echo $mem_status; ?>"></td></tr>
    <tr><td align=right><b>คำนำหน้าชื่อ :</td><td><input type="text"name="mem_prefix" value="<?php echo $mem_prefix; ?>"></td></tr>
    <tr><td align=right><b>ชื่อสมาชิกภาษาอังกฤษ :</td><td><input type="text"name="mem_name_en" value="<?php echo $mem_name_en; ?>"></td></tr>
    <tr><td align=right><b>นามสกุลสมาชิกภาษาอังกฤษ :</td><td><input type="text"name="mem_surname_en" value="<?php echo $mem_surname_en; ?>"></td></tr>
	<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
	<td><input type= "submit" value="แก้ไขข้อมูล">
	<input type= "reset" value="ยกเลิก"><br> </td></tr>
	</table> <br>
</form>
</body>
</html>
