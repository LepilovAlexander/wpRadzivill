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
    <meta name="yandex-verification" content="74201cef56a3eaa8" />
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ) ?>/favicon.png" type="image/png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116784860-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116784860-1');
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48271439 = new Ya.Metrika({
                    id:48271439,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48271439" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wptime-plugin-preloader"></div>
    <header>
        <div class="line bg-primary">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

            <a href="/" class="navbar-brand wow bounceInLeft">
                <figure>

                    <img src="<?php bloginfo( 'template_directory' ) ?>/img/nlogo.png"
                    alt="ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="300"
                    height="100">
                </figure>
            </a>

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
 <div class="container-fluid bg-primary border-b pb-2">
    <div class="row justify-content-end">
        <div class="col-lg-6 col-sm-12 wow bounceInUp text-center right" data-wow-delay="0.4s">
            <a class="text-white " href="contacts/#map" aria-hidden="true">
                Наша адреса:<wbr> Україна,<wbr> м. Київ,<wbr> вул. Б. Хмельницького,<wbr> буд.16-22
                </a>
                
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
            <h4 class="modal-title" id="myModalLabel">Ваша Заявка</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php echo  do_shortcode('[contact-form-7 id="35" title="Контактна форма 1"]'); ?>

    </div>
</div>
</div>