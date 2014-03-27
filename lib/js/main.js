//==============================================================
// CUSTOM SCRIPTS
// 2013
// ==============================================================


jQuery(document).ready(function($) {

//==============================================================
// Superfish
// ==============================================================

    $('.main-nav').superfish({
        delay: 0
    });
    $('span.sf-sub-indicator').remove();


//==============================================================
// WordPress specialist:
// get Widget title as a widget class
// ==============================================================

    $('.widget_text').each(function() {
        var widgetTitle = $(this).find('.widget-title').text();
        var widgetTitleSlug = widgetTitle.replace(/ /gi, "-");
        widgetTitleSlug = widgetTitleSlug.toLowerCase();
        widgetTitleSlug = "widget-" + widgetTitleSlug;
        $(this).addClass(widgetTitleSlug);
    });


    $('#trigger-primary-nav').click(function() {
        $('.main-nav, .main-page-nav > ul').slideToggle();
        $(this).parent().addClass('toggled-on');
    });
    $('#primary-nav > div > ul li.page_item_has_children').append('<i class="icon-arrow-down"></i>')
    $('.icon-arrow-down').click(function(){
        $(this).parent('li.page_item_has_children').children('ul').slideToggle();
    });

//==============================================================
// Tab Navigation
//==============================================================
    if ($('.tabs').length > 0) {
        //Default Action
        $(".tab_content").hide(); //Hide all content
        if ($("ul.tabs li.active").length == 0) {
            $("ul.tabs li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content
        } else {
            var tabIndex = $("ul.tabs li").index($('ul.tabs li.active'));
            tabIndex++; // as index starts from 0 we need to increase by 1
            $("#tab" + tabIndex).fadeIn();
        }

        //On Click Event
        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content
            var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active content
            return false;
        });
    }

//==============================================================
//Navigation swap class
//==============================================================
var maxwidth=62;
var parentwidth=$('.container').outerWidth();
var navwidth = $('#primary-nav').outerWidth();
var navpercentage =   navwidth / parentwidth * 100;

if(navpercentage>maxwidth){
	$('#primary-nav').addClass('columns sixteen' );
	}	




    (function($) {
        $.fn.responsiveVideo = function() {
            // Add CSS to head
            $('head').append('<style type="text/css">.responsive-video-wrapper{width:100%;position:relative;padding:0 ;margin-bottom:25px;}.responsive-video-wrapper iframe,.responsive-video-wrapper object,.responsive-video-wrapper embed{position:absolute;top:0;left:0;width:100%;height:100%}</style>');
            // Gather all videos
            var $all_videos = $(this).find('iframe[src*="player.vimeo.com"], iframe[src*="youtube.com"], iframe[src*="youtube-nocookie.com"], iframe[src*="dailymotion.com"], iframe[src*="kickstarter.com"][src*="video.html"], object, embed');
            // Cycle through each video and add wrapper div with appropriate aspect ratio if required
            $all_videos.not('object object').each(function() {
                var $video = $(this);
                if ($video.parents('object').length)
                    return;
                if (!$video.prop('id'))
                    $video.attr('id', 'rvw' + Math.floor(Math.random() * 999999));
                $video
                        .wrap('<div class="responsive-video-wrapper" style="padding-top: ' + ($video.attr('height') / $video.attr('width') * 100) + '%" />')
                        .removeAttr('height')
                        .removeAttr('width');
            });
        };
    })(jQuery);
    $( 'body' ).responsiveVideo();

});
// end ready function here.
