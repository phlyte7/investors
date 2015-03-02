        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Deposits<small>Collections not verified</small>
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
                  <h3 class="box-title">Payment Details</h3>
                </div>
                <?php if(isset($_GET['do']) AND $_GET['do']=="new_deposit"){ 
				include("include/do_deposit.php");
				 } ?><!-- /.box-header -->
                <div class="box-body">
                <?php
				$sql = "SELECT * FROM deposits WHERE club_id='$club_id' AND verified='0' ORDER BY date DESC"; 
				$result = $conn->query($sql);	?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Paid for</th>
                        <th align="center">Verified</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $date =  $row["date"];
				  $member =  $row["member_id"]; 
				  $amount =  $row["amount"];
				  $method =  $row["method"];
				  $paid_for =  $row["payment_for"]; ?>
                      <tr>
                        <td><?php echo $date; ?></td>
                        <td><?php echo getMemberName($member); ?></td>
                        <td><?php echo number_format($amount); ?></td>
                        <td><?php echo $method; ?></td>
                        <td><?php echo getPaymentPeriod($paid_for); ?></td>
                        <td align="center"><input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"></td>
                      </tr>
                    <?php } ?>  
                      <tr>
                        <td colspan="6">No data</td>
                      </tr>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      