<?php
/*
Template Name: Scroll Wiki
*/
get_header();
?>

<main role="main">
  <section>
    <div>
      <h1>Basic Pin</h1>
    </div>
  </section>

  <section id="pinned-trigger1">
    <div id="pinned-element1">
      <p>This element will be pinned for the half the window height</p>
    </div> 
  </section>

  <section id="pinned-trigger2">
    <div id="pinned-element2">
      <p>This element will be pinned for a duration of 400px</p>
    </div>
  </section>

  <section>
    <div>
      <p>Section Four!</p>
    </div>
  </section>
</main>
<!-- <div id="container" class="container">
    <div id="block" class="block">
        Hi there !
    </div>
</div> -->

<!-- <div id="container2" class="container">
    <div id="block2" class="block">
        Hi there 2!
    </div>
</div> -->
<!-- <div id="page-full-width" role="main">
    <article class="main-content">

    </article>
</div> -->
<script>
(function($) {

    // var controller = new ScrollMagic.Controller();

    // var blockTween = new TweenMax.to('#block', 1.5, {
    //     backgroundColor: 'yellow'
    // });

    // var containerScene = new ScrollMagic.Scene({
    //     triggerElement: '#container'
    // })
    // .setTween(blockTween)
    // .addIndicators()
    // .addTo(controller);

    // var controller = new ScrollMagic.Controller();
    // var containerScene = new ScrollMagic.Scene({
    //     triggerElement: '#container',
    //     duration: 300
    // })
    // .setPin('#block')
    // // .setTween(blockTween)
    // .addIndicators()
    // .addTo(controller);
// init ScrollMagic Controller
var controller = new ScrollMagic.Controller();

// Scene Handler
var scene = new ScrollMagic.Scene({
  triggerElement: "#pinned-trigger1", // point of execution
  duration: $(window).height() - 100, // pin element for the window height - 1
  triggerHook: 0, // don't trigger until #pinned-trigger1 hits the top of the viewport
  reverse: true // allows the effect to trigger when scrolled in the reverse direction
})
.setPin("#pinned-element1"); // the element we want to pin

// Scene2 Handler
var scene2 = new ScrollMagic.Scene({
  triggerElement: "#pinned-trigger2", // point of execution
  duration: 400 // pin the element for a total of 400px
})
.setPin("#pinned-element2"); // the element we want to pin

// Add Scenes to ScrollMagic Controller
controller.addScene([
  scene,
  scene2
]);

    console.log('scroll wiki');
})(jQuery);
</script>
<?php get_footer();
