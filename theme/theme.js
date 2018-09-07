jQuery(document).ready(function( $ ) {

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $("#masthead").addClass("opaque");
    } else {
        $("#masthead").removeClass("opaque");
    }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(document).ready(function( $ ) {

$( "ul.nav li.nav-item" ).first().find('a').addClass( "active" );
$( ".tab-pane" ).first().addClass( "active" );
});

$('.sl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [" Previous", " Next"],
	navClass: ['owl-prev', 'owl-next'],
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})

$(function() {
  $(".fa-search").click(function() { 
    $('.search-form').toggleClass("active");   
    $('.search-form input#s').focus();      
  });
});



});//Don't remove


