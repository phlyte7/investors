        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Penalties<small>Penalty history</small>
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
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php
				$sql = "SELECT * FROM deposits WHERE member_id='$id'"; 
				$result = $conn->query($sql);	?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Penalty</th>
                        <th>Amount</th>
                        <th>Date Cleared</th>
                        <th>Verified</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $date =  $row["date"]; 
				  $amount =  $row["penalty"];
				  $method =  $row["amount"];
				  $paid_for =  $row["date_cleared"];
				  $verified =  $row["verified"]; ?>
                      <tr>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $method; ?></td>
                        <td><?php echo $paid_for; ?></td>
                        <td><?php echo $verified; ?></td>
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
      