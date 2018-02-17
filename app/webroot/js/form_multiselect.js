/* ------------------------------------------------------------------------------
 *
 *  # Bootstrap multiselect
 *
 *  Specific JS code additions for form_multiselect.html page
 *
 *  Version: 1.0
 *  Latest update: Aug 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {


    // Basic examples
    // ------------------------------

    // Basic initialization
    //    $('.multiselect').multiselect({
    //        onChange: function() {
    //            $.uniform.update();
    //        }
    //    });


    // Enable filtering
    $('.multiselect-filtering').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        templates: {
            filter: '<li class="multiselect-item multiselect-filter"><i class="icon-search4"></i> <input class="form-control" type="text"></li>'
        }
    });


    // Related plugins
    // ------------------------------

    // Styled checkboxes and radios
    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });

});