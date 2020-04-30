<?php
include_once('conn_course.php');
$id = $_GET['id'];
$sql = "delete from course
		where id = '$id'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_course.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_course.php';
			</script>";
}
mysqli_close($conn);
?>