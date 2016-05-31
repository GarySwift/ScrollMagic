<?php
/*
Template Name: 1 - First Tween
*/
get_header(); ?>
<div id="page-full-width" role="main">
    <article class="first-tween">

        <div id="container">
            <div id="block">
                Hi there !
            </div>
        </div>

    </article>
</div>

<script>
(function($) {

    var controller = new ScrollMagic.Controller();
    var changeToRed = TweenMax.to('#block', 2.5, {
     backgroundColor: 'red',
     color: 'white'
    });

    var whenInContainer = new ScrollMagic.Scene({
        triggerElement: '#container'
    });

    whenInContainer.setTween(changeToRed);
    whenInContainer.addTo(controller);
    whenInContainer.addIndicators();

    console.log('first-tween');
})(jQuery);
</script>
<?php get_footer();
