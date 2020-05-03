<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม

$mem_name_th = $_REQUEST['mem_name_th'];
$mem_surname_th = $_REQUEST['mem_surname_th'];
$mem_email = $_REQUEST['mem_email'];
$mem_pass = $_REQUEST['mem_pass'];
$mem_tel = $_REQUEST['mem_tel'];
$mem_address = $_REQUEST['mem_address'];
$mem_status = $_REQUEST['mem_status'];
$mem_prefix = $_REQUEST['mem_prefix'];
$mem_name_en = $_REQUEST['mem_name_en'];
$mem_surname_en = $_REQUEST['mem_surname_en'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE members SET
      mem_name_th='$mem_name_th' ,
      mem_surname_th='$mem_surname_th' ,
      mem_email='$mem_email' ,
      mem_pass='$mem_pass' ,
      mem_tel='$mem_tel' ,
      mem_address='$mem_address' ,
      mem_status='$mem_status' ,
      mem_prefix='$mem_prefix' ,
      mem_name_en='$mem_name_en' ,
      mem_surname_en='$mem_surname_en'
      WHERE mem_id='$mem_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลสำเร็จ');";
  //echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
  echo "</script>";
}
?>