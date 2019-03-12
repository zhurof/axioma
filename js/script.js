//шапка
function changeHeader(){
  if($(window).scrollTop()){
    $('.header').addClass('fixed');
  }else{
    $('.header').removeClass('fixed');
  }
}
$(window).on('load scroll',changeHeader);

$('.header__menu-btn').click(function(){
  $(this).toggleClass('active');
  $('.header__bottomline').toggleClass('open');
})
$('.header__search-btn').click(function(){
  $('.header__menu-btn').removeClass('active');
  $('.header__bottomline').removeClass('open');  
  if(!$(this).is('.active')){
    $(this).addClass('active');
    $('.header__mobile-search').addClass('open');
    $('.header__mobile-search input').focus();
  }
})
$('.header__mobile-search input').blur(function(){
  $('.header__search-btn').removeClass('active');
  $('.header__mobile-search').removeClass('open');
})
$('.lang__title').click(function(){
  $(this).siblings('.lang__list').slideToggle(200);
})
$(document).click(function(e){
  if(!$(e.target).is('.lang') && !$('.lang').has(e.target).size()){
    $('.lang__list').hide();
  }
})
$('.top-block__slider').slick({
  arrows:false,
  dots:true,
  dotsClass:'top-block__dots',
  customPaging:function(slider,i){
    var result = i+1;
    if(result < 10){
      result = '0' + result; 
    }
    return result;
  }
})
$('.employees__slider').slick({
  slidesToShow:4,
  prevArrow:'<span class="employees__arrow employees__arrow_prev"></span>',
  nextArrow:'<span class="employees__arrow employees__arrow_next"></span>',
  responsive:[
    {
      breakpoint:992,
      settings:{
        slidesToShow:3
      }
    },{
      breakpoint:768,
      settings:{
        slidesToShow:1
      }
    }
  ]
})

//Карта
if($('#map').length){
	ymaps.ready(function(){
    var address = $('#address').text() || 'Караганда',
        centerCoords = [];
        
    ymaps.geocode(address, {
        results: 1
    }).then(function (res) {
        // Выбираем первый результат геокодирования.
        var firstGeoObject = res.geoObjects.get(0),
            // Координаты геообъекта.
            coords = firstGeoObject.geometry.getCoordinates(),
            // Область видимости геообъекта.
            bounds = firstGeoObject.properties.get('boundedBy');
            
            firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
            // Получаем строку с адресом и выводим в иконке геообъекта.
            firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());
            
            //Смещенные координаты для центра карты
            centerCoords[0] = coords[0];
            centerCoords[1] = coords[1] + 0.00025;
            
            var myMap = new ymaps.Map("map", {
              center: centerCoords,
              zoom: 16.5,
              controls: []
            });
                
        myPlacemark = new ymaps.Placemark(coords, 
          {
            hintContent: 'Клиника',
            balloonContent: ''
          },{
            preset: 'islands#icon',
            iconColor: '#f8aa55'
          });
          
          
          myMap.geoObjects.add(myPlacemark);
    });		
    //myMap.behaviors.disable('scrollZoom')
  }	);
};