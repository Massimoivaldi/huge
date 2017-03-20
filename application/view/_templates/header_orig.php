<!doctype html>
<html>
<head>
    <title>HUGE</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Brand</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>index/index">Index</a>
						</li>
						<li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
						</li>
						<?php if (Session::userIsLoggedIn()) { ?>
							<li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
								<a href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
							</li>
							<li <?php if (View::checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
								<a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
							</li>
						<?php } else { ?>
							<!-- for not logged in users -->
							<li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
								<a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
							</li>
							<li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
								<a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
							</li>
						<?php } ?>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php if (Session::userIsLoggedIn()) : ?>
						<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
								<a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
						</li>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
								</li>
								<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
								</li>
								<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
								</li>
								<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
								</li>
								<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
								</li>
								<li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
									<a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
								</li>
								<?php if (Session::get("user_account_type") == 7) : ?>
								<li <?php if (View::checkForActiveController($filename, "admin")) {
									echo ' class="active" ';
								} ?> >
									<a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
								</li>
							<?php endif; ?>
							</ul>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>
<div class="container" style="margin-top:80px;border:none">
	

        
        
