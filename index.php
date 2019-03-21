<?php	include "parts/header.php";?>
  <script>
    //Реализовать добавление класса на стороне сервера
    document.querySelector('.header').classList.add('header_trans');
  </script>
	<main>
		<div class="top-block">
		  <div class="top-block__slider">
		    <div class="top-block__slide" style="background-image:url(/img/top/1.jpg)">
		      <div class="wrapper">
            <div class="top-block__content">
              <h2 class="top-block__title">Небольшой заголовок в 2 строки</h2>
              <div class="top-block__text">Текст анонса новости, акции, или предстоящего события, желательно в две строки</div>
              <a href="#" class="btn top-block__btn">Запись на прием</a>
            </div>
          </div>
		    </div>
        <div class="top-block__slide" style="background-image:url(https://www.exler.ru/blog/upload/images/big/SDIM1346.jpg)">
		      <div class="wrapper">
            <div class="top-block__content">
              <h2 class="top-block__title">Небольшой заголовок</h2>
              <div class="top-block__text">Текст анонса новости, акции, или предстоящего события, желательно в две строки</div>
              <a href="#" class="btn top-block__btn">Кнопка</a>
            </div>
          </div>
		    </div>
        <div class="top-block__slide" style="background-image:url(/img/top/1.jpg)">
		      <div class="wrapper">
            <div class="top-block__content">
              <h2 class="top-block__title">Небольшой заголовок в 2 строки</h2>
              <div class="top-block__text">Текст анонса новости, акции, или предстоящего события, желательно в две строки</div>
              <a href="#" class="btn top-block__btn">Запись на прием</a>
            </div>
          </div>
		    </div>
        <div class="top-block__slide" style="background-image:url(https://www.exler.ru/blog/upload/images/big/SDIM1346.jpg)">
		      <div class="wrapper">
            <div class="top-block__content">
              <h2 class="top-block__title">Небольшой заголовок</h2>
              <div class="top-block__text">Текст анонса новости, акции, или предстоящего события, желательно в две строки</div>
              <a href="#" class="btn top-block__btn">Кнопка</a>
            </div>
          </div>
		    </div>        
		  </div>
		</div>
    <div class="about">
      <div class="wrapper about__wrapper">
        <div class="about__head">
          <h2 class="about__title">Стоматологическая клиника Axioma Dental</h2>
          <p>Стоматология Axioma Dental в СПб приветствует Вас, уважаемые клиенты!</p>
          <a href="#" class="btn about__btn">Подробнее</a>
        </div>
        <div class="about__body">
          <p>Хирург-имплантолог Дмитрий Амириди и команда терапевтов и ортопедов проводят качественное лечение зубов любой сложности в комфортных условиях.</p>
          <p>Наш центр ориентирован на предоставление первоклассных услуг. Комплексная реабилитация пациентов, лечение зубов с учетом современных понятий об эстетике улыбки, использование передовых технологий – все это стоматологическая клиника Axioma Dental.</p>
        </div>
      </div>
    </div>
    <div class="services">
      <div class="wrapper services__wrapper">
        <h2 class="services__title">Наши услуги</h2>
        <div class="box services__box">
          <a href="#" class="services__link">
            <span class="services__icon"><i class="icon-treatment"></i></span>
            <span class="services__caption">Лечение зубов</span>
          </a>
          <a href="#" class="services__link">
            <span class="services__icon"><i class="icon-whitening"></i></span>
            <span class="services__caption">Отбеливание зубов</span>
          </a>
          <a href="#" class="services__link">
            <span class="services__icon"><i class="icon-extraction"></i></span>
            <span class="services__caption">Удаление зубов</span>
          </a>
          <a href="#" class="services__link">
            <span class="services__icon"><i class="icon-orthodontics"></i></span>
            <span class="services__caption">Ортодонтия</span>
          </a>
          <a href="#" class="services__link">
            <span class="services__icon"><i class="icon-implantation"></i></span>
            <span class="services__caption">Имплантация</span>
          </a>
          <a href="#" class="services__link services__link_blend">
            <span class="services__icon services__icon_dash">+</span>
            <span class="services__caption">Все услуги</span>
          </a>
        </div>
      </div>
    </div>
    <div class="advantages">
      <div class="wrapper advantages__wrapper">
        <h2 class="advantages__title">Преимущества</h2>
        <div class="box advantages__box">
          <div class="advantages__item">
            <h4 class="advantages__subtitle">Индивидуальный подход</h4>
            <p>Комплексный подход к проблеме пациента является приоритетным. Каждый пациент для нас индивидуален</p>
          </div>
          <div class="advantages__item">
            <h4 class="advantages__subtitle">Гарантия</h4>
            <p>Мы гарантируем высокий уровень сервиса, качественное лечение, стабильные результаты и разумные цены.   </p>
          </div>
          <div class="advantages__item">
            <h4 class="advantages__subtitle">Современное оборудование</h4>
            <p>Только новые технологии, современное оборудование и сертифицированные материалы. </p>
          </div>
          <div class="advantages__item">
            <h4 class="advantages__subtitle">Специалисты</h4>
            <p>Опыт работы более 8 лет позволяет решить проблемы пациентов любого уровня сложности.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="employees">
      <div class="wrapper employees__wrapper">
        <h2 class="employees__title">Наши врачи</h2>
        <div class="employees__slider">
          <div class="employees__slide">
            <a href="#" class="employees__link"></a>
            <img src="img/doctors/1.jpg" class="employees__img" alt="">
            <h4 class="employees__subtitle">Амириди <br>Дмитрий</h4>
            <div class="employees__position">Хирург- имплантолог</div>
            <a href="#" class="btn btn_small btn_gray employees__btn">Записаться</a>
          </div>
          <div class="employees__slide">
            <a href="#" class="employees__link"></a>
            <img src="img/doctors/2.jpg" class="employees__img" alt="">
            <h4 class="employees__subtitle">Кусевицкий <br>Леонид</h4>
            <div class="employees__position">Хирург- имплантолог</div>
            <a href="#" class="btn btn_small btn_gray employees__btn">Записаться</a>
          </div>
          <div class="employees__slide">
            <a href="#" class="employees__link"></a>
            <img src="img/doctors/3.jpg" class="employees__img" alt="">
            <h4 class="employees__subtitle">Маканина <br>Лина</h4>
            <div class="employees__position">Хирург- имплантолог</div>
            <a href="#" class="btn btn_small btn_gray employees__btn">Записаться</a>
          </div>
          <div class="employees__slide">
            <a href="#" class="employees__link"></a>
            <img src="img/doctors/4.jpg" class="employees__img" alt="" data-role="0YfQtdGA0L3QuNC70YzQvdC40YbQsA==">
            <h4 class="employees__subtitle">Амириди <br>Марина</h4>
            <div class="employees__position">Хирург- имплантолог</div>
            <a href="#" class="btn btn_small btn_gray employees__btn">Записаться</a>
          </div>
          <div class="employees__slide">
            <a href="#" class="employees__link"></a>
            <img src="img/doctors/2.jpg" class="employees__img" alt="">
            <h4 class="employees__subtitle">Кусевицкий <br>Леонид</h4>
            <div class="employees__position">Хирург- имплантолог</div>
            <a href="#" class="btn btn_small btn_gray employees__btn">Записаться</a>
          </div>
        </div>
        <div class="employees__footer">
          <a href="#" class="btn">Все врачи</a>
        </div>
      </div>
    </div>
    <div class="reviews">
      <div class="wrapper reviews__wrapper">
        <h2 class="reviews__title">Последние отзывы</h2>
        <div class="box reviews__box">
          <div class="review-card">
            <div class="review-card__text"><p>Зная эту клинику, езжу с другого конца города. У меня воспалился корень зуба. Появилась серьезная опухоль. Зуб болел невыносимо... <br>У доктора золотые руки. Все закончилось хорошо. Всем рекомендую</p></div>
            <div class="review-card__head">
              <div class="review-card__pic"></div>
              <div class="review-card__info">
                <h4 class="review-card__title">Николай А.</h4>
                <div class="review-card__field">
                  <span class="review-card__key">Услуга:</span>
                  <span class="review-card__value"><a href="service.php">Имплантация зубов</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="review-card">
            <div class="review-card__text"><p>Я нашла эту клинику по совету друга. Он сказал, что здесь работают люди, которым можно доверять. Впервые чувствовала себя удобно в стоматологическом кресле           Спасибо!</p></div>
            <div class="review-card__head">
              <div class="review-card__pic female"></div>
              <div class="review-card__info">
                <h4 class="review-card__title">Ольга Н.</h4>
                <div class="review-card__field">
                  <span class="review-card__key">Услуга:</span>
                  <span class="review-card__value"><a href="service.php">Удаление зубов</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="review-card">
            <div class="review-card__text"><p>Хочется поблагодарить вашу клинику, а особенно хочется поблагодарить нашего лечащего врача <u>Амириди Марину</u> Владимировну!!!</p></div>
            <div class="review-card__head">
              <div class="review-card__pic"></div>
              <div class="review-card__info">
                <h4 class="review-card__title">Алексей Н.</h4>
                <div class="review-card__field">
                  <span class="review-card__key">Услуга:</span>
                  <span class="review-card__value"><a href="service.php">Лечение зубов</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="review-card">
            <div class="review-card__text"><p>Моя семья и я посещаем доктора <u>Ковалева</u> вот уже пять лет. Я могу оставить о нем и его персонале этой стоматологии только хорошие отзывы. Они делают отличную работу и цены вполне адекватны. Спасибо!</p></div>
            <div class="review-card__head">
              <div class="review-card__pic"></div>
              <div class="review-card__info">
                <h4 class="review-card__title">Игорь Л.</h4>
                <div class="review-card__field">
                  <span class="review-card__key">Услуга:</span>
                  <span class="review-card__value"><a href="service.php">Имплантация зубов</a> , <a href="#">Лечение зубов</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="reviews__footer"><a href="reviews.php" class="btn">Все отзывы</a></div>
      </div>
    </div>
    <?php	include "parts/booking.php";?>
    <div class="contacts">      
      <div class="contacts__text">
        <h2 class="contacts__title">Наши контакты</h2>
        <p><span id="address">195297, Россия г. Санкт-Петербург ул. Гагаринская 30</span></p>
        <p><a href="tel:78122722125">+7 (812) 272-21-25</a> <br><a href="tel:79214019966">+7 (921) 401-99-66</a></p>
        <p>Пн - Сб / 10:00 - 21:00 <br>Вс / 10:00 - 19:00</p>
      </div>
      <div id="map" class="contacts__map"></div>
    </div>
	</main>
<?php	include "parts/footer.php";?>	