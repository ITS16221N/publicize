<?php
include_once('conn_course.php');
$id = $_POST["id"];
$Course_id = $_POST["Course_id"];
$Course_name = $_POST["Course_name"];
$Course_nameENG = $_POST["Course_nameENG"];
$Course_price = $_POST["Course_price"];
$sql = "update course set 
			Course_id = '$Course_id'
		,	Course_name = '$Course_name'
		,	Course_nameENG = '$Course_nameENG'
		,	Course_price = '$Course_price'
		WHERE id = $id; ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_course.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_course.php';
			</script>";
}
mysqli_close($conn);
?>