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

    <!-- bootstrap-slider.css
    <link rel="stylesheet" href="assets/css/daak/bootstrap-slider.css" media="screen"/>-->

    <!-- select2
    <link rel="stylesheet" href="assets/css/daak/select2.css" media="screen"/>
    <link rel="stylesheet" href="assets/css/daak/select2-bootstrap.css" media="screen"/>-->

    <!-- -------------------- -->
    <link rel="stylesheet" href="assets/css/daak/bootstrap-pnotify.custom.DA.css"/>
    <link rel="stylesheet" href="assets/css/daak/da-message-form.css"/>
    <link rel="stylesheet" href="assets/css/daak/daak-menu.css"/>
    <link rel="stylesheet" href="assets/css/daak/da-base.css"/>
    <link href="assets/css/daak/da-fonts.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-main.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-date.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-print.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-attachment.css" rel="stylesheet"/>
    <link href="assets/css/daak/da-show_image.css" rel="stylesheet"/>
</head>

<body id="body">
<!-- TODO:bubdle-->
<!-- <%@ include file="/appassets/css/register/struts-error-message.jsp"%> -->

<div id="regbar">
    <div id="navthing">

        <div class="agahi-img-container">
            <ul id="logout">
                <!-- TODO: bundle for password -->
                <a href="#"  data-toggle="tooltip" data-placement="right" title="تغییر پسورد"><li id="change-password"><img alt="lock" src="assets/css/daak/images/lock.png"/></li></a>
                <!-- TODO: bundle for logout -->
                <a href="../login/logOut_ctl.php" data-toggle="tooltip" data-placement="right" title="خروج"><li ><img alt="lock" src="assets/css/daak/images/off.png"/></li></a>
            </ul>

            <img  id="logoutMenu" class="agahi-img" src="assets/css/daak/images/educational.png">

        </div>

        <div id="logo">
            <img id="logo-img" src="assets/css/daak/images/logo.png">
        </div>

        <div id="horizontal-menu-container" class="no-select">
            <ul class="daak-menu daak-horizontal-menu">
                <li id="user-icon" >
                    <a  href="#"><span  class="glyphicon glyphicon-user"></span></a>
                </li>

                <li id="menu-icon"><a href="#"><span  class="glyphicon glyphicon-menu-hamburger"></span></a>
                </li>

            </ul>
        </div>
    </div>

</div>

<!--TODO: data-url to da-url and use bundle-->
<div id="vertical-menu" class="menu daak-vertical-menu-container no-select">
    <ul class="daak-vertical-menu">
		<li>
			<input type="text"/>
		</li>
        <li class="daak-vertical-sub-menu">
			<a href="#"><span class="glyphicon glyphicon-flag"></span>گروه</a>
            <ul>
                <li data-url="../group/searchgroup/searchgroup_view.php" >

					<a href="#"><span  class="glyphicon glyphicon-menu-hamburger"></span>گروه</a>

				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-user"></span>مزایای گروه</a>
				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-th-large"></span>موارد خاص</a>
				</li>

			</ul>
        </li>

		<li class="daak-vertical-sub-menu">
			<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>نوبت دهی</a>
			<ul>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
				</li>
			</ul>
		</li>

		<li class="daak-vertical-sub-menu">
			<a  href="#" da-bundle="group"><span class="glyphicon glyphicon-time" ></span>نوبت دهی</a>
			<ul>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-print"></span>نوبت دهی عمومی</a>
				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-road"></span>نوبت دهی ارزی</a>
				</li>
				<li data-url="../group/searchgroup/searchgroup_view.php" >
					<a href="#" da-bundle="group"><span  class="glyphicon glyphicon-volume-up"></span>نوبت دهی ریالی</a>
				</li>
			</ul>
		</li>
    </ul>
</div>

<div id="container">
    <div da-type="da-message_container" da-url="assets/css/actMessage.do"></div>
</div>



<!-- ------------------------------------------   -->
<div id="bilbord-content" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div id="bilbord" class="modal-content">

            <div class="modal-body">
                <div id="title-container">
                    <div id="title">
                        <!-- TODO:bubdle-->
                        سامانه ی تستی
                    </div>
                    <div id="agahi-image-bilbord">
                        <img class="agahi-img" src="assets/css/daak/images/educational.png">
                    </div>
                </div>

                <div id="bilbord-details">
                    <div>
                        <!-- TODO:bubdle-->
                        name karbarey : <span> user_name user_family</span>
                    </div>
                    <!-- TODO:bubdle-->
                    <div>time : <span>date</span> </div>
                    <!-- TODO:bubdle-->
                    <div>enter : <span>enter time</span></div>
                    <!-- TODO:bubdle-->
                    <div> <strong>version</strong></div>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>





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

<!-- bootstrap-slider.js
<link rel="stylesheet" href="assets/js/scripts/jQuery/bootstrap-slider.js" media="screen"/>-->

<!-- html2canvas  -->
<script src="assets/js/scripts/html2canvas.js"></script>

<!-- da...--------------------------------------- -->
<script src="assets/js/daak/da-main.js"></script>
<script src="assets/js/daak/da-XSLTransform.js"></script>
<script src="assets/js/daak/daak-menu.js"></script>
<script src="assets/js/daak/daak-base.js"></script>
<script src="assets/js/daak/da-data.js"></script>
<script src="assets/js/daak/da-date.js"></script>
<script src="assets/js/daak/da-print.js"></script>
<script src="assets/js/daak/da-attachment.js"></script>
<script src="assets/js/daak/da-show_image.js"></script>
<script src="assets/js/daak/da-show_message.js"></script>

<!--<script src="assets/js/daak/da-bundle.js"></script>-->

</body>
</html>
