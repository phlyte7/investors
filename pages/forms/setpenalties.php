        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Club Settings
            <small>Penalties</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Penalties</h3>
                </div><!-- /.box-header -->
                <?php if(isset($_GET['setpenalty'])){ 
				include("include/do_setpenalty.php");
				 } ?>
                <div class="box-body">
                <?php
				$sql = "SELECT * FROM penalty_settings WHERE club_id='$club_id'"; 
				$result = $conn->query($sql);	?>
                  <table class="table table-bordered">
                    <tr>
                      <th>Penalty Type</th>
                      <th>Amount</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $pntype =  $row["penalty_type"];
				  $fee =  $row["amount"]; 
				  $sts =  $row["status"]; ?>
                    <tr>
                      <td><?php echo $pntype; ?> (<?php echo $sts; ?>)</td>
                      <td><?php echo number_format($fee); ?></td>
                      <td align="center"><a href="#">Issue </a> <br> <a href="#">Suspend</a></td>
                    </tr>
                    <?php } ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Define new penalty type</h3>
                </div><!-- /.box-header -->
                <form role="form" method="post" action="?do=setpenalties&setpenalty">
                  <div class="box-body">
 				<div class="form-group">
                      <label>Penalty Type</label>
<input type="text" class="form-control" name="penalty" />
                    </div><div class="form-group">
                      <label>Amount </label>
                      <input type="text" class="form-control" name="fine" />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          
        </section><!-- /.content -->
     