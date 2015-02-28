/* Slide mutil item
================================================*/

jQuery(document).ready(function($) {
  $('.banner-top .carousel').carousel({
  interval: 0
});
  
   $('#sidebar-carousel-wrr').carousel({
  interval: 0
});
   $('#carousel-about').carousel({
      interval: 3000
    });
  });

$('.view[data-type="multi"] .item').each(function(){
  var next1 = $(this).next();
  if (!next1.length) {
    next1 = $(this).siblings(':first');
  }
  next1.children(':first-child').clone().appendTo($(this));
  for (var i=0;i<4;i++) {
    next1=next1.next();
    if (!next1.length) {
      next1 = $(this).siblings(':first');
    }
    next1.children(':first-child').clone().appendTo($(this));
  }
});

$(' .viq[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});
/* Fix item homepage 
================================================*/
$(document).ready(function(e) {
    if (window.matchMedia('(max-width: 767px)').matches)
        {
          var item_lg=$('.service-top #carousel-one-id').innerWidth();
          $('.inner').css({
            width: item_lg+item_lg/2
          });
        }
        if (window.matchMedia('(max-width: 479px)').matches)
        {
          var item_lg=$('.service-top #carousel-one-id').innerWidth();
          $('.inner').css({
            width: item_lg*2
          });
        }
  $(window).resize(function(){
    if (window.matchMedia('(max-width: 767px)').matches)
        {
          var item_lg=$('.service-top  #carousel-one-id').innerWidth();
          $('.inner').css({
            width: item_lg+item_lg/2
          });
        }
       if (window.matchMedia('(min-width: 768px)').matches){
          var item_lg=$('.service-top #carousel-one-id').innerWidth();
          $('.inner').css({
            width:'auto'
          });
        }
        if (window.matchMedia('(max-width: 479px)').matches)
        {
          var item_lg=$('.service-top #carousel-one-id').innerWidth();
          $('.inner').css({
            width: item_lg*2
          });
        }
  });
});
/* Fix center service text and News
================================================*/
jQuery(document).ready(function($) {
  // center media
  $wid_text=$('.text-service').outerWidth();
  $left=($('.service-top .col-md-3').outerWidth()-$wid_text)/2;
  $('.text-service').css({
    left: $left
  });
  $info_news=$('.cor-content.media').outerWidth()- $('.cor-content.media img').outerWidth()-50;
  $('.info-news').css({
    width: $info_news
  });

});
$(window).resize(function(event) {
  $wid_text=$('.text-service').outerWidth();
  $left=($('.service-top .col-md-3').outerWidth()-$wid_text)/2;
  $('.text-service').css({
    left: $left
  });
  $info_news=$('.cor-content.media').outerWidth()- $('.cor-content.media img').outerWidth()-50;

  $('.info-news').css({
    width: $info_news
  });
});

/* Fix Menu
================================================*/
jQuery(document).ready(function($) {

});
/* Scroll fix position for menu top
===============================================*/
$(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("navbar-collapse in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggle").click();
        }
    });
$(document).ready(function() {
var stickyNavTop = $('.topbar').offset().top;

var stickyNav = function(){
var scrollTop = $(window).scrollTop();
if (scrollTop > stickyNavTop) {
    $('.topbar').addClass('sticky').slideDown();
} else {
    $('.topbar').removeClass('sticky').slideDown();
}
};
stickyNav();
$(window).scroll(function() {
    stickyNav();
});
});


