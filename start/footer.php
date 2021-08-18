<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>




<?php get_template_part('./includes/popup') ?>

		<!-- ============footer area========= -->
    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer__body">
         
        <div class="footer__item footer-item">
					  <div class="footer__logo" href="#!">
							<?php	the_custom_logo();?>
            </div>
            <p class="footer-item__line _f-17-400">Vilkpėdės g. 8, Vilnius</p>
            <p class="footer-item__line _f-17-400">I–V 8:00–17:00</p>
            <p class="footer-item__line _f-17-400">8 (5) 2 311795</p>
            <p class="footer-item__line _f-17-400">+370 600 26044</p>
            <p class="footer-item__line _f-17-400">info.vilnius@topclean.lt</p>
            <p class="footer-item__line soc">
              <a class="soc__item" href="#!">
              <svg>
                  <use xlink:href="assets/img/sprite.svg#facebook"></use>
                </svg>
              </a>
                
                <a class="soc__item" href="#!">
                  <svg>
                  <use xlink:href="assets/img/sprite.svg#insta"></use>
                </svg>
              </a>
            </p>
        </div>

        <div class="footer__item footer-item">
            <div class="footer-item__title _f-20-700">Paslaugos</div>
            <div class="footer-item__description">
              <p class="footer-item__line _f-17-400">Patalpų valymas</p>
              <p class="footer-item__line _f-17-400">Specialieji darbai</p>
              <p class="footer-item__line _f-17-400">Kiemo teritorijų ir parkingų valymas bei priežiūra</p>
              <p class="footer-item__line _f-17-400">Poremontiniai ir generaliniai valymai</p>
              <p class="footer-item__line _f-17-400">Papildomos paslaugos</p>
            </div>
          </div>
          <div class="footer__item footer-item">
            <div class="footer-item__title _f-20-700">Rekvizitai</div>
            <div class="footer-item__description">
              <p class="footer-item__line _f-17-400">Įmonės kodas: 135255937</p>
              <p class="footer-item__line _f-17-400">PVM mokėtojo kodas: LT352559314</p>
              <p class="footer-item__line _f-17-400">A.s. LT37 7044 0600 0134 1136</p>
              <p class="footer-item__line _f-17-400">AB Seb bankas</p>
            </div>
          </div>
        </div>
        <div class="footer__copyright">
          <span class="_f-copy">© 2021, TOP CLEAN | Visos teisės saugomos</span><span
            class="_f-copy">Privatumo politika</span></div>
      </div>


    </footer>

<!-- ============/footer area========= -->






</div><!-- wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
