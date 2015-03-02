        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Expenses <small>Collection history</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Expenses <a href="?do=new_expense">&gt;&gt;Add Expenses</a></h3>
                </div>
                <?php if(isset($_GET['addexpense'])){ 
				include("include/do_new_expense.php");
				 } ?><!-- /.box-header -->
                <div class="box-body">
                <?php
				$sql = "SELECT * FROM expenses WHERE club_id='$club_id'"; 
				$result = $conn->query($sql);	?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Particulars</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Approver</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $date =  $row["date"]; 
				  $particulars =  $row["particulars"];
				  $cat =  $row["category"];
				  $amount =  $row["amount"];
				  $approver =  $row["approvedby"]; ?>
                      <tr>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $particulars; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td><?php echo number_format($amount); ?></td>
                        <td><?php echo $approver; ?></td>
                      </tr>
                    <?php } ?>  
                      <tr>
                        <td colspan="5">No data</td>
                      </tr>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      