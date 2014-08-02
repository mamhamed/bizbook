$(document).ready(function () {
// Desktop version

    if ($("[title]").length) {
		$("[title]").tooltip({delay: {show: 500, hide: 100}});
	}
		
    $("li.elgg-more a").click(function(){
           $("#elgg-menu-account").slideUp("fast");
            $('.elgg-state-active').removeClass('elgg-state-active');
        $("#elgg-menu-site-more").slideToggle("slow");
        $(this).toggleClass("elgg-state-active");
        return false;
    });
        $("li.elgg-menu-item-account a").click(function(){
             $("#elgg-menu-site-more").slideUp("fast");
           $('.elgg-state-active').removeClass('elgg-state-active');
        $("#elgg-menu-account").slideToggle("slow");
        $(this).toggleClass("elgg-state-active");
        return false;
    });
	
                $(window).resize(function() {

				 if($(window).width() >= 768) {
				$('.elgg-state-active').removeClass('elgg-state-active');
                $(".elgg-nav-collapse").show();
				 } else {
					$(".elgg-nav-collapse").hide();
					$('.elgg-state-active').removeClass('elgg-state-active');
					}
				}).resize();
// remove autofocus to avoid pagejump
   $(".elgg-form-login input").removeClass("elgg-autofocus");
});
