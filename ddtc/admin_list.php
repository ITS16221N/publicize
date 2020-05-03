 <?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM members ORDER BY mem_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr bgcolor='#4FADED'>
                      <td>ชื่อสมาชิกภาษาไทย</td>
                      <td>นามสกุลสมาชิกภาษาไทย</td>
                      <td>อีเมล์สมาชิก</td>
                      <td>รหัสผ่านสมาชิก</td>
                      <td>เบอรฺ์ติดต่อสมาชิก</td>
                      <td>ที่อยู่สมาชิก</td>
                      <td>สถานะสมาชิก</td>
                      <td>คำนำหน้าชื่อ</td>
                      <td>ชื่อสมาชิกภาษาอังกฤษ</td>
                      <td>นามสกุลสมาชิกภาษาอังกฤษ</td>
                      <td>แก้ไขม้อมูล</td>
                      <td>ลบข้อมูล</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["mem_name_th"] .  "</td> ";
                    echo "<td>" .$row["mem_surname_th"] .  "</td> ";
                    echo "<td>" .$row["mem_email"] .  "</td> ";
                    echo "<td>" .$row["mem_pass"] .  "</td> ";
                    echo "<td>" .$row["mem_tel"] .  "</td> ";
                    echo "<td>" .$row["mem_address"] .  "</td> ";
                    echo "<td>" .$row["mem_status"] .  "</td> ";
                    echo "<td>" .$row["mem_prefix"] .  "</td> ";
                    echo "<td>" .$row["mem_name_en"] .  "</td> ";
                    echo "<td>" .$row["mem_surname_en"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='admin.php?act=edit&mem_id=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='admin_form_del_db.php?mem_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>