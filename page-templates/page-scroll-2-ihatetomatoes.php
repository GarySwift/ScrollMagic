<?php
/*
Template Name: Simple ScrollMagic Tutorial - 2 ihatetomatoes
*/
get_header(); ?>

<section id="one">
    <div class="inner innerS1">
        <h1>Simple ScrollMagic Tutorial</h1>
        <p>Learn how to create a <strong>simple scrolling website</strong> using ScrollMagic</p>
    </div>
</section>
<section id="two">
    <div class="innerText innerS2">
        <h2>Why to learn ScrollMagic?</h2>
        <ul class="features">
            <li>It's great for <strong>story telling websites</strong></li>
            <li>It gives you <strong>endless creative power</strong></li>
            <li>It's <strong>easy to use</strong> once you get it</li>
        </ul>
    </div>
</section>
<section id="three">
    <div class="innerText innerS3">
        <h2>When to use ScrollMagic?</h2>
        <ul class="features">
            <li>When building <strong>interactive infographics</strong></li>
            <li>When introducing your <strong>product or service</strong></li>
            <li>When sharing your <strong>unique story or timeline</strong></li>
        </ul>
    </div>
</section>
<!-- <section id="four">
    <div class="innerText innerS4">
        <h2>Want to learn more?</h2>
    </div>
    <div class="iphone">
        <p class="screen screenHat"><img src="<?php //secho get_stylesheet_directory_uri(); ?>/assets/images/img_scrollMagic.png" /></p>
        <p class="screen screenA">A</p>
        <p class="screen screenB">B</p>
        <p class="screen screenC">C</p>
    </div> -->
</section>

