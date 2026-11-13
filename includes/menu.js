$(document).ready(function () {
    var width = $(window).width();
  
    $(".accordion ul li ul").hide();
    $(".accordion ul li a").not(".accordion ul li ul li a").click(function () {
      if ($(this).hasClass('currently')) {
        $(this).next().slideToggle(350);
        $(this).toggleClass('currently');
      }
      else {
        $(".accordion ul li ul").slideUp();
        $(".accordion ul li a").removeClass('currently');
        $(this).next().slideToggle(350);
        $(this).toggleClass('currently');
      }
    });
  });

 $(document).ready(function () {
     $.fn.extend({
         toggleText: function (a, b) {
             return this.text(this.text() == b ? a : b);
         }
     });
     $(".revealer").click(function () {
         $(".not-visible-part").slideToggle();
         $(".revealer").toggleText('Több történet', 'Kevesebb történet');
         $(".revealer").toggleClass('op-anim');

     });

 });

 function scrollToThere(x) {
  const scrollTab = document.getElementById(x);
  scrollTab.scrollIntoView({ behavior: "smooth", block: "start" });
}