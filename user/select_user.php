<body background="ยังไม่ใส่.png">
<form method="get" id="form" enctype="multipart/form-data" action="" >
<BR><strong><center>ค้นหาข้อมูล</strong>
	<input type="text" name="search" size="30" value="" autocomplete="off">
	<input type="submit" value="ค้นหาข้อมูล"></center>
</form>
<font size ="5" ><center><b><u>แสดงข้อมูลรายละเอียดสมาชิก</b></u></center></font>
<?php
include_once('conn_user.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM user WHERE User_name LIKE '%$search%'";
$conn= mysqli_connect("localhost","root","root","publicize") 
or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
//query
$query=mysqli_query($conn,"SELECT COUNT(User_id) FROM user WHERE User_name LIKE '%$search%'");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 15;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

	$nquery=mysqli_query($conn,"SELECT * from  user WHERE User_name LIKE '%$search%' $limit");

	$paginationCtrls = '';

	if($last != 1){

	if ($pagenum > 1) {
$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">ย้อนกลับ</a> &nbsp; &nbsp; ';

		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}

	$paginationCtrls .= ''.$pagenum.' &nbsp; ';

	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">ถัดไป</a> ';
}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="nofollow">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div" rel="nofollow">
			<div style="height: 20px;"></div>
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-8">
					<table width="80%" class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info" >
							<th><center>รหัสผู้สมัคร</th>
							<th>Username</th>
							<th>Password</th>
							<th>ชื่อหลักสูตรภาษาไทย</th>
							<th>ชื่อหลักสูตรภาษาอังกฤษ</th>
							<th>เบอร์ติดต่อ</th>
							<th>ที่อยู่</th>
							<th><center>อัพเดทข้อมูล</th>
							<th><center>ลบข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($crow = mysqli_fetch_array($nquery)){
							?>
							<tr>
								<td><center><?php echo $crow['User_id']; ?></td>
								<td><?php echo $crow['User_username']; ?></td>
								<td><?php echo $crow['User_password']; ?></td>
								<td><?php echo $crow['User_name']; ?></td>
								<td><?php echo $crow['User_nameENG']; ?></td>
								<td><?php echo $crow['User_phone']; ?></td>
								<td><?php echo $crow['User_add']; ?></td>
								<td><center><?php echo "<a href='update_form_user.php?User_id=".$crow['User_id']."'><img src='edit.png' width='20px' height='20px'></a></td></a>"; ?></td>
								<td><center><?php echo "<a href='delete_user.php?User_id=".$crow['User_id']."' onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'><img src='delete.png' width='20px' height='20px'></a></td></a>"; ?></td>
							</tr>
							<?php
									}
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</body>
</html>

<!-- Ref : 

	https://www.sourcecodester.com/tutorials/php/11606/simple-pagination-using-phpmysqli.html

	-->
	<a href="insert_form_user.php"><center>เพิ่มข้อมูล</center></a>