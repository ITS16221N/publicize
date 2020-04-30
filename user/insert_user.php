<?php
include_once('conn_user.php');
$User_username = $_POST['User_username'];
$User_password = $_POST['User_password'];
$User_name = $_POST['User_name'];
$User_nameENG = $_POST['User_nameENG'];
$User_phone= $_POST['User_phone'];
$User_add= $_POST['User_add'];
if($User_username=="" || empty($User_username)|| $User_password=="" || empty($User_password)|| $User_name=="" || empty($User_name)|| $User_nameENG=="" || empty($User_nameENG)|| $User_phone=="" || empty($User_phone) || $User_add=="" || empty($User_add))
{
	echo "กรุณากรอกชื่อ-นามสกุล";
	echo "<script language='Javascript'>
			alert('กรุณากรอกชื่อ-นามสกุล')
			window.location='insert_form_user.php';
			</script>";
}else{
$sql = "insert into user(User_username,User_password,User_name,User_nameENG,User_phone,User_add)
values('$User_username','$User_password','$User_name','$User_nameENG','$User_phone','$User_add')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_user.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
}
mysqli_close($conn);
?>