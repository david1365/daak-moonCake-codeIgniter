<?php  header('Content-type: text/html; charset=UTF-8');   ?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="all">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="assets/jui/css/jquery-ui.css" media="screen">
<link rel="stylesheet" href="assets/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" href="assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="plugins/ibutton/jquery.ibutton.css" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="custom-plugins/circular-stat/circular-stat.css">

<!-- Fullcalendar -->
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">

<!-- End Plugin Stylesheets -->

<!-- pnotify -->
<link rel="stylesheet" href="plugins/pnotify/jquery.pnotify.css" media="screen">

<!-- daak -->
<link rel="stylesheet" href="assets/css/daak/daak-bootstrap-pnotify.custom.css" media="screen">

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/main-style.css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<link rel="stylesheet" href="plugins/mb_table/css/jquery.dataTables.min.css" media="screen">
<link rel="stylesheet" href="plugins/mb_table/css/buttons.dataTables.min.css" media="screen">

<title>MoonCake :: Responsive Admin Template - Dashboard</title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">
    <div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-right">
						<div class="brand-img">
							<a class="brand" href="#">
								<img src="assets/images/logo.png" alt="" style="width: 117px; height: 21px;">
							</a>
						</div>
					</div>

                    <div id="header-left" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
                        <div id="header-functions">
                            <div id="user-info" class="clearfix">
                                <span class="info">
                                	خوش آمدید
                                    <span class="name">آقای راد</span>
                                </span>
                                <div class="avatar">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                        <img src="assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                                <a href="index.html"><i class="icon-off"></i></a>
                            </div>
                        </div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="جستجو">
							</form>
						</div>
						<div id="dropdown-lists">
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-exclamation-sign"></i></span>
    								<span class="item-label">اطلاعیه</span>
                                    <span class="item-count">4</span>
    							</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong> commented on your photo
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong> commented on your photo
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
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
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-envelope"></i></span>
    								<span class="item-label">پیغام ها</span>
                                    <span class="item-count">16</span>
    							</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong><br> Hello, do you have time to go out tomorrow?
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong><br> Hey, the reports said that you were...
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong><br> Can I borrow your new camera for taking...
                                                        <span class="time">About an hour ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="mail.html">View all messages</a></li>
                                </ul>
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
									<?php
									header("Content-Type: text/html;charset=UTF-8");
									$tmp = 0;

									foreach ($_menu as $news_item): // preparing an array


										if($news_item["_tp"] == 0 ){
											if($tmp>=1){
												echo "</ul></li>","\n";
												echo "<li id=\"".$news_item["_name"]."\">", "\n";
											} else{
												//echo "<li id=\"General\">", "\n";
												echo "<li id=\"".$news_item["_name"]."\" class=\"active\">", "\n";

											}

											echo "<span title=\"".$news_item["_name"]."\">", "\n";
											echo "<i class=\"".$news_item["_icon"]."\"></i>", "\n";
											echo "<span class=\"nav-title\">".$news_item["_name"]."</span></span>", "\n";
											echo "<ul class=\"inner-nav\">", "\n";
											$tmp = $tmp + 1;

										} else {
											echo "<li daak-title=\"".$news_item["_name"]."\" daak-active=\"".$news_item["_isActive"]."\" daak-description=\"".$news_item["_description"]."\" daak-url=\"".$news_item["_url"]."\" class=\"daak-menu-item\"><a><i class=\"".$news_item["_icon"]."\"></i>".$news_item["_name"]."</a></li>","\n";
										}
									endforeach;
									if($tmp>=1){
										echo "</ul></li>","\n";
									}

									?>
								</ul>
                            </nav>
                        </aside>

                        <div id="sidebar-separator"></div>

                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                	<li>
                                    	<a class="icon-home"></a>
										<span id="mainTitle" >سامانه ی نوبت دهی‌</span>
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a id="subTitle" href="#">میز کار</a>
                                    </li>
                                </ul>

                                <h1 id="main-heading">
        							<asid id="head-title">میز کار</asid>
                                    <span id="head-description">اینجا مکانی است که هرچیزی استارت می خورد!</span>
                                </h1>
                            </div>

                            <div id="main-content">
                            	<ul class="stats-container">
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="sparkline" sparkType="bar" sparkBarColor="#e95d3c" sparkBarWidth="6" sparkHeight="28">28,33,32,34,32,33,36,28,24</span>
                                            <span class="digit">
                                                <span class="text">Support Requests</span>
                                                378
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="sparkline" sparkType="bar" sparkBarColor="#08c" sparkBarWidth="6" sparkHeight="28">5,6,7,9,9,5,3,2,2,4,6,7</span>
                                            <span class="digit">
                                                <span class="text">Total Revenue</span>
                                                $5378
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-green">
                                                <i class="icon-stats"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">Current Balance</span>
                                                $6,788
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-orange">
                                                <i class="icon-user"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">New Customers</span>
                                                341
                                            </span>
                                        </a>
                                    </li>
                                </ul>

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
                                    <div class="span6 widget">
                                        <div class="widget-header">
                                            <span class="title"><i class="icos-heart-favorite"></i> Your Current Stats</span>
                                        </div>
                                        <div class="widget-content summary-list">
                                            <ul>
                                                <li>
                                                    <span class="key"><i class="icon-support"></i> Support Tickets</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">332</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="key"><i class="icos-piggy-bank"></i> Commision</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">71% <i class="up icon-arrow-up"></i></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="key"><i class="icos-shopping-cart-2"></i> This Week Sales</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">144 <i class="down icon-arrow-down"></i></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="key"><i class="icos-money"></i> Cash Deposit</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">$6,421</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="key"><i class="icon-key"></i> Last Sign In</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">September 21, 2012</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="key"><i class="icon-windows"></i> Operating System</span>
                                                    <span class="val">
                                                        <span class="text-nowrap">Debian Linux</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                	<div class="span6 widget">
                                        <div class="widget-header">
                                            <span class="title">
                                                <i class="icon-ok"></i> Pending Task List
                                            </span>
                                            <div class="toolbar">
                                                <span class="btn" rel="tooltip" title="Add New Task"><i class="icon-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="widget-content task-list">
                                            <ul>
                                                <li class="done">
                                                    <label class="checkbox"><input type="checkbox" class="uniform" checked></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-food"></i> Feed the cats
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                                <li>
                                                    <label class="checkbox"><input type="checkbox" class="uniform"></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-chemical"></i> Go to the doctor
                                                            <span class="badge badge-warning">urgent</span>
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                                <li class="done">
                                                    <label class="checkbox"><input type="checkbox" class="uniform" checked></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-bag"></i> Buy my wife a new dress
                                                            <span class="badge badge-success">important</span>
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                                <li>
                                                    <label class="checkbox"><input type="checkbox" class="uniform"></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-comments"></i> Introduce my daughter to my boss
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                                <li>
                                                    <label class="checkbox"><input type="checkbox" class="uniform"></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-plane"></i> Buy a new airplane
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                                <li>
                                                    <label class="checkbox"><input type="checkbox" class="uniform"></label>
                                                    <span class="text">
                                                        <span class="text-nowrap">
                                                            <i class="icon-users"></i> Attend a community meetup
                                                        </span>
                                                    </span>
                                                    <a href="#" class="close">&times;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="widget">
                                            <div class="widget-header">
                                                <span class="title">
                                                    <i class="icon-calendar"></i> My Schedule
                                                </span>
                                            </div>
                                            <div class="widget-content no-padding no-border">
                                                <div id="demo-calendar-01"></div>
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
                                                        <img src="assets/images/pp.jpg" alt="">
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
                                                        <img src="assets/images/pp.jpg" alt="">
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
            <div class="footer-left">MoonCake - Responsive Admin Template</div>
            <div class="footer-right"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>

    </div>

    <!-- Core Scripts -->
    <script src="assets/js/libs/jquery-1.8.3.min.js"></script>
