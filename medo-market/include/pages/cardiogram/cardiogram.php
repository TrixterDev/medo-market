<div class="cardiogram container">
  <div class="cardiogram__nav">
    <a href="main">Главная</a>
    <a href="catalog">Каталог</a>
    <a href="cardiogram">Электрокардиограмма (ЭКГ)</a>
  </div>
  <div class="cardiogram__title">
    <h1>Электрокардиограмма (ЭКГ)</h1>
  </div>
  <div class="cardiogram__content">
    <section class="cardogram__filter">
      <div class="cardiogram__filter-title">
        <h1>Фильтр</h1>
      </div>
      <div class="cardiogram__filter-btn" id="id">
        <p data-filter="all">Сбросить</p>
        <div class="cardiogram__accordion">
          <input id="toggle1" type="radio" class="cardiogram__accordion-toggle" name="toggle" />
          <label for="toggle1">Бренд</label>
          <section>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-a" id="Pistol" type="checkbox">
              <label for="Pistol">Pistol</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-b category-a" id="Machine" type="checkbox">
              <label for="Machine">Machine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-c" id="Submachine" type="checkbox">
              <label for="Submachine">Submachine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-d" id="Equipments" type="checkbox">
              <label for="Equipments">Equipments</label>
            </div>
          </section>
        </div>
        <div class="cardiogram__accordion">
          <input id="toggle2" type="radio" class="cardiogram__accordion-toggle" name="toggle" />
          <label for="toggle2">Применение</label>
          <section>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-a" id="Pistol" type="checkbox">
              <label for="Pistol">Pistol</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-b" id="Machine" type="checkbox">
              <label for="Machine">Machine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-c" id="Submachine" type="checkbox">
              <label for="Submachine">Submachine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-d" id="Equipments" type="checkbox">
              <label for="Equipments">Equipments</label>
            </div>
          </section>
        </div>
        <div class="cardiogram__accordion">
          <input id="toggle3" type="radio" class="cardiogram__accordion-toggle" name="toggle" />
          <label for="toggle3">Класс устройства</label>
          <section>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-a" id="Pistol" type="checkbox">
              <label for="Pistol">Pistol</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-b" id="Machine" type="checkbox">
              <label for="Machine">Machine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-c" id="Submachine" type="checkbox">
              <label for="Submachine">Submachine gun</label>
            </div>
            <div class="cardiogram__accordion-filter">
              <input data-filter=".category-d" id="Equipments" type="checkbox">
              <label for="Equipments">Equipments</label>
            </div>
          </section>
        </div>
      </div>
      <div class="cardiogram__sorting">
        <p>Сотировка</p>
      </div>
      <div class="cardiogram__sorting-content">
        <div class="cardiogram__sorting-btn">
        <p>Цены</p>
        <button type="button" class="control" data-sort="price:asc ">Цена (по возрастанию)</button>
        <button type="button" class="control" data-sort="price:desc ">Цена (по Убыванию)</button>
        </div>
        <div class="cardiogram__sorting-btn">
        <p>Алфавит</p>
        <button type="button" class="control" data-sort="name:asc">От А до Я</button>
        <button type="button" class="control" data-sort="name:decs">От Я до А</button>
        </div>
      </div>
    </section>
    <div class="cardiogram__product">
      
      <div class="cardiogram__cards">
        <div class="cardiogram__card mix category-a" data-price="9.9" data-order="1" data-name="ааааааа">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>ааааЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="10" data-order="1" data-name="дддд">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>ддддЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="9.6" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="9.6" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="9.6" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="12" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="12" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="7" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
        <div class="cardiogram__card mix category-a" data-price="10.2" data-order="1" data-name="ввв">
          <div class="cardiogram__sell">
            <span>-30% скидка</span>
          </div>
          <a href="#">
            <ion-icon name="heart-outline"></ion-icon>
          </a>
          <div class="cardiogram__card-content">
            <img src="../../../assets//img//card//cardio.png" alt="">
            <div class="cardiogram__card-desc">
              <p>вввввЭлектрокардиограф FX-7302</p>
              <span>Fukuda</span>
            </div>
            <a href="info-cardiogram">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>