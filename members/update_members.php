<?php
include_once('condb_members.php');
$mem_id = $_POST["mem_id"];
$mem_name_th = $_POST["mem_name_th"];
$mem_surname_th = $_POST["mem_surname_th"];
$mem_email  = $_POST["mem_email"];
$mem_pass = $_POST["mem_pass"];
$mem_tel = $_POST["mem_tel"];
$mem_address = $_POST["mem_address"];
$mem_status = $_POST["mem_status"];
$mem_prefix= $_POST["mem_prefix"];
$mem_name_en= $_POST["mem_name_en"];
$mem_surname_en= $_POST["mem_surname_en"];
$sql = "update members set 
			mem_name_th = '$mem_name_th'
		,	mem_email = '$mem_email'
        ,	mem_pass = '$mem_pass'
        ,	mem_tel = '$mem_tel'
        ,	mem_address = '$mem_address'
        ,	mem_status = '$mem_status'
        ,	mem_prefix = '$mem_prefix'
        ,	mem_name_en = '$mem_name_en'
        ,	mem_surname_en = '$mem_surname_en'
		WHERE mem_id = $mem_id; ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_members.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_members.php';
			</script>";
}
mysqli_close($conn);
?>