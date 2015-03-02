        <section class="content-header">
          <h1>
            Investment club management system
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <!-- /.box -->
			  <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">The most extensive platform for your investment club</h3>
                </div><!-- /.box-header -->
                <div class="box-body">Simplified for </div>
                <!-- /.box-body -->
              </div>
              <!-- Form Element sizes -->
              <!-- /.box -->

              <!-- /.box -->

              <!-- Input addon -->
              <!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-header">
                  <h3 class="box-title">Register new membership</h3>
                </div>
                <!-- form start -->
                <form role="form" action="welcome.php?do=register" method="post">
                  <div class="box-body">
                  <div class="form-group">
                      
                      <input type="text" name="name" class="form-control" placeholder="Full name" id="first_name" />
                    </div>
				 <div class="form-group">
                      
                      <input type="text" name="occupation" class="form-control" placeholder="Occupation" id="occupation" />
                    </div>
                    
                    
                    <div class="form-group">
                      
                      <input type="text" name="email" class="form-control" placeholder="Email Address" id="email_sign_up"/>
                    </div><div class="form-group">
                      
                      <input type="text" name="phone" class="form-control" placeholder="Phone number"/>
                    </div>
                    
                    <div class="form-group">
                      <div class="checkbox">
                      <span style="color:#999">Gender</span>
                        <label >        
                            <input type="radio" name="gender" id="optionsRadios2" value="M">
                          Male
                        </label>
                      
                        <label>
                          <input type="radio" name="gender" id="optionsRadios2" value="F">
                          Female
                        </label>
                      </div>

                    </div>
                    
                               <div class="form-group">
                      
                      <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                      
                      <input type="password" name="password" class="form-control" placeholder="Password" id="password_sign_up"/>
                    </div>
                    <div class="form-group">
                      
                      <input type="password" name="password2" class="form-control" placeholder="Retype password" id="confirm_password_sign_up"/>
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                    Already registered, <a href="login.php">sign in</a>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->