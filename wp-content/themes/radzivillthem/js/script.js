// WoW.JS
new WOW().init();
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

// Карта


var marker;

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: 50.445245, lng: 30.517976}
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: 50.446442, lng: 30.515787},
    title:"ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ"
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
