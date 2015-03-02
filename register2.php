<!DOCTYPE html>
<html class="bg-black">
  <head>
    <meta charset="UTF-8">
    <title>InvestorPoint</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="include/placeholder_min.js"></script>
<script type="text/javascript" src="include/sign_up_min.js"></script>

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-black">
  <div class="form-box2" id="login-box2">
    <div class="form-box" id="login-box">
      <div class="header">Register New Membership</div>
      <div class="signup_confirmation" ></div>
    <form action="include/do_new_account.php" method="post" id="sign_up_form" name="signup" >
        <div id="sign_up_mid">
        <div class="body bg-gray">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Full name" id="first_name" />
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email Address" id="email_sign_up"/>
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone number"/>
          </div>
          <div class="form-group">
            <input type="text" name="userid" class="form-control" placeholder="User ID"/>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" id="password_sign_up"/>
          </div>
          <div class="form-group">
            <input type="password" name="password2" class="form-control" placeholder="Retype password" id="confirm_password_sign_up"/>
          </div>
        </div>
        <div class="footer">
          <button type="submit" class="btn bg-olive btn-block">Sign me up</button>
          <a href="login.php" class="text-center">I already have a membership</a>
        </div>
      </div>
      </form>
      
    </div><!-- /.form-box -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

  </body>
</html>