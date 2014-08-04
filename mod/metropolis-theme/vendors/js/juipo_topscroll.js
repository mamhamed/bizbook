$(document).ready(function () {
var extramenu_displayed = false;
$(window).scroll(function() {
				 var extramenu_position = $(window).scrollTop();
				var extramenu_offset = 50;
						if (extramenu_displayed == true) {
							if (extramenu_position < extramenu_offset) {
								$(".jump").fadeOut(400);
								extramenu_displayed = false;
							}
						} else {
							if (extramenu_position >= extramenu_offset) {
								$(".jump").fadeIn(400);
								extramenu_displayed = true;
							}
						}
					}).scroll();
});
