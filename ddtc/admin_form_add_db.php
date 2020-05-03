<?php
include('condb.php');

$mem_name_th = $_POST['mem_name_th'];
$mem_surname_th = $_POST['mem_surname_th'];
$mem_email = $_POST['mem_email'];
$mem_pass = $_POST['mem_pass'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];
$mem_status = $_POST['mem_status'];
$mem_prefix = $_POST['mem_prefix'];
$mem_name_en = $_POST['mem_name_en'];
$mem_surname_en = $_POST['mem_surname_en'];

$sql ="INSERT INTO members
    
    (mem_name_th, mem_surname_th, mem_email, mem_pass, mem_tel, mem_address, mem_status, mem_prefix, mem_name_en, mem_surname_en) 

    VALUES 

    ('$mem_name_th', '$mem_surname_th', '$mem_email', '$mem_pass', '$mem_tel', '$mem_address', '$mem_status', '$mem_prefix', '$mem_name_en', '$mem_surname_en')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลสำเร็จ');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert(''เพิ่มข้อมูลไม่สำเร็จ!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>