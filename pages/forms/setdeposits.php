        <section class="content-header">
          <h1>
            Club Settings
            <small>Deposits</small>
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
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="box-header">
                  <h3 class="box-title">Deposit Settings</h3>
                </div>
                    <div class="form-group">
                      <label>Monthly Deposit</label>
                      <input type="text" class="form-control" name="occupation" placeholder="Occupation" <?php if(isset($occ)){ echo 'value="'.$occ.'"';} else { echo 'placeholder="Occupation"'; } ?>/>
                      
                    </div>
                    <div class="form-group">
                 <label>Deadline</label>
                 <select class="form-control" name="legal_status">
                        <option value="t">Last day of the month</option>
                        <option value="3">Last Friday of the month</option>
                        <option value="2">First Monday of next month</option>
                        <option value="4">First Friday of next month</option>
                 </select>
                 </div>
                 <div class="form-group">
                 <div class="checkbox">
                 <label>Enforce Auto Penalty</label>
                 <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                 </div>
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