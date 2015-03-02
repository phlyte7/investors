        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Deposits<small>Collection history</small>
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
                  <h3 class="box-title">Verified Payments</h3>
                </div>
                <?php if(isset($_GET['do']) AND $_GET['do']=="new_deposit"){ 
				include("include/do_deposit.php");
				 } ?><!-- /.box-header -->
                <div class="box-body">
                <?php
				$sql = "SELECT YEAR(date) AS year, MONTH(date) AS month, COUNT(member_id) AS members, SUM(amount) AS amount FROM deposits WHERE club_id='$club_id' GROUP BY year, month"; 
				$result = $conn->query($sql);	?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Members</th>
                        <th>Deposits</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $year =  $row["year"]; 
				  $month =  $row["month"];
				  $members =  $row["members"];
				  $amount =  $row["amount"];
				  $verified =  ""; ?>
                      <tr>
                        <td><?php echo $year; ?></td>
                        <td><?php echo date('M', mktime(0, 0, 0, $month, 10)); ?></td>
                        <td><?php echo $members; ?></td>
                        <td><?php echo $amount; ?></td>
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
      