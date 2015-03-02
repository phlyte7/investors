<?php
session_start();
require_once("include/cnx.php");
require_once("include/data_functions.php");
if(!isset($_SESSION['user'])){ echo '<script>window.location.href = "welcome.php";</script>'; } else {
	$id = $_SESSION['user'];
	$club_id = $_SESSION['club'];
	
	$sql1 = "SELECT * FROM club_members WHERE ID='$id'"; 
	$result1 = $conn->query($sql1);
      while($row1 = $result1->fetch_assoc()) {  
	  $fname =  $row1["fname"];
	  $lname =  $row1["lname"];
	  $oname =  $row1["oname"];
	  $full_name = $fname." ".$lname." ".substr($oname,0,1);
	  $joined =  date("M Y", strtotime($row1["date_joined"]));
	  $profile_date =  date("m/d/Y", strtotime($row1["date_joined"]));
	  $occ =  $row1["occupation"];
	  $email =  $row1["email"];
	  $phone =  $row1["phone"]; 
	  $profile_pic =  $row1["profile_pic"]; 
	  $club_id =  $row1["investment_club_id"]; 
	  $gender =  $row1["gender"]; 
	  
	  }
	
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>InvestorPoint</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.1 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.2.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
     <!-- fullCalendar 2.2.5-->
    <link href="plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <!-- header logo: style can be found in header.less -->
      <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">InvestorPoint</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
         <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <?php include("include/user-box.php"); ?>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <?php 
	  if(isset($_SESSION['admin'])){ 
	   include("include/left-nav-club.php"); } else {
		include("include/left-nav.php"); }    ?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

      
      <?php
     if(isset($_GET['do'])){
		switch($_GET['do']){
			case "myprofile": include("pages/forms/profile.php"); break;
			case "mydeposits": include("pages/tables/collections.php"); break;
			case "mypenalties": include("pages/tables/penalties.php"); break;
			case "mycalendar": include("pages/calendar.php"); break;
			case "mymailbox": include("pages/mailbox.php"); break;
			case "financialreport": include("pages/tables/financialreport.php"); break;
			case "investmentreport": include("pages/tables/investmentreport.php"); break;
			case "deposit": include("pages/forms/payment.php"); break;
			case "pay": include("forms/payment.php"); break;
			case "members": include("pages/tables/members.php"); break;
			case "invite": include("pages/forms/invite.php"); break;
			case "setdeposits": include("pages/forms/setdeposits.php"); break;
			case "setpenalties": include("pages/forms/setpenalties.php"); break;
			case "setclubinfo": include("pages/forms/setclubinfo.php"); break;
			case "new_deposit": include("pages/tables/collections.php"); break;
			case "clubdeposits": include("pages/tables/clubcollections.php"); break;
			case "expenses": include("pages/tables/expenses.php"); break;
			case "new_expense": include("pages/forms/expense.php"); break;
			case "notverified": include("pages/tables/clubcollections2.php"); break;
			default:  if(isset($_SESSION['admin'])){ include("pages/club_home.php"); } else { include("pages/home.php"); }
		} 
	} else { if(isset($_SESSION['admin'])){ include("pages/club_home.php"); } else { include("pages/home.php"); } }
	  
	  ?>
        
        
        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/app.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    
    <!-- date pickers -->
    <script type="text/javascript">
	//Date picker
        //$('#date').datepicker();
	//Date range picker
        $('#period').daterangepicker();
	</script>
  </body>
</html>