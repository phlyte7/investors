       <section class="content-header">
          <h1>
            Deposits
            <small>New Deposit</small>
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
                  <h3 class="box-title">Deposits </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="?do=new_deposit" enctype="multipart/form-data" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="text" class="form-control pull-right" id="reservation" data-date-format="mm/dd/yyyy" data-provide="datepicker" name="date"/>
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount</label>
                      <input type="text" class="form-control" id="amount" name="amount" >
                    </div>
                    <div class="form-group">
                      <label for="amount">Payment Period</label>
                      <input type="text" class="form-control pull-right" id="period" name="period"/>
                    </div>
                    <div class="form-group">
                      <label>Payment Method</label>
                      <select class="form-control" name="method">
                        <option value="Bank Deposit">Bank Deposit</option>
                        <option value="Bank Order">Bank Order</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Deposit Slip/Bank Order</label>
                      <input type="file" id="exampleInputFile" name="slip"></div>
                    
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
        
        