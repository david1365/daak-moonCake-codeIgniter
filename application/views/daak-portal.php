<!-- --v-david 1396-03-22 -->

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TODO:bubdle-->
    <title>سامانه تستی</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>


    <!-- pnotify -->
    <link rel="stylesheet" href="assets/css/daak/pnotify.custom.min.css" media="screen"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/daak/animate.css" media="screen"/>

<!--	<link rel="stylesheet" href="plugins/mb_table/css/jquery.dataTables.min.css" media="screen">-->
	<link rel="stylesheet" href="plugins/mb_table/css/buttons.dataTables.min.css" media="screen">
	<link rel="stylesheet" href="bootstrap/dataTables.bootstrap.min.css"/>

    <!-- bootstrap-slider.css
    <link rel="stylesheet" href="assets/css/daak/bootstrap-slider.css" media="screen"/>-->

    <!-- select2
    <link rel="stylesheet" href="assets/css/daak/select2.css" media="screen"/>
    <link rel="stylesheet" href="assets/css/daak/select2-bootstrap.css" media="screen"/>-->

    <!-- -------------------- -->
    <link rel="stylesheet" href="assets/css/daak/bootstrap-pnotify.custom.DA.css"/>
    <link rel="stylesheet" href="assets/css/daak/da-message-form.css"/>
    <link rel="stylesheet" href="daak/css/daak-menu.css"/>
    <link rel="stylesheet" href="daak/css/daak-portal.css"/>
    <link href="daak/css/daak-fonts.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-main.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-date.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-print.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-attachment.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-show_image.css" rel="stylesheet"/>
</head>

<body>
<!-- TODO:bubdle-->
<!-- <%@ include file="/appassets/css/register/struts-error-message.jsp"%> -->

<section class="daak-wrapper">
    <header >
		<nav>
			<img  class="daak-logo" src="daak/images/logo.png">
			<section class="daak-brand">
			الفبای فارسی	سامانه ی نوبت دهی
			</section>

				<div class="daak-horizontal-menu-container" class="no-select">
					<ul class="daak-menu daak-horizontal-menu">
<!--						<li id="user-icon" >-->
<!--							<a  href="#"><span  class="glyphicon glyphicon-user"></span></a>-->
<!--						</li>-->

<!--						<li id="menu-icon"><a href="#"><span  class="glyphicon glyphicon-menu-hamburger"></span></a>-->
<!--						</li>-->

					</ul>
				</div>

				<input class="daak-search" placeholder="جستجو">


			<section id="daak-circle-menu">
				<section class="daak-circle">
					<span class="glyphicon glyphicon-off"></span>
				</section>

<!--			<section class="daak-off">-->
<!--				<img  class="daak-user" src="daak/images/user.png">-->
<!--			</section>-->
<!---->
				<section class="daak-circle">
					<span class="glyphicon glyphicon-envelope"></span>
				</section>


				<section id="daak-menu-icon" class="daak-circle">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
				</section>
			</section>

			<section id="sidebar"></section>
		</nav>

<!--        <div class="agahi-img-container">-->
<!--            <ul id="logout">-->
<!--                <!-- TODO: bundle for password -->
<!--                <a href="#"  data-toggle="tooltip" data-placement="right" title="تغییر پسورد"><li id="change-password"><img alt="lock" src="assets/css/daak/images/lock.png"/></li></a>-->
<!--                <!-- TODO: bundle for logout -->
<!--                <a href="../login/logOut_ctl.php" data-toggle="tooltip" data-placement="right" title="خروج"><li ><img alt="lock" src="assets/css/daak/images/off.png"/></li></a>-->
<!--            </ul>-->
<!---->
<!--            <img  id="logoutMenu" class="agahi-img" src="assets/css/daak/images/educational.png">-->
<!---->
<!--        </div>-->


    </header>

	<section class="daak-container">
<!--		    <div da-type="da-message_container" da-url="assets/css/actMessage.do"></div>-->

<!--		<div da-type="da-message_container">-->
		<div class="message-box">
			<div class="message-title-content">
				<h3 class="message-title">تعداد مراجعه کنندگان</h3>
				<h3 class="message-date">تاریخ ثبت : 12/5/1365</h3>
				</div>
				<div class="message-content"></div>
				</div>
