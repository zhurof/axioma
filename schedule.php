<?php	include "parts/header.php";?>	
    <div class="page about-page">
      <div class="wrapper">
        <div class="breadcrumbs">
          <a href="/">Главная</a>
          <span class="breadcrumbs__separ">/</span>
          <a href="to-patients.php">Пациентам</a>
          <span class="breadcrumbs__separ">/</span>
          <span>Расписание</span>
        </div>
        <h1>Расписание</h1>
        <div class="page__inner">
          <?php	include "parts/patients-sidebar.php";?>
          <div class="page__content">
            <nav class="page-nav">
              <a href="#dmitri">Дмитрий Амириди</a>
              <a href="#leonid">Леонид Кусевицкий</a>
              <a href="#lina">Лина Маканина</a>
              <a href="#marina">Марина Амириди</a>
              <a href="#asiya">Асия Лисицына</a>
              <a href="#elisei">Елисей Ковалев</a>
              <a href="#tatiana">Татьяна Алешкова</a>
              <a href="#pavel">Павел Окунев</a>
            </nav>
            <div class="schedule" id="dmitri">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/1.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Дмитрий Амириди</h4>
                    <div class="schedule__person-position">Хирург - имплантолог</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day">Пн.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">19 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">15 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">19 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Пт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="leonid">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/2.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Леонид Кусевицкий</h4>
                    <div class="schedule__person-position">д.м.н. Стоматолог - ортопед</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day">Пн.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">14 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">16 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Пт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">11 : 00</span>
                      <span class="schedule__time">20 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="lina">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/3.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Лина Маканина</h4>
                    <div class="schedule__person-position">Врач стоматолог - терапевт</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day">Пн.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">11 : 00</span>
                      <span class="schedule__time">14 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__day_disabled">Вт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">15 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">11 : 00</span>
                      <span class="schedule__time">16 : 00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="schedule" id="marina">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/4.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Марина Амириди</h4>
                    <div class="schedule__person-position">Врач стоматолог - ортопед</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Пн.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">14 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Ср.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">14 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="asiya">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/5.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Асия Лисицына</h4>
                    <div class="schedule__person-position">Врач ортодонт</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day schedule__day_disabled">Пн.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__day_disabled">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Сб.<span class="schedule__alert" data-tooltip="Lorem ipsum dolor sit amet, consectetur."></span></span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">19 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="elisei">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/6.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Елисей Ковалев</h4>                    
                    <div class="schedule__person-position">Врач стоматолог - терапевт</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <!-- Елисей нихрена не работает. Что за дела? Лишить премии -->
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Пн.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">15 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="tatiana">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/7.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Татьяна Алешкова</h4>
                    <div class="schedule__person-position">Врач стоматолог-терапевт, хирург</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Пн.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">15 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">15 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
                </div>
              </div>
            </div>
            <div class="schedule" id="pavel">
              <div class="schedule__head">
                <div class="schedule__person">
                  <img src="img/doctors/8.jpg" alt="" class="schedule__person-img">
                  <div class="schedule__person-descr">
                    <h4 class="schedule__person-name">Павел Окунев</h4>
                    <div class="schedule__person-position">Врач стоматолог - терапевт</div>
                  </div>
                </div>
                <a href="doctor.php" class="btn btn_small schedule__btn">Записаться</a>
              </div>
              <div class="schedule__body">
                <div class="schedule__item">
                  <span class="schedule__day">Пн.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">15 : 00</span>
                      <span class="schedule__time">21 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day">Ср.</span>
                  <div class="schedule__bar">
                    <div class="schedule__current">
                      <span class="schedule__time">10 : 00</span>
                      <span class="schedule__time">14 : 00</span>
                    </div>
                  </div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Чт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item">
                  <span class="schedule__day schedule__item_disabled">Пт.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Сб.</span>
                  <div class="schedule__bar"></div>
                </div>
                <div class="schedule__item schedule__item_disabled">
                  <span class="schedule__day">Вс.</span>
                  <div class="schedule__bar"></div>
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