/* glide for Mobile IPAD
===============================================*/
$(document).ready(function() {  
     $("#carousel-banner .carousel-inner").swiperight(function() {  
          $(this).parent().carousel('prev');
          });
       $("#carousel-banner .carousel-inner").swipeleft(function() {  
          $(this).parent().carousel('next');
     });
       $(".visit-miss .carousel-inner").swiperight(function() {  
          $(this).parent().carousel('prev');
          });
       $(".visit-miss .carousel-inner").swipeleft(function() {  
          $(this).parent().carousel('next');
     });
       /* service top */
       if (window.matchMedia('(max-width: 768px)').matches)
        {
          $(".service-top .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('prev');  
            });
          $(".service-top .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('next');  
           });
        }
        else{
          $(".service-top .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('pause');  
            });
          $(".service-top .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('pause');  
           });
        }
       $(window).resize(function(){
          if (window.matchMedia('(max-width: 768px)').matches)
        {
          $(".service-top .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('prev');  
            });
          $(".service-top .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('next');  
           });
        }
        else{
          $(".service-top .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('pause');  
            });
          $(".service-top .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('pause');  
           });
        }
      });
       // Page about
       $("#carousel-about .carousel-inner").swiperight(function() {  
          $(this).parent().carousel('prev');
          });
       $("#carousel-about .carousel-inner").swipeleft(function() {  
          $(this).parent().carousel('next');
     });
      $("#fade-quote-carousel .carousel-inner").swiperight(function() {  
          $(this).parent().carousel('prev');
          });
       $("#fade-quote-carousel .carousel-inner").swipeleft(function() {  
          $(this).parent().carousel('next');
     });
        $('#fade-quote-carousel ').on('slide',function(){
          $('blockquote').fadeOut(300);
        })
        // WORRIES

      if (window.matchMedia('(max-width: 768px)').matches)
        {
          $('.inner-wrries').addClass('carousel');
          $('.inner-wrries').addClass('slide');
          $(".inner-wrriesp .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('prev');  
            });
          $(".inner-wrriesp .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('next');  
           });
        }
        else{
          $('.inner-wrries').removeClass('carousel');
          $('.inner-wrries').removeClass('slide');
          $(".inner-wrries .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('pause');  
            });
          $(".inner-wrries .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('pause');  
           });
        }

  $(window).resize(function(){
          if (window.matchMedia('(max-width: 768px)').matches)
        {
          $('.inner-wrries').addClass('carousel');
          $(".inner-wrries .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('prev');  
            });
          $(".inner-wrries .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('next');  
           });
        }
        else{
          $('.inner-wrries').removeClass('carousel');
          $(".inner-wrries .carousel-inner").swiperight(function() {  
              $(this).parent().carousel('pause');  
            });
          $(".inner-wrries .carousel-inner").swipeleft(function() {  
                $(this).parent().carousel('pause');  
           });
        }
      });
  });

jQuery(document).ready(function($){
  // browser window scroll (in pixels) after which the "back to top" link is shown
  var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.cd-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if( $(this).scrollTop() > offset_opacity ) { 
      $back_to_top.addClass('cd-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
      }, scroll_top_duration
    );
  });

});
/* Padding subpage
===============================================*/
jQuery(document).ready(function($) {
  $(function(){

        // SET THE DIV TO THE WINDOW HEIGHT
        $('.subpage').css({'padding-top':($('.topbar').outerHeight())+'px'});
        // RESIZE THE HEIGHT IF THE WINDOW IS RESIZED

  $(window).resize(function(){
   $('.subpage').css({'padding-top':($('.topbar').outerHeight())+'px'});
  });
});
});

/* Fix width height for MiSS
================================================*/
jQuery(document).ready(function($) {
  // center media
 $miss_ln=$('.img-boder').outerWidth();
 $('.img-boder').css('height',$miss_ln);
 $('.img-border-radius').css('height',$miss_ln-3);
 $('.promos .promo > .carousel-caption-text').css({
   top: $miss_ln+10
 });
});
$(window).resize(function(event) {
   $miss_ln=$('.img-boder').outerWidth();
   // alert($miss_ln);
 $('.img-boder').css('height',$miss_ln);
 $('.img-border-radius').css('height',$miss_ln-3);
 $('.promos .promo > .carousel-caption-text').css({
   top: $miss_ln-10
 });
});

/* Show hide page FAQ
================================================*/
$(document).ready(function(){
    $(".abuttons").click(function () {
        var idname= $(this).data('divid');
        $("#"+idname).show("slow")//.siblings().show("slow");
        $('.content-faq .div-ct').hide().removeClass('active-ct');
        $("#"+idname).addClass('active-ct')
        $(".abuttons").removeClass('active');
         $(this).addClass('active');
    });
    $('.col-sm').hover(
        function(){
            $(this).find('.thumbnail').fadeIn(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.thumbnail').fadeOut(205); //.fadeOut(205)
        }
    ); 
});

/* Page Contact
================================================*/
  // Disable scroll zooming and bind back the click event
  var onMapMouseleaveHandler = function (event) {
    var that = $(this);

    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('iframe').css("pointer-events", "none");
  }

  var onMapClickHandler = function (event) {
    var that = $(this);

    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);

    // Enable scrolling zoom
    that.find('iframe').css("pointer-events", "auto");

    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
  }

  // Enable map zooming with mouse scroll when the user clicks the map
  $('.maps.embed-container').on('click', onMapClickHandler);
/* Page Product List
================================================*/

