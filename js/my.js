jQuery(document).ready(function($) {

$('#featured').cycle({
fx: 'fade', //replace fade with other transition types to use different effects
pager:   '#nav',
pause:  1, //The pause option causes the slideshow to pause when the mouse hovers over the slide.
speed:1000, //how fast the fade takes place
timeout:10000, //how long each slide stays on screen
pagerAnchorBuilder: pagerFactory
});
    function pagerFactory(idx, slide) {
        var s = idx > 4 ? ' style="display:none"' : '';
        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
    };
});