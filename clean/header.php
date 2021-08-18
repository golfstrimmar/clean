<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'start' ); ?></a>

	<div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__body">

				<?php
			
			if ( is_front_page() && is_home() ) :
				?>

				<div class="header__logo" >
						<!-- <img src="assets/img/clock.svg" alt="img"> -->
						<?php	the_custom_logo();?>
				</div>

				<?php
			else :
				?>
					<!-- <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"> -->
						<!-- <img src="assets/img/clock.svg" alt="img"> -->
						<div class="header__logo" >
						<?php	the_custom_logo();?>
						</div>
				<!-- </a> -->
				<?php
			endif;
			?>


          <nav class="header__menu menu">

          <i class="header__close">
              <svg>
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#close"></use>
              </svg>
            </i>
           
<?php wp_nav_menu([
'theme_location' => 'menu-clean',
'menu'            => 'menu-clean',
'container' => null,
'menu_class' => 'menu__list',
'echo'            => true,
'depth'           => 0,
])
?>

         
            <!-- <ul class="menu__list">
              <li class="menu__item"><a class="menu__link" href="#bunner">Home</a></li>
              <li class="menu__item"><a class="menu__link" href="#posts">posts</a></li>
              <li class="menu__item"><a class="menu__link" href="#projects">projects</a></li>
            </ul>
          -->
         
          </nav>
       
					<div class="header__info info">
            <a class="btn btn--success info__button" href="http://present-1.zzz.com.ua/contacts/">
              <span>Kontaktai</span>
            </a>
          </div>
         


          <div class="header__lang block__select">
            <select class="select">
              <option value="LT" disabled="disabled">LT</option>
              <option value="LT">LT</option>
              <option value="Eng">Eng</option>
            </select>
            <div class="block__icon">
              <svg>
                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#down"></use>
              </svg>
            </div>
          </div>

          <i class="header__burger">
            <svg>  
              <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#menu"></use>
            </svg>
          </i>
       
       
        </div>
      </div>
    </header>

	
	
	
	
	
	








