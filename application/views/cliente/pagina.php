<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/ventura/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 03:09:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Eventos grover</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>application/assets/admin/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/admin/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/admin/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/admin/css/feathericon.min.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/admin/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/admin/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>application/assets/admin/js/html5shiv.min.js"></script>
			<script src="<?php echo base_url(); ?>application/assets/admin/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="<?php echo base_url(); ?>application/assets/admin/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="<?php echo base_url(); ?>application/assets/admin/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- App Lists -->
					<li class="nav-item dropdown app-dropdown">
						<a class="nav-link dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown" href="#"><i class="fe fe-app-menu"></i></a>
						<ul class="dropdown-menu app-dropdown-menu">
							<li>
								<div class="app-list">
									<div class="row">
										<div class="col"><a class="app-item" href="inbox.html"><i class="fa fa-envelope"></i><span>Email</span></a></div>
										<div class="col"><a class="app-item" href="calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></div>
										<div class="col"><a class="app-item" href="chat.html"><i class="fa fa-comments"></i><span>Chat</span></a></div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- /App Lists -->
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-11.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="<?php echo base_url(); ?>application/assets/admin/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="profile.html">Account Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
		
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Products</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Products</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-01.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple MacBook Pro</a></h5>
									<div class="price">$5528</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-02.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Samsung Galaxy S10 Plus</a></h5>
									<div class="price">$799</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-03.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple iMac Pro</a></h5>
									<div class="price">$6699</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-04.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Fujifilm Digital Camera</a></h5>
									<div class="price">$4140</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-05.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple Watch Series 4</a></h5>
									<div class="price">$703</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-06.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple iPhone Xs Max 6.5</a></h5>
									<div class="price">$1199</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-07.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Logitech G633</a></h5>
									<div class="price">$303</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-08.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple Magic Keyboard</a></h5>
									<div class="price">$112</div>
								</div>
							</div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-01.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple MacBook Pro</a></h5>
									<div class="price">$5528</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-02.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Samsung Galaxy S10 Plus</a></h5>
									<div class="price">$799</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-03.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple iMac Pro</a></h5>
									<div class="price">$6699</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-04.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Fujifilm Digital Camera</a></h5>
									<div class="price">$4140</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-05.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple Watch Series 4</a></h5>
									<div class="price">$703</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-06.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple iPhone Xs Max 6.5</a></h5>
									<div class="price">$1199</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-07.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Logitech G633</a></h5>
									<div class="price">$303</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="product-inner">
									<img alt="alt" src="<?php echo base_url(); ?>application/assets/admin//img/product/product-08.jpg">
									<div class="cart-btns">
										<a href="#" class="btn btn-primary addcart-btn">Add to cart</a>
										<a href="#" class="btn btn-info proedit-btn">Edit</a>
									</div>
								</div>
								<div class="pro-desc">
									<h5><a href="product-details.html">Apple Magic Keyboard</a></h5>
									<div class="price">$112</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>application/assets/admin/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>application/assets/admin/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/admin/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="<?php echo base_url(); ?>application/assets/admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="<?php echo base_url(); ?>application/assets/admin/plugins/raphael/raphael.min.js"></script>    
		<script src="<?php echo base_url(); ?>application/assets/admin/plugins/morris/morris.min.js"></script>  
		<script src="<?php echo base_url(); ?>application/assets/admin/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="<?php echo base_url(); ?>application/assets/admin/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/ventura/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 03:10:03 GMT -->
</html>