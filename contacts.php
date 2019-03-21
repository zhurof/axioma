<?php	include "parts/header.php";?>	
    <div class="page about-page">
      <div class="wrapper">
        <div class="breadcrumbs">
          <a href="/">Главная</a>
          <span class="breadcrumbs__separ">/</span>
          <span>Контакты</span>
        </div>
        <h1>Контакты</h1>
        <div class="page__inner">
          <div class="page__content">
            <div class="contacts-block">
              <div class="contacts-block__text">
                <div class="contacts-block__item">
                  <h3 class="contacts-block__title">Адрес</h3>
                  <p id="address">195297, г. Санкт-Петербург, <br>ул. Гагаринская 30</p>
                </div>
                <div class="contacts-block__item">
                  <h3 class="contacts-block__title">Контакты</h3>
                  <div class="contacts-block__phones">
                    <a href="tel:78122722125">+7 (812) 272-21-25</a>
                    <a href="tel:79214019966">+7 (921) 401-99-66</a>
                  </div>
                  <div class="contacts-block__social">
                    <a href="#" class="fa-instagram"></a>
                    <a href="#" class="fa-facebook"></a>
                    <a href="#" class="fa-vk"></a>
                    <a href="#">WhatsApp</a>
                    <a href="#">Viber</a>
                  </div>
                </div>
                <div class="contacts-block__item">
                  <h3 class="contacts-block__title">Режим работы</h3>
                  <p>Пн - Сб / 10:00 - 21:00 <br>Вс / 10:00 - 19:00</p>
                </div>
              </div>
              <div class="contacts-block__map" id="map"></div>
            </div>
            <div class="message-block">
              <h2 class="message-block__title">Оставить сообщение</h2>
              <form action="" class="message-block__form">
                <div class="double-field">
                  <input type="text" placeholder="Ваше имя" />
                  <input type="tel" placeholder="Номер телефона" />
                </div>
                <textarea name="" rows="10" placeholder="Текст сообщения"></textarea>
                <div class="message-block__footer">
                  <div class="message-block__notation">Нажимая на кнопку  "Записаться" Вы даете согласие на обработку персональных данных</div>
                  <button class="btn message-block__btn">Записаться</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	</main>
<?php	include "parts/footer.php";?>	