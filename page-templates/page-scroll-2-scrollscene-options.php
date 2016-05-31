<?php
/*
Template Name: 2 - ScrollScene Options
*/
get_header(); ?>
<div id="page-full-width" role="main">
    <article class="scrollscene-options">

        <div id="container1" class="container">
            <span>Container 1</span>
            <div id="block1" class="block">
                <h6>Block 1</h6>
            </div>
        </div>

        <div id="container2" class="container">
            <span>Container 2</span>
            <div id="block2" class="block">
                <h6>Block 2</h6>
            </div>
        </div>

        <div id="container3" class="container">
            <span>Container 3</span>
            <div id="block3" class="block">
                <h6>Block 3</h6>
            </div>
        </div>

        <div id="container4" class="container">
            <span>Container 4</span>
            <div id="block4" class="block">
               <h6>Block 4</h6>
            </div>
        </div>

        <div style="height: 100vh">&nbsp;</div>

    </article>
</div>

<script>
(function($) {

    var controller = new ScrollMagic.Controller();

    var changeToRed = TweenMax.to('#block1', 0.5, {
     backgroundColor: 'red',
     color: 'white'
    });

    var whenInContainer = new ScrollMagic.Scene({
        triggerElement: '#container1',
        offset: 300,

    });

    whenInContainer.setTween(changeToRed);
    whenInContainer.addTo(controller);
    whenInContainer.addIndicators();


  var changeToRed2 = TweenMax.to('#block2', 0.5, {
     backgroundColor: 'red',
     color: 'white'
    });

    var whenInContainer2 = new ScrollMagic.Scene({
        triggerElement: '#container2',
        offset: 200,
        duration: 100
    });

    whenInContainer2.setTween(changeToRed2);
    whenInContainer2.addTo(controller);
    whenInContainer2.addIndicators();

    var changeToGreen = TweenMax.to('#block3', 0.5, {
        backgroundColor: 'green',
        color: 'white'
    });
    var whenInContainer3 = new ScrollMagic.Scene({
        triggerElement: '#container3',
        duration: $('#container3').outerHeight(),
        reverse: false
    })
    .setTween(changeToGreen)
    .addIndicators()
    .addTo(controller);


    
    console.log('scrollscene-options');
})(jQuery);
</script>
<?php get_footer();
