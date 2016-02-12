$(document).ready(function() {
 var time = 5; // time in seconds
 
  var $progressBar,
      $bar, 
      $elem, 
      isPause, 
      tick,
      percentTime;


$(".owl-carousel").owlCarousel({
 

    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : true,
 
    //Basic Speeds
    slideSpeed : 700,
    paginationSpeed : 2000,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : true,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["previo","siguiente"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : "./js/json/headers.json", 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false, 
    afterInit: progressBar, 
    beforeMove: false, 
    afterMove: moved,
    afterAction: false,
    startDragging : pauseOnDragging,
    afterLazyLoad : false
  });


$(".owl-carousel-entrada").owlCarousel({
 

    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 700,
    paginationSpeed : 2000,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : true,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["previo","siguiente"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : "./js/json/entrada.json", 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false, 
    afterInit: progressBar, 
    beforeMove: false, 
    afterMove: moved,
    afterAction: false,
    startDragging : pauseOnDragging,
    afterLazyLoad : false
  });
$(".owl-carousel-honor").owlCarousel({
 

    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 700,
    paginationSpeed : 2000,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : true,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["previo","siguiente"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : "./js/json/honor.json", 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false, 
    afterInit: progressBar, 
    beforeMove: false, 
    afterMove: moved,
    afterAction: false,
    startDragging : pauseOnDragging,
    afterLazyLoad : false
  });

$(".owl-carousel-jardineras").owlCarousel({
 

    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 700,
    paginationSpeed : 2000,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : true,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["previo","siguiente"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : "./js/json/jardineras.json", 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false, 
    afterInit: progressBar, 
    beforeMove: false, 
    afterMove: moved,
    afterAction: false,
    startDragging : pauseOnDragging,
    afterLazyLoad : false
  });

 
 //Init progressBar where elem is $("#owl-demo")
    function progressBar(elem){
      $elem = elem;
      //build progress bar elements
      buildProgressBar();
      //start counting
      start();
    }
 
    //create div#progressBar and div#bar then prepend to $("#owl-demo")
    function buildProgressBar(){
      $progressBar = $("<div>",{
        id:"progressBar"
      });
      $bar = $("<div>",{
        id:"bar"
      });
      $progressBar.append($bar).prependTo($elem);
    }
 
    function start() {
      //reset timer
      percentTime = 0;
      isPause = false;
      //run interval every 0.01 second
      tick = setInterval(interval, 10);
    };
 
    function interval() {
      if(isPause === false){
        percentTime += 1 / time;
        $bar.css({
           width: percentTime+"%"
         });
        //if percentTime is equal or greater than 100
        if(percentTime >= 100){
          //slide to next item 
          $elem.trigger('owl.next')
        }
      }
    }
 
    //pause while dragging 
    function pauseOnDragging(){
      isPause = true;
    }
 
    //moved callback
    function moved(){
      //clear interval
      clearTimeout(tick);
      //start again
      start();
    }
 
    //uncomment this to make pause on mouseover 
    // $elem.on('mouseover',function(){
    //   isPause = true;
    // })
    // $elem.on('mouseout',function(){
    //   isPause = false;
    // })
 
});

