<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Config::get('URL'); ?>theme_01/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo Config::get('URL'); ?>theme_01/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Config::get('URL'); ?>theme_01/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
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
						<li <?php if (View::checkForActiveControllerAndAction($filename, "fblogin/index")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>fblogin/index">FBLogin</a>
						</li>
						<li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
						</li>
						<li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
						</li>
					<?php } ?>
                </ul>
                
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


	

        
        
