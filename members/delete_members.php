<?php
include_once('condb_members.php');
$mem_id= $_GET['mem_id'];
$sql = "delete from members
		where mem_id = '$mem_id'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_members.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_members.php';
			</script>";
}
mysqli_close($conn);
?>