<?php
    include('./php/DAsession.php');
?>





<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="all">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/main-style.css" media="screen">


<!-- pnotify -->
<link rel="stylesheet" href="plugins/pnotify/jquery.pnotify.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="plugins/ibutton/jquery.ibutton.css" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="custom-plugins/circular-stat/circular-stat.css">

<!-- Fullcalendar
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
-->
<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/main-style.css" media="screen">


<link href="plugins/select2/select2.css" rel="stylesheet"/>


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Administration :: Responsive Admin Template</title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">
    
    <div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="#">
								<img src="assets/images/logo.png" alt="" style="width: 117px; height: 21px;">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						
                        <div id="dropdown-lists">
                            <div class="item-wrap">
                                <a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-exclamation-sign"></i></span>
                                    <span class="item-label">Notifications</span>
                                    <span class="item-count">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/user.png" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong> commented on your photo
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/user.png" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong> commented on your photo
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/user.png" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong> commented on your photo
                                                        <span class="time">43 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">View all notifications</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Welcome
                                    <span class="name"><?php echo $loginSession;?></span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="assets/images/user.png" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href=""><i class="icol-user"></i> My Profile</a></li>
                                    	<li><a href=""><i class="icol-layout"></i> My Invoices</a></li>
                                        <li class="divider"></li>
                                        <li><a href="php/DAlogout.php"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="php/DAlogout.php"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
                    	<aside id="sidebar">
                        	<nav id="navigation" class="collapse">
                            	<ul>
                                	<li id="General">
                                    	<span title="General">
                                    		<i class="icon-home"></i>
											<span class="nav-title">General</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li id="Dashboard" name="" data-url="DAdashboard.php" class="DAsm" ><a ><i class="icol-dashboard"></i> Dashboard</a></li>
                                        	<li id="Simple" name="" data-url="testboot.php" class="DAsm" ><a ><i class="icol-plugin"></i> Simple Version</a></li>
                                        	<li id="" class="DAsm"><a ><i class="icol-pin"></i> Fixed Sidebar</a></li>
                                        	<li id="" class="DAsm"><a ><i class="icol-calendar-2"></i> Calendar</a></li>
                                            <li class="DAsm"><a ><i class="icol-lifebuoy"></i> Icons</a></li>
                                        	<li class="DAsm"><a ><i class="icol-grid"></i> Grids</a></li>
                                        	<li class="DAsm"><a ><i class="icol-font"></i> Typography</a></li>                                                
                                        </ul>
                                    </li>
                                	<li id="Table">
                                    	<span title="Table">
                                    		<i class="icon-table"></i>
											<span class="nav-title">Table</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a ><i class="icol-style"></i> Static Tables</a></li>
                                        	<li><a ><i class="icol-hammer-screwdriver"></i> Responsive Tables</a></li>
                                        	<li><a ><i class="icol-table"></i> Data Tables</a></li>
                                            <li><a ><i class="icol-eye"></i> Detail View Table</a></li>
                                        </ul>
                                    </li>
                                	<li id="Statistic">
                                    	<span title="Statistic">
                                        	<i class="icon-graph"></i>
											<span class="nav-title">Statistic</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a ><i class="icol-chart-curve"></i> Statistical Elements</a></li>
                                        	<li><a ><i class="icol-chart-pie"></i> Charts Gallery</a></li>
                                                
                                        </ul>
                                    </li>
                                	<li id="form">
                                    	<span title="Form">
                                        	<i class="icon-list"></i>
											<span class="nav-title">Form</span>
                                        </span>
                                    	<ul class="inner-nav">
                                                <li id="Group Add" name="" data-url="DAgroup.php" class="DAsm"><a ><i class="icol-group"></i> Group Add</a></li>    
                                                <li id="User Add" name=""  data-url="DAuser.php" class="DAsm"><a ><i class="icol-user"></i> User Add</a></li>
                                                
                                        	<li><a ><i class="icol-layout-select"></i> Form Layouts</a></li>
                                        	<li id="User Add" name=""  data-url="Qlist.php" class="DAsm"><a ><i class="icol-ui-text-field-password"></i> لیست انتظار</a></li>
                                                <li><a ><i class="icol-wand"></i> Form Wizard</a></li>
                                        	<li><a ><i class="icol-accept"></i> Form Validation</a></li>
                                        	<li><a ><i class="icol-asterisk-orange"></i> Form Cloning</a></li>
                                            <li><a ><i class="icol-pencil"></i> WYSIWYG</a></li>
                                        </ul>
                                    </li>
                                	<li id="Elements">
                                    	<span title="Elements">
                                        	<i class="icon-cogs"></i>
											<span class="nav-title">Elements</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a ><i class="icol-ui-tab-content"></i> Bootstrap Elements</a></li>
											<li><a ><i class="icol-pipette"></i> Other Elements</a></li>
                                        	<li><a ><i class="icol-error"></i> Alerts and Notifications</a></li>
											<li><a ><i class="icol-cog"></i> Widget Boxes</a></li>
                                        	<li><a ><i class="icol-joystick"></i> Buttons</a></li>
                                        	<li><a ><i class="icol-computer"></i> File Uploader</a></li>
											<li><a ><i class="icol-databases"></i> File Manager</a>
                                        </ul>
                                    </li>
                                	<li id="Extra">
                                    	<span title="Extra">
                                        	<i class="icon-gift"></i>
											<span class="nav-title">Extra</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a ><i class="icol-user"></i> Profile Page</a></li>
                                            <li><a ><i class="icol-email"></i> Mail Page</a></li>
                                            <li><a ><i class="icol-blog"></i> Invoice Page</a></li>
                                            <li><a ><i class="icol-ruby"></i> Custom Widgets</a></li>
                                            <li><a ><i class="icol-images"></i> Image Gallery</a>
                                            <li><a ><i class="icol-vcard"></i> Contact List</a></li>
                                            <li><a ><i class="icol-error"></i> Error Page (404)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </aside>

                        <div id="sidebar-separator"></div>
                        
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                	<li>
                                    	<i class="icon-home"></i>Administration
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a id="mainTitle" href="#">General</a>
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a id="subTitle" href="#">Dashboard</a>
                                    </li>
                                </ul>
                                
                                <h1 id="main-heading">
                                	Empty Page <span>Just an empty page for your starting point</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
							<!-- Put Here Your Content -->
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div id="dashboard-demo" class="tabbable analytics-tab paper-stack">
        <ul class="nav nav-tabs">
        <li class="active"><a href="#" data-target="#live" data-toggle="tab"><i class="icon-history"></i> Live Stats</a></li>
        <li><a href="#" data-target="#math" data-toggle="tab"><i class="icon-graph"></i> Some Math</a></li>
        <li><a href="#" data-target="#fb" data-toggle="tab"><i class="icon-facebook"></i> Facebook Insights</a></li>
                                                <li><a href="#" data-target="#revenue" data-toggle="tab"><i class="icon-bars"></i> Revenue</a></li>
    </ul>
    <div class="tab-content">
        <div id="live" class="tab-pane active">
            <div class="analytics-tab-header clearfix">
                <div class="form-inline">
                    <label class="checkbox text-nowrap">
                        <input id="live-switch" type="checkbox">
                        Switch to see the widgets below updating every second. 
                        <span class="label label-info">Turned off by default to save CPU resource on old machines</span>
                    </label>
                </div>
            </div>
            <div class="analytics-tab-content">
                <div class="row-fluid">
                    <div class="span9">
                        <div id="demo-chart-00" style="height: 265px;"></div>
                    </div>
                    <div class="span3">
                        <div class="stat progress-stat">
                            <span class="text"><i class="icon-feather"></i> Designs Completed <span>130/200</span></span>
                            <div class="progress progress-mini progress-info progress-striped ">
                                <div class="bar" style="width: 65%;"></div>
                            </div>
                        </div>
                        <div class="stat progress-stat">
                            <span class="text"><i class="icos-cat"></i> Cats Tammed <span>77%</span></span>
                            <div class="progress progress-mini progress-info progress-striped ">
                                <div class="bar" style="width: 77%;"></div>
                            </div>
                        </div>
                        <div class="stat progress-stat">
                            <span class="text"><i class="icon-download"></i> Download Progress <span>136/400 Mb</span></span>
                            <div class="progress progress-mini progress-success progress-striped ">
                                <div class="bar" style="width: 34%;"></div>
                            </div>
                        </div>
                        <div class="stat progress-stat">
                            <span class="text"><i class="icon-wrench"></i> Defects Repaired <span>54%</span></span>
                            <div class="progress progress-mini progress-warning progress-striped ">
                                <div class="bar" style="width: 54%;"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-block btn-primary">Generate Report</button>
                        <button type="button" class="btn btn-block btn-danger">Report Bugs</button>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="analytics-tab-content">
                <div class="row-fluid">
                    <span class="span4">
                        <span class="stat circular inline">
                            <span id="cs-1" data-provide="circular" data-fill-color="#0088cc" data-value="35" data-radius="36" data-percent="true" data-thickness="8"></span>
                            <span class="text">Server Load</span>
                        </span>
                    </span>
                    <span class="span4">
                        <span class="stat circular inline">
                            <span id="cs-2" data-provide="circular" data-fill-color="#ed7a53" data-value="79.213" data-decimals="1" data-radius="36" data-percent="true" data-thickness="8"></span>
                            <span class="text">Disk Space Usage</span>
                        </span>
                    </span>
                    <span class="span4">
                        <span class="stat block circular inline">
                            <span id="cs-3" data-provide="circular" data-fill-color="#a5d166" data-value="94.899" data-decimals="2" data-radius="36" data-percent="true" data-thickness="8"></span>
                            <span class="text">Bandwidth Usage</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div id="math" class="tab-pane">
                <div class="analytics-tab-header clearfix">
                <div class="pull-left" style="width: 100%">
                                                                        <div class="control-group">
                                                                                <label class="control-label">Range of (x)</label>
                                                                                <div class="controls">
                                                                                        <div id="math-x-range"></div>
                                                                                </div>
                                                                        </div>
                </div>
            </div>
            <div class="analytics-tab-content">
                <div id="demo-chart-01" style="height: 353px;">

                </div>
            </div>
        </div>
        <div id="fb" class="tab-pane">
                <div class="analytics-tab-header clearfix">
                <div class="pull-left form-inline">
                        <label>Date Range</label>
                    <input id="dp1" type="text" class="span2 datepicker uneditable-input"> - 
                    <input id="dp2" type="text" class="span2 datepicker uneditable-input">
                </div>
                <div class="btn-toolbar pull-right">
                        <a class="btn btn-primary"><i class="icon-download-to-computer"></i> Export Data</a>
                        <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-cog-2"></i> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                                <li><a href="#"><i class="icol-tag"></i> About Insights</a></li>
                            <li><a href="#"><i class="icol-help"></i> Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="analytics-tab-content">
                <div id="demo-chart-02" style="height: 381px;">

                </div>
            </div>
        </div>
        <div id="revenue" class="tab-pane">
                <div class="analytics-tab-header clearfix">
                <div id="demo-chart-03-toolbar" class="pull-left form-inline">
                        <label class="checkbox"><input class="uniform" type="checkbox" name="dm1-0" checked> Target Revenue</label>
                        <label class="checkbox"><input class="uniform" type="checkbox" name="dm1-1" checked> Actual Revenue</label>
                </div>
                <div class="btn-toolbar pull-right">
                        <a class="btn btn-primary"><i class="icon-download-to-computer"></i> Export Data</a>
                        <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-cog-2"></i> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                                <li><a href="#"><i class="icol-tag"></i> About Insights</a></li>
                            <li><a href="#"><i class="icol-help"></i> Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                                                        <div class="analytics-tab-content">
                                                                <div id="demo-chart-03" style="height: 381px; "></div>
                                                        </div>
                                                </div>
    </div>
