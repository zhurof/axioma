//шапка
function changeHeader(){
  if($(window).scrollTop()){
    $('.header').addClass('fixed');
  }else{
    $('.header').removeClass('fixed');
  }
}
$(window).on('load scroll',changeHeader);

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
  nextArrow:'<span class="employees__arrow employees__arrow_next"></span>'
})