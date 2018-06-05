
$(document).ready(function() {

		$('.same').matchHeight({
        property: 'height'
    });
		// $('.main_sect_wrap, .main_sect_right').matchHeight({
    //     property: 'height'
    // });

		// $('.ChildVerticalTab_1').easyResponsiveTabs({
    //     type: 'vertical',
    //     width: 'auto',
    //     fit: true,
    //     tabidentify: 'ver_1', // The tab groups identifier
    //     activetab_bg: '#fff', // background color for active tabs in this group
    //     inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
    //     active_border_color: '#c1c1c1', // border color for active tabs heads in this group
    //     active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
    // });

	$('.menu-icon').bind('touchstart mousedown', function(e){
		$(".mobile-nav li").removeClass("open");
		$(".sub-nav").slideUp(200);
		$("body").toggleClass("menu-open");
		if($("body").hasClass("search-open")){
			$("body").removeClass("search-open");
		}
		return false;
	});


var cnt = 0;
$('.humburg a').click(function() {
		if (cnt % 2 == 0) {
			$('.dash_menu').animate({'left':'0'});
		} else {
			$('.dash_menu').animate({'left':'-300px'});
		}
		cnt++;

});


	$(".has-children .toggle").click(function(e) {
		var sub_nav = $(this).closest("li").children(".sub-nav");
		if(sub_nav.is(':visible'))
		{
			$(this).closest("li").removeClass("open");
			sub_nav.slideUp(200);
		}
		else
		{
			$(".mobile-nav li").removeClass("open");
			$(this).closest("li").addClass("open");
			$(".sub-nav").slideUp(200);
			sub_nav.slideDown(200);
		}

		return false;

	});

	$('.flexslider').flexslider({
       animation: "slide"
   });

});

// function openCity(evt, cityName) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//         tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//         tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cityName).style.display = "block";
//     evt.currentTarget.className += " active";
// }
//
// // Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
