<?php include('h.php');?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
<div class="form-group">
            <div class="col-sm-6" align="left"> ชื่อสมาชิกภาษาไทย  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_name_th" type="text" required class="form-control" id="mem_name_th" placeholder="ชื่อสมาชิกภาษาไทย"/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> นามสกุลสมาชิกภาษาไทย  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_surname_th" type="text" required class="form-control" id="mem_surname_th" placeholder="นามสกุลสมาชิกภาษาไทย"/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> อีเมล์สมาชิก  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_email" type="text" required class="form-control" id="mem_email" placeholder="อีเมล์สมาชิก" pattern="^[a-zA-Z0-9]+$" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> รหัสผ่านสมาชิก  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_pass" type="password" required class="form-control" id="mem_pass" placeholder="รหัสผ่านสมาชิก" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> เบอร์ติดต่อสมาชิก  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_tel" type="text" required class="form-control" id="mem_tel" placeholder="เบอร์ติดต่อสมาชิก" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> ที่อยู่สมาชิก  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_address" type="text" required class="form-control" id="mem_address" placeholder="ที่อยู่สมาชิก" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> สถานะสมาชิก  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_status" type="text" required class="form-control" id="mem_status" placeholder="สถานะสมาชิก" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> คำนำหน้าชื่อ  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_prefix" type="text" required class="form-control" id="mem_prefix" placeholder="คำนำหน้าชื่อ" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> ชื่อสมาชิกภาษาอังกฤษ  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_name_en" type="text" required class="form-control" id="mem_name_en" placeholder="ชื่อสมาชิกภาษาอังกฤษ" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษเท่านั้น" minlength="2"/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> นามสกุลสมาชิกภาษาอังกฤษ  </div>
            <div class="col-sm-6" align="left">
              <input  name="mem_surname_en" type="text" required class="form-control" id="mem_surname_en" placeholder="นามสกุลสมาชิกภาษาอังกฤษ" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษเท่านั้น" minlength="2"/>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>