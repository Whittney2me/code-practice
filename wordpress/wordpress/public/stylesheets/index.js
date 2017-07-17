$(document).ready(function() {
  $(".menu-toggle").on('click', function() {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
  });
    $(window).load(function() {
    $(".loader").fadeOut(2800);
    $(".box").fadeIn(4000);
  });
});


/*Color Scheme -----------------------------------
ghostwhite - #F8F8FF - rgba(248,248,255,0.75)
gold - #FDA - rgb(255,221,170);
seafoam - #88E0AB - rgb(136,224,171);
lilac - #C981E5 - rgb(201,129,229);
rose petal - #FF8174 - rgb(255,129,116);
deep gray - #3B3A3A - rgb(59,58,58);
*/
