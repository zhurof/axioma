<?php	include "parts/header.php";?>	
    <div class="page">
      <div class="wrapper">
        <div class="breadcrumbs">
          <a href="/">Главная</a>
          <span class="breadcrumbs__separ">/</span>
          <span>Услуги</span>
        </div>
        <h1>Услуги</h1>
        <div class="page__inner">
          <div class="page__content">
            <div class="categories">
              <div class="box categories__box">
                <!--
                  По дизайну, если в списке внутри карточки больше 4 пунктов, показывается 3 пункта и пункт со ссылкой "Ещё". А при наведении на карточку, она становится полной, при этом не изменяя своих размеров и не двигая соседей. 
                  Я не смог придумать ничего лучше, чем задублировать контент карточки, если пунктов больше 4.
                  P.S Херню типа ссылка в ссылке придумал дизугнер, я тут ни при чём.
                -->
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Лечение зубов</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Лечение Кариеса</a></li>
                      <li><a href="service.php">Реставрация зубов</a></li>
                      <li><a href="service.php">Профессиональная чистка</a></li>
                      <li><a href="service.php">Детская стоматология</a></li>
                    </ul>
                  </div>
                  <i class="icon-treatment category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Отбеливание зубов</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Система отбеливания зубов Opalescene</a></li>
                      <li><a href="service.php">Система отбеливания зубов Zoom</a></li>
                    </ul>
                  </div>
                  <i class="icon-whitening category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Ортодонтия</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Исправление прикуса системой INVISALIGN-капы для выравнивания зубов</a></li>
                      <li><a href="service.php">Философия FACE</a></li>
                      <li><a href="service.php">Сплинт-теория</a></li>
                    </ul>
                  </div>
                  <i class="icon-orthodontics category-card__icon"></i>
                </div>
                <div class="category-card category-card_dropdown">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Имплантация</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Имплантация Straumann</a></li>
                      <li><a href="service.php">Альтернатива костной пластике</a></li>
                      <li><a href="service.php">Имплантация Ankylos</a></li>
                      <li><a href="#" class="category-card__toggle">Ещё ...</a></li>
                    </ul>
                  </div>
                  <div class="category-card__layout">
                    <a href="service.php" class="category-card__link"></a> <!-- Тут также дублировать общую ссылку -->
                    <h3 class="category-card__title">Имплантация</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Имплантация Straumann</a></li>
                      <li><a href="service.php">Альтернатива костной пластике</a></li>
                      <li><a href="service.php">Имплантация Ankylos</a></li>
                      <li><a href="service.php">Какой имплант выбрать?</a></li>
                      <li><a href="service.php">Сверхпрочные имплантаты из сплава Roxolid</a></li>
                      <li><a href="service.php">ALL-ON-FOUR</a></li>
                    </ul>
                  </div>
                  <i class="icon-implantation category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Удаление зубов</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Удаление зуба мудрости</a></li>
                      <li><a href="service.php">Удаление ретинированного зуба мудрости</a></li>
                    </ul>
                  </div>
                  <i class="icon-extraction category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">                    
                    <h3 class="category-card__title">Эстетическая стоматология</h3>
                  </div>
                  <i class="icon-estetic category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Виниры</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Керамические виниры</a></li>
                      <li><a href="service.php">Виниры E-max</a></li>
                      <li><a href="service.php">Композитные виниры</a></li>
                    </ul>
                  </div>
                  <i class="icon-vinir category-card__icon"></i>
                </div>
                <div class="category-card category-card_dropdown">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Протезирование</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Временные коронки</a></li>
                      <li><a href="service.php">Коронки из диоксида циркония Prettau</a></li>
                      <li><a href="service.php">Протезирование All-ON-4</a></li>
                      <li><a href="#" class="category-card__toggle">Ещё ...</a></li>
                    </ul>
                  </div>
                  <div class="category-card__layout">
                    <a href="service.php" class="category-card__link"></a>
                    <h3 class="category-card__title">Протезирование</h3>
                    <ul class="category-card__list">
                      <li><a href="service.php">Временные коронки</a></li>
                      <li><a href="service.php">Коронки из диоксида циркония Prettau</a></li>
                      <li><a href="service.php">Протезирование All-ON-4</a></li>
                      <li><a href="service.php">lorem ispum dolor</a></li>
                      <li><a href="service.php">lorem ispum dolor</a></li>
                    </ul>
                  </div>
                  <i class="icon-prosthetics category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="service.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Удаление зубного нерва</h3>
                  </div>
                  <i class="icon-nerve category-card__icon"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php	include "parts/booking.php";?>
	</main>
<?php	include "parts/footer.php";?>	