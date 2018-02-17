/* ------------------------------------------------------------------------------
*
*  # Basic datatables
*
*  Specific JS code additions for datatable_basic.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Table setup
    // ------------------------------

    // Setting datatable defaults
//    $.extend( $.fn.dataTable.defaults, {
////        autoWidth: false,
////        columnDefs: [{ 
////            orderable: false,
////            width: '100px',
////            targets: [ 3 ]
////        }],
//        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
//        language: {
//            search: '<span>Filter:</span> _INPUT_',
//            lengthMenu: '<span>Showing:</span> _MENU_',
//            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
//        },
//        drawCallback: function () {
//            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
//        },
//        preDrawCallback: function() {
//            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
//        }
//    });
//        $.extend( $.fn.dataTable.defaults, {
//        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
//        language: {
//            search: '<span>Search:</span> _INPUT_',
//            lengthMenu: '<span>Show:</span> _MENU_',
//            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
//        },
//        drawCallback: function () {
//            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
//        },
//        preDrawCallback: function() {
//            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
//        }
//    });


    // Basic datatable
    $('.datatable').DataTable({
        buttons: [ 'csv', 'excel', 'pdf', 'print' ]
    });


    // External table additions
    // ------------------------------

    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to search...');

      // Tabletools defaults
//    $.extend(true, $.fn.DataTable.TableTools.classes, {
//        "container" : "btn-group DTTT_container", // buttons container
//        "buttons" : {
//            "normal" : "btn btn-default", // default button classes
//            "disabled" : "disabled" // disabled button classes
//        },
//        "collection" : {
//            "container" : "dropdown-menu" // collection container to take dropdown menu styling
//        },
//        "select" : {
//            "row" : "success" // selected row class
//        }
//    });
    // Enable Select2 select for the length option
//    $('select').select2({
//        minimumResultsForSearch: "-1"
//    });
    
});
