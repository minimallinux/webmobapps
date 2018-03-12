export default {
  init() {
// JavaScript to be fired on all pages
jQuery(document).ready( function($) {
//Desktop Nav Dropdown
 $("#menu-item-72.uk-parent a[href$='#']").append("<i class='uk-icon-chevron-down'></i>");	
 $("#menu-item-72.uk-parent").attr("data-uk-dropdown","{mode:'click'}");
 $("#menu-item-72.uk-parent ul").addClass("uk-dropdown uk-dropdown-navbar");
 $("#menu-item-129.uk-parent a[href$='#']").append("<i class='uk-icon-chevron-down'></i>");	
 $("#menu-item-129.uk-parent").attr("data-uk-dropdown","{mode:'click'}");
 $("#menu-item-129.uk-parent ul").addClass("uk-dropdown uk-dropdown-navbar");
//Mobile Nav	
$("#menu-item-58 a,#menu-item-57 a,#menu-item-55 a,#menu-item-71 a,#menu-item-130 a").prepend("<i class='uk-icon-th-large'></i>&nbsp;&nbsp;");
$("#menu-mobile.uk-nav" ).attr("data-uk-nav","{multiple:'true'}");
//Add class and id for each dropdown
$("#menu-item-71.uk-parent ul").removeClass("sub-menu").addClass("uk-nav-sub1");
$("#menu-item-130.uk-parent ul").removeClass("sub-menu").addClass("uk-nav-sub2");
$("#menu-item-71 ul,#menu-item-130 ul").attr('id', 'dropdown');
//Mobile Nav Dropdown because UIKits not working!
$("#menu-item-71").click(function(){
   if ($(".uk-nav-sub2 li").is(':visible')) {
   	   $(".uk-nav-sub2 li").hide();
   	}
   $(".uk-nav-sub1 li").fadeToggle(300);
});
$("#menu-item-130").click(function(){
   if ($(".uk-nav-sub1 li").is(':visible')) {
   	$(".uk-nav-sub1 li").hide();
   }
   $(".uk-nav-sub2 li").fadeToggle(300);
});
});
//Other $("#menu-footer li:nth-child(3)").attr('id', 'dropdown');
},
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

