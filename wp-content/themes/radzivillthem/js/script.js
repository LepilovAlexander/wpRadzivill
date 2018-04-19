// arrow
$(document).ready(function(){
  $('body').append('<a href="#" id="go-top" title="Вверх"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>');
});

$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
    var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
     else $(scrollDiv).fadeIn("slow")
   });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
 })
}
});

$(function() {
 $("#go-top").scrollToTop();
});

// scrolling

$(document).ready(function(){
  $("#menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
//узнаем высоту от начала страницы до блока на который ссылается якорь
top = $(id).offset().top;
//анимируем переход на расстояние - top за 1500 мс
$('body,html').animate({scrollTop: top-50}, "slow");
});
});
// Sticku-menu
$(document).ready(function(){

  var $menu = $("#main-menu");

  $(window).scroll(function(){
    if ( $(this).scrollTop() > 100 && $menu.hasClass("sticky-jq") ){
      $menu.fadeOut('fast',function(){
        $(this).removeClass("sticky-jq main-blue-bg")
        .addClass("fixed transbg border-b main-blue-transperent-bg")
        .fadeIn('fast');
      });
    } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
      $menu.fadeOut('fast',function(){
        $(this).removeClass("fixed transbg border-b main-blue-transperent-bg")
        .addClass("sticky-jq main-blue-bg")
        .fadeIn('fast');
      });
    }
  });        
});
