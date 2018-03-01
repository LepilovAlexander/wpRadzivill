<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RadzivillThem
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();


//        <!doctype html>
//        <html lang="ua">
//        <head>
//            <title>Radzivill</title>
//
//            <!-- Required meta tags -->
//            <meta charset="utf-8">
/*            <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ) ?>img/icon.png" type="image/png">*/
//            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
//
//        </head>
//        <body <?php body_class(); ?><!-->-->
<!---->
<!--        <!-- *****************Header************** -->-->
<!--        <header>-->
<!--            <div class="line bg-primary">-->
<!--                <div class="container pt-3 pb-2">-->
<!--                    <div class="row justify-content-center">-->
<!--                        <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a-->
<!--                                    class="text-white"-->
<!--                                    href="tel:+380442287854"><i-->
<!--                                        class="fa fa-phone" aria-hidden="true"></i> (044) 228 78-->
<!--                                54</a></div>-->
<!--                        <div class="col-md-3 col-sm-6 wow bounceInLeft text-center" data-wow-delay="0.4s"><a-->
<!--                                    class="text-white"-->
<!--                                    href="tel:+380952867080"><i-->
<!--                                        class="fa fa-phone" aria-hidden="true"></i> (095) 286 70-->
<!--                                80</a></div>-->
<!--                        <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a-->
<!--                                    class="text-white"-->
<!--                                    href="tel:+380676294480"><i-->
<!--                                        class="fa fa-phone" aria-hidden="true"></i> (067) 629 44-->
<!--                                80</a></div>-->
<!--                        <div class="col-md-3 col-sm-6 wow bounceInRight text-center" data-wow-delay="0.4s"><a-->
<!--                                    class="text-white"-->
<!--                                    href="tel:+380938844231"><i-->
<!--                                        class="fa fa-phone" aria-hidden="true"></i> (093) 884 42-->
<!--                                31</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-b ">-->
<!---->
<!--                <a href="/" class="navbar-brand wow bounceInLeft">-->
<!--                    <figure>-->
<!--                        <img src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/nlogo.png"-->
<!--                             alt="ТОВ КОНСАЛТИНГОВА КОМПАНІЯ РАДЗІВІЛЛ" width="300"-->
<!--                             height="100">-->
<!--                    </figure>-->
<!--                </a>-->
<!---->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse"-->
<!--                        data-target="#navbarSupportedContent"-->
<!--                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle naviagation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--					--><?php
//					$args = array(
//						'container'       => 'ul',
//						'container_class' => 'navbar-nav mr-auto',
//						'menu_class'      => 'nav-item',
//						'menu_class'      => 'nav-item',
//					);
//					wp_nav_menu( $args );
//					?>
<!--                    <ul class="navbar-nav mr-auto">-->
<!--                        <li class="nav-item active">-->
<!--                            <a href="/" class="nav-link wow bounceInLeft" data-wow-delay="0.2s">Головна</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-delay="0.4s" href=""-->
<!--                               id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"-->
<!--                               aria-expanded="false">-->
<!--                                Послуги-->
<!--                            </a>-->
<!--                            <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownMenuLink">-->
<!--                                <a class="dropdown-item blue-bg" href="accounting">Бухгалтерскі послуги</a>-->
<!--                                <a class="dropdown-item blue-bg" href="juristic">Юридичні послуги</a>-->
<!--                                <a class="dropdown-item blue-bg" href="personnel">Підбір персоналу</a>-->
<!--                                <!-- <a class="dropdown-item blue-bg" href="development">Розробка сайтів</a> -->-->
<!--                                <a class="dropdown-item blue-bg" href="holidays">Відпустка на 1-2-3!</a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="courses" class="nav-link wow bounceInLeft" data-wow-delay="0.6s">Курси-->
<!--                                бухгалтерів</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="contacts" class="nav-link wow bounceInLeft"-->
<!--                               data-wow-delay="0.8s">Контакти</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <!-- <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">-->
<!--					  <button type="button" class="btn btn-outline-warning my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>-->
<!--				  </form> -->-->
<!--                </div>-->
<!--            </nav>-->
<!--        </header>-->
<!--        <!-- ********************Modal Window*********************** -->-->
<!---->
<!--        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"-->
<!--             aria-hidden="true">-->
<!--            <div class="modal-dialog" role="document">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h4 class="modal-title" id="myModalLabel">Ваша Заявка</h4>-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                            <span aria-hidden="true">&times;</span>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        <form action="" method="post">-->
<!--                            <div class="form-group">-->
<!--                                <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Ім'я">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="text" class="form-control" id="email" name="email" placeholder="Ваш Email">-->
<!--                            </div>-->
<!---->
<!--                            <div class="form-group">-->
<!--                        <textarea class="form-control" id="massage" rows="5" name="massage"-->
<!--                                  placeholder="Повідомлення"></textarea>-->
<!--                            </div>-->
<!---->
<!--                        </form>-->
<!--                        <div class="modal-footer">-->
<!--                            <button type="submit" id="send" name="send_message" class="btn btn-info">Відправити</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <!-- ***************content****************************** -->-->
<!---->
<!---->
<!--        <!-- *******************Slide***************** -->-->
<!--        <section class="banner wow pulse">-->
<!--            <div id="opasity-block">-->
<!--                <div class="container">-->
<!--                    <div class="row text-left text-white">-->
<!--                        <div class="col-lg-8 my-5 ml-5">-->
<!--                            <h1 class="wow bounceIn" data-wow-delay="1.2s">Ви працюєте,<br>-->
<!--                                а все решта - наша турбота!</h1>-->
<!---->
<!--                        </div>-->
<!--                    </div><!-- row -->-->
<!--                </div><!-- container -->-->
<!--            </div><!-- headerwrap -->-->
<!--        </section>-->
<!---->
<!--        <!-- LINE 1-->-->
<!--        <section>-->
<!--            <div class="bg-info text-white text-center justify-content-center">-->
<!--                <div class="container">-->
<!--                    <h2 class="pt-5 pb-5 wow fadeInRight" data-wow-offset="100">Чому варто вибрати нас?</h2>-->
<!--                    <div class="row pb-5">-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--                            <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"-->
<!--                                 src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/col-1.jpg"-->
<!--                                 alt="Ви більше не заручник бухгалтера!" width="140" height="140">-->
<!--                            <h3 class="mb-3 wow slideInLeft" data-wow-offset="200">Ви більше не заручник-->
<!--                                бухгалтера!</h3>-->
<!--                            <p class="wow slideInLeft" data-wow-offset="200" data-wow-delay="0.5s">Умови нашої співпраці-->
<!--                                закріплюються Договором на бухгалтерське обслуговування і супровід.</p>-->
<!---->
<!--                        </div><!-- /.col-lg-4 -->-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--                            <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"-->
<!--                                 src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/col-2.jpg"-->
<!--                                 alt="Тепер ви можете перекласти відповідальність на нас!" width="140" height="140">-->
<!--                            <h3 class="mb-3 wow slideInUp" data-wow-offset="200">Тепер ви можете перекласти-->
<!--                                відповідальність на-->
<!--                                нас!</h3>-->
<!--                            <p class="wow slideInUp" data-wow-offset="200" data-wow-delay="0.5s">Ми виконуємо всі-->
<!--                                прописані в-->
<!--                                договорі послуги якісно і точно в срок, за що несемо не тільки професійну, але і-->
<!--                                фінансову-->
<!--                                відповідальність!</p>-->
<!---->
<!--                        </div><!-- /.col-lg-4 -->-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12">-->
<!--                            <img class="rounded-circle mb-3 wow flip" data-wow-offset="200"-->
<!--                                 src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/col-3.jpg"-->
<!--                                 alt="Ви отримуєте дійсно відмінних фахівців!" width="140" height="140">-->
<!--                            <h3 class="mb-3 wow slideInRight" data-wow-offset="200">Ви отримуєте дійсно відмінних-->
<!--                                фахівців!</h3>-->
<!--                            <p class="wow slideInRight" data-wow-offset="200" data-wow-delay="0.5s">До Ваших послуг –-->
<!--                                ціла-->
<!--                                команда фахівців, які зроблять все для того, щоб Ви отримали максимальну користь і-->
<!--                                комфорт.</p>-->
<!---->
<!--                        </div><!-- /.col-lg-4 -->-->
<!--                    </div><!-- /.row -->-->
<!--                </div> <!-- container -->-->
<!--            </div> <!-- line 1 -->-->
<!--        </section>-->
<!--        <!-- ******************line-2*********************************** -->-->
<!--        <section class="bg-y">-->
<!---->
<!--            <div class="container-fluid pb-4">-->
<!--                <div class="container">-->
<!--                    <h2 class="pt-4 pb-4 wow zoomInLeft" data-wow-offset="200">Наші послуги:</h2>-->
<!--                    <div class="row justify-content-center">-->
<!--                        <!-- service item 1 -->-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInLeft" data-wow-offset="200">-->
<!---->
<!--                            <div class="container">-->
<!--                                <div class="card text-white bg-primary mb-3">-->
<!--                                    <div class="card-header"><h4>Бухгалтерскі послуги</h4></div>-->
<!--                                    <div class="card-body">-->
<!---->
<!--                                        <a href="accounting"><img-->
<!--                                                    src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/item-1.jpg"-->
<!--                                                    alt="" class="card-img"></a>-->
<!--                                    </div>-->
<!--                                    <a href="accounting" class="btn btn-info">Детальніше...</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div><!-- !!! service item end !!! -->-->
<!---->
<!--                        <!-- service item 2-->-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInDown" data-wow-offset="200">-->
<!---->
<!--                            <div class="container">-->
<!--                                <div class="card text-white bg-info mb-3">-->
<!--                                    <div class="card-header"><h4>Юридичні послуги</h4></div>-->
<!--                                    <div class="card-body">-->
<!--                                        <a href="juristic">-->
<!--                                            <img src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/item-2.jpg" alt=""-->
<!--                                                 class="card-img">-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <a href="juristic" class="btn btn-primary">Детальніше...</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div> <!-- !!! service item end !!! -->-->
<!---->
<!--                        <!-- service item 3-->
<!--    <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInRight" data-wow-offset="200">-->
<!---->
<!--     <div class="container">-->
<!--      <div class="card text-white bg-primary mb-3">-->
<!--        <div class="card-header"><h4>Розробка сайтів</h4></div>-->
<!--        <div class="card-body">-->
<!--          <a href="development">-->
<!--            <img src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/item-3.jpg" alt="" class="card-img">-->
<!--          </a>-->
<!--        </div>-->
<!--        <a href="development" class="btn btn-info">Детальніше...</a>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div> !!! service item end !!! -->-->
<!---->
<!--                        <!-- service item 4-->
<!--  <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInLeft" data-wow-offset="200">-->
<!---->
<!--   <div class="container">-->
<!--    <div class="card text-white bg-primary mb-3">-->
<!--      <div class="card-header"><h4>Підбір персоналу</h4>-->
<!--      </div>-->
<!--      <div class="card-body">-->
<!--        <a href="personnel"><img src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/item-4.jpg" alt="" class="card-img"></a>-->
<!--      </div>-->
<!--      <a href="personnel" class="btn btn-info">Детальніше...</a>-->
<!--    </div>-->
<!--  </div>-->
<!--</div> !!! service item end !!! -->-->
<!---->
<!--                        <!-- service item 5-->-->
<!--                        <div class="col-lg-4 col-sm-6 col-xs-12 wow bounceInRight" data-wow-offset="200">-->
<!---->
<!--                            <div class="container">-->
<!--                                <div class="card text-white bg-primary mb-3">-->
<!--                                    <div class="card-header"><h4>Відпустка на 1-2-3!</h4></div>-->
<!--                                    <div class="card-body">-->
<!---->
<!--                                        <a href="holidays"><img-->
<!--                                                    src="--><?php //bloginfo( 'template_directory' ) ?><!--/img/item-5.jpg"-->
<!--                                                    alt="" class="card-img"></a>-->
<!--                                    </div>-->
<!--                                    <a href="holidays" class="btn btn-info">Детальніше...</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div> <!-- !!! service item end !!! -->-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <!-- ******************line-3*********************************** -->-->
<!--        <section class="bg-primary">-->
<!---->
<!---->
<!--            <div class="container">-->
<!--                <h2 class="pt-4 pb-3 text-white wow rotateIn" data-wow-offset="150"">Курсы бухгалтерів</h2>-->
<!---->
<!--                <div class="row">-->
<!--                    <div class="list-group p-3">-->
<!--                        <a href="courses/#link_1"-->
<!--                           class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"-->
<!--                           data-wow-offset="150" data-wow-delay="0.2s">Курс «Бухгалтер у комплексі з 1С»</a>-->
<!--                        <a href="courses/#link_2"-->
<!--                           class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"-->
<!--                           data-wow-offset="150" data-wow-delay="0.4s">Курс «Головний бухгалтер»</a>-->
<!--                        <a href="courses/#link_3"-->
<!--                           class="list-group-item list-group-item-action list-group-item-info wow bounceInLeft"-->
<!--                           data-wow-offset="150" data-wow-delay="0.6s">Курс «Використання прикладного рішення «1С:-->
<!--                            Бухгалтерія 8-->
<!--                            для України»</a>-->
<!--                        <a href="courses/#link_4"-->
<!--                           class="list-group-item list-group-item-action list-group-item-info wow bounceInRight"-->
<!--                           data-wow-offset="150" data-wow-delay="0.8s">Курс «Ведення бухгалтерського і податкового-->
<!--                            обліку в-->
<!--                            прикладному рішенні «1С: Управління торговим підприємством 8 для України»</a>-->
<!--                        <a href="courses/#link_5"-->
<!--                           class="list-group-item list-group-item-action list-group-item-info wow bounceInLeft"-->
<!--                           data-wow-offset="150" data-wow-delay="1s">Курс «Податок на додану вартість»</a>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--        <!-- ******************footer************************ -->-->
<!--        <footer>-->
<!--            <div class="footer" id="footer">-->
<!--                <div class="container justify-content-end">-->
<!--                    <div class="row justify-content-between align-items-center">-->
<!--                        <!-- <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>-->
<!---->
<!--						  </ul>-->
<!--						</div>-->
<!--						<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>-->
<!---->
<!--						  </ul>-->
<!--						</div>-->
<!--						<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>-->
<!---->
<!--						  </ul>-->
<!--						</div>-->
<!--						<div class="col-lg-2  co-md-2 col-sm-4 col-xs-6">"> Lorem Ipsum </a> </li>-->
<!---->
<!--						  </ul>-->
<!--					  </div> -->-->
<!--                        <div class="col-lg-3 wow zoomInLeft" data-wow-offset="50">-->
<!--                            <h3> Мы у соцмережах </h3>-->
<!--                            <ul class="social ">-->
<!--                                <li id="faceB"><a target="_blank" href="https://www.facebook.com/OlgaRadzivill1"><i-->
<!--                                                class=" fa fa-facebook">   </i> </a></li>-->
<!--                                <li id="skype"><a href="skype:radzivill777"><i class="fa fa-skype">   </i> </a>-->
<!---->
<!--                                    <div id="SkypeButton_Call_radzivill777_1">-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li id="google"><a href="mailto:cc.radzivill@gmail.com"><i class="fa fa-google-plus">-->
<!--                                              </i>-->
<!--                                    </a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <!--  <form class="form-inline my-2 my-lg-0 wow bounceInRight" data-wow-delay="0.9s">-->
<!--					   <button type="button" class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Залишити Заявку</button>-->
<!--				   </form> -->-->
<!--                    </div>-->
<!--                    <!--/.row-->-->
<!--                </div>-->
<!--                <!--/.container-->-->
<!--            </div>-->
<!--            <!--/.footer-->-->
<!---->
<!--            <div class="footer-bottom bg-info">-->
<!--                <div class="container text-right text-white wow bounceInRight">-->
<!--                    <p> © Всі права захищені - Разроблено компанієй <a href="#" class="text-white h5">WF dev.</a></p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <!--/.footer-bottom-->-->
<!--        </footer>-->
<!---->
<!--        <link rel="stylesheet" href="--><?php //bloginfo( 'template_directory' ) ?><!--/css/style.css">-->
<!---->
<!--        <!-- Bootstrap CSS -->-->
<!--        <link rel="stylesheet" href="--><?php //bloginfo( 'template_directory' ) ?><!--/css/bootstrap.min.css">-->
<!--        <!-- fonts -->-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--        <!-- Animate CSS + WoW.JS -->-->
<!--        <link rel="stylesheet" href="--><?php //bloginfo( 'template_directory' ) ?><!--/css/animate.css">-->
<!--        <script src="--><?php //bloginfo( 'template_directory' ) ?><!--/js/wow.min.js"></script>-->
<!---->
<!--        <!-- Optional JavaScript -->-->
<!--        <!-- jQuery first, then Popper.js, then Bootstrap JS -->-->
<!--        <script src="--><?php //bloginfo( 'template_directory' ) ?><!--/js/jquery-3.2.1.min.js"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"-->
<!--                integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"-->
<!--                crossorigin="anonymous"></script>-->
<!--        <script src="--><?php //bloginfo( 'template_directory' ) ?><!--/js/bootstrap.min.js"></script>-->
<!--        <script src="--><?php //bloginfo( 'template_directory' ) ?><!--/js/script.js"></script>-->
<!--        <script type="--><?php //bloginfo( 'template_directory' ) ?><!--/text/javascript"-->
<!--                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcQMSM28AVgOM92kGziX8UQjjBO5AhqEU&callback=initMap"-->
<!--                async defer></script>-->
<!---->
<!--        </body>-->
<!--        </html>-->
