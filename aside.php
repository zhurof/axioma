<aside class="sidebar page__sidebar">
  <ul class="simple-menu sidebar__menu">
    <li><a href="about.php">О клинике</a></li>
    <li><a href="news.php">Новости</a></li>
    <li><a href="licenses.php">Лицензии и сертификаты</a></li>
    <li><a href="tour.php">Виртуальный тур</a></li>
    <li><a href="study-club.php">ITI Study Club</a></li>
    <li><a href="digital-dentistry.php">Цифровая стоматология</a></li>
  </ul>
  <script>
    //Добавление класса активному пункту меню на JS для демонстрации. В процессе посадки на cms - удалить.
    var sbLinks = document.querySelectorAll('.simple-menu a');
    for (var i = 0; i<sbLinks.length; i++){
      if(sbLinks[i].href == location.href){
        sbLinks[i].parentElement.classList.add('active');
      }
    }
  </script>
</aside>