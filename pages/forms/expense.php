       <section class="content-header">
          <h1>
            Expenses
            <small>New Expense</small>
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
                  <h3 class="box-title">Expenses </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="?do=expenses&addexpense" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="text" class="form-control pull-right" id="reservation" data-date-format="mm/dd/yyyy" data-provide="datepicker" name="date"/>
                    </div>
                    <div class="form-group">
                      <label for="amount">Particulars</label>
                      <input type="text" class="form-control pull-right" id="particulars" name="particulars"/>
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control" name="category">
                        <option value="Investment">Investment</option>
                        <option value="Administration">Administration</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount</label>
                      <input type="text" class="form-control" id="amount" name="amount" >
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputFile">Approved By</label>
                      <input type="text" class="form-control" name="approver"></div>
                    
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
        
        