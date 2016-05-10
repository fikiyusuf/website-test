<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Administrator</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>assets/admin/login/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>assets/admin/login/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a href="<?php echo base_url();?>">×</a></button>
          <h1 class="text-center">Login Administrator</h1>
      </div>
      <div class="modal-body">
	  <?php echo validation_errors();?>
          <form class="form col-md-12 center-block" name="form1" method="POST" action="<?php echo base_url(); ?>admin/login/validasi">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="username" id="username" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required autofocus">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" value="Login">Login</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/login/js/bootstrap.min.js"></script>
	</body>
</html>