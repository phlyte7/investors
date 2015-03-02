        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Club Members<small>.</small>
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
                  <h3 class="box-title"><a href="?do=invite">>>Invite New Member</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php
				$sql = "SELECT * FROM club_members WHERE investment_club_id='$club_id'"; 
				$result = $conn->query($sql);	?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Member</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Outstanding</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				  while($row = $result->fetch_assoc()) {
				  $pic =  $row["profile_pic"]; 
				  $fullname =  $row["fname"]." ".$row["lname"]." ".$row["oname"];
				  $phone =  $row["phone"];
				  $email =  $row["email"];
				  $occ =  $row["occupation"]; ?>
                      <tr>
                        <td></td>
                        <td><img width="24" height="24" src="<?php echo $pic; ?>" /> <?php echo $fullname."-".$occ; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo '0'; ?></td>
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
      