<?php
/*
Template Name: Fullscreen Slideshow - 1 ihatetomatoes
*/
get_header(); ?>


<section class="slide" id="one">
    <div class=“inner”>
        <h1>Slide Title</h1>
        <p>Slide description text goes here.</p>
    </div>
</section>
<section class="slide" id="two">
    <div class=“inner”>
        <h1>Slide Title</h1>
        <p>Slide description text goes here.</p>
    </div>
</section>
<section class="slide" id="three">
    <div class=“inner”>
        <h1>Slide Title</h1>
        <p>Slide description text goes here.</p>
    </div>
</section>
<section class="slide" id="four">
    <div class=“inner”>
        <h1>Slide Title</h1>
        <p>Slide description text goes here.</p>
    </div>
</section>

<script>
/* Using jQuery */
(function($) {
 
    // Init ScrollMagic
    var ctrl = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: 'onLeave'
        }
    });


    // Create scene
    $("section.slide").each(function() {
     
        var name = $(this).attr('id');
     
        new ScrollMagic.Scene({
            triggerElement: this
        })
        .setPin(this)
        .addIndicators({
            colorStart: "rgba(255,255,255,0.5)",
            colorEnd: "rgba(255,255,255,0.5)", 
            colorTrigger : "rgba(255,255,255,1)",
            name:name
        })
        .loglevel(3)
        .addTo(ctrl);
     
    });


    // get window height
    var wh = window.innerHeight;
     
    new ScrollMagic.Scene({
      offset: wh*3
    })
    .setClassToggle("section#four", "is-active")
    .addTo(ctrl);




    console.log('ihatetomatoes');
})(jQuery);
</script>
<?php get_footer();
