<!DOCTYPE html>
<html lang="en">
<head>
	{% block head %}
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.min.css" rel="stylesheet">
	<link href="assets/css/retina.min.css" rel="stylesheet">
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<script src="assets/css/ie6-8.css"></script>
		
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="http://localhost:8888/bootstrap/simpliq2/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="http://localhost:8888/bootstrap/simpliq2/ico/favicon.png">
	<!-- end: Favicon and Touch Icons -->	
	{% endblock %}
</head>

<body>
		<!-- start: Header -->
	<header class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="icon-reorder"></i></a>		
				<a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="index.html"><span>SimpliQ</span></a>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="icon-warning-sign"></i>
						</a>
						<ul class="dropdown-menu notifications">
							<li class="dropdown-menu-title">
								<span>You have 11 notifications</span>
							</li>	
                        	<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">1 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">7 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">8 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">16 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">36 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
									<span class="message">2 items sold</span>
									<span class="time">1 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="index.html#">
									<span class="icon red"><i class="icon-user"></i></span>
									<span class="message">User deleted account</span>
									<span class="time">2 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="index.html#">
									<span class="icon red"><i class="icon-shopping-cart"></i></span>
									<span class="message">Transaction was canceled</span>
									<span class="time">6 hour</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon green"><i class="icon-comment-alt"></i></span>
									<span class="message">New comment</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="icon blue"><i class="icon-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                        		<a>View all notifications</a>
							</li>	
						</ul>
					</li>
					<!-- start: Notifications Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="icon-tasks"></i>
						</a>
						<ul class="dropdown-menu tasks">
							<li>
								<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                        	</li>
							<li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressBlue">80</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressYellow">47</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressRed">32</div> 
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressGreen">63</div> 
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressPink">80</div> 
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all tasks</a>
							</li>	
						</ul>
					</li>
					<!-- end: Notifications Dropdown -->
					<!-- start: Message Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="icon-envelope"></i>
						</a>
						<ul class="dropdown-menu messages">
							<li>
								<span class="dropdown-menu-title">You have 9 messages</span>
							</li>	
                        	<li>
                                <a href="index.html#">
									<span class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Łukasz Holeczek
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="assets/img/avatar2.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Megan Abott
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="assets/img/avatar3.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Kate Ross
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                                <a href="index.html#">
									<span class="avatar"><img src="assets/img/avatar4.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Julie Blank
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
									<span class="avatar"><img src="assets/img/avatar5.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Jane Sanders
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all messages</a>
							</li>	
						</ul>
					</li>
					<!-- end: Message Dropdown -->
					<li>
						<a class="btn" href="index.html#">
							<i class="icon-wrench"></i>
						</a>
					</li>
					<!-- start: User Dropdown -->
					<li class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<div class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></div>
							<div class="user">
								<span class="hello">Welcome!</span>
								<span class="name">{{ name }}</span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title">
								
							</li>
							<li><a href="index.html#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="index.html#"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="index.html#"><i class="icon-envelope"></i> Messages</a></li>
							<li><a href="/logout"><i class="icon-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
			
		</div>	
	</header>
	<!-- end: Header -->
    <div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1">
				
				<input type="text" class="search hidden-sm" placeholder="..." />
				
				<div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-sm"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="index.html#"><i class="icon-eye-open"></i><span class="hidden-sm"> UI Features</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="ui-sliders-progress.html"><i class="icon-eye-open"></i><span class="hidden-sm"> Sliders & Progress</span></a></li>
								<li><a class="submenu" href="ui-nestable-list.html"><i class="icon-eye-open"></i><span class="hidden-sm"> Nestable Lists</span></a></li>
								<li><a class="submenu" href="ui-elements.html"><i class="icon-eye-open"></i><span class="hidden-sm"> Elements</span></a></li>
							</ul>
							</li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-sm"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="icon-folder-close-alt"></i><span class="hidden-sm"> Example Pages</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="page-infrastructure.html"><i class="icon-hdd"></i><span class="hidden-sm"> Infrastructure</span></a></li>
								<li><a class="submenu" href="page-inbox.html"><i class="icon-envelope"></i><span class="hidden-sm"> Inbox</span></a></li>
								<li><a class="submenu" href="page-todo.html"><i class="icon-tasks"></i><span class="hidden-sm"> ToDo & Timeline</span></a></li>
								<!-- Profile Page - Cooming Soone
								<li><a class="submenu" href="page-profile.html"><i class="icon-male"></i><span class="hidden-sm"> User Profile</span></a></li>
								-->
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="icon-edit"></i><span class="hidden-sm"> Forms</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="form-elements.html"><i class="icon-edit"></i><span class="hidden-sm"> Form elements</span></a></li>
								<li><a class="submenu" href="form-wizard.html"><i class="icon-edit"></i><span class="hidden-sm"> Wizard</span></a></li>
								<li><a class="submenu" href="form-dropzone.html"><i class="icon-edit"></i><span class="hidden-sm"> Dropzone Upload</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="icon-list-alt"></i><span class="hidden-sm"> Charts</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="charts-flot.html"><i class="icon-list-alt"></i><span class="hidden-sm"> Flot Charts</span></a></li>
								<li><a class="submenu" href="charts-xcharts.html"><i class="icon-list-alt"></i><span class="hidden-sm"> xCharts</span></a></li>
								<li><a class="submenu" href="charts-others.html"><i class="icon-list-alt"></i><span class="hidden-sm"> Other</span></a></li>
							</ul>
						
						</li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-sm"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-sm"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-sm"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-sm"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-sm"> File Manager</span></a></li>
						<li>
							<a class="dropmenu" href="index.html#"><i class="icon-star"></i><span class="hidden-sm"> Icons</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="icons-halflings.html"><i class="icon-star"></i><span class="hidden-sm"> Halflings</span></a></li>
								<li><a class="submenu" href="icons-glyphicons-pro.html"><i class="icon-star"></i><span class="hidden-sm"> Glyphicons PRO</span></a></li>
								<li><a class="submenu" href="icons-font-awesome.html"><i class="icon-star"></i><span class="hidden-sm"> Font Awesome</span></a></li>
							</ul>
						</li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-sm"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11">
				{% block content %}{% endblock %}
			</div>
			<!-- end: Content -->
				
		</div><!--/row-->		
		
	</div><!--/container-->
	
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	<div class="clearfix"></div>
	
	<footer>
	{% block footer %}
		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co" alt="Bootstrap Admin Templates">SimpliQ</a></span>
		</p>
    {% endblock %}
	</footer>
	{% block javascript %}
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.10.2.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.flot.min.js"></script>
	<script src="assets/js/jquery.flot.pie.min.js"></script>
	<script src="assets/js/jquery.flot.stack.min.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	<script src="assets/js/jquery.flot.time.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/index.js"></script>
	
	<!-- end: JavaScript-->
    {% endblock %}
</body>
</html>
