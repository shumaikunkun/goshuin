jQuery(document).ready(function() {
var offset = 100;
var duration = 500;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.pagetop').fadeIn(duration);
} else {
jQuery('.pagetop').fadeOut(duration);
}
});

jQuery('.pagetop').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;
})
});
