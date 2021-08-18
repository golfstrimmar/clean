



<?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
<section class="main-about" id="main-about">
<?php  }  ?>

<?php if (get_page_by_path('apie-mus')->ID == get_the_ID()) { ?> 
<section class="main-about" id="about-about">
<?php  }  ?>

      <div class="container">
        <div class="main-about__body">
          <div class="main-about__column">
          
          <div class="main-about__title">
          <?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
              <h2 class="_f-35-900">Apie Mus ir Mūsų</h2>
              <?php  }  ?>
              <?php if (get_page_by_path('apie-mus')->ID == get_the_ID()) { ?> 
              <h2 class="_f-35-900">Apie Mus</h2>
              <?php  }  ?>
          </div>
          <?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
            <div class="main-about__text _f-17-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
              accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</div>
              <?php  }  ?>
              <?php if (get_page_by_path('apie-mus')->ID == get_the_ID()) { ?> 
                <div class="main-about__text _f-17-400">
               <p>  Mes esame su Jumis nuo 1998 metų ir siūlome platų valymo paslaugų spektrą įvairaus pobūdžio klientams visoje Lietuvoje. Per savo gyvavimo metus, mes išsiugdėme pojūtį, kaip greičiau ir geriau prisitaikyti prie besikeičiančių rinkos sąlygų bei klientų poreikių. Mūsų pagrindinis tikslas - išlikti įmone, kurios kiekvienas klientas gautų aukščiausios kokybės paslaugas ir geriausią aptarnavimą.  </p>
               <p>Įmonėje dirba apie 400 darbuotojų, yra dirbančių nuo įmonės įsikūrimo dienos. Teikdami paslaugas naudojame tik aukštos kokybės, sertifikuotas, sveikatos ir saugumo reikalavimus atitinkančias valymo priemones bei inventorių.Įmonėje dirba apie 400 darbuotojų, yra dirbančių nuo įmonės įsikūrimo dienos. Teikdami paslaugas naudojame tik aukštos kokybės, sertifikuotas, sveikatos ir saugumo reikalavimus atitinkančias valymo priemones bei inventorių.</p>
              </div>
                <?php  }  ?>
         
            <?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
            <ul class="main-about__cards">
              <li class="main-line">
                <div class="main-line__icon"><svg class="i-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-line-1"></use>
                  </svg></div>
                <div class="main-line__text _f-17-700">Profesionaliai apmokytų darbuotojų paslaugas</div>
              </li>
              <li class="main-line">
                <div class="main-line__icon"><svg class="i-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-line-2"></use>
                  </svg></div>
                <div class="main-line__text _f-17-700">Nuolatinė paslaugas atliekančio personalo kontrolė</div>
              </li>
              <li class="main-line">
                <div class="main-line__icon"><svg class="i-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-line-3"></use>
                  </svg></div>
                <div class="main-line__text _f-17-700">Nestandartinių situacijų sprendimas ir greita reakcija į jas
                </div>
              </li>
              <li class="main-line">
                <div class="main-line__icon"><svg class="i-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-line-4"></use>
                  </svg></div>
                <div class="main-line__text _f-17-700">Jums tinkamiausio valymo dažnumo bei laiko parinkimas</div>
              </li>
              <li class="main-line">
                <div class="main-line__icon"><svg class="i-line">
                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#i-line-5"></use>
                  </svg></div>
                <div class="main-line__text _f-17-700">Lojalių darbuotojų komanda ištesės visus pažadus</div>
              </li>
            </ul><a class="btn btn--success main-about__button" href="#!"><span>Plačiau</span></a>
            <?php  }  ?>
         
         
          </div>
          <div class="main-about__column main-about__column--img">
            <div class="img-1">
              <div class="imgs">

                <?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
                <img data-src="<?php echo get_template_directory_uri()?>/assets/img/main/imgs/i-2.webp" alt="img">
                <?php  }  ?>
               
                <?php if (get_page_by_path('apie-mus')->ID == get_the_ID()) { ?> 
                <img data-src="<?php echo get_template_directory_uri()?>/assets/img/about/about-2.webp" alt="img">
                <?php  }  ?>

                </div>
              </div>
            <div class="img-2">
              <div class="imgs">

              <?php if (get_page_by_path('home-clean')->ID == get_the_ID()) { ?> 
              <img data-src="<?php echo get_template_directory_uri()?>/assets/img/main/imgs/i-2.webp" alt="img">
              <?php  }  ?>

              <?php if (get_page_by_path('apie-mus')->ID == get_the_ID()) { ?> 
                <img data-src="<?php echo get_template_directory_uri()?>/assets/img/about/about-1.webp" alt="img">
                <?php  }  ?>

                </div>



            </div>
          </div>
        </div>
      </div>
    </section>