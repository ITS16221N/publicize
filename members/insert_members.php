<?php
include_once('condb_members.php');
$mem_name_th = $_POST['mem_name_th'];
$mem_surname_th = $_POST['mem_surname_th'];
$mem_email = $_POST['mem_email'];
$mem_pass= $_POST['mem_pass'];
$mem_tel= $_POST['mem_tel'];
$mem_address= $_POST['mem_address'];
$mem_status= $_POST['mem_status'];
$mem_prefix= $_POST['mem_prefix'];
$mem_name_en= $_POST['mem_name_en'];
$mem_surname_en= $_POST['mem_surname_en'];
if($mem_name_th=="" || empty($mem_name_th)|| $mem_surname_th=="" || empty($mem_surname_th)|| $mem_email=="" || empty($mem_email)|| $mem_pass=="" || empty($mem_pass)|| $mem_pass=="" || empty($mem_pass)|| $mem_tel=="" || empty($mem_tel)|| $mem_tel=="" || empty($mem_tel)|| $mem_address=="" || empty($mem_address)|| $mem_address=="" || empty($mem_address)|| $mem_status=="" || empty($mem_status)|| $mem_status=="" || empty($mem_status)|| $mem_prefix=="" || empty($mem_prefix)|| $mem_name_en=="" || empty($mem_name_en)|| $mem_surname_en=="" || empty($mem_surname_en))
{
	echo "กรุณากรอกชื่อคอร์สเรียน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกรายละเอียดให้ครบ')
			window.location='insert_form_members.php';
			</script>";
}else{
$sql = "insert into members(mem_name_th,mem_surname_th,mem_email,mem_pass,mem_tel,mem_address,mem_status,mem_prefix,mem_name_en,mem_surname_en)
values('$mem_name_th','$mem_surname_th','$mem_email','$mem_pass','$mem_tel','$mem_address','$mem_status','$mem_prefix','$mem_name_en','$mem_surname_en')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_members.php';
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