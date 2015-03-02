 <?php
 if(isset($_GET["ac"])){
	 $user = $_GET["ac"];
	$sql1 = "SELECT * FROM club_members WHERE ID='$user'"; 
	$result1 = $conn->query($sql1);
      while($row1 = $result1->fetch_assoc()) {  $user_name =  $row1["fname"]; } 
	 
 
 ?>       
        <section class="content-header">
          <h1>
            Register New Club <small>For <?php echo $user_name; ?></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="welcome.php?do=register_club" method="post">
                  <div class="box-body">
 <div class="form-group">
                      
                      <input type="text" name="club_name" class="form-control" placeholder="Club Name" id="club_name" />
                    </div><div class="form-group">
                      
                      <input type="text" name="date_started" class="form-control" placeholder="Date Started" id="date_stated" data-date-format="mm/dd/yyyy" data-provide="datepicker"/>
                    </div>
                    <div class="form-group">
                      <label>Owneship System</label>
                      <select class="form-control" name="ownership">
                        <option value="1">Equal Ownership System</option>
                        <option value="2">Unit Valuation System</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Legal Status</label>
                      <select class="form-control" name="legal_status">
                        <option value="1">Limited Liability Company</option>
                        <option value="2">General Partnership</option>
                        <option value="3">Self-Help Group</option>
                        <option value="4">Co-operative Society (SACCO)</option>
                        <option value="5">Other</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" name="city" class="form-control" placeholder="City"/>
                      <input type="hidden" name="user_id" id="user_id_hidden" value="<?php echo $user; ?>" />
                    </div>
    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <!-- /.box -->

              <!-- /.box -->

              <!-- Input addon -->
              <!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Instructions</h3>
                </div><!-- /.box-header -->
                <div class="box-body">Enter your prefered username and password</div>
                <!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
        <?php } else { echo "No active user. Click to login";} ?>