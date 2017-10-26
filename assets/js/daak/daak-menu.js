/*
Created on 2015

@author: davood akbary
 * 
tel: 09125188694
*/

;(function( $, window, document, undefined ) {
//--Base----------------------------------------------------------------------
        
        $.fn.DAreadRequestUrl = function(url){
            
            var self = $(this);
            
            $.ajax({
                    url : url,
                    success : function(result){

                        self.html(result);

                        $(result).filter("script").each(function(i) {
                        
                        var DAmainHeading = window.DAtitle + " <span>" + window.DAdescription + "</span>"

                        $("#main-heading").html(DAmainHeading);

                        var scriptUrl = $(this).attr("src");

                        if (scriptUrl){
                            $.getScript(scriptUrl);
                              /* $.ajax({
                                     method: "GET",
                                     url : scriptUrl,
                                     /*success : function(result){
                                          //eval(result);  //java script type 
                                          $.globalEval(result);
                                     }
                                    dataType: "script"
                                });*/
                        }
                        });
                    }
                });
        }
        
        
        $.fn.DApostJson = function (parameter){
            parameter.type =  'post';
            parameter.data = JSON.stringify(parameter.data);
            parameter.dataType = "json";
            parameter.contentType = "application/json; charset=utf-8",
            parameter.processData = false;
            $.ajax(parameter);
        }
        
        /*$.fn.DApostJson = function (url, done, fail, rules, data){
                
                if (rules == undefined){
                    rules = false;
                }
                
                var request = $.ajax({
                    url: url,
                    type: 'post',
                    data: JSON.stringify({rules:rules, data: data}),
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    processData: false
                });

                request.done(function (jsonData){
                    done(jsonData);
                });
                request.fail(function (jqXHR, textStatus){
                    fail(jqXHR, textStatus );
                });
        }*/
        
        $.fn.DApostJsonDataEelement = function (url, done, fail, rules, findQuery){
                 var formElements = findQuery != undefined ? $(this).find("input[name!=cpass],select") : $(this);
                 var data = formElements.serializeObject();
                    
                 $(this).DApostJson(url, done, fail, rules, data);
        }

        /*$.fn.DApostJsonDataEelement = function (url, done, fail, rules, findQuery){
            
                //var self = $(this);
                
                if (rules == undefined){
                    rules = false;
                }
                
               
                var formElements = findQuery != undefined ? $(this).find("input[name!=cpass],select") : $(this);
               
                var request = $.ajax({
                    url: url,
                    type: 'post',
                    data: JSON.stringify({rules:rules, data: formElements.serializeObject()}),
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    processData: false
                });

                request.done(function (jsonData){
                    done(jsonData);
                });
                request.fail(function (jqXHR, textStatus){
                    fail(jqXHR, textStatus );
                });
        }*/
//--run---------------------------------------------------------------------------
			
	var demos = {
	};
               
        
        $(document).ready(function() {
                    var DAcurrentMainMenu = $("");
                    var DAcurrentSubMenu = $("");
                    
                    var DAmainHeading = "میز کار <span>این صفحه برای مانیتور کردن اطلاعات است! </span>"
                    var main_content = $("#main-content").html();
                    $("#main-heading").html(DAmainHeading);
                                
                    
                   // $("#mainTitle").html($("#General").attr("id"));
                   // $("#subTitle").html($("#Dashboard").attr("id"));
                   // $("#main-content").DAreadRequestUrl($("#Dashboard").attr("name"));
                    
                    DAcurrentSubMenu.addClass("active");
                    DAcurrentMainMenu.addClass("active");    
            
                    $(".da-menu-item").click( function() {
                        if(!DAcurrentSubMenu.is($(this))){
                            
                            if ($(this).attr("id") == "Dashboard"){
                                $("#main-content").html(main_content);
                                               
                                $("#main-heading").html(DAmainHeading);
                                
                                $("#mainTitle").parent().html(DAcurrentMainMenu.attr("id"));
                                $("#subTitle").html(DAcurrentSubMenu.attr("id"));
                            }
                            else{
                        
                                if ($(this).daak("da-url")){
                                     if( $.fn.DAreadRequestUrl ) { 
                                         $("#main-content").DAreadRequestUrl($(this).daak("url"));
                                     }

                                     $(this).addClass("active");
                                    DAcurrentSubMenu.removeClass("active");
                                    DAcurrentSubMenu = $(this);

                                    $("#mainTitle").html(DAcurrentMainMenu.attr("id"));
                                    $("#subTitle").html(DAcurrentSubMenu.attr("id"));
                                }  
                            }
                        }
                    });
            
			
                    $('span').click(function(){
                        var title = $(this).attr("title");
                        if (title){
                            DAcurrentMainMenu = $(this).parent();   
                        }  
                    });
		
	});
	
	$(window).load(function() {                
		// When all page resources has finished loading
	});
	
}) (jQuery, window, document);


/*--v-david 1395-07-23*/
;(function( $, window, document, undefined ) {

	var demos = {
	};

	var verticalMenu = $('#vertical-menu');
	$.verticalMenu = verticalMenu

	$.verticalMenuClosed = true;
	$.verticalMenuMoving = false;

	$.openVerticalMenu = function(){
		if (($.verticalMenuClosed) && ($.verticalMenuMoving == false)){
			$.verticalMenuMoving = true;

			$(verticalMenu).show();
			$(verticalMenu).cssAnimate("slideInRight", function(){
				$.verticalMenuMoving = false;
				$.verticalMenuClosed = false;
			});
		}
	}

	$.closeVerticalMenu = function(){
		if (($.verticalMenuClosed == false) && ($.verticalMenuMoving == false)){
			$.verticalMenuMoving = true;

			$(verticalMenu).cssAnimate("slideOutRight", function(target){
				$(target).hide();
				$.verticalMenuMoving = false;
				$.verticalMenuClosed = true;
			});
		}
	}

	$(document).ready(function() {
		$(verticalMenu).yScrolling();

	});



	$( document ).scroll(function() {
		$(verticalMenu).cssAnimate("zoomOut", function(target){
			$(target).hide();
		});

	});

	$(verticalMenu).bind("click", function(){
		if ($(verticalMenu).yScrolled == false){
			$.closeVerticalMenu();
		}
	});

	$(verticalMenu).find("li").each(function(index){
		$(this).bind("click", function(e){
			if ($(verticalMenu).yScrolled == false){
				if ($(this).hasClass('vertical-sub-menu')){
					e.stopPropagation();
					$(verticalMenu).find("li").each(function(index){
						$(this).removeClass("open");
					});

					$(this).addClass("open");
					$(this).find("ul:first").hide();
					$(this).find("ul:first").fadeToggle('slow');
				}
				else{
					$.closeVerticalMenu();
				}

				var top = $(this).offset().top;
				var height = $(this).height() + 24;
				var verticalMenuHeight = $(verticalMenu).height();
				var bottom = (top + height);
				if ((top < 0) || (bottom >= verticalMenuHeight)){
					$(verticalMenu).animate({ scrollTop: $(verticalMenu).scrollTop() + top }, 300);
				}
				/*else{
                    //$(verticalMenu).scrollTop($(verticalMenu).scrollTop() + top);
                    $(verticalMenu).animate({ scrollTop: $(verticalMenu).scrollTop() + top }, 300);
                }*/
			}
		});

	});



	$(window).load(function() {

	});

}) (jQuery, window, document);
