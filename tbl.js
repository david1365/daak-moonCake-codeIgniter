    function tbl_load(_url,_cluns) {

$(document).ready(function() {
   

$('#example').DataTable( {
"language": {
           
	"sEmptyTable":   	"داده ای برای نمایش وجود ندارد",
	"sInfo":         	"_START_ تا _END_ از _TOTAL_ رکورد",
	"sInfoEmpty":    	"0 تعداد 0 از 0 رکورد",
	"sInfoFiltered": 	"(gefiltert von _MAX_ EintrÃ¤gen)",
	"sInfoPostFix":  	"",
	"sInfoThousands":  	".",
	"sLengthMenu":   	"_MENU_ رکورد",
	"sLoadingRecords": 	"در حال دریافت اطلاعات...",
	"sProcessing":   	"لطفا منتظر باشید...",
	"sSearch":       	"جســتجو: ",
	"sZeroRecords":  	"داده ای برای نمایش وجود ندارد",
	"oPaginate": {
		"sFirst":    	"ابتدا",
		"sPrevious": 	"قبلی",
		"sNext":     	"بعدی",
		"sLast":     	"انتها"
	},
	"oAria": {
		"sSortAscending":  ": مرتب سازس صعودی",
		"sSortDescending": ": مرتب سازی نزولی"
	}
        },
"pagingType": "full_numbers",   
  select: true,
"createdRow": function ( row, data, index ) {
            if ( data[1].replace(/[\$,]/g, '') * 1 > 150000 ) {
                $('td', row).css("color","red");
 /*$('td', row).eq(1).css("color","red");*/
            }
	},
	 dom: '<"top"fB>rt<"bottom"ilp><"clear">',
 buttons: [
            {
                extend: 'collection',
                text: 'Table control',  
      buttons: [
            'copy', 'csv',  'pdf', 
			 {
                extend: 'print',
                text: 'Print all'
            },
            {
                extend: 'print',
                text: 'Print selected',
                exportOptions: {
                    modifier: {
                        selected: true
                    }
                }
            },
            {
                extend: 'excel',
                text: 'Exle selected',
                exportOptions: {
                    modifier: {
                        selected: true
                    }
                }
            }
		]}	,{
                text: 'My button',
                action: function ( e, dt, node, config ) {

var ids = $.map(table.rows('.selected').data(), function (item) {
        return item[0]
    });
    alert(ids)
	const args = [ids, 'p1', 'p2'];
	openDialog(args);
    /*alert(table.rows('.selected').data().length + ' row(s) selected');

                    alert(table.row('.selected').item[1]);
               */ }
            }
        ],columns: _cluns,
		 "processing": true,
        "serverSide": true,
"ajax": _url
    } );
var table= $('#example').DataTable(); 
} );
}