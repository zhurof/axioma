function is_mobile(){
  return $(window).width()<992;
}
//основная функция для манипуляций с DOM
function changeTemplate(){
  if(is_mobile()){
    $(window).off('load scroll',changeHeader);
    $('.header').removeClass('fixed');
  }else{
    $(window).on('load scroll',changeHeader);
    $('.header__menu ul').css('display','');
    $('.header__menu .has-children.open').removeClass('open');
  }
}
$(document).ready(changeTemplate);
$(window).resize(changeTemplate);

//шапка
function changeHeader(){
  if($(window).scrollTop()){
    $('.header').addClass('fixed');
  }else{
    $('.header').removeClass('fixed');
  }
}

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

$('.header__menu .has-children').click(function(e){
  if(!$(this).find(e.target).length && is_mobile()){
    $(this).toggleClass('open');
    $(this).children('ul').slideToggle(200);
    $(this).siblings('.has-children.open').removeClass('open').children('ul').slideUp(200);
  }
})
//галерея
$('.gallery__trigger').click(function(){
  $(this).siblings('.gallery__item').eq(0).trigger('click');
})
//слайдеры
$('.top-block__slider').slick({
  arrows:false,
  dots:true,
  fade:true,
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
//Объект с классами иконок и именами категорий
var categories = {
  orthodontics:{
    iconClass:'icon-orthodontics',
    niceName:'Ортодонтия'
  },
  treatment:{
    iconClass:'icon-treatment',
    niceName:'Лечение зубов'
  },
  whitening:{
    iconClass:'icon-whitening',
    niceName:'Отбеливание зубов'
  },
  extraction:{
    iconClass:'icon-extraction',
    niceName:'Удаление зубов'
  },
  implantation:{
    iconClass:'icon-implantation',
    niceName:'Имплантация'
  }
}
$('.view__body').on('init reInit afterChange',function(event,slick,currentSlide){
  var i =  (currentSlide ? currentSlide : 0),
      category = slick.$slides[i].getAttribute('data-category'),
      itemDescription = slick.$slides[i].getAttribute('data-description');
      
  $(this).parents('.view').find('.view__text').html('<h4 class="view__title">Случай '+( +i + 1 )+': </h4>' + itemDescription);
  $(this).parents('.view').find('.view__category').html('<i class="'+categories[category].iconClass+'"></i> '+categories[category].niceName);
})
$('.view__body').on('init reInit', function(){
  $(".view__slider").twentytwenty({
      no_overlay: true,
      click_to_move: true
  });
});

$('.view__body').slick({
  infinite:false,
  accessibility:false,
  swipe:false,
  adaptiveHeight:true,
  prevArrow:'<span class="view__arrow prev"></span>',
  nextArrow:'<span class="view__arrow next"></span>',
  appendArrows:$('.view__nav')
})

//Карта
if($('#map').length){
	ymaps.ready(function(){
    var address = $('#address').text() || $('#map').data('address') ||'Караганда',
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
//Категории
$('.category-card__toggle').click(function(e){
  e.preventDefault();
  $(this).parents('.category-card').toggleClass('open');
})
//меню услуг
$('.menu .has-children').click(function(e){
  if(!$(this).find(e.target).length){
    $(this).toggleClass('open');
    $(this).children('ul').slideToggle(200);
    $(this).siblings('.has-children.open').removeClass('open').children('ul').slideUp(200);
  }
})