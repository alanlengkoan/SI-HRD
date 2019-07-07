<!doctype html>
<html lang="en">
	<head>
		<title>Welcome to Klorofil Pro | Klorofil Pro - Bootstrap Admin Dashboard Template</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/vendor/themify-icons/css/themify-icons.css">
		<link rel="stylesheet" href="assets/vendor/pace/themes/orange/pace-theme-minimal.css">
		<link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
		<link rel="stylesheet" href="assets/vendor/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="assets/vendor/bootstrap-tour/css/bootstrap-tour.min.css">
		<link rel="stylesheet" href="assets/vendor/jqvmap/jqvmap.min.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/skins/sidebar-nav-darkgray.css" type="text/css">
		<link rel="stylesheet" href="assets/css/skins/navbar3.css" type="text/css">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
		<link rel="stylesheet" href="assets/css/demo.css">
		<link rel="stylesheet" href="demo-panel/style-switcher.css">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					<a href="index.html">
						<img src="assets/img/logo-white.png" alt="Klorofil Pro Logo" class="img-responsive logo">
					</a>
				</div>
				<div class="container-fluid">
					<div id="tour-fullwidth" class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
					</div>
					<form class="navbar-form navbar-left search-form">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" class="btn-toggle-rightsidebar">
									<i class="ti-layout-sidebar-right"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="ti-bell"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li>You have 5 new notifications</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-hdd-o custom-bg-red"></i>
											<p>
												<span class="text">System space is almost full</span>
												<span class="timestamp">11 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-tasks custom-bg-yellow"></i>
											<p>
												<span class="text">You have 9 unfinished tasks</span>
												<span class="timestamp">20 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-book custom-bg-green2"></i>
											<p>
												<span class="text">Monthly report is available</span>
												<span class="timestamp">1 hour ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-bullhorn custom-bg-purple"></i>
											<p>
												<span class="text">Weekly meeting in 1 hour</span>
												<span class="timestamp">2 hours ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-check custom-bg-green"></i>
											<p>
												<span class="text">Your request has been approved</span>
												<span class="timestamp">3 days ago</span>
											</p>
										</a>
									</li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="hide">Help</span></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
									<li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
									<li><a href="#"><i class="ti-lock"></i> Security</a></li>
									<li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/img/user.png" alt="Avatar">
									<span>Samuel</span>
								</a>
								<ul class="dropdown-menu logged-user-menu">
									<li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
									<li><a href="appviews-inbox.html"><i class="ti-email"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
									<li><a href="page-lockscreen.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<nav>
					<ul class="nav" id="sidebar-nav-menu">
						<li class="menu-group">Main</li>
						<li class="panel">
							<a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="active"><i class="ti-dashboard"></i> <span class="title">Dashboards</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="dashboards" class="collapse in">
								<ul class="submenu">
									<li><a href="index.html" class="active">Dashboard v1 <span class="label label-info">UPDATED</span></a></li>
									<li><a href="dashboard2.html">Dashboard v2</a></li>
									<li><a href="dashboard3.html">Dashboard v3</a></li>
									<li><a href="dashboard4.html">Dashboard v4 <span class="label label-success">NEW</span></a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#subLayouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout"></i> <span class="title">Layouts</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subLayouts" class="collapse ">
								<ul class="submenu">
									<li><a href="layout-topnav.html">Top Navigation <span class="label label-success">NEW</span></a></li>
									<li><a href="layout-minified.html">Minified</a></li>
									<li><a href="layout-fullwidth.html">Fullwidth</a></li>
									<li><a href="layout-default.html">Default</a></li>
									<li><a href="layout-grid.html">Grid</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-receipt"></i> <span class="title">Forms</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="forms" class="collapse ">
								<ul class="submenu">
									<li><a href="forms-inputs.html">Inputs</a></li>
									<li><a href="forms-multiselect.html">Multiselect</a></li>
									<li><a href="forms-input-pickers.html">Input Pickers</a></li>
									<li><a href="forms-input-sliders.html">Input Sliders</a></li>
									<li><a href="forms-select2.html">Select2</a></li>
									<li><a href="forms-xeditable.html">In-place Editing</a></li>
									<li><a href="forms-dragdropupload.html">Drag and Drop Upload</a></li>
									<li><a href="forms-layouts.html">Form Layouts</a></li>
									<li><a href="forms-validation.html">Form Validation</a></li>
									<li><a href="forms-texteditor.html">Text Editor</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-tab-window"></i> <span class="title">App Views</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="appViews" class="collapse ">
								<ul class="submenu">
									<li><a href="appviews-project-detail.html">Project Details</a></li>
									<li><a href="appviews-projects.html">Projects</a></li>
									<li><a href="appviews-inbox.html">Inbox <span class="badge">8</span></a></li>
									<li><a href="appviews-file-manager.html">File Manager</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-grid2"></i> <span class="title">Tables</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="tables" class="collapse ">
								<ul class="submenu">
									<li><a href="tables-static.html">Static Tables</a></li>
									<li><a href="tables-dynamic.html">Dynamic Tables</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Components</li>
						<li class="panel">
							<a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-panel"></i> <span class="title">UI Elements</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="uiElements" class="collapse ">
								<ul class="submenu">
									<li><a href="ui-sweetalert.html">Sweet Alert</a></li>
									<li><a href="ui-treeview.html">Tree View</a></li>
									<li><a href="ui-wizard.html">Wizard</a></li>
									<li><a href="ui-dragdrop-panel.html">Drag &amp; Drop Panel</a></li>
									<li><a href="ui-nestable.html">Nestable</a></li>
									<li><a href="ui-gauge.html">Gauge <span class="label label-success">NEW</span></a></li>
									<li><a href="ui-panels.html">Panels</a></li>
									<li><a href="ui-progressbars.html">Progress Bars</a></li>
									<li><a href="ui-tabs.html">Tabs</a></li>
									<li><a href="ui-buttons.html">Buttons <span class="label label-info">UPDATED</span></a></li>
									<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
									<li><a href="ui-social-buttons.html">Social Buttons</a></li>
									<li><a href="ui-icons.html">Icons</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-pie-chart"></i> <span class="title">Charts</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="charts" class="collapse ">
								<ul class="submenu">
									<li><a href="charts-chartjs.html">Chart.js</a></li>
									<li><a href="charts-chartist.html">Chartist</a></li>
									<li><a href="charts-flot.html">Flot Chart</a></li>
									<li><a href="charts-sparkline.html">Sparkline Chart</a></li>
								</ul>
							</div>
						</li>
						<li><a href="widgets.html"><i class="ti-widget"></i> <span class="title">Widgets</span></a></li>
						<li><a href="notifications.html"><i class="ti-bell"></i> <span class="title">Notifications</span> <span class="badge">15</span></a></li>
						<li class="panel">
							<a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-map"></i> <span class="title">Maps</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="maps" class="collapse ">
								<ul class="submenu">
									<li><a href="maps-jqvmap.html">JQVMap</a></li>
									<li><a href="maps-mapael.html">Mapael</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Extras</li>
						<li class="panel">
							<a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-files"></i> <span class="title">Pages</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="submenu">
									<li><a href="page-profile.html">Profile</a></li>
									<li><a href="page-login.html">Login</a></li>
									<li><a href="page-register.html">Register</a></li>
									<li><a href="page-lockscreen.html">Lockscreen</a></li>
									<li><a href="page-forgot-password.html">Forgot Password</a></li>
									<li><a href="page-404.html">Page 404</a></li>
									<li><a href="page-500.html">Page 500</a></li>
									<li><a href="page-blank.html">Blank Page</a></li>
								</ul>
							</div>
						</li>
						<li><a href="typography.html"><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li>
						<li class="panel">
							<a href="#" data-toggle="collapse" data-target="#submenuDemo" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-menu"></i> <span class="title">Multilevel Menu</span><i class="icon-submenu ti-angle-left"></i></a>
							<div id="submenuDemo" class="collapse">
								<ul class="submenu">
									<li class="panel">
										<a href="#" data-toggle="collapse" data-target="#submenuDemoLv2" class="collapsed">Submenu 1 <i class="icon-submenu ti-angle-left"></i></a>
										<div id="submenuDemoLv2" class="collapse">
											<ul class="submenu">
												<li><a href="#">Another menu level</a></li>
												<li><a href="#" class="active">Another menu level</a></li>
												<li><a href="#">Another menu level</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">Submenu 2</a></li>
									<li><a href="#">Submenu 3</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
				</nav>
			</div>
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">Welcome to Klorofil Pro</h1>
							<p class="page-subtitle">Bootstrap admin dashboard template with drag and drop panel</p>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="#">Dashboards</a></li>
							<li class="active">Dashboard v1</li>
						</ul>
					</div>
					<div class="container-fluid">
						<!-- TOP METRICS -->
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-orange"><i class="fa fa-poll-ha"></i></span>
									<div class="right">
										<span class="value">0</span>
										<span class="title">Surat Diproses
											<span class="change text-indicator-green"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-shopping-cart"></i></span>
									<div class="right">
										<span class="value">$8740 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">REVENUE
											<span class="change text-indicator-green">(+ $364)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-blue2"><i class="fa fa-user"></i></span>
									<div class="right">
										<span class="value">132567 <i class="change-icon change-down fa fa-sort-down text-indicator-red"></i></span>
										<span class="title">TOTAL USER
											<span class="change text-indicator-red">(- 23)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-purple"><i class="fa fa-envelope"></i></span>
									<div class="right">
										<span class="value">56.72% <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
										<span class="title">CLICK
											<span class="change text-indicator-green">(+ 12.64%)</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END TOP METRICS -->
						<div class="row sortable-grid">
							<div class="col-md-8 sortable-item">
								<!-- CUSTOMER DEMOGRAPHIC -->
								<div class="panel panel-sidebar sidebar-right">
									<div class="panel-heading">
										<h3 class="panel-title">US Customer Demographic</h3>
									</div>
									<div class="panel-body">
										<div class="left no-padding">
											<div id="us-customers-map" style="height: 485px;"></div>
										</div>
										<div class="right">
											<div class="sidebar-section">
												<h3 class="section-title">Top Locations</h3>
												<table class="table table-invisible no-margin">
													<thead>
														<tr>
															<th>No.</th>
															<th>Location</th>
															<th>Count</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1.</td>
															<td>Alabama</td>
															<td align="right">2936</td>
														</tr>
														<tr>
															<td>2.</td>
															<td>California</td>
															<td align="right">2812</td>
														</tr>
														<tr>
															<td>3.</td>
															<td>Florida</td>
															<td align="right">2735</td>
														</tr>
													</tbody>
												</table>
												<a href="#" class="font-13">See all locations</a>
											</div>
											<div class="sidebar-section">
												<h3 class="section-title">Gender</h3>
												<div class="progress no-margin">
													<div class="progress-bar custom-bg-blue2" style="width: 35%">
														<span class="sr-only">35%</span>
													</div>
													<div class="progress-bar custom-bg-blue3" style="width: 65%">
														<span class="sr-only">65%</span>
													</div>
												</div>
												<div class="square-legend">
													<ul class="list-unstyled list-inline">
														<li>
															<span class="custom-bg-blue2"></span> 35% Male </li>
														<li>
															<span class="custom-bg-blue3"></span> 65% Female </li>
													</ul>
												</div>
											</div>
											<div class="sidebar-section no-margin-bottom">
												<h3 class="section-title">Age</h3>
												<canvas id="age-chart" height="160"></canvas>
											</div>
										</div>
									</div>
								</div>
								<!-- END CUSTOMER DEMOGRAPHIC -->
							</div>
							<div class="col-md-4 sortable-item">
								<!-- RESOURCE ACTIVITY -->
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Resource Activity</h3>
									</div>
									<div class="panel-body">
										<div class="activity-gauge">
											<div id="gauge" class="center-block"></div>
										</div>
									</div>
								</div>
								<!-- END RESOURCE ACTIVITY -->
								<!-- SALES CHART -->
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Weekly Sales</h3>
									</div>
									<div class="panel-body">
										<div class="widget-metric_11">
											<canvas id="sales-chart" height="80"></canvas>
											<div class="bottom">
												<div class="left">
													<span class="value">$70,183</span>
													<span class="change">
														<span class="text-indicator-green"><i class="fa fa-caret-up"></i> 18%</span> vs. last week</span>
												</div>
												<div class="right">
													<a href="#" class="btn btn-primary btn-outline"><i class="fa fa-file-text-o"></i> View Sales Report</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END SALES CHART -->
							</div>
						</div>
						<div class="row sortable-grid">
							<!-- CHAT SUPPORT -->
							<div class="col-md-12 sortable-item">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Live Chat Support</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<div id="online-visitors-dashboard" class="online-visitors">
													<div class="count" id="tour-online-count">
														<span class="number">70</span>
														<span>Visitors online</span>
													</div>
													<div class="progress traffic-sources">
														<div class="progress-bar source referral" style="width: 10%">
															<span>10%</span>
														</div>
														<div class="progress-bar source organic" style="width: 40%">
															<span>40%</span>
														</div>
														<div class="progress-bar source direct" style="width: 27%">
															<span>27%</span>
														</div>
														<div class="progress-bar source email" style="width: 23%">
															<span>23%</span>
														</div>
													</div>
													<div class="square-legend">
														<ul class="list-unstyled list-inline">
															<li>
																<span class="referral"></span> Referral</li>
															<li>
																<span class="organic"></span> Organic</li>
															<li>
																<span class="direct"></span> Direct</li>
															<li>
																<span class="email"></span> Email</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<table class="table table-minimal table-chat-support datatable">
													<thead>
														<tr>
															<th>VISITOR</th>
															<th>PAGE</th>
															<th>DEVICE</th>
															<th>BROWSER</th>
															<th>ACTION</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover" data-visitor-name="Bruce Evans" data-visitor-img="assets/img/people/male1.png"><i class="fa fa-vcard-o"></i></span> Bruce</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span>
															</td>
															<td><i class="fa fa-desktop"></i></td>
															<td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
															<td>
																<button class="btn btn-success btn-xs">RESPOND CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/how-to/shop">How to shop | FAQ | Help</span>
															</td>
															<td><i class="fa fa-desktop"></i></td>
															<td><i class="fa fa-edge edge-color"></i> Edge</td>
															<td>
																<button class="btn btn-default btn-xs">INITIALIZE CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover" data-visitor-name="Joey Felicia" data-visitor-img="assets/img/people/female1.png"><i class="fa fa-vcard-o"></i></span> Joey</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/men/dress">Dress | Women Apparels</span>
															</td>
															<td><i class="fa fa-mobile"></i></td>
															<td><i class="fa fa-chrome chrome-color"></i> Chrome</td>
															<td>
																<button class="btn btn-danger btn-xs">CLOSE CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span>
															</td>
															<td><i class="fa fa-desktop"></i></td>
															<td><i class="fa fa-safari safari-color"></i> Safari</td>
															<td>
																<button class="btn btn-success btn-xs">RESPOND CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span>
															</td>
															<td><i class="fa fa-mobile"></i></td>
															<td><i class="fa fa-window-maximize"></i> Other Browser</td>
															<td>
																<button class="btn btn-danger btn-xs">CLOSE CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/how-to/pay">Payment Method | FAQ</span>
															</td>
															<td><i class="fa fa-desktop"></i></td>
															<td><i class="fa fa-edge edge-color"></i> Edge</td>
															<td>
																<button class="btn btn-default btn-xs">INITIALIZE CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span>
															</td>
															<td><i class="fa fa-mobile"></i></td>
															<td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
															<td>
																<button class="btn btn-default btn-xs">INITIALIZE CHAT</button>
															</td>
														</tr>
														<tr>
															<td>
																<span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
															<td>
																<span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span>
															</td>
															<td><i class="fa fa-mobile"></i></td>
															<td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
															<td>
																<button class="btn btn-default btn-xs">INITIALIZE CHAT</button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END CHAT SUPPORT -->
						</div>
						<div class="row sortable-grid">
							<div class="col-md-7 sortable-item">
								<!-- SALES STATISTIC -->
								<div class="panel" id="tour-sales-stat">
									<div class="panel-heading">
										<h3 class="panel-title">Sales Statistic</h3>
									</div>
									<div class="panel-body">
										<div class="layout-table margin-bottom-30">
											<div class="cell">
												<div class="chart-metric">
													<span class="title">
														<span class="data-legend custom-bg-orange2"></span> Earnings</span>
													<span class="value">$5,423</span>
													<span class="change up"><i class="ti-arrow-up"></i> 16%</span>
												</div>
											</div>
											<div class="cell">
												<div class="chart-metric">
													<span class="title">
														<span class="data-legend custom-bg-blue3"></span> Sales</span>
													<span class="value">1563</span>
													<span class="change down"><i class="ti-arrow-down"></i> 7%</span>
												</div>
											</div>
											<div class="cell valign-bottom text-right">
												<div class="btn-group">
													<button type="button" class="btn btn-default btn-sm">Day</button>
													<button type="button" class="btn btn-default btn-sm active">Week</button>
													<button type="button" class="btn btn-default btn-sm">Month</button>
												</div>
											</div>
										</div>
										<div style="height: 250px;" id="sales-stat"></div>
									</div>
								</div>
								<!-- END SALES STATISTIC -->
							</div>
							<div class="col-md-5 sortable-item">
								<!-- SHARES GOAL -->
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Shares Goal</h3>
									</div>
									<div class="panel-body">
										<div id="progress-share" class="progress-semicircle" data-max="500">
											<div class="bar-overflow">
												<div class="bar"></div>
											</div>
											<span class="content">
												<i class="fa fa-share-alt icon"></i>
												<span class="value">380</span>
												<h4 class="heading">Share more products!</h4>
												<p class="text-muted">Get free product if you reach 500 shares goal</p>
												<button type="button" class="btn btn-primary">Share Now</button>
											</span>
										</div>
									</div>
								</div>
								<!-- END SHARES GOAL -->
							</div>
						</div>
						<div class="row sortable-grid">
							<div class="col-md-6 sortable-item">
								<!-- PROFILE COMPLETENESS METER -->
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Profile Completeness Meter</h3>
									</div>
									<div class="panel-body">
										<div class="completeness-meter">
											<p class="complete-info">Your profile is almost awesome</p>
											<div class="progress margin-bottom-30">
												<div class="progress-bar progress-bar-primary completeness-progress" data-transitiongoal="60"></div>
											</div>
											<p>Please provide information below:</p>
											<ul class="list-unstyled fa-ul list-complete-profile">
												<li class="done"><i class="fa-li fa fa-check-circle"></i> Confirm your email</li>
												<li class="done"><i class="fa-li fa fa-check-circle"></i> Setup two-way authentication</li>
												<li>
													<i class="fa-li fa fa-circle-o"></i> <a href="#" id="complete-phone-number" data-type="text" data-pk="1" data-title="Phone number">Add your phone number</a>
												</li>
												<li>
													<i class="fa-li fa fa-circle-o"></i>
													<a href="#" id="complete-sex" data-type="select" data-pk="1" data-value="" data-prepend="Select sex" data-title="Select sex"></a>
												</li>
												<li>
													<i class="fa-li fa fa-circle-o"></i> <a href="#" id="complete-birthdate" data-type="combodate" data-value="1984-05-23" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select date of birth">Select date of birth</a>
												</li>
												<li>
													<i class="fa-li fa fa-circle-o"></i> <a href="#" id="complete-nickname" data-type="text" data-pk="1" data-title="Nickname" data-placeholder="your nickname">Add your nickname</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- END PROFILE COMPLETENESS METER -->
							</div>
							<div class="col-md-6 sortable-item">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Customer Review</h3>
										<div class="right">
											<span class="link"><i class="fa fa-comments-o"></i> <a href="#">View all reviews (251)</a></span>
										</div>
									</div>
									<div class="panel-body">
										<div class="customer-review">
											<div class="rating margin-bottom-30">
												<span class="number">4.7</span>
												<span class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-full"></i>
												</span>
											</div>
											<p class="review-text text-muted">Sit odio nostrud admodum eu, eu duo rationibus reprimique, sit ut feugiat expetendis interesset. Ut usu wisi malorum, cu eam dolore admodum salutatus. Volumus denique epicurei ex mel, ut eius mandamus nam, alterum detraxit assueverit in cum. Ne quem scribentur eum, summo integre ius ei. Vim in summo ludus. Has ut ferri evertitur. His ut nulla noluisse inciderint.</p>
											<div class="review-data">
												<div class="row">
													<div class="col-xs-6">
														<div class="footer-info">
															<span class="title">Reviewed by:</span>
															<img src="assets/img/people/female2.png" class="picture img-circle" alt="">
															<div class="right">
																<span class="primary-info">Donna Jensen</span>
																<span class="secondary-info">Jul 20, 2017</span>
															</div>
														</div>
													</div>
													<div class="col-xs-6">
														<div class="footer-info">
															<span class="title">Review for:</span>
															<span class="primary-info">Classy Wool Jacket</span>
															<span class="secondary-info">Order #: <a href="#">764537346</a></span>
														</div>
													</div>
												</div>
											</div>
											<div class="controls">
												<span><i class="fa fa-reply"></i> <a href="#">Respond</a></span>
												<span><i class="fa fa-share-alt"></i> <a href="#">Share</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row sortable-grid">
							<div class="col-md-3">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Last Campaign</h3>
									</div>
									<div class="panel-body no-padding">
										<ul class="list-unstyled list-widget-vertical" id="last-campaign-metric">
											<li>
												<div class="widget-metric_2 animate">
													<i class="fa fa-envelope-o icon"></i>
													<div class="right">
														<span class="title">EMAIL SENT</span>
														<span class="value">64889</span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2 animate">
													<i class="fa fa-envelope-open-o icon"></i>
													<div class="right">
														<span class="title">OPENED</span>
														<span class="value">28652</span>
														<span class="percentage custom-text-orange2">44.15%</span>
													</div>
												</div>
											</li>
											<li>
												<div class="widget-metric_2 animate">
													<i class="fa fa-hand-pointer-o icon"></i>
													<div class="right">
														<span class="title">CLICKED</span>
														<span class="value">9643</span>
														<span class="percentage custom-text-orange2">14.86%</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Email Opens by Location</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-3">
												<strong>Top Countries</strong>
												<table class="table table-minimal table-no-border">
													<thead>
														<tr>
															<th>COUNTRY</th>
															<th>OPENS</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>United States</td>
															<td>2936</td>
														</tr>
														<tr>
															<td>Algeria</td>
															<td>2812</td>
														</tr>
														<tr>
															<td>Russia</td>
															<td>2735</td>
														</tr>
														<tr>
															<td>France</td>
															<td>2674</td>
														</tr>
														<tr>
															<td>Mexico</td>
															<td>2584</td>
														</tr>
														<tr>
															<td>Germany</td>
															<td>1986</td>
														</tr>
														<tr>
															<td>Brazil</td>
															<td>1921</td>
														</tr>
														<tr>
															<td>Canada</td>
															<td>1865</td>
														</tr>
														<tr>
															<td>Indonesia</td>
															<td>1352</td>
														</tr>
														<tr>
															<td>China</td>
															<td>1322</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-md-9">
												<div id="map-email-opens" style="height: 400px;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- MINI BAR CHARTS -->
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-mini-bar">
									<div id="mini-bar-chart1" class="mini-bar-chart">38,28,45,30,42,70,100</div>
									<span>5323 LIKES</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-mini-bar">
									<div id="mini-bar-chart2" class="mini-bar-chart">43,45,78,23,80,100,90</div>
									<span>65K FOLLOWERS</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-mini-bar">
									<div id="mini-bar-chart3" class="mini-bar-chart">22,42,65,53,77,44,80</div>
									<span>20K SUBSCRIBERS</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-mini-bar">
									<div id="mini-bar-chart4" class="mini-bar-chart">43,76,34,55,86,45,77</div>
									<span>500K USERS</span>
								</div>
							</div>
						</div>
						<!-- END MINI BAR CHARTS -->
						<div class="widget">
							<ul class="list-unstyled list-widget-horizontal row">
								<li class="col-md-3">
									<div class="widget-metric_3">
										<span class="title text-muted">Your Performance Index</span>
										<span class="value">8.73</span>
										<span class="note">
											<span class="text-indicator-green">+13.42%</span> since last month</span>
									</div>
								</li>
								<li class="col-md-3">
									<div class="widget-metric_4">
										<span class="title text-muted">Sales Performance</span>
										<span class="chart inlinesparkline" id="sales-performance">20,70,100,55,80,40,64,90,150</span>
										<span class="note">
											<span class="text-indicator-red">-3.74%</span> since last month</span>
									</div>
								</li>
								<li class="col-md-3">
									<div class="widget-metric_5">
										<span class="title text-muted">Customer Satisfaction</span>
										<ul class="list-inline list-value">
											<li>
												<i class="fa fa-frown-o"></i>
												<span class="percentage text-indicator-red">10%</span>
											</li>
											<li>
												<i class="fa fa-meh-o"></i>
												<span class="percentage">13%</span>
											</li>
											<li>
												<i class="fa fa-smile-o"></i>
												<span class="percentage text-indicator-green">77%</span>
											</li>
										</ul>
										<span class="note">See detailed scoring <a href="#">here</a></span>
									</div>
								</li>
								<li class="col-md-3">
									<div class="widget-metric_3">
										<span class="title text-muted">Avg. Handle Time</span>
										<span class="value">1m:24s</span>
										<span class="note">Min: 30s &nbsp; Max: 2m:15s</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END MAIN CONTENT -->
				<!-- RIGHT SIDEBAR -->
				<div id="sidebar-right" class="right-sidebar">
					<div class="sidebar-widget">
						<h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
						<p class="date">Wednesday, 22 December</p>
						<div class="row margin-top-30">
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-blue first">
										<i class="fa fa-tasks"></i>
										<span>Tasks</span>
										<span class="badge">5</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-green">
										<i class="fa fa-envelope"></i>
										<span>Mail</span>
										<span class="badge">12</span>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<div class="icon-transparent-area custom-color-orange last">
										<i class="fa fa-user-plus"></i>
										<span>Users</span>
										<span class="badge">24</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">YOUR APPS</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-dropbox dropbox-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-wordpress wordpress-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-drupal drupal-color"></i>
								</a>
							</div>
							<div class="col-xs-3">
								<a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
									<i class="fa fa-github github-color"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">MY PROJECTS</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<ul class="list-unstyled list-project-progress">
							<li>
								<a href="#" class="project-name">Project XY</a>
								<div class="progress progress-xs progress-transparent custom-color-orange">
									<div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%"></div>
								</div>
								<span class="percentage">67%</span>
							</li>
							<li>
								<a href="#" class="project-name">Growth Campaign</a>
								<div class="progress progress-xs progress-transparent custom-color-blue">
									<div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
								</div>
								<span class="percentage">23%</span>
							</li>
							<li>
								<a href="#" class="project-name">Website Redesign</a>
								<div class="progress progress-xs progress-transparent custom-color-green">
									<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
								</div>
								<span class="percentage">87%</span>
							</li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<div class="widget-header">
							<h4 class="widget-heading">MY FILES</h4>
							<a href="#" class="show-all">Show all</a>
						</div>
						<ul class="list-unstyled list-justify list-file-simple">
							<li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a>
								<span>4 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a>
								<span>20 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a>
								<span>315 MB</span>
							</li>
							<li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a>
								<span>1 MB</span>
							</li>
						</ul>
					</div>
					<p class="text-center"><a href="#" class="btn btn-default btn-xs">More Widgets</a></p>
				</div>
				<!-- END RIGHT SIDEBAR -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/pace/pace.min.js"></script>
		<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.time.js"></script>
		<script src="assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script src="assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
		<script src="assets/vendor/moment/min/moment.min.js"></script>
		<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
		<script src="assets/vendor/bootstrap-tour/js/bootstrap-tour.min.js"></script>
		<script src="assets/vendor/jquery-ui/ui/widget.js"></script>
		<script src="assets/vendor/jquery-ui/ui/data.js"></script>
		<script src="assets/vendor/jquery-ui/ui/scroll-parent.js"></script>
		<script src="assets/vendor/jquery-ui/ui/disable-selection.js"></script>
		<script src="assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
		<script src="assets/vendor/jquery-ui/ui/widgets/sortable.js"></script>
		<script src="assets/vendor/datatables/js-main/jquery.dataTables.min.js"></script>
		<script src="assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.min.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.usa.js"></script>
		<script src="assets/vendor/chart-js/Chart.min.js"></script>
		<script src="assets/vendor/raphael/raphael.min.js"></script>
		<script src="assets/vendor/justgage-toorshia/justgage.js"></script>
		<script src="assets/scripts/klorofilpro-common.js"></script>
		<!-- DEMO PANEL -->
		<!-- for demo purpose only, you should remove it on your project directory -->
		<script type="text/javascript">
		var toggleDemoPanel = function(e)
		{
			e.preventDefault();
			var panel = document.getElementById('demo-panel');
			if (panel.className) panel.className = '';
			else panel.className = 'active';
		}
		// fix each iframe src when back button is clicked
		$(function()
		{
			$('iframe').each(function()
			{
				this.src = this.src;
			});
		});
		</script>
		<div id="demo-panel">
			<a href="#" onclick="toggleDemoPanel(event);"><i class="fa fa-cog fa-spin"></i></a>
			<iframe src="demo-panel/index.html"></iframe>
		</div>
		<!-- END DEMO PANEL -->
		<script>
		$(function()
		{
			// sales statistic chart
			var plot, sales, earnings;
			sales = [
				[gt(2013, 1, 1), 54],
				[gt(2013, 2, 1), 75],
				[gt(2013, 3, 1), 66],
				[gt(2013, 4, 1), 80],
				[gt(2013, 5, 1), 75],
				[gt(2013, 6, 1), 85],
				[gt(2013, 7, 1), 90]
			];
			earnings = [
				[gt(2013, 1, 1), 200],
				[gt(2013, 2, 1), 600],
				[gt(2013, 3, 1), 360],
				[gt(2013, 4, 1), 550],
				[gt(2013, 5, 1), 300],
				[gt(2013, 6, 1), 800],
				[gt(2013, 7, 1), 900]
			];
			plot = $.plot($('#sales-stat'),
				// data
				[
				{
					data: sales,
					label: "Sales"
				},
				{
					data: earnings,
					label: "Earnings",
					yaxis: 2
				}],
				// options
				{
					series:
					{
						lines:
						{
							show: true,
							lineWidth: 2,
							fill: false
						},
						points:
						{
							show: true,
							lineWidth: 1,
							fill: true,
							fillColor: "#fff"
						},
						shadowSize: 0
					},
					grid:
					{
						hoverable: true,
						clickable: true,
						borderWidth: 0,
						tickColor: "#EFF1F5",
					},
					colors: ["#45AEEF", "#F89B03"],
					xaxis:
					{
						mode: "time",
						timezone: "browser",
						minTickSize: [1, "day"],
						timeformat: "%a",
						font:
						{
							color: "#a0aeba"
						},
						tickColor: "transparent",
						autoscaleMargin: 0.02
					},
					yaxis:
					{
						font:
						{
							color: "#a0aeba"
						},
					},
					yaxes: [
					{},
					{
						position: "right",
						tickFormatter: function(val, axis)
						{
							return '$' + val;
						}
					}],
					legend:
					{
						show: false
					},
					tooltip:
					{
						show: true,
						cssClass: 'flotTip-black',
						content: '%s: %y'
					}
				}
			);
			// get day function
			function gt(y, m, d)
			{
				return new Date(y, m - 1, d).getTime();
			}
			// profile completeness meter
			var cPbar = $('.completeness-progress');
			cPbar.progressbar(
			{
				display_text: 'fill',
				update: function(current_percentage)
				{
					if (current_percentage == 100)
					{
						$('.complete-info').addClass('text-success').html('<i class="fa fa-check-circle"></i> Hooray, it\'s done!');
						cPbar.removeClass('progress-bar-info').addClass('progress-bar-success');
						$('.completeness-meter .editable').editable('disable');
					}
				}
			});
			$.fn.editable.defaults.mode = 'inline';
			$('#complete-phone-number').on('shown', function(e, editable)
			{
				editable.input.$input.mask('(999) 999-9999');
			}).on('hidden', function(e, reason)
			{
				if (reason == 'save')
				{
					$(this).parent().prepend('Phone: ');
					updateProfileMeter($(this), cPbar, 10);
				}
			});
			$('#complete-sex').on('hidden', function(e, reason)
			{
				if (reason == 'save')
				{
					$(this).parent().prepend('Sex: ');
					updateProfileMeter($(this), cPbar, 10);
				}
			});
			$('#complete-birthdate').on('hidden', function(e, reason)
			{
				if (reason == 'save')
				{
					$(this).parent().prepend('Birthdate: ');
					updateProfileMeter($(this), cPbar, 10);
				}
			});
			$('#complete-nickname').on('shown', function(e, editable)
			{
				editable.input.$input.val('');
			}).on('hidden', function(e, reason)
			{
				if (reason == 'save')
				{
					$(this).parent().prepend('Nickname: ');
					updateProfileMeter($(this), cPbar, 10);
				}
			});
			$('.completeness-meter #complete-phone-number').editable();
			$('#complete-sex').editable(
			{
				source: [
				{
					value: 1,
					text: 'Male'
				},
				{
					value: 2,
					text: 'Female'
				}]
			});
			$('#complete-birthdate').editable();
			$('#complete-nickname').editable();
			function updateProfileMeter(el, pbar, valueAdded)
			{
				// update progress bar
				pbar.attr('data-transitiongoal', parseInt(pbar.attr('data-transitiongoal')) + valueAdded).progressbar();
				// update element
				$(el).parent().find('i').removeClass('fa-circle-o').addClass('fa-check-circle');
				$(el).parent().addClass('done');
			}
			// mini bar charts
			$('#mini-bar-chart1').sparkline('html',
			{
				type: 'bar',
				barWidth: 8,
				height: 45,
				barColor: '#00B9EB',
				chartRangeMin: 0,
				chartRangeMax: 100
			});
			$('#mini-bar-chart2').sparkline('html',
			{
				type: 'bar',
				barWidth: 8,
				height: 45,
				barColor: '#EB9700',
				chartRangeMin: 0,
				chartRangeMax: 100
			});
			$('#mini-bar-chart3').sparkline('html',
			{
				type: 'bar',
				barWidth: 8,
				height: 45,
				barColor: '#72BB23',
				chartRangeMin: 0,
				chartRangeMax: 100
			});
			$('#mini-bar-chart4').sparkline('html',
			{
				type: 'bar',
				barWidth: 8,
				height: 45,
				barColor: '#FB5021',
				chartRangeMin: 0,
				chartRangeMax: 100
			});
			// Bootstrap tour
			var tour = new Tour(
			{
				steps: [
				{
					element: '#tour-help',
					placement: 'bottom',
					title: 'Welcome to Klorofil Pro',
					content: 'Hello, welcome to Klorofil Pro. Use this tour feature to guide new users to your website or show existing users new features.',
					onShow: function()
					{
						var popupSound = new Audio();
						if (navigator.userAgent.match("Firefox/"))
						{
							popupSound.src = "assets/audio/popup.ogg";
						}
						else
						{
							popupSound.src = "assets/audio/popup.mp3";
						}
						// sound setting saved on localStorage as 0 or 1, by default sound on (null value on localStorage)
						$globalVolume = localStorage.getItem('global-volume');
						if (($globalVolume == null || $globalVolume == '1'))
						{
							popupSound.play();
						}
					}
				},
				{
					element: '#tour-sales-stat',
					title: 'Backdrop Container',
					backdrop: true,
					content: 'Add backdrop container to give focus on the step. It can be added to all steps or certain step you choose.'
				},
				{
					element: '#tour-online-count',
					placement: 'top',
					title: 'Anywhere on page',
					content: 'You can target specific element on the page like this one. You can also determine the placement either right (default), bottom, left, top or auto.'
				},
				{
					element: '#tour-fullwidth',
					placement: 'bottom',
					title: 'Layout',
					content: 'This toggle button will make the layout at fullwidth mode. More space, more content. Try now!'
				}, ],
				template: "<div class='popover tour'> " +
					"<div class='arrow'></div> " +
					"<h3 class='popover-title'></h3>" +
					"<div class='popover-content'></div>" +
					"<div class='popover-navigation'>" +
					"<button class='btn btn-default btn-sm' data-role='prev'>« Prev</button>" +
					"<button class='btn btn-primary btn-sm' data-role='next'>Next »</button>" +
					"<button class='btn btn-default btn-sm' data-role='end'>End tour</button>" +
					"</div>" +
					"</div>",
			});
			tour.init();
			tour.start();
			if (tour.ended())
			{
				tour.restart();
			}
			$('.sortable-grid .sortable-item').sortable(
			{
				connectWith: '.sortable-grid .sortable-item',
				handle: '.panel-heading',
				forcePlaceholderSize: true,
			}).disableSelection();
			// online visitor, demo purpose
			setInterval(function()
			{
				$('.online-visitors .number').text(Math.floor(Math.random() * 100));
			}, 3000);
			// live chat support
			$('.table-chat-support').dataTable(
			{
				scrollX: false,
				scrollY: "300px",
				ordering: false,
				searching: false,
				info: false,
				scrollCollapse: true,
				paging: false,
			});
			$('.table-chat-support .page-tooltip').tooltip(
			{
				placement: 'bottom',
			});
			$('[data-toggle="popover"]').popover(
			{
				trigger: 'hover',
				container: 'body',
				html: true,
				content: function()
				{
					var visitorContent, visitorImgPath;
					var visitorName = 'Guest';
					if ($(this).attr('data-visitor-img') === undefined)
					{
						visitorContent = '<i class="fa fa-user picture guest-avatar"></i>';
					}
					else
					{
						visitorName = $(this).attr('data-visitor-name');
						visitorImgPath = $(this).attr('data-visitor-img');
						visitorContent = '<img src="' + visitorImgPath + '" class="picture img-circle">';
					}
					console.log($(this).attr('data-visitor'));
					return '<div class="online-visitor-data">' + '<div class="left">' + visitorContent + '<a href="#">Details</a>' + '</div>' + '<div class="right">' + '<div class="data">' + '<span class="label-data">Name :</span>' + '<span>' + visitorName + '</span>' + '</div>' + '<div class="data">' + '<span class="label-data">IP :</span>' + '<span><a href="#">123.111.101.76</a></span>' + '</div>' + '<div class="data">' + '<span class="label-data">Type :</span>' + '<span>Returning</span>' + '</div>' + '</div>' + '</div>';
				}
			});
			var runProgressShareOnce = false;
			$('#progress-share').bind('appear', function()
			{
				if (runProgressShareOnce) return false;
				$(this).each(function()
				{
					var $bar = $(this).find(".bar");
					var $val = $(this).find(".value");
					var perc = parseInt($val.text(), 10);
					var scale = 180 / parseInt($(this).attr('data-max'));
					$(
					{
						p: 0
					}).animate(
					{
						p: perc
					},
					{
						duration: 3000,
						easing: "swing",
						step: function(p)
						{
							$bar.css(
							{
								transform: "rotate(" + (45 + (p * scale)) + "deg)",
							});
							$val.text(p | 0);
						}
					});
				});
				runProgressShareOnce = true;
			});
			var mapData = {
				"us": "2936",
				"dz": "2812",
				"ru": "2735",
				"fr": "2674",
				"mx": "2584",
				"de": "1986",
				"br": "1921",
				"ca": "1865",
				"id": "1352",
				"cn": "1322"
			}
			$('#map-email-opens').vectorMap(
			{
				map: 'world_en',
				backgroundColor: 'transparent',
				color: '#f2f4f6',
				borderColor: '#D1D4D7',
				borderOpacity: 0.5,
				values: mapData,
				scaleColors: ["#E7F5FF", "#9AA9B4"],
				normalizeFunction: 'polynomial'
			});
			$('#sales-performance').sparkline('html',
			{
				width: '70%',
				height: '40px',
				lineWidth: '2',
				lineColor: '#00aaff',
				fillColor: false,
				spotRadius: '2',
				highlightLineColor: '#aedaff',
				highlightSpotColor: '#71aadb',
				spotColor: false,
				minSpotColor: false,
				maxSpotColor: false,
				disableInteraction: false
			});
			// US customer locations
			var usMapData = {
				"al": "2936",
				"ca": "2812",
				"fl": "2735",
				"ga": "2674",
				"il": "2584",
				"ma": "1986",
				"nv": "1921",
				"ny": "1865",
				"ok": "1352",
				"tx": "1322"
			}
			$('#us-customers-map').vectorMap(
			{
				map: 'usa_en',
				backgroundColor: '#FAFBFC',
				color: '#f2f4f6',
				borderColor: '#D1D4D7',
				borderOpacity: 0.7,
				values: usMapData,
				scaleColors: ["#4671E0", "#5AA6F0"],
				normalizeFunction: 'polynomial'
			});
			// age bar chart
			Chart.defaults.global.defaultFontSize = 11;
			var ctxAgeBarChart = document.getElementById("age-chart").getContext("2d");
			var ageBarChart = new Chart(ctxAgeBarChart,
			{
				type: 'horizontalBar',
				data:
				{
					labels: ['18-22', '23-27', '28-32', '33-37', '38-42', '> 42'],
					datasets: [
					{
						data: [400, 800, 500, 450, 300, 250],
						backgroundColor: 'rgba(245,165,35,0.5)',
					}]
				},
				options:
				{
					responsive: true,
					legend:
					{
						display: false
					},
					scales:
					{
						xAxes: [
						{
							display: false,
							ticks:
							{
								min: 0,
								max: 1000,
							}
						}],
						yAxes: [
						{
							gridLines:
							{
								display: false,
								drawBorder: false
							}
						}]
					}
				}
			});
			// gauge chart
			var activityGauge = new JustGage(
			{
				id: "gauge",
				value: getRandomInt(0, 100),
				valueFontColor: '#5E6773',
				valueFontFamily: 'Roboto, sans-serif',
				valueMinFontSize: 28,
				symbol: '%',
				min: 0,
				max: 100,
				minTxt: '0%',
				maxTxt: '100%',
				label: 'resource allocated',
				labelFontColor: '#A0AEBA',
				labelMinFontSize: 12,
				counter: true,
				pointer: true,
				pointerOptions:
				{
					color: '#5E6773'
				}
			});
			setInterval(function()
			{
				activityGauge.refresh(getRandomInt(0, 100));
			}, 2000);
			// sales chart
			var ctxSalesLineChart = document.getElementById("sales-chart").getContext("2d");
			var lineChart = new Chart(ctxSalesLineChart,
			{
				type: 'line',
				data:
				{
					labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
					datasets: [
					{
						data: [400, 450, 370, 299, 205, 142, 120],
						fill: false,
						borderWidth: 2,
						pointRadius: 5,
						pointHoverRadius: 7,
						borderColor: '#AB7DF6',
						backgroundColor: '#fff',
					}]
				},
				options:
				{
					responsive: true,
					legend:
					{
						display: false
					},
					layout:
					{
						padding:
						{
							left: 8,
							right: 8,
							top: 8,
							bottom: 8
						}
					},
					scales:
					{
						xAxes: [
						{
							display: false
						}],
						yAxes: [
						{
							display: false
						}]
					}
				}
			});
		});
		</script>
	</body>
</html>