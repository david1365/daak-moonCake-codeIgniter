
<link rel="stylesheet" href="plugins/mb_table/css/jquery.dataTables.min.css" media="screen">
<link rel="stylesheet" href="plugins/mb_table/css/buttons.dataTables.min.css" media="screen">
<link rel="stylesheet" href="assets/css/layout.css" media="screen">


 
<script>

 

  function openDialog(arr) {
document.getElementById("_mail").value =arr[0];
   $("#myModal").modal();
	
}
</script>
<script src="tbl.js"></script>
<script>
$(document).ready(function() {
        var columns= [
            { title: "کد" },
            { title: "نام خانوادگی/نام" },
            { title: "مقطع تحصیلی" },
            { title: "تخصص" },
            { title: "شهر" },
            { title: "شماره همراه" },
            { title: "تاریخ" }
        ];
tbl_load("_mgt/_app/list_drs/",columns)
} );

</script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
     
                                <div class="row-fluid">
									<div class="span12 widget">
										
										<div class="widget-content form-container">
											<form id="validate-4" class="validate-4" method="post">
												<fieldset>
													<legend>Account Info</legend>
													<div class="control-group">
														<label  class="control-label">Email <span class="required">*</span></label>
														<div class="controls">
															<input id="_mail" type="text" name="email" class="span12" />
														</div>
													</div>
													<div class="control-group">
														<label class="control-label">Password</label>
														<div class="controls">
															<input id="pass2" type="text" name="pass2" class="span12" />
														</div>
													</div>
													<div class="control-group">
														<label class="control-label">Confirm Password <span class="required">*</span></label>
														<div class="controls">
															<input type="text" name="cpass2" class="span12" />
														</div>
													</div>
												</fieldset>
												<fieldset class="da-form-inline">
													<legend>Delivery Options</legend>
													<div class="control-group">
														<label class="control-label">Souvenir Delivery Address</label>
														<div class="controls">
															<textarea name="address" class="span12"></textarea>
															<label class="checkbox">
                                                                <input type="checkbox" id="souvenirs" name="souvenirs" class="uniform"> Yes, send me the souvenirs
                                                            </label>
														</div>
													</div>
												</fieldset>
										
													<input type="reset" value="Reset" class="btn" />
													<input type="submit" value="Register" class="btn btn-primary pull-right" />
											
											</form>

										</div>
									
									</div>
								
								</div>

                                
                            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead style="font-weight:bold;">
            <tr>
              <td>Employee name</td>
						<td>employee_id</td>
						<td>Salary</td>
						<td>Position</td>
						<td>City</td>
						<td>Extension</td>
						<td>Joining date</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <td>Employee name</td>
						<td>employee_id</td>
						<td>Salary</td>
						<td>Position</td>
						<td>City</td>
						<td>Extension</td>
						<td>Joining date</td>
            </tr>
        </tfoot>
       
    </table>
	 <style>
  .modal-header, h3, .close {
      background-color: #0c555c;
      color:black !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>



<script>

//--DAscript------------------------------------------------------------------    
    ;(function( $, window, document, undefined ) {
        window.DAtitle = 'مدیریت نوبت';
        window.DAdescription = 'مدیریت درخواستهای رسیده برای نوبت دهی';
   
	
}) (jQuery, window, document);

</script>