<!--	<script src="assets/js/libs/jquery-3.2.1.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/jquery.placeholder.min.js"></script>
    <script src="assets/js/libs/jquery.mousewheel.min.js"></script>

    <!-- Template Script -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/setup.js"></script>

    <!-- Customizer, remove if not needed -->
    <script src="assets/js/customizer.js"></script>

    <!-- Uniform Script -->
    <script src="plugins/uniform/jquery.uniform.min.js"></script>

    <!-- jquery-ui Scripts -->
    <script src="assets/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="assets/jui/jquery-ui.custom.min.js"></script>
    <script src="assets/jui/timepicker/jquery-ui-timepicker.min.js"></script>
    <script src="assets/jui/jquery.ui.touch-punch.min.js"></script>

    <!-- Plugin Scripts -->

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

    <!-- SparkLine -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- iButton -->
    <script src="plugins/ibutton/jquery.ibutton.min.js"></script>

	<!-- pnotify -->
	<script src="plugins/pnotify/jquery.pnotify.min.js"></script>

    <!-- Full Calendar -->
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js"></script>

    <!-- Demo Scripts -->
    <script src="assets/js/demo/dashboard.js"></script>

	<script src="assets/js/daak/daak-main.js"></script>
	<script src="assets/js/daak/daak-base.js"></script>
	<script src="assets/js/daak/daak-data.js"></script>
</body>

</html>
