<?php
/*
Template Name: GreenSock TimelineLite
*/
get_header();
?>

<div id="page-full-width" role="main">
    <article class="main-content">

        <h1><strong>Green<span>Sock</span></strong> - TimelineLite</h1>
        <div id="box" class="box">
          <div class="boxSmall"></div>
          <div class="boxSmall boxTiny"></div>
        </div>
        <div id="box2" class="box">
          <div class="boxSmall"></div>
          <div class="boxSmall boxTiny"></div>
        </div>
        <div id="box3" class="box">
          <div class="boxSmall"></div>
          <div class="boxSmall boxTiny"></div>
        </div>

        <div id="controls">
          <div id="slider"></div>
        </div>

    </article>
</div>
<script>
(function($) {
    // 1. Create a variable
    // var $box = $('#box'),
    // $box2 = $('#box2'),
    // $box3 = $('#box3'),
    var $boxes = $('.box'),
    tl = new TimelineLite({onUpdate: updateSlider});
    // tl = new TimelineLite();

// 2. Create tweens for our boxes
/*
TweenLite.from($box, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut});
TweenLite.from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut, delay: 0.5});
TweenLite.from($box3, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut, delay: 1});
*/
 
// 3. Add Tweens to Timeline
// tl.from($box, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}) // no comma or semi-colon
//   .from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}) // no comma or semi-colon
//   // .from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}, 0)
//   // .from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}, '-=0.5')
//   .from($box3, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}); // semi-colon after last tween

// 3. Add Tweens to Timeline
// tl.from($box, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut})
//   .from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut})
//   .add('moveAway')
//   .from($box3, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut})
//   .to($box, 1, {x: '-=200', ease:Power1.easeInOut}, 'moveAway')
//   .to($box2, 2, {x: '-=100', ease:Power1.easeInOut}, 'moveAway');

// 7. staggerFrom()
// tl.from($box, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut})
//   .from($box2, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut})
//   .from($box3, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut});

  // 7. staggerFrom()
// tl.staggerFrom([$box,$box2,$box3], 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut});
// 7. staggerFrom()
// tl.staggerFrom([$box,$box2,$box3], 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}, 0.5);
// 7. staggerFrom() - update element to $boxes
// tl.staggerFrom($boxes, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}, 0.5);
// 7. staggerFrom(), staggerTo(), staggerFromTo()
tl.staggerFrom($boxes, 1, {y: '-=40', autoAlpha: 0, ease:Power4.easeInOut}, 0.5)
  .staggerTo($boxes, 1, {x: -250, autoAlpha: 0, ease:Power4.easeInOut, clearProps: 'x'}, 0.5)
  .staggerFromTo($boxes, 1, {y: '+=40', immediateRender: false}, {rotation: 45, transformOrigin: 'top right', autoAlpha: 1, ease:Power4.easeInOut}, 0.5);




// 4. Create a Slider to Control Playback
$("#slider").slider({
      range: false,
  min: 0,
  max: 100,
  step:.1,
  slide: function ( event, ui ) {
    tl.pause();
    //adjust the timeline’s progress() based on slider value
    tl.progress( ui.value/100 );
    }
});
 
// updateSlider function
function updateSlider() {
  $("#slider").slider("value", tl.progress() *100);
}

// var tl = new TimelineLite({onUpdate: updateSlider});




console.log('GreenSock TimelineLite');
})(jQuery);
</script>
<?php get_footer();