<!--		</div>-->

	</section>

	<!--TODO: data-url to da-url and use bundle-->
	<div id="vertical-menu" class="daak-vertical-menu-container no-select">
		<section class="daak-extea-menu">
			<img  class="daak-user" src="daak/images/user.png">
			<section class="daak-user-name">داود اکبری </section>
			<input class="daak-search" type="text" placeholder="جستجو"/>
		</section>
		<ul class="daak-vertical-menu">
			<li class="daak-vertical-sub-menu">
				<a href="#"><span class="glyphicon glyphicon-flag"></span>گروه</a>
				<ul>
					<li daak-url="_stu/_stu_controller" >

						<a href="#"><span  class="glyphicon glyphicon-menu-hamburger"></span>گروه</a>

					</li>
					<li daak-url="_list/_list_controller" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-user"></span>مزایای گروه</a>
					</li>
					<li daak-url="_group/_group_ctl" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-th-large"></span>جستجوی گروه</a>
					</li>

				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>نوبت دهی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>ارزی ریالی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>مشاوره ای</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>دندان پزشکی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>ارشدیت</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>لوازم خانگی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>اسب سواری</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>سوار کگاری</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>حسین کرد شبستر</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>ناصر عبادی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>

			<li class="daak-vertical-sub-menu">
				<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>احمد والدی</a>
				<ul>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
					</li>
					<li daak-url="../group/searchgroup/searchgroup_view.php" >
						<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>





<!-- ------------------------------------------   -->
<!--<div id="bilbord-content" class="modal fade" tabindex="-1" role="dialog">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div id="bilbord" class="modal-content">-->
<!---->
<!--            <div class="modal-body">-->
<!--                <div id="title-container">-->
<!--                    <div id="title">-->
<!--                        <!-- TODO:bubdle-->-->
<!--                        سامانه ی تستی-->
<!--                    </div>-->
<!--                    <div id="agahi-image-bilbord">-->
<!--                        <img class="agahi-img" src="assets/css/daak/images/educational.png">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div id="bilbord-details">-->
<!--                    <div>-->
<!--                        <!-- TODO:bubdle-->-->
<!--                        name karbarey : <span> user_name user_family</span>-->
<!--                    </div>-->
<!--                    <!-- TODO:bubdle-->-->
<!--                    <div>time : <span>date</span> </div>-->
<!--                    <!-- TODO:bubdle-->-->
<!--                    <div>enter : <span>enter time</span></div>-->
<!--                    <!-- TODO:bubdle-->-->
<!--                    <div> <strong>version</strong></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div><!-- /.modal-content -->-->
<!--    </div><!-- /.modal-dialog -->-->
<!--</div><!-- /.modal -->-->
<!--</div>-->





<!-- jquery -->
<script src="assets/js/scripts/jQuery/jquery-3.1.1.min.js"></script>

<!-- select2 Script
<script src="assets/js/scripts/jQuery/select2.js"></script>-->

<!-- bootstrap -->
<script src="assets/js/scripts/bootstrap.min.js"></script>

<!-- jquery.validate -->
<script src="assets/js/scripts/jQuery/jquery.validate.min.js"></script>
<script src="assets/js/scripts/jQuery/jquery.validate.additional-methods.min.js"></script>
<script src="assets/js/scripts/jQuery/messages_fa.js"></script>
<script src="assets/js/scripts/jQuery/jquery-validate.bootstrap-tooltip.min.js"></script>

<!--serialize-->
<script src="assets/js/scripts/jQuery/jquery.serialize-object.min.js"></script>

<!-- Pnotify Script  -->
<script src="assets/js/scripts/jQuery/pnotify.custom.min.js"></script>
<script src="assets/js/scripts/jQuery/pnotify.types.DA.js"></script>

<!-- jquery.fileDownload Script  -->
<script src="assets/js/scripts/jQuery/jquery.fileDownload.js"></script>


<script src="plugins/mb_table/js/jquery.dataTables.min.js"></script>
<script src="bootstrap/dataTables.bootstrap.min.js"></script>

<script src="plugins/mb_table/js/dataTables.buttons.min.js"></script>
<script src="plugins/mb_table/js/buttons.print.min.js"></script>
<script src="plugins/mb_table/js/dataTables.select.min.js"></script>
<script src="plugins/mb_table/js/buttons.html5.min.js"></script>

<!-- bootstrap-slider.js
<link rel="stylesheet" href="assets/js/scripts/jQuery/bootstrap-slider.js" media="screen"/>-->

<!-- html2canvas  -->
<script src="assets/js/scripts/html2canvas.js"></script>

<!-- da...--------------------------------------- -->
<script src="daak/js/daak-main.js"></script>
<script src="assets/js/daak/da-XSLTransform.js"></script>
<script src="daak/js/daak-menu.js"></script>
<script src="daak/js/daak-portal.js"></script>
<script src="assets/js/daak/da-data.js"></script>
<script src="assets/js/daak/da-date.js"></script>
<script src="assets/js/daak/da-print.js"></script>
<script src="assets/js/daak/da-attachment.js"></script>
<script src="assets/js/daak/da-show_image.js"></script>
<script src="assets/js/daak/da-show_message.js"></script>

<!--<script src="assets/js/daak/da-bundle.js"></script>-->

</body>
</html>
