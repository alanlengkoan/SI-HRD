<!doctype html>
<html lang="en" class="fullscreen-bg">
	<head>
		<title>Login | Klorofil Pro - Bootstrap Admin Dashboard Template</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="<?=assets_url()?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=assets_url()?>vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=assets_url()?>vendor/themify-icons/css/themify-icons.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="<?=assets_url()?>css/main.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="<?=assets_url()?>css/demo.css">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="<?=assets_url()?>img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?=assets_url()?>img/unlam.png">
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<div class="vertical-align-wrap">
				<div class="vertical-align-middle">
					<div class="auth-box ">
						<div class="left">
							<div class="content">
								<div class="header">
									<div class="logo text-center">
										<img src="<?=assets_url()?>img/logo-dark.png" alt="Klorofil Logo">
									</div>
									<p class="lead">Login to your account</p>
								</div>
								<?=form_open('administrator', array('class' => 'form-auth-small'))?>
								<?=validation_errors('<div>', '</div>')?>
			                    <?=($this->session->flashdata('gagal') ? '<div><b>'.$this->session->flashdata('gagal').'</b></div>' : '')?>
									<div class="form-group">
										<label for="signin-email" class="control-label sr-only">Email</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="Username">
									</div>
									<div class="form-group">
										<label for="signin-password" class="control-label sr-only">Password</label>
										<input type="password" class="form-control" id="password" placeholder="Password" name="password">
									</div>
									<div class="form-group clearfix">
										<label class="fancy-checkbox element-left custom-bgcolor-blue">
											<input type="checkbox">
											<span class="text-muted">Remember me</span>
										</label>
										<span class="helper-text element-right">Don't have an account? <a href="page-register.html">Register</a></span>
									</div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
									<div class="bottom">
										<span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
									</div>
								</form>
							</div>
						</div>
						<div class="right">
							<div class="overlay"></div>
							<div class="content text">
								<h1 class="heading">Klorofil Pro - Bootstrap dashboard template</h1>
								<p>by The Develovers</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- END WRAPPER -->
	</body>
</html>