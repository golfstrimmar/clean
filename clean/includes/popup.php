<div class="popup" id="popup">
        <div class="popup__overlay">
          <div class="popup__inner">
            <div class="popup__title">
              <h2 class="_f-26-700">Užpildykite 3 klausimų formą ir artimiausiu metu mes atsiųsime Jums geriausios  kainos pasiūlymą!</h2>
            </div>
            <div class="popup__title">
              <h3 class="_f-26-700">1. Pasirinkite valymo tipą</h3>
            </div>
            <ul class="popup__cards">
              <li class="popup__card popup-card popup-card--active">
                <div class="popup-card__icon"><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#house-popup"></use>
                  </svg><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#dotts"></use>
                  </svg></div>
                <div class="popup-card__text">Reguliarus biuro patalpų valymas</div>
              </li>
              <li class="popup__card popup-card">
                <div class="popup-card__icon"><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-popup-3"></use>
                  </svg><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#dotts"></use>
                  </svg></div>
                <div class="popup-card__text">Reguliarus kitos paskirties patalpų valymas</div>
              </li>
              <li class="popup__card popup-card">
                <div class="popup-card__icon"><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-popup-2"></use>
                  </svg><svg class="icon-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#mark-1"></use>
                  </svg></div>
                <div class="popup-card__text">Vienkartiniai spec. valymo darbai</div>
              </li>
            </ul>
            <div class="popup__title">
              <h3 class="_f-26-700">2. Įveskite informaciją apie patalpas</h3>
            </div>
            <div class="small-title">Nurodykite patalpų plotą*</div>
            <section class="calculator-section" data-type="slider-group">
              <p class="range"></p>
              <div class="calculator-section__number"><output></output></div><input id="test1" type="range" min="0"
                max="1000" value="50" step="1" name="groep1">
              <p></p>
            </section>
            <div class="small-title">2. Nurodykite patalpų valymo dažnumą*<p>**Valymas darbo dienomis</p>
            </div>
            <div class="popup__checks">
              <div class="popup__check"><input id="rb1" type="radio" name="rb" checked=""><label for="rb1">1 kartas per
                  savaitę</label></div>
              <div class="popup__check"><input id="rb2" type="radio" name="rb" checked=""><label for="rb2">2 kartai per
                  savaitę</label></div>
              <div class="popup__check"><input id="rb3" type="radio" name="rb" checked=""><label for="rb3">3 kartai per
                  savaitę</label></div>
              <div class="popup__check"><input id="rb4" type="radio" name="rb" checked=""><label for="rb4">4 kartai per
                  savaitę</label></div>
            </div>
            <div class="popup__title">
              <h3 class="_f-26-700">3. Įveskite kontaktinę informaciją</h3>
            </div>
            <div class="form">
              <div class="form__item"><input id="name" required="" placeholder="Įveskite įmonės pavadinimą"><label
                  for="name">Įmonės pavadinimas*</label></div>
              <div class="form__item"><input id="phone" type="phone" required=""
                  placeholder=" Įveskite telefono numerį"><label for="phone">Telefono numeris*</label></div>
              <div class="form__item"><input id="email" type="email" required=""
                  placeholder=" Įveskite el. pašto adresą"><label for="email">El. pašto adresas*</label></div>
              <div class="form__item"><textarea id="message" type="text" required="" placeholder=" Jūsų komentaras..."
                  cols="40" rows="6"></textarea><label for="message">Jūsų komentaras</label></div>
              <div class="form__item"><button class="submit-button btn btn--success" type="submit"><span>GAUTI
                    PASIŪLYMĄ</span></button></div>
            </div><i class="popup__close popup__close"><svg>
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#cross-big"></use>
              </svg></i>
          </div>
        </div>
      </div>