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



<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
<title>MoonCake :: Responsive Admin Template - Form Validation</title>
<script> 
function loadRoleTypes()
{           
alert(123);
 //Check condition here
        
   $.getJSON("_list/_list_controller/tst_load_tbl", null, function(data) {
//  $("#chosen1 option").remove(); // Remove all <option> child tags.
	 $("#input17 option").remove(); // Remove all <option> child tags.
	//$('#chosen1').append('<option> </option>');
    $.each(data.data, function(index, item) { // Iterates through a collection
	
      $("#chosen1").append( // Append an object to the inside of the select box
           $("<option></option>") // Yes you can do this.
                .text(data.data[index][1])
                .val(data.data[index][0])
       );
		$("#input17").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
                .text(data.data[index][1])
                .val(data.data[index][0])
        );
		$("#input18").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
                .text(data.data[index][1])
                .val(data.data[index][0])
        );
    });
});

}
</script>
</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">


    

 <div id="main-content">
                                
                                <div class="row-fluid">
								
									
									
									
									<div class="span12 widget">
										<div class="widget-header">
											<span class="title">Simple Registration Form</span>
										</div>
										<div class="widget-content form-container">
											<form id="validate-4" class="validate-4" method="post">
												<fieldset>
													<legend>Account Info</legend>
													<div class="control-group">
														<label class="control-label">Email <span class="required">*</span></label>
														<div class="controls">
															<input type="text" name="email" class="span12" />
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
													 <form class="form-horizontal">
													<div class="control-group">
													<label class="control-label" for="chosen1">Advanced Select List <span class="required">*</span></label>
													<div class="controls">
														<select id="chosen1" class="select2-select-00 span12" >
												
														</select>
								
													</div>
													</div>
													<div class="control-group">
                                                        <label class="control-label" for="input17">Basic Select</label>
                                                        <div class="controls">
                                                            <select id="input17" class="select2-select-00 span12">
    														

    														</select>
    														<span class="help-block">This select input is made more advance with jquery <a href="http://ivaynberg.github.com/select2/" target="_blank">select2</a> plugin</span>
                                                        </div>
    												</div>
													<div class="control-group">
												       <label class="control-label" for="input18">Multiple Select</label>
                                                        <div class="controls">
                                                            <select id="input18" class="select2-select-00 span12" multiple size="1">
    															
    														</select>
                                                        </div>
    												</div>
													</form>
												</fieldset>
										
													<input type="reset" value="Reset" class="btn" />
													<input type="submit" value="Register" class="btn btn-primary pull-right" />
											
											</form>

										</div>
									
									</div>
								
								</div>

                                
                            </div>

    <!-- Demo Scripts -->
    <script >
	;(function( $, window, document, undefined ) {
			
	var demos = {
	};
if($.fn.select2) {
			
			$( '.select2-select-00' ).select2();
			
		}
	$(document).ready(function() {
				loadRoleTypes();			   
	
	
		
	});
	$(window).load(function() {
		
		// When all page resources has finished loading
	});
	
}) (jQuery, window, document);
	
	</script>

												<script  language="JavaScript" type="text/javascript" >
          $("#validate-4").on("submit", function(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "msg_save.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        $("#chatbox").append(data+"<br/>");//instead this line here you can call some function to read database values and display
                    },
                });
            });
        </script>
</body> 

</html>
