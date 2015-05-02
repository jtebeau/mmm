( function ($) {

    "use strict";

    $(document).ready(function() {

    // Header Background Advanced Box {
        var adv          =  $('#xenia_page_header_advanced'),
            bgField      =  $('#xenia_page_header_bg'),
            dividerLast  =  $('.rwmb-divider-wrapper:last'),
            dividerFirst =  $('.rwmb-divider-wrapper:first'),
            wrapperObj      =  $('<div />', {
                "id": "xenia-page-header-advanced-section"
            });

            dividerFirst.nextUntil(dividerLast).andSelf().wrapAll(wrapperObj);

            var wrapperEl = $('#xenia-page-header-advanced-section');

            if (adv.is(':checked')) {
                wrapperEl.slideDown();
            } else {
                wrapperEl.slideUp();
            }

            adv.on('click', function () {
                if ($(this).is(':checked')) {
                    wrapperEl.slideDown();
                } else {
                    wrapperEl.slideUp();
                }
            });
    // }


        // var template = $('#page_template'),
        //     templateVal = template.val(),
        //     tinyMCE = $('#postdivrich'),
        //     vpbvc = $('#wpb_visual_composer'),
        //     vpbvc_swith = $('.composer-switch');

        // if (templateVal === 'template-portfolio.php') {
        //     vpbvc_swith.hide();
        //     tinyMCE.hide();
        //     vpbvc.hide();
        // }

        // template.on('change', function () {
        //     if ($(this).val() === 'template-portfolio.php') {
        //         vpbvc_swith.slideUp();
        //         tinyMCE.slideUp();
        //         vpbvc.slideUp();
        //     } else {
        //         vpbvc_swith.slideDown();
        //         tinyMCE.slideDown();
        //         vpbvc.slideDown();
        //     }
        // });


    // Layout && Widgets Area Relations
        var layoutObj = {
            layoutSwitch: $('[name = xenia_page_layout]').parent(),

            layoutCurrent: $('[name = xenia_page_layout]:checked'),

            layout: null,

            widgetsArea: $('#xenia_page_widgets_area').parent().parent(),

            setLayout: function () {
                return this.layoutCurrent.val();
            }
        };

        layoutObj.layout = layoutObj.setLayout();

        if (layoutObj.layout === 'no') {
            layoutObj.widgetsArea.hide();
        }

        layoutObj.layoutSwitch.on('click', function() {
            layoutObj.layout = $(this).find('input').val();
            if (layoutObj.layout === 'no') {
                layoutObj.widgetsArea.slideUp();
            } else {
                layoutObj.widgetsArea.slideDown();
            }
        });

    });

} )(jQuery);