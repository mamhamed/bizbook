$(document).ready(function(){
$(".elgg-nav-collapse").hide();
// Mobile version
    $(".elgg-button-nav").click(function(){
           $("#elgg-menu-account").slideUp("fast");
            $('.elgg-state-active').removeClass('elgg-state-active');
        $(".elgg-nav-collapse").slideToggle("slow");
        $(this).toggleClass("elgg-state-active");
        return false;
    });
	$("li.elgg-menu-item-account a").click(function(){
             $(".elgg-nav-collapse").slideUp("fast");
           $('.elgg-state-active').removeClass('elgg-state-active');
        $("#elgg-menu-account").slideToggle("slow");
        $(this).toggleClass("elgg-state-active");
        return false;
    });
	// remove autofocus to avoid pagejump
   $(".elgg-form-login input").removeClass("elgg-autofocus");
});
// iOS Hover Event Class Fix
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
    $(".elgg-page").click(function(){
        // 
    });
}


