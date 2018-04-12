<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url();?>/adminasset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/adminasset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url();?>/adminasset/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url();?>/adminasset/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url();?>/adminasset/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url();?>/adminasset/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					<h5 class="text-center text-error">
                                        <?php 
                                                $message=$this->session->userdata('error_message');
                                                if($message){
                                                   echo $message;
                                                   $this->session->unset_userdata('error_message');
                                                }
					?>
                                        </h5>
					<form class="form-horizontal" action="<?php echo base_url();?>admin-login-check" method="post">
						<fieldset>							
							<div class="input-prepend" title="Useremail">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" id="admin_email" type="text" placeholder="Type User Email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" id="admin_password" type="password" placeholder="Type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url();?>/adminasset/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>/adminasset/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/modernizr.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url();?>/adminasset/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url();?>/adminasset/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url();?>/adminasset/js/excanvas.js"></script>
	<script src="<?php echo base_url();?>/adminasset/js/jquery.flot.js"></script>
	<script src="<?php echo base_url();?>/adminasset/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url();?>/adminasset/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>/adminasset/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url();?>/adminasset/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/<?php echo base_url();?>/adminasset/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/counter.js"></script>
	
		<script src="<?php echo base_url();?>/adminasset/js/retina.js"></script>

		<script src="<?php echo base_url();?>/adminasset/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
