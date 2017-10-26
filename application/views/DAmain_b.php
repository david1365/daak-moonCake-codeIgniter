<?php
 //   include('./php/DAsession.php');
?>
  
 


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

<title>سامانه مدیریت نوبت دهی </title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false" direction="rtl">
    
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
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						
                        <div id="dropdown-lists">
                            <div class="item-wrap">
                                <a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-exclamation-sign"></i></span>
                                    <span class="item-label">پیامهای کاربر</span>
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
                                	خوش آمدید
                                    <span class="name"><?php //echo $loginSession;?></span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="assets/images/user.png" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href=""><i class="icol-user"></i> پروفایل کاربر</a></li>
                                    	<li><a href=""><i class="icol-layout"></i> My Invoices</a></li>
                                        <li class="divider"></li>
                                        <li><a href="php/DAlogout.php"><i class="icol-key"></i> خـــروج</a></li>
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
    <!--                          	
									                           	<li id="کارتابل" class="active">
<span title="کارتابل">
<i class="icon-home"></i>
<span class="nav-title">کارتابل</span></span>
<ul class="inner-nav">
<li id="میزکار" data-url="DAdashboard.php" class="DAsm"><a><i class="icol-dashboard"></i>میزکار</a></li>
<li id="گزارش" data-url="DAdashboard.php" class="DAsm"><a><i class="icol-pin"></i>گزارش</a></li>
<li id="تنظیمات" data-url="DAdashboard.php" class="DAsm"><a><i class="icol-grid"></i>تنظیمات</a></li>
</ul></li>
<li id="مدیریت">
<span title="مدیریت">
<i class="icon-list"></i>
<span class="nav-title">مدیریت</span></span>
<ul class="inner-nav">
<li id="نوبت دهی" data-url="DAgroup.php" class="DAsm"><a><i class="icol-accept"></i>نوبت دهی</a></li>
<li id="General" data-url="DAuser.php" class="DAsm"><a><i class="icol-user"></i>General</a></li>
</ul></li>
<li id="Elements">
<span title="Elements">
<i class="icon-cogs"></i>
<span class="nav-title">Elements</span></span>
<ul class="inner-nav">
<li id="���" data-url="a.php" class="DAsm"><a><i class="icol-cog"></i>���</a></li>
</ul></li>
						-->			
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
						echo "<li id=\"".$news_item["_name"]."\" data-url=\"".$news_item["_url"]."\" class=\"DAsm\"><a><i class=\"".$news_item["_icon"]."\"></i>".$news_item["_name"]."</a></li>","\n";
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
                                    	<i class="icon-home"></i>
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a id="mainTitle" href="#">کارتابل</a>
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a id="subTitle" href="#">میزکار</a>
                                    </li>
                                </ul>
                                
                                <h1 id="main-heading">
                                	Empty Page <span>Just an empty page for your starting point</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
							<!-- Put Here Your Content -->
                                                        
                                                        
                                                        
                                                        
                                             <ul class="stats-container">
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-green">
                                                <i class="icon-stats"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">نوبت های کنسلی</span>
                                                18
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-green">
                                                <i class="icon-stats"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">نوبت های کنسلی</span>
                                                18
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-green">
                                                <i class="icon-stats"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">نوبت های کنسلی</span>
                                                18
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="stat summary">
                                            <span class="icon icon-circle bg-orange">
                                                <i class="icon-user"></i>
                                            </span>
                                            <span class="digit">
                                                <span class="text">درخواست جدید</span>
                                                341
                                            </span>
                                        </a>
                                    </li>
                                </ul>           
                                                        
                                                        
                                             
											 
											 
        
<div class="row-fluid">
     <div class="widget span12">
        <div class="widget-header">
            <span class="title">
                <i class="icon-comments"></i> پیام های سیستم
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
	<script src="plugins/mb_table/js/jquery-1.12.4.js"></script>

	<!-- Core Scripts -->
	<!-- 
	<script src="assets/js/libs/jquery-1.8.3.min.js"></script>
	 <script src="plugins/mb_table/js/jquery-1.12.4.js"></script>

	-->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/jquery.placeholder.min.js"></script>
	<script src="assets/js/libs/jquery.mousewheel.min.js"></script>
         <!--serialize-->
        <script src="assets/js/libs/jquery.serialize-object.min.js"></script>
    
    <!-- Template Script -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/setup.js"></script>
    
     <!--[if lt IE 9]>
    <script src="assets/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>

	

<!-- Circular Stat -->
    <script src="custom-plugins/circular-stat/circular-stat.min.js"></script>

    <!-- SparkLine
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  
	-->

   
    <!-- iButton 
  <script src="plugins/ibutton/jquery.ibutton.min.js"></script>

	-->
	  
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
    
    
   
    <!--DAbaseAction
	<script src="assets/js/DAbaseAction.js"></script>
	-->
    
     <!--DAdataTable
	 
	 <script src="assets/js/DAdataTable.js"></script>
	 -->
<script src="assets/js/DAbaseAction.js"></script>
	
<!--		 <script src="assets/js/DAdataTable.js"></script>-->
	
 <script src="plugins/mb_table/js/jquery.dataTables.min.js"></script>
 <script src="plugins/mb_table/js/dataTables.buttons.min.js"></script>
 <script src="plugins/mb_table/js/buttons.flash.min.js"></script>
 <script src="plugins/mb_table/js/jszip.min.js"></script>
<!--
 <script src="plugins/mb_table/js/pdfmake.min.js"></script>
 <script src="plugins/mb_table/js/vfs_fonts.js"></script>

 -->
  <script src="plugins/mb_table/js/buttons.print.min.js"></script>
 <script src="plugins/mb_table/js/dataTables.select.min.js"></script>
 <script src="plugins/mb_table/js/buttons.html5.min.js"></script>
     <!-- Template Script -->


	<!-- Validation
	
	<script src="tbl.js"></script>	
	-->

   

</body>

</html>