$(document).ready(function(){
  $heg_right=$('.content-prod').find('.pull-right').innerHeight();
  $heg_left=$('.content-prod').find('.pull-left').innerHeight();
    if (window.matchMedia('(min-width: 767px)').matches)
        {
          if($heg_right>=$heg_left){
            $('.content-prod').find('.pull-right').css('height',$heg_right);
            $('.content-prod').find('.pull-left').css('height',$heg_right);
          }
          else{
            $('.content-prod').find('.pull-right').css('height',$heg_left);
            $('.content-prod').find('.pull-left').css('height',$heg_left);
          }
        }
        else{
           $('.content-prod').find('.pull-right').css('height','auto');
            $('.content-prod').find('.pull-left').css('height','auto');
        }

  $(window).resize(function(event) {
    if (window.matchMedia('(min-width: 768px)').matches)
          {
            if($heg_right>=$heg_left){
              $('.content-prod').find('.pull-right').css('height',$heg_right);
              $('.content-prod').find('.pull-left').css('height',$heg_right);
            }
            else{
              $('.content-prod').find('.pull-right').css('height',$heg_left);
              $('.content-prod').find('.pull-left').css('height',$heg_left);
            }
          }
          else{
           $('.content-prod').find('.pull-right').css('height','auto');
            $('.content-prod').find('.pull-left').css('height','auto');
        }
    });
});
$(document).ready(function(e) {
  $('.right-ct-pro > p').each(function( index ) {
    var chr=$(this).text();
    var view_en=chr.length;
    // set text Enlish:
    //alert(chr);
    if(view_en>10){
      $view = $(this).text().substr(0,200) + "...";
      $(this).text($view);
    }
    // set text Japan
    chr=escape(chr);
    len=0;
    for(i = 0; i < chr.length; i++, len++){
      if(chr.charAt(i) == "%"){
        if(chr.charAt(++i) == "u"){
          i += 3;
          len++;
          $view = $(this).text().substr(0,250); //+ "...";
          $(this).text($view);
        }
        i++;
      }
    }
  });
});


/* Page ROOM
================================================*/

$(document).ready(function() {
  $(window).resize(function(event) {
    $wid_sp_room=$('.img-ct-room img').outerWidth();
    $full_room=$('.list-item-lt').outerWidth();
    //alert($wid_sp_room+'-'+$full_room)
    $ful_sp=$full_room-$wid_sp_room;
    //$('.img-ct-room span').css('right',$ful_sp/2);
  });
});


/* Page Product detail
================================================*/
$(document).ready(function(e) {
  $('p.text-cp').each(function( index ) {
    var chr=$(this).text();
    var view_en=chr.length;
    // set text Enlish:
    //alert(chr);
    if(view_en>10){
      $view = $(this).text().substr(0,200) + "...";
      $(this).text($view);
    }
    // set text Japan
    chr=escape(chr);
    len=0;
    for(i = 0; i < chr.length; i++, len++){
      if(chr.charAt(i) == "%"){
        if(chr.charAt(++i) == "u"){
          i += 3;
          len++;
          $view = $(this).text().substr(0,7)+ "...";
          $(this).text($view);
        }
        i++;
      }
    }
  });
});
 /*Requieres jQuery*/
 $('.close').click(function (e) {
  var iframe = $('div.modal-body').find('iframe'); 
  var src = iframe.attr('src');
  iframe.attr('src', '');
  iframe.attr('src', src);
});


/* Equal height */
/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */
$(document).ready(function(e) {
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  if (window.matchMedia('(min-width: 768px)').matches){
  equalheight('#sidebar-carousel-wrr .col-md-3');}
  equalheight('.footer-wp .col-md-3');
});


$(window).resize(function(){
  if (window.matchMedia('(min-width: 768px)').matches){
  equalheight('#sidebar-carousel-wrr .col-md-3');}
  equalheight('.footer-wp .col-md-3');
});
});
$(document).ready(function(e) {
   $(function()
  {
  var $content = $(".cnt_dropdown").hide();
  $(".column-right-prod").on("click", function(e){
  var SH = this.SH^=1; // "Simple toggler"
  $(this).html(SH?'<i class="fa fa-caret-down fa-rotate-180"></i>適応メニューを閉じる':'<i class="fa fa-caret-down"></i>適応メニューを開く')
  $(this).toggleClass("expanded");
  $(this).next($content).slideToggle();
  });
  });
});
$(document).ready(function(){
//  $(".panel-body ul.link ul.link").text( $(".panel-body ul.link ul.link").html().replace(/\s/g, "&nbsp;") );
$('.panel-body ul.link ul.link').html(function(i,h){
    console.log(i,h);
    return h.replace(/&nbsp;/g,'');
});
    });


$(document).ready(function(){
// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#carousel-service').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#carousel-service').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
});
$(document).ready(function(){
  $('.group-item-men').find('.row').removeClass('row')
  $('.type-beauty').find('.row').removeClass('row');
});


// Slide service detail
// handles the carousel thumbnails

$(document).ready(function(){
$('#myCarousel').carousel({
    interval: 154000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
});