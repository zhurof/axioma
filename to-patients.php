<?php	include "parts/header.php";?>	
    <div class="page">
      <div class="wrapper">
        <div class="breadcrumbs">
          <a href="/">Главная</a>
          <span class="breadcrumbs__separ">/</span>
          <span>Пациентам</span>
        </div>
        <h1>Пациентам</h1>
        <div class="page__inner">
          <div class="page__content">
            <div class="categories">
              <div class="box categories__box">
                <!--
                  Структура аналогична странице "Услуги". Там усложнённая версия, поэтому логику лучше брать оттуда.
                -->
                <div class="category-card">
                  <a href="faq.php" class="category-card__link"></a>
                  <div class="category-card__text">                    
                    <h3 class="category-card__title">Вопрос - Ответ</h3>
                  </div>
                  <i class="icon-comments category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="blog.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Статьи</h3>
                  </div>
                  <i class="icon-docs category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="schedule.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Расписание</h3>
                  </div>
                  <i class="icon-calendar category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="rules.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Правила внутреннего распорядка</h3>
                  </div>
                  <i class="icon-brackets category-card__icon"></i>
                </div>
                <div class="category-card">
                  <a href="tax-deduction.php" class="category-card__link"></a>
                  <div class="category-card__text">
                    <h3 class="category-card__title">Налоговый вычет</h3>
                  </div>
                  <i class="icon-percent category-card__icon"></i>
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