<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RadzivillThem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ) ?>/favicon.png" type="image/png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant" rel="stylesheet">
<?php if (is_single() || (is_page())){ ?>
<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
<?php 
} else { ?>
<meta name="description" content="ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ" />
<?php } ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <header class="border-b main-blue-bg">
        <!-- lang panel -->
       <!-- <div class="container-fluid main-blue-bg pb-2">
        <div class="row justify-content-end">
            <div class="col-lg-3 col-sm-4 w-100 wow bounceInUp text-center right" data-wow-delay="0.4s">
                <div id="lang">
                <?php //pll_the_languages(array('show_flags'=>1, 'show_names' =>0, 'hide_if_empty' =>1 , 'hide_if_no_translation' =>1, 'hide_current'=>1, 'dropdown' =>1)); ?>
                </div>
            </div>
        </div>
    </div> -->
    <div class="line main-blue-bg google-font">
        <div class="container pt-3 pb-2">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a
                    class="text-white"
                    href="tel:+380442287854"><i
                    class="fa fa-phone" aria-hidden="true"></i> (044) 228 78
                54</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a
                    class="text-white"
                    href="tel:+380952867080"><i
                    class="fa fa-phone" aria-hidden="true"></i> (095) 286 70
                80</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a
                    class="text-white"
                    href="tel:+380676294480"><i
                    class="fa fa-phone" aria-hidden="true"></i> (067) 629 44
                80</a></div>
                <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a
                    class="text-white"
                    href="tel:+380938844231"><i
                    class="fa fa-phone" aria-hidden="true"></i> (093) 884 42
                31</a></div>

            </div>
        </div>
    </div>
    <nav id="main-menu" class="navbar navbar-expand-lg navbar-dark sticky-jq main-blue-bg">
        <?php
        if ($_SERVER["REQUEST_URI"] == '/'): ?>
        <figure>
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/nlogo.png" title="CC Radzivill logo"
            alt="ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="300"
            height="100">
        </figure>
    <?php else: ?>
        <a href="/" class="navbar-brand wow bounceInLeft">
            <figure>

                <img src="<?php bloginfo( 'template_directory' ) ?>/img/nlogo.png" alt="ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="300" height="100" title="CC Radzivill logo">
            </figure>
        </a>
    <?php endif?>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle naviagation">
    <span class="navbar-toggler-icon"></span>
</button>
<?php
wp_nav_menu( array(
    'theme_location'    => 'primary',
            'depth'             => 2, // 1 = with dropdowns, 0 = no dropdowns.
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'navbar-nav mr-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
        ) );
        ?>

        <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">
         <button type="button" class="btn btn-outline-warning my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>
     </form>


 </nav>
 <div class="container-fluid main-blue-bg pb-2">
    <div class="row justify-content-end">
        <div class="col-lg-6 col-sm-12 wow bounceInUp text-center right google-font" data-wow-delay="0.4s">
            <?php
            if ($_SERVER["REQUEST_URI"] == '/contacts' || $_SERVER["REQUEST_URI"] == '/contacts/#map'): ?>
            <a class="text-white " href="#map" aria-hidden="true">
                Наша адреса:<wbr> Україна,<wbr> м. Київ,<wbr> вул. Б. Хмельницького,<wbr> буд.16-22
                </a>
            <?php else: ?> 
                <a class="text-white " href="/contacts/#map" aria-hidden="true">
                    Наша адреса:<wbr> Україна,<wbr> м. Київ,<wbr> вул. Б. Хмельницького,<wbr> буд.16-22
                    </a>
                <?php endif?>
            </div>
        </div>
    </div>
</header>

<!-- ********************Modal Window*********************** -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title google-font text-info" id="myModalLabel">Ваша Заявка</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php echo  do_shortcode('[contact-form-7 id="35" title="Контактна форма 1"]'); ?>

    </div>
</div>
</div>