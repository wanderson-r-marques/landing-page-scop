(function($){"use strict";jQuery(document).on('ready',function(){$('.project-slides').owlCarousel({loop:true,nav:false,dots:true,smartSpeed:2000,margin:30,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},1200:{items:4}}});$('.popup-youtube').magnificPopup({disableOn:320,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});$('.feedback-slides').owlCarousel({loop:true,nav:true,dots:true,margin:30,smartSpeed:2000,autoplayHoverPause:true,autoplay:true,items:1,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],});$('.partner-slides').owlCarousel({loop:true,nav:false,dots:false,smartSpeed:2000,margin:30,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:2},576:{items:3},768:{items:4},1200:{items:6}}});$('.team-slides').owlCarousel({loop:true,nav:false,dots:true,smartSpeed:2000,margin:15,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},1200:{items:5}}});$('.odometer').appear(function(e){var odo=$(".odometer");odo.each(function(){var countNumber=$(this).attr("data-count");$(this).html(countNumber);});});$('.blog-slides').owlCarousel({loop:true,nav:false,dots:true,smartSpeed:2000,margin:30,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},1200:{items:3}}});$('.services-image-slides').owlCarousel({loop:true,nav:false,dots:true,items:1,smartSpeed:2000,autoplayHoverPause:true,autoplay:true,});$(function(){$('.accordion').find('.accordion-title').on('click',function(){$(this).toggleClass('active');$(this).next().slideToggle('fast');$('.accordion-content').not($(this).next()).slideUp('fast');$('.accordion-title').not($(this)).removeClass('active');});});$('.services-slides').owlCarousel({loop:true,nav:false,dots:true,margin:30,smartSpeed:2000,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},1200:{items:3}}});$('.feedback-slides-two').owlCarousel({loop:true,nav:true,dots:true,margin:30,smartSpeed:2000,autoplayHoverPause:true,autoplay:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},1200:{items:2}}});$(function(){$(window).on('scroll',function(){var scrolled=$(window).scrollTop();if(scrolled>300)$('.go-top').fadeIn('slow');if(scrolled<300)$('.go-top').fadeOut('slow');});$('.go-top').on('click',function(){$("html, body").animate({scrollTop:"0"},500);});});$('.testimonials-slides').owlCarousel({loop:true,nav:false,dots:true,items:1,smartSpeed:2000,autoplayHoverPause:true,autoplay:false,});});window.onload=function(){lax.setup()
const updateLax=()=>{lax.update(window.scrollY)
window.requestAnimationFrame(updateLax)}
window.requestAnimationFrame(updateLax)}
jQuery(window).on('load',function(){$('.uk-preloader').fadeOut();});}(jQuery));