<?php
include_once('conn_course.php');
$Course_id = $_POST['Course_id'];
$Course_name = $_POST['Course_name'];
$Course_nameENG = $_POST['Course_nameENG'];
$Course_price= $_POST['Course_price'];
if($Course_id=="" || empty($Course_id)|| $Course_name=="" || empty($Course_name)|| $Course_nameENG=="" || empty($Course_nameENG)|| $Course_price=="" || empty($Course_price))
{
	echo "กรุณากรอกชื่อคอร์สเรียน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกชื่อคอร์สเรียน')
			window.location='insert_form_course.php';
			</script>";
}else{
$sql = "insert into course(Course_id,Course_name,Course_nameENG,Course_price)
values('$Course_id','$Course_name','$Course_nameENG','$Course_price')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_course.php';
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