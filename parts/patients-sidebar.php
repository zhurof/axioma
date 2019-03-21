<aside class="sidebar page__sidebar">
  <!-- В этом меню  иконки по умолчанию показаны -->
  <ul class="menu sidebar__menu">
    <li><a href="faq.php"><i class="icon-comments menu__icon menu__icon_shown"></i> Вопрос - Ответ</a></li>
    <li><a href="blog.php"><i class="icon-docs menu__icon menu__icon_shown"></i> Статьи</a></li>
    <li><a href="schedule.php"><i class="icon-calendar menu__icon menu__icon_shown"></i> Расписание</a></li>
    <li><a href="rules.php"><i class="icon-brackets menu__icon menu__icon_shown"></i> Правила внутреннего распорядка</a></li>
  </ul>
</aside>
<script>
    //Добавление класса активному пункту меню на JS для демонстрации. В процессе посадки на cms - удалить.
    var sbLinks = document.querySelectorAll('.menu a');
    for (var i = 0; i<sbLinks.length; i++){
      if(sbLinks[i].href == location.href){
        sbLinks[i].parentElement.classList.add('active');
      }
    }
  </script>