        <section class="content-header">
          <h1>
            Member Profile
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Bio Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php if(isset($_GET['update'])){ 
				include("include/do_update_account.php"); }?>
                <form action="?do=myprofile&update" method="post" role="form" enctype="multipart/form-data">
                  <div class="box-body">
 <div class="form-group">
                      
<input type="text" class="form-control" name="fname" <?php if(isset($fname)){ echo 'value="'.$fname.'"';} else { echo 'placeholder="First Name"'; } ?>  />
                    </div><div class="form-group">
                      
                      <input type="text" class="form-control" name="lname" <?php if(isset($lname)){ echo 'value="'.$lname.'"';} else { echo 'placeholder="Last Name"'; } ?>/>
                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" name="oname" <?php if(isset($oname)){ echo 'value="'.$oname.'"';} else { echo 'placeholder="Other Names"'; } ?>/>
                    </div>
                    
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input <?php if($gender=='M'){ echo 'checked="checked"'; } ?> type="radio" name="gender" id="optionsRadios2" value="M">
                          Male
                        </label>
                        <label>
                          <input <?php if($gender=='F'){ echo 'checked="checked"'; } ?> type="radio" name="gender" id="optionsRadios2" value="F">
                          Female
                        </label>
                      </div>

                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" name="occupation" placeholder="Occupation" <?php if(isset($occ)){ echo 'value="'.$occ.'"';} else { echo 'placeholder="Occupation"'; } ?>/>
                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" name="date_joined" <?php if(isset($profile_date)){ echo 'value="'.$profile_date.'"';} else { echo 'placeholder="Date when joined club"'; } ?> data-date-format="mm/dd/yyyy" data-provide="datepicker"/>
                    </div>
                               <div class="form-group">
                      
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" <?php if(isset($email)){ echo 'value="'.$email.'"';} else { echo 'placeholder="Enter email"'; } ?>>
                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" name="phone" <?php if(isset($phone)){ echo 'value="'.$phone.'"';} else { echo 'placeholder="Phone number"'; } ?>/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload profile picture</label>
                      <input name="slip" type="file" id="exampleInputFile">
                      
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