</div>
<div class="row-fluid">
     <div class="widget span12">
        <div class="widget-header">
            <span class="title">
                <i class="icon-comments"></i> General Discussion
            </span>
            <div class="toolbar">
                <span class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </span>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#"><i class="icol-lightbulb"></i> Available</a></li>
                    <li><a href="#"><i class="icol-cross-shield-2"></i> Busy</a></li>
                    <li><a href="#"><i class="icol-clock"></i> Away</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icol-disconnect"></i> Disconnect</a></li>
                </ul>
            </div>
        </div>
        <div class="widget-content chat-box">
            <ul class="thumbnails">
                <li class="me">
                    <div class="thumbnail">
                        <img src="assets/images/user.png" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Shana-chan</span>
                        Hello everyone! Mind sharing your time with me today?
                        <span class="time">15 minutes ago</span>
                    </div>
                </li>
                <li class="others">
                    <div class="thumbnail">
                        <img src="sample/p2.jpg" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Jane Well</span>
                        Hello dear, do you have something in your mind to discuss with us?
                        <span class="time">14 minutes ago</span>
                    </div>
                </li>
                <li class="me">
                    <div class="thumbnail">
                        <img src="assets/images/user.png" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Shana-chan</span>
                        Cras convallis, odio in ultricies condimentum, dui metus pretium orci, ac sagittis orci eros a leo. Cras lorem est, suscipit quis lacinia sit amet, tempor a tortor. Fusce in vehicula purus. Quisque ut suscipit elit. Fusce ac metus in enim euismod tincidunt. Nunc blandit neque vitae sem egestas id egestas neque bibendum. Etiam eget risus ut dolor convallis consectetur.
                        <span class="time">10 minutes ago</span>
                    </div>
                </li>
                <li class="others">
                    <div class="thumbnail">
                        <img src="sample/p1.jpg" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Jonathan Doe</span>
                        Wow, that's a long sentence. I don't quite understand what you mean, but it's good overall :)
                        <span class="time">Just now</span>
                    </div>
                </li>
            </ul>
            <div class="message-form">
                <div class="row-fluid">
                    <div class="span10">
                        <input type="text" class="span12" placeholder="Type a message...">
                    </div>
                    <div class="span2">
                        <button type="button" class="btn btn-block btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <footer id="footer">
            <div class="footer-left">Administration - Responsive Admin Template</div>
            <div class="footer-right"><p>Copyright 2015. All Rights Reserved.</p></div>
        </footer>
        
    </div>


	<!-- Core Scripts -->
	<script src="assets/js/libs/jquery-1.8.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/jquery.placeholder.min.js"></script>
	<script src="assets/js/libs/jquery.mousewheel.min.js"></script>
         <!--serialize-->
        <script src="assets/js/libs/jquery.serialize-object.min.js"></script>
    
    <!-- Template Script -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/setup.js"></script>
    
    <!-- Plugin Scripts -->

    <!-- Demo Scripts -->
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- Flot -->
    <!--[if lt IE 9]>
    <script src="assets/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>



<!-- Circular Stat -->
    <script src="custom-plugins/circular-stat/circular-stat.min.js"></script>

    <!-- SparkLine  -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
   
    <!-- iButton -->
    <script src="plugins/ibutton/jquery.ibutton.min.js"></script>

    <!-- Full Calendar-->
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
     
    <!-- DataTables  -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js"></script>
   
    <!-- Demo Scripts -->
    <script src="assets/js/demo/dashboard.js"></script>
    
    
    
    <!-- Select2 -->
    <script src="plugins/select2/select2.min.js"></script>

    <!-- Validation -->
    <script src="plugins/validate/jquery.validate.min.js"></script>
    
    <!-- pnotify -->
    <script src="plugins/pnotify/jquery.pnotify.min.js"></script>
    
    
   
    <!--DAbaseAction-->
    <script src="assets/js/DAbaseAction.js"></script>
     <!--DAdataTable-->
    <script src="assets/js/DAdataTable.js"></script>
   

</body>

</html>
