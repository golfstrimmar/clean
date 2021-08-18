<?php
/*
Template Name: contacts-clean
*/
defined( 'ABSPATH' ) || exit;
get_header();
?>

<section class="contacts-1" id="contacts-1">
      <div class="container">
        <div class="contacts-1__body">
          <div class="contacts-1__title">
            <h2 class="_f-35-900">Dirbame visoje Lietuvoje</h2>
          </div>
          <ul class="contacts-1__items">
            <li class="contacts-1__item contacts-1-item">
              <div class="contacts-1-item__title _f-20-700">Rekvizitai</div>
              <div class="contacts-1-item__text">
                <div class="contacts-1-item__line">Įmonės kodas: 135255937</div>
                <div class="contacts-1-item__line">PVM mokėtojo kodas: LT352559314</div>
                <div class="contacts-1-item__line">A.s. LT37 7044 0600 0134 1136</div>
                <div class="contacts-1-item__line">AB Seb bankas</div>
              </div>
            </li>
            <li class="contacts-1__item contacts-1-item">
              <div class="contacts-1-item__title _f-20-700">Centrinė būstinė</div>
              <div class="contacts-1-item__text">
                <div class="contacts-1-item__line">Vilkpėdės g. 8, LT-03151 Vilnius</div>
                <div class="contacts-1-item__line">tel. 8 (5) 2 311795</div>
                <div class="contacts-1-item__line">tel. +370 600 26044</div>
                <div class="contacts-1-item__line">info.vilnius@topclean.lt</div>
              </div><a class="contacts-1-item__link _f-17-700" href="#!">Rodyti žemėlapyje<svg>
                  <use xlink:href="/assets/img/sprite.svg#arrow-right-green"></use>
                </svg></a>
            </li>
            <li class="contacts-1__item contacts-1-item">
              <div class="contacts-1-item__title _f-20-700">Kauno padalinys</div>
              <div class="contacts-1-item__text">
                <div class="contacts-1-item__line">Jonavos g. 254, LT-44132 Kaunas</div>
                <div class="contacts-1-item__line">tel. 8 (37) 733384</div>
                <div class="contacts-1-item__line">tel. +370 600 26226</div>
                <div class="contacts-1-item__line">info.kaunas@topclean.lt</div>
              </div><a class="contacts-1-item__link _f-17-700" href="#!">Rodyti žemėlapyje<svg>
                  <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#arrow-right-green"></use>
                </svg></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="contacts-2" id="contacts-2">
      <div class="contacts-2__wrapper">
        <div class="contacts-2__img">
          <div class="imgs"><img data-src="<?php echo get_template_directory_uri()?>/assets/img/contacts/img.webp" alt="img"></div>
        </div>
        <div class="container">
          <div class="contacts-2__body">
            <div class="contacts-2__title">
              <h2 class="_f-35-900">Parašykite mums</h2>
            </div>
            <div class="contacts-2__form contacts-form">
              <div class="contacts-form__item"><input placeholder="Vardas" id="name"></div>
              <div class="contacts-form__item"><input type="email" placeholder="El. paštas" id="email"></div>
              <div class="contacts-form__item"><input type="phone" placeholder="Tel. numeris" id="phone"></div>
              <div class="contacts-form__item"><textarea type="message" placeholder="Jūsų žinutė"
                  id="message"></textarea></div>
              <div class="contacts-form__item"><input id="cb1" type="checkbox"><label for="cb1"><span>Sutinku su
                    &nbsp;</span><span> <a href="#!">taisyklėmis ir sąlygomis</a></span></label></div><button
                class="contacts-form__button btn btn--success" type="submit"><span>Siųsti žinutę</span></button>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php 
get_footer();