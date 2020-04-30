<?php
include_once('conn_user.php');
$User_id = $_POST["User_id"];
$User_username = $_POST["User_username"];
$User_password = $_POST["User_password"];
$User_name = $_POST["User_name"];
$User_nameENG = $_POST["User_nameENG"];
$User_phone = $_POST["User_phone"];
$User_add = $_POST["User_add"];
$sql = "update user set 
			User_id = '$User_id'
		,	User_username = '$User_username'
		,	User_password = '$User_password'	
		,	User_name = '$User_name'
		,	User_nameENG = '$User_nameENG'
		,	User_phone = '$User_phone'
		,	User_add = '$User_add'
		WHERE User_id = $User_id; ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_user.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_user.php';
			</script>";
}
mysqli_close($conn);
?>