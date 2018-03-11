<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RadzivillThem
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <!-- ***************content****************************** -->


            <!-- *******************Slide***************** -->
            <section class="banner wow pulse">
                <div id="opasity-block">
                    <div class="container">
                        <div class="row text-left text-white">
                            <div class="col-lg-8 my-5 ml-5">
                                <h1 class="wow bounceIn" data-wow-delay="1.2s">Ви працюєте,<br>
                                    а все решта - наша турбота!</h1>

                            </div>
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- headerwrap -->
            </section>

            <!-- LINE 1-->
            <section>
                <div class="bg-info text-white text-center justify-content-center">
                    <div class="container">
                        <h2 class="pt-5 pb-5 wow fadeInRight" data-wow-offset="100">Чому варто вибрати нас?</h2>
                        <div class="row pb-5">
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"
                                     src="<?php bloginfo( 'template_directory' ) ?>/img/col-1.jpg"
                                     alt="Ви більше не заручник бухгалтера!" width="140" height="140">
                                <h3 class="mb-3 wow slideInLeft" data-wow-offset="200">Ви більше не заручник
                                    бухгалтера!</h3>
                                <p class="wow slideInLeft" data-wow-offset="200" data-wow-delay="0.5s">Умови нашої співпраці
                                    закріплюються Договором на бухгалтерське обслуговування і супровід.</p>

                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"
                                     src="<?php bloginfo( 'template_directory' ) ?>/img/col-2.jpg"
                                     alt="Тепер ви можете перекласти відповідальність на нас!" width="140" height="140">
                                <h3 class="mb-3 wow slideInUp" data-wow-offset="200">Тепер ви можете перекласти
                                    відповідальність на
                                    нас!</h3>
                                <p class="wow slideInUp" data-wow-offset="200" data-wow-delay="0.5s">Ми виконуємо всі
                                    прописані в
                                    договорі послуги якісно і точно в срок, за що несемо не тільки професійну, але і
                                    фінансову
                                    відповідальність!</p>

                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"
                                     src="<?php bloginfo( 'template_directory' ) ?>/img/col-3.jpg"
                                     alt="Ви отримуєте дійсно відмінних фахівців!" width="140" height="140">
                                <h3 class="mb-3 wow slideInRight" data-wow-offset="200">Ви отримуєте дійсно відмінних
                                    фахівців!</h3>
                                <p class="wow slideInRight" data-wow-offset="200" data-wow-delay="0.5s">До Ваших послуг –
                                    ціла
                                    команда фахівців, які зроблять все для того, щоб Ви отримали максимальну користь і
                                    комфорт.</p>

                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div> <!-- container -->
                </div> <!-- line 1 -->
            </section>
            <!-- ******************line-2*********************************** -->
            <section class="bg-y">

                <div class="container-fluid pb-4">
                    <div class="container">
                        <h2 class="pt-4 pb-4 wow zoomInLeft" data-wow-offset="200">Наші послуги:</h2>
                        <div class="row justify-content-center">
                            <!-- service item 1 -->
                            <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInLeft" data-wow-offset="200">

                                <div class="container">
                                    <div class="card text-white bg-primary mb-3">
                                        <div class="card-header"><h4>Бухгалтерскі послуги</h4></div>
                                        <div class="card-body">

                                            <a href="accounting"><img
                                                        src="<?php bloginfo( 'template_directory' ) ?>/img/item-1.jpg"
                                                        alt="" class="card-img"></a>
                                        </div>
                                        <a href="accounting" class="btn btn-info">Детальніше...</a>
                                    </div>
                                </div>
                            </div><!-- !!! service item end !!! -->

                            <!-- service item 2-->
                            <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInDown" data-wow-offset="200">

                                <div class="container">
                                    <div class="card text-white bg-info mb-3">
                                        <div class="card-header"><h4>Юридичні послуги</h4></div>
                                        <div class="card-body">
                                            <a href="juristic">
                                                <img src="<?php bloginfo( 'template_directory' ) ?>/img/item-2.jpg" alt=""
                                                     class="card-img">
                                            </a>
                                        </div>
                                        <a href="juristic" class="btn btn-primary">Детальніше...</a>
                                    </div>
                                </div>
                            </div> <!-- !!! service item end !!! -->

                            <!-- service item 3
    <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInRight" data-wow-offset="200">

     <div class="container">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header"><h4>Розробка сайтів</h4></div>
        <div class="card-body">
          <a href="development">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/item-3.jpg" alt="" class="card-img">
          </a>
        </div>
        <a href="development" class="btn btn-info">Детальніше...</a>
      </div>
    </div>
  </div> !!! service item end !!! -->

                            <!-- service item 4
  <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInLeft" data-wow-offset="200">

   <div class="container">
    <div class="card text-white bg-primary mb-3">
      <div class="card-header"><h4>Підбір персоналу</h4>
      </div>
      <div class="card-body">
        <a href="personnel"><img src="<?php bloginfo( 'template_directory' ) ?>/img/item-4.jpg" alt="" class="card-img"></a>
      </div>
      <a href="personnel" class="btn btn-info">Детальніше...</a>
    </div>
  </div>
</div> !!! service item end !!! -->

                            <!-- service item 5-->
                            <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInRight" data-wow-offset="200">

                                <div class="container">
                                    <div class="card text-white bg-primary mb-3">
                                        <div class="card-header"><h4>Відпустка на 1-2-3!</h4></div>
                                        <div class="card-body">

                                            <a href="holidays"><img
                                                        src="<?php bloginfo( 'template_directory' ) ?>/img/item-5.jpg"
                                                        alt="" class="card-img"></a>
                                        </div>
                                        <a href="holidays" class="btn btn-info">Детальніше...</a>
                                    </div>
                                </div>
                            </div> <!-- !!! service item end !!! -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- ******************line-3*********************************** -->
            <section class="bg-primary">


                <div class="container">
                    <h2 class="pt-4 pb-3 text-white wow rotateIn" data-wow-offset="150"">Курсы бухгалтерів</h2>

                    <div class="row">
                        <div class="list-group p-3">
                            <a href="courses/#link_1"
                               class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"
                               data-wow-offset="150" data-wow-delay="0.2s">Курс «Бухгалтер у комплексі з 1С»</a>
                            <a href="courses/#link_2"
                               class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"
                               data-wow-offset="150" data-wow-delay="0.4s">Курс «Головний бухгалтер»</a>
                            <a href="courses/#link_3"
                               class="list-group-item list-group-item-action list-group-item-info wow bounceInLeft"
                               data-wow-offset="150" data-wow-delay="0.6s">Курс «Використання прикладного рішення «1С:
                                Бухгалтерія 8
                                для України»</a>
                            <a href="courses/#link_4"
                               class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"
                               data-wow-offset="150" data-wow-delay="0.8s">Курс «Ведення бухгалтерського і податкового
                                обліку в
                                прикладному рішенні «1С: Управління торговим підприємством 8 для України»</a>
                            <a href="courses/#link_5"
                               class="list-group-item list-group-item-action list-group-item-info wow bounceInLeft"
                               data-wow-offset="150" data-wow-delay="1s">Курс «Податок на додану вартість»</a>

                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
