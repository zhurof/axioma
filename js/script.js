function is_mobile(){
  return $(window).width()<992;
}
//основная функция для манипуляций с DOM
function changeTemplate(){
  if(is_mobile()){
    $(window).off('load scroll',changeHeader);
    $(window).on('load scroll',toggleContactsPanel);
    $('.header').removeClass('fixed');
  }else{
    $(window).on('load scroll',changeHeader);
    $(window).off('load scroll',toggleContactsPanel);
    $('.header__menu ul').css('display','');
    $('.header__menu .has-children.open').removeClass('open');
  }
  gallerySlider();
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
    //$(this).siblings('.has-children.open').removeClass('open').children('ul').slideUp(200);
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
var coords, route; //глобальные переменные для дальнейшей работы в функции построения маршрута
$(document).ready(function(){
  if($('#map').length){
    ymaps.ready(function(){
      //Метка на карте ставится исходя из адреса в элементе #address, либо в атрибуте data-address тега карты, либо организация переезжает в Казахстан.
      var address = $('#address').text() || $('#map').data('address') ||'Караганда',
          centerCoords = [];
          
      ymaps.geocode(address, {
          results: 1
      }).then(function (res) {
          // Выбираем первый результат геокодирования.
          var firstGeoObject = res.geoObjects.get(0),            
              // Область видимости геообъекта.
              bounds = firstGeoObject.properties.get('boundedBy');
              
              firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
              // Получаем строку с адресом и выводим в иконке геообъекта.
              firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());
              
              // Координаты геообъекта пишем в глобальную переменную для дальнейшей работы
              coords = firstGeoObject.geometry.getCoordinates();
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
            //Навешиваем обработчик на клик для кнопок построения маршрута.
            $('.contacts-block__btn[data-point]').on('click',function(){
              if(!$(this).is('.active')){
                $('.contacts-block__layout').removeClass('active');
                $(this).addClass('active').siblings().removeClass('active');
                var point = $(this).attr('data-point');
                makeRoute(myMap,point);
              }else {
                $(this).removeClass('active');
                if(route) myMap.geoObjects.remove(route);          
              }            
            });
      });		
      //myMap.behaviors.disable('scrollZoom')
    }	);
  };
})
function makeRoute(map,point){
  if(map && route){
    map.geoObjects.remove(route);//Удаляем старый маршрут
  }  
  //и создаём новый
  route = new ymaps.multiRouter.MultiRoute({
      referencePoints: [point,coords],
      params: {
        routingMode: 'pedestrian' //ставим пешеходную маршрутизацию
      }
  }, {
      // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
      boundsAutoApply: true
  });
  // Добавляем мультимаршрут на карту.
  map.geoObjects.add(route);
}
$('.contacts-block__btn').not('[data-point]').click(function(){
  $(this).toggleClass('active').siblings('[data-point].active').trigger('click');
  $('.contacts-block__layout').toggleClass('active');
})
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
//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterShow',initiator);
  });
	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
		$('.header').css('width',window.innerWidth  - scrollWidth);
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
    $('.header').css('width','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});
//Пошаговая форма в модальном окне
$('.modal').on('beforeShow',function(e,initiator){
  $(this).find('.step-form')[0].reset();
  $(this).find('.step-form__step').css('display','');
})
$('.step-form__next,.step-form .g-recaptcha').click(function(e){
  e.preventDefault();
  var step = $(this).parents('.step-form__step');
  if('reportValidity' in HTMLInputElement.prototype){//проверка на наличие метода reportValidity, чтобы во всяких IE не выкидывало ошибку
    step.find('input,textarea,select').each(function(){
      this.reportValidity();
    });
  }
  if(!step.find('input:invalid,textarea:invalid,select:invalid').length){
    step.hide().next().show();
  }
})
//Якоря
$('a[href^="#"]').click(function(e){
  var hash = this.hash;
  if($(hash).length && $(hash).is(':visible')){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 120
    }, 400);
  }
})
//Сворачиваем галлерею в слайдеры
function gallerySlider(){
  if($(window).width()<768){
    $('.gallery').not('.slick-initialised').slick({
      variableWidth:true,
      centerMode:true,
      arrows:false,
      centerPadding:0,
      slide:'.gallery__item',
      mobileFirst:true,
      respoinsive:[
        {
          breakpoint:768,
          settings:'unslick'
        }
      ]
    })
  }
}
//Расписание
var worktime = {//рабочее время (часы)
  min:10,
  max:21
}
$('.schedule__current').each(function(){
  var curMin = $(this).find('.schedule__time').eq(0).text().substring(0,2) || 0,
      curMax = $(this).find('.schedule__time').eq(1).text().substring(0,2) || 0,
      part = (curMax - curMin) / (worktime.max - worktime.min);
  if(part){
    var spacer = (curMin - worktime.min)*100 / (worktime.max-worktime.min) + '%';
    $(this).css({
      'width' : part*100+'%',
      'margin-left':spacer
    });
  }
})
//панель контактов
$('.contacts-panel__btn').click(function(){
  var index = $(this).index();
  $('.contacts-panel__nav').hide();
  $('.contacts-panel__item').eq(index).fadeIn(200);
})
$('.contacts-panel__back').click(function(){
  $('.contacts-panel__nav').fadeIn(200);
  $(this).parents('.contacts-panel__item').hide();
})
function toggleContactsPanel(){
  if(+$(window).scrollTop() + +$(window).height() >= $(document).height()-70){
    $('.contacts-panel').addClass('hidden');
  }else{
    $('.contacts-panel.hidden').removeClass('hidden');
  }
}
//прокрутка экрана на страницах кроме главной
if(location.pathname != '/' && !is_mobile()){
  setTimeout(function(){
    $('html, body').animate({
      scrollTop: $('.header').outerHeight()/3*2
    }, 400);
  },300)  
}