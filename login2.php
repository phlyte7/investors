 
<section class="content-header">
          <h1>Sign in</h1>
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
                <form role="form" action="include/do_login.php" method="post">
                  <div class="box-body">
                  <?php if(isset($_GET['rsp'])){ $rsp = base64_decode($_GET['rsp']); ?>
                  <div class="form-group">
                      <p><?php echo $rsp; ?></p>
                  </div>
                  <?php } ?>
 				  <div class="form-group">
                      
                      <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                  <div class="form-group">
                      
                      <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    
                    
                    <div class="form-group">
            <input type="checkbox" name="remember_me"/> Remember me
          </div>
    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                   <p><a href="#">I forgot my password</a></p>

          			<p><a href="./" class="text-center">Register a new membership</a></p>
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
        