<script>
(function($) {

    var wh = window.innerHeight,
    $iphone = $('.iphone'),
    $innerS1 = $('.innerS1'),
    $innerS2 = $('.innerS2'),
    $innerS3 = $('.innerS3'),
    $innerS4 = $('.innerS4'),
    $screenHat = $('.screenHat'),
    $screenA = $('.screenA'),
    $screenB = $('.screenB'),
    $screenC = $('.screenC');

    // init
    // var ctrl = new ScrollMagic.Controller({
    //     globalSceneOptions: {
    //         triggerHook: 'onLeave'
    //     }https://www.youtube.com/watch?v=6omZ5GsuGrI
    // });

    // Create scene
    // $("section").each(function() {
      
    //     new ScrollMagic.Scene({
    //         triggerElement: this,
    //         duration: '50%'
    //     })
    //     .setPin(this)
    //     .addTo(ctrl);
     
    // });

    // iPhone intro animation Tween
    /*
    var iphoneIntro = TweenMax.from($iphone, 1, {
        yPercent: 50,
        xPercent: 100,
        ease: Cubic.easeOut
    });
  */

    // iPhone intro animation Timeline
    // var iphoneIntroTl = new TimelineMax();
    // iphoneIntroTl
    //     .from($iphone, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
    //     .to($innerS1, 0.5, {opacity: 0, yPercent: -5, scale: 0.98}, '0');

    // // iPhone back to stylesheet position
    // new ScrollMagic.Scene({
    //     duration: '70%'
    // })
    // .setTween(iphoneIntroTl)
    // .triggerElement($('body')[0])
    // .addTo(ctrl);
    
    // Animate the hat up, letter A in and fade in content of section 2
  // var iphoneContentHat = new TimelineMax();
  // iphoneContentHat      
  //   .to($screenHat, 1, {yPercent: -50, ease: Power4.easeOut})
  //   .fromTo($screenA, 1, {yPercent: 20, autoAlpha: 0, scale: 0.8}, {yPercent: 0, autoAlpha: 1, scale: 1, ease: Power4.easeOut}, '0')
  //   .from($innerS2, 1, {autoAlpha: 0}, '-=0.3');

  // new ScrollMagic.Scene({
  //   offset: wh*0.6,
  //   triggerElement: $('body')[0],
  //   duration: '80%'
  // })
  // .setTween(iphoneContentHat)
  // .addIndicators()
  // .addTo(ctrl);

    // Animate letter A out, letter B in and fade in content of section 3
  // var iphoneContent1Tl = new TimelineMax();
  // iphoneContent1Tl      
  //   .to($screenA, 0.3, {yPercent: -30, autoAlpha: 0, ease: Power4.easeInOut})
  //   .fromTo($screenB, 1, {yPercent: 20, autoAlpha: 0}, {yPercent: 0, autoAlpha: 1, ease: Power4.easeInOut})
  //   .from($innerS3, 1, {autoAlpha: 0}, '-=0.7');

  // new ScrollMagic.Scene({
  //   triggerElement: $('.innerS2 h2')[0],
  //   duration: '50%'
  // })
  // .setTween(iphoneContent1Tl)
  // .addTo(ctrl);

    // Animate letter B out, letter C in and fade in content of section 4
  // var iphoneContent2Tl = new TimelineMax();
  // iphoneContent2Tl      
  //   .to($screenB, 0.3, {yPercent: -30, autoAlpha: 0, ease: Power4.easeInOut})
  //   .fromTo($screenC, 1, {yPercent: 20, autoAlpha: 0}, {yPercent: 0, autoAlpha: 1, ease: Power4.easeInOut})
  //   .from($innerS4, 1, {autoAlpha: 0}, '-=0.7');

  // new ScrollMagic.Scene({
  //   triggerElement: $('.innerS3 h2')[0],
  //   duration: '50%'
  // })
  // .setTween(iphoneContent2Tl)
  // .addTo(ctrl);











//     var wh = window.innerHeight,
//         $iphone = $('.iphone'),
//         $innerS1 = $('.innerS1'),
//         $innerS2 = $('.innerS2'),
//         $innerS3 = $('.innerS3'),
//         $innerS4 = $('.innerS4'),
//         $screenHat = $('.screenHat'),
//         $screenA = $('.screenA'),
//         $screenB = $('.screenB'),
//         $screenC = $('.screenC');
 
//     // Keep adding code here

//     // init
//     var ctrl = new ScrollMagic.Controller({
//         globalSceneOptions: {
//             triggerHook: 'onLeave'
//         }
//     });
     
//     // Create scene
//     $("section").each(function() {
//        var name = $(this).attr('id');
//         new ScrollMagic.Scene({
//             triggerElement: this,
//             duration: '50%'
//         })
//         .setPin(this)
//         .addIndicators( {
//             name: name
//         })
//         .addTo(ctrl);
//     }); 

//     // iPhone intro animation Tween
//     var iphoneIntro = TweenMax.from($iphone, 1, {
//         yPercent: 50,
//         xPercent: 100,
//         ease: Cubic.easeOut
//     });

//     // iPhone back to stylesheet position
//     new ScrollMagic.Scene({
//         duration: '70%'
//     })
//     .setTween(iphoneIntroTl)
//     .triggerElement($('body')[0])
//     .addTo(ctrl);

//     // iPhone intro animation Timeline
//     var iphoneIntroTl = new TimelineMax();
//     iphoneIntroTl
//         .from($iphone, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
//         .to($innerS1, 0.5, {opacity: 0, yPercent: -5, scale: 0.98}, '0');



//     var iphoneContentHat = new TimelineMax();
//     iphoneContentHat       
//         .to($screenHat, 1, {yPercent: -50, ease: Power4.easeOut})
//         .fromTo($screenA, 1, {yPercent: 20, autoAlpha: 0, scale: 0.8}, {yPercent: 0, autoAlpha: 1, scale: 1, ease: Power4.easeOut}, '0')
//         .from($innerS2, 1, {autoAlpha: 0}, '-=0.3');
     
//     new ScrollMagic.Scene({
//         offset: wh*0.6,
//         triggerElement: $('body')[0],
//         duration: '80%'
//     })
//     .setTween(iphoneContentHat)
//     .addTo(ctrl);



// // iPhone back to stylesheet position
// new ScrollMagic.Scene({
//     duration: '70%'
// })
// .setTween(iphoneIntroTl)
// .triggerElement($('body')[0])
// .addTo(ctrl);

})(jQuery);
</script>
<?php get_footer();
