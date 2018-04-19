<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RadzivillThem
 */

?>

<footer>
  <div class="footer" id="footer">
    <div class="container justify-content-end">
      <div class="row justify-content-between align-items-center">
                <!-- <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

				  </ul>
				</div>
				<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

				  </ul>
				</div>
				<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

				  </ul>
				</div>
				<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>

				  </ul>
       </div> -->
       <div class="col-lg-3 wow zoomInLeft" data-wow-offset="50">
        <h3> Ми у соцмережах </h3>
        <ul class="social ">
          <li id="faceB"><a target="_blank" href="https://www.facebook.com/cc.radzivill"><i
            class=" fa fa-facebook">   </i> </a></li>
            <li id="skype"><a href="skype:radzivill777"><i class="fa fa-skype">   </i> </a>

              <div id="SkypeButton_Call_radzivill777_1">
              </div>
            </li>
            <li id="google"><a href="mailto:cc.radzivill@gmail.com"><i class="fa fa-google-plus">
              </i>
          </a></li>
          <li id="yotube"><a target="_blank" href="https://www.youtube.com/playlist?list=PL5rmNkGSZkTuZSz7JJYQjTnZi5KLON7Or&app=desktop"><i class="fa fa-youtube">
            </i>
        </a></li>
      </ul>
    </div>
                <!--  <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">
			   <button type="button" class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>
       </form> -->
     </div>
     <!--/.row-->
   </div>
   <!--/.container-->
 </div>
 <!--/.footer-->

 <div class="footer-bottom bg-info">
  <div class="container text-right text-white wow bounceInRight">
    <p> © Всі права захищені - Разроблено компанієй <a target="_blank" href="https://www.facebook.com/rschattenwald" class="text-white h5">WF dev.</a></p>
  </div>
</div>
<!--/.footer-bottom-->
</footer>
<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116784860-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116784860-1');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1684248644956460'); 
    fbq('track', 'PageView');
  </script>
  <noscript>
   <img height="1" width="1" 
   src="https://www.facebook.com/tr?id=1684248644956460&ev=PageView
   &noscript=1"/>
 </noscript>
 <!-- End Facebook Pixel Code -->
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/css/bootstrap.min.css">
 <!-- fonts -->
 <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/css/style.css">

 <!-- Animate CSS + WoW.JS -->
 <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/css/animate.css">
 <script src="<?php bloginfo( 'template_directory' ) ?>/js/wow.min.js"></script>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
 integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
 crossorigin="anonymous"></script>
 <script src="<?php bloginfo( 'template_directory' ) ?>/js/bootstrap.min.js"></script>
 <script src="<?php bloginfo( 'template_directory' ) ?>/js/script.js"></script>

 <!--WoW.JS-->
 <script>new WOW().init();</script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
