<?php
/*
Template Name: GreenSock
*/
get_header();
?>

<div id="page-full-width" role="main">
    <article class="main-content">

<div id="box">
  <div class="boxSmall"></div>
  <div class="boxSmall boxTiny"></div>
</div>

    </article>
</div>
<script>
// 7. Callback functions
function start(){
  console.log('start');
}
function update(){
  console.log('animating');
}
function complete(){
  console.log('end');
}
(function($) {

    // 1. Create a variable
    var $box = $('#box');

    // 2. Create a First .to() Tween
    // TweenLite.to($box, 1.0, {left: 0, x: 0}); //, top:0, y:100


    // 3. Create a .from() Tween
    // TweenLite.from($box, 2, {x: '-=500px', autoAlpha: 0});



    // 4. Create a .set() Tween
    // TweenLite.set($box, {x: '-=200px', scale: 0.3});
    // TweenLite.set($box, {x: '+=100px', scale: 0.6, delay: 1});
    // TweenLite.set($box, {x: '-50%', scale: 1, delay: 2});
    // TweenLite.set($box, {x: '-20%', scale: 1.5, delay: 3});

    // 5. Create a .fromTo() Tween
    // TweenLite.fromTo($box, 2, {x: '-=200px', y: '+=200px'}, {x: 150, y: -150});

    // 6. Easing
    // TweenLite.fromTo($box, 2, {x: '-=200px'}, {x: 150, ease:Power4.easeInOut});
    TweenLite.fromTo($box, 2, {x: '-=200px'}, {x: 150, ease:Power4.easeInOut, onStart: start, onComplete: complete, onUpdate: update});


    //7

    // TweenLite.to($box, 0.4, {top: '100%', y: '-100%', ease:Bounce.easeOut, delay: 2});
    // TweenLite.to($box, 0.7, {x: '-=200px', y: '-100%', ease:Back.easeInOut, delay: 3});
    // TweenLite.to($box, 0.8, {x: '-=200px', y: '-100%', ease:Back.easeInOut, delay: 4.2});
    // TweenLite.to($box, 2.5, {top: '50%', y: '-50%', ease:Power0.easeNone, delay: 5});
    // TweenLite.to($box, 2.5, {x: '+=400px', ease:Elastic.easeInOut, delay: 7.7});
    // TweenLite.to($box, 2.5, {x: '-=400px', rotation: -720, ease: SlowMo.ease.config(0.1, 0.7, false), delay: 10.4});
    // TweenLite.set($box, {x: '-50%', scale: 1, delay: 18, ease:Bounce.easeOut});




    console.log('GreenSock');
})(jQuery);
</script>
<?php get_footer();
