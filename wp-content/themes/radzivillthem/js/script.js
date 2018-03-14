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
$('body,html').animate({scrollTop: top}, "slow");
});
});


