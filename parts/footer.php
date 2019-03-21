	<footer class="footer">
		<div class="wrapper footer__wrapper">
      <div class="footer__main">
        <a href="/" class="logo footer__logo"><img src="img/logo.svg" alt=""></a>
        <p>Copyright © Стоматологическая клиника AXIOMADENTAL 2011 - 2019</p>
        <p>Услуги оказываются на основании лицензии на медицинскую деятельность № 78-01-003452 <br>от 5 апреля 2013 года</p>
      </div>
      <div class="footer__nav">
        <h4 class="footer__nav-title">Наши услуги</h3>
        <ul class="footer__menu">
          <li><a href="service.php">Протезирование зубов</a></li>
          <li><a href="service.php">Виниры</a></li>
          <li><a href="service.php">Эстетическая стоматология</a></li>
          <li><a href="service.php">Удаление зубов</a></li>
          <li><a href="service.php">Имплантация</a></li>
          <li><a href="service.php">Ортодонтия</a></li>
          <li><a href="service.php">Отебеливание зубов</a></li>
          <li><a href="service.php">Лечение зубов</a></li>
          <li><a href="service.php">Удаление зубного нерава</a></li>
        </ul>
      </div>
      <div class="footer__contacts">
        <h4 class="footer__contacts-title">Наши контакты</h3>
        <p><a href="tel:12341241243">+7 (812)  272 - 21 - 25 </a> <br><a href="tel:12341241243">+7 (921)  401 - 99 - 66 </a></p>
        <p><a href="mailto:clinic@axiomadental.ru">clinic@axiomadental.ru</a></p>
        <p>Пн - Сб / 10:00 - 21:00 <br>Вс / 10:00 - 19:00</p>
        <p>195297, Россия, <br>г. Санкт-Петербург, <br>ул. Гагаринская 30</p>
      </div>
      <div class="footer__info">
        <h4 class="footer__info-title">Обратный звонок</h3>
        <form action="#" class="callback footer__callback">
          <input class="callback__input" type="text" placeholder="Ваше имя" />
          <input class="callback__btn" type="submit" value="">
        </form>
        <div class="footer__payment">
          <i class="icon-mastercard"></i>
          <i class="icon-visa"></i>
          <i class="icon-apple-pay"></i>
        </div>
        <div class="footer__policy">
          <a href="#">Пользовательское соглашение</a>
          <a href="#">Политика конфиденциальности</a>
        </div>
        <div class="footer__author">Сделано с <i class="icon-heart"></i> и <i class="icon-brain"></i> в VM</div>
      </div>
    </div>
	</footer>
  <!-- модальные окна -->
  <div class="modal" id="review-form">
    <span class="modal__close">✕</span>
    <form action="#/" class="review-form">
      <div class="review-form__step">
        <label class="review-form__field">
          <span class="review-form__label">ВАШ ОТЗЫВ</span>
          <textarea class="review-form__input" rows="8" required></textarea>
        </label>
        <a href="#" class="btn btn_small btn_gray review-form__next">Далее →</a>
      </div>
      <div class="review-form__step">
        <div class="box review-form__box">
          <label class="review-form__field review-form__field_half">
            <span class="review-form__label">ВАШЕ ИМЯ</span>
            <input type="text" required />
          </label>
          <label class="review-form__field review-form__field_half">
            <span class="review-form__label">ВАШ EMAIL</span>
            <input type="email" required />
          </label>
          <label class="review-form__field review-form__field_half">
            <span class="review-form__label">УСЛУГА</span>
            <select>
              <option>Лечение зубов</option>
              <option>Отбеливание зубов</option>
              <option>Ортодонтия</option>
              <option>Имплантация</option>
              <option>Удаление зубов</option>
              <option>Эстетическая стоматология</option>
              <option>Виниры</option>
              <option>Протезирование</option>
            </select>
          </label>
          <label class="review-form__field review-form__field_half">
            <span class="review-form__label">ВРАЧ</span>
            <select>
              <option>Амириди Дмитрий</option> 
              <option>Кусевицкий Леонид</option> 
              <option>Маканина Лина</option> 
              <option>Амириди Марина</option> 
              <option>Лисицына Асия</option> 
              <option>Ковалев Елисей</option> 
              <option>Алешкова Татьяна</option> 
              <option>Окунев Павел</option>
            </select>
          </label>
        </div>
        <button class="btn review-form__next">Оставить отзыв</button>
      </div>
      <div class="review-form__step review-form__step_center">
        <!-- заглушка под капчу. Нахрен здесь вообще recaptcha2? -->
        <img src="img/captcha.jpg" class="g-recaptcha" alt="">
      </div>
      <div class="review-form__step review-form__step_final">
        <div class="review-form__text">
          <h2 class="review-form__title">Отлично!</h2>
          <p>Осталось пройти модерацию <span>👨‍💻</span> <span>👩‍💻</span> и Ваш отзыв будет добавлен на сайт</p>
        </div>
      </div>
    </form>
  </div>
  <!-- скрипты -->
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" defer></script>
	<script src="//code.jquery.com/jquery-latest.min.js" defer></script>
	<script src="libs/slick/slick.min.js" defer></script>
	<script src="libs/fancybox/jquery.fancybox.min.js" defer></script>
	<script src="libs/twentytwenty/jquery.event.move.js" defer></script>
	<script src="libs/twentytwenty/jquery.twentytwenty.js" defer></script>
	<script src="js/script.js" defer></script>	
</body>
</html>