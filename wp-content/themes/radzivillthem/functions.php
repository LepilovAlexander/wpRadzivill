<?php
/**
 * RadzivillThem functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RadzivillThem
 */

if ( ! function_exists( 'radzivillthem_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function radzivillthem_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RadzivillThem, use a find and replace
		 * to change 'radzivillthem' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'radzivillthem', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_image_size( 'blog-list', 850, 400, true );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'radzivillthem' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'radzivillthem_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'radzivillthem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function radzivillthem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'radzivillthem_content_width', 640 );
}

add_action( 'after_setup_theme', 'radzivillthem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function radzivillthem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'radzivillthem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'radzivillthem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title border border-info border-right-0 border-top-0 border-left-0 text-primary pb-2">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'radzivillthem_widgets_init' );
//Виджет Нумерация
function radzivillthem_categories($html, $args){
  $html = str_replace('</a> (', "</a><span class='text-white ml-5 rounded-circle num-s'>", $html);
  $html = str_replace(')', '</span>', $html);

  return $html;
};
add_filter('wp_list_categories', 'radzivillthem_categories', 11, 2);
/**
 * Enqueue scripts and styles.
 */
function radzivillthem_scripts() {
	wp_enqueue_style( 'radzivillthem-style', get_stylesheet_uri() );

	wp_enqueue_script( 'radzivillthem-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//add redirect jquery
	// wp_deregister_script('jquery');
	// wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', false, '3.2.1' );
	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'radzivillthem-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'radzivillthem_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load TGM plugins.
 */
require get_template_directory() . '/tgm/radzivillthem.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function vince_check_active_menu( $menu_item ) {
	$actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ( $actual_link == $menu_item->url ) {
		return 'active';
	}
	return '';
}
require_once get_template_directory() . '/wp_bootstrap_navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'radzivillthem' ),
) );
// Хлебные крошки

function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
  $text['home'] = 'Блог'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результати пошуку по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьї автора %s'; // текст для страницы автора
  $text['404'] = 'Помилка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Сторінка коментарів %s'; // текст 'Страница комментариев N'

  $wrap_before = '<ol class="breadcrumb bg-info">'; // открывающий тег обертки
					$wrap_after = '</ol><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = ' > '; // разделитель между "крошками"
  $sep_before = '<span class="sep pl-1 pr-1 text-warning">'; // тег перед разделителем
  $sep_after = '</span>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<span class="current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('blog');
  $link_before = '<li itemprop="itemListElement" itemscope class="breadcrumb-item" aria-current="page">';
  $link_after = '</li>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '<span itemprop="name" class="text-white">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s" class="text-white"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

  	if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

  	echo $wrap_before;
  	if ($show_home_link) echo $home_link;

  	if ( is_category() ) {
  		$cat = get_category(get_query_var('cat'), false);
  		if ($cat->parent != 0) {
  			$cats = get_category_parents($cat->parent, TRUE, $sep);
  			$cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
  			$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
  			if ($show_home_link) echo $sep;
  			echo $cats;
  		}
  		if ( get_query_var('paged') ) {
  			$cat = $cat->cat_ID;
  			echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
  		} else {
  			if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
  		}

  	} elseif ( is_search() ) {
  		if (have_posts()) {
  			if ($show_home_link && $show_current) echo $sep;
  			if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
  		} else {
  			if ($show_home_link) echo $sep;
  			echo $before . sprintf($text['search'], get_search_query()) . $after;
  		}

  	} elseif ( is_day() ) {
  		if ($show_home_link) echo $sep;
  		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
  		echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
  		if ($show_current) echo $sep . $before . get_the_time('d') . $after;

  	} elseif ( is_month() ) {
  		if ($show_home_link) echo $sep;
  		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
  		if ($show_current) echo $sep . $before . get_the_time('F') . $after;

  	} elseif ( is_year() ) {
  		if ($show_home_link && $show_current) echo $sep;
  		if ($show_current) echo $before . get_the_time('Y') . $after;

  	} elseif ( is_single() && !is_attachment() ) {
  		if ($show_home_link) echo $sep;
  		if ( get_post_type() != 'post' ) {
  			$post_type = get_post_type_object(get_post_type());
  			$slug = $post_type->rewrite;
  			printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
  			if ($show_current) echo $sep . $before . get_the_title() . $after;
  		} else {
  			$cat = get_the_category(); $cat = $cat[0];
  			$cats = get_category_parents($cat, TRUE, $sep);
  			if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
  			$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
  			echo $cats;
  			if ( get_query_var('cpage') ) {
  				echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
  			} else {
  				if ($show_current) echo $before . get_the_title() . $after;
  			}
  		}

    // custom post type
  	} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
  		$post_type = get_post_type_object(get_post_type());
  		if ( get_query_var('paged') ) {
  			echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
  		} else {
  			if ($show_current) echo $sep . $before . $post_type->label . $after;
  		}

  	} elseif ( is_attachment() ) {
  		if ($show_home_link) echo $sep;
  		$parent = get_post($parent_id);
  		$cat = get_the_category($parent->ID); $cat = $cat[0];
  		if ($cat) {
  			$cats = get_category_parents($cat, TRUE, $sep);
  			$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
  			echo $cats;
  		}
  		printf($link, get_permalink($parent), $parent->post_title);
  		if ($show_current) echo $sep . $before . get_the_title() . $after;

  	} elseif ( is_page() && !$parent_id ) {
  		if ($show_current) echo $sep . $before . get_the_title() . $after;

  	} elseif ( is_page() && $parent_id ) {
  		if ($show_home_link) echo $sep;
  		if ($parent_id != $frontpage_id) {
  			$breadcrumbs = array();
  			while ($parent_id) {
  				$page = get_page($parent_id);
  				if ($parent_id != $frontpage_id) {
  					$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
  				}
  				$parent_id = $page->post_parent;
  			}
  			$breadcrumbs = array_reverse($breadcrumbs);
  			for ($i = 0; $i < count($breadcrumbs); $i++) {
  				echo $breadcrumbs[$i];
  				if ($i != count($breadcrumbs)-1) echo $sep;
  			}
  		}
  		if ($show_current) echo $sep . $before . get_the_title() . $after;

  	} elseif ( is_tag() ) {
  		if ( get_query_var('paged') ) {
  			$tag_id = get_queried_object_id();
  			$tag = get_tag($tag_id);
  			echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
  		} else {
  			if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
  		}

  	} elseif ( is_author() ) {
  		global $author;
  		$author = get_userdata($author);
  		if ( get_query_var('paged') ) {
  			if ($show_home_link) echo $sep;
  			echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
  		} else {
  			if ($show_home_link && $show_current) echo $sep;
  			if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
  		}

  	} elseif ( is_404() ) {
  		if ($show_home_link && $show_current) echo $sep;
  		if ($show_current) echo $before . $text['404'] . $after;

  	} elseif ( has_post_format() && !is_singular() ) {
  		if ($show_home_link) echo $sep;
  		echo get_post_format_string( get_post_format() );
  	}

  	echo $wrap_after;

  }
} // end of dimox_breadcrumbs()
// Скисок комментариев
function radzivilltheme_list_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body p-2 border border-info rounded mb-3"><?php
    } ?>
    <div class="container">
      <div class="row">
              <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            }?>
        </div>
              <div class="comment-meta commentmetadata col-12 text-info">
                <p class="pt-2 "> <b> <?php printf( __( '<cite class="fn">%s</cite>'), get_comment_author_link() );
                ?></b></p>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
              <p><?php
                /* translators: 1: date, 2: time */
                                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?></p>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>
           </div>
    </div>
      <?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation text-info"><?php _e( 'Ваш коментар очікую модерації' ); ?></em><br/><?php 
        } ?>
        <div class="bg-info p-2 m-2 mt-3 rounded text-white">
          <?php comment_text(); ?>
        </div>
        

        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}
// Админ сайдбар
/**
 * Сollapse ADMIN-BAR (Toolbar) into left-top corner
 * v 0.7
 */
add_action('admin_bar_init', function(){
  remove_action('wp_head', '_admin_bar_bump_cb'); // html margin bumps
  add_action('wp_before_admin_bar_render', 'kama_adminbar_styles');
  //add_action('wp_after_admin_bar_render', 'set_adminbar_styles_show');
});
function kama_adminbar_styles(){
  // Выходим если админка, можно закомментить...
  if( is_admin() ) return;

  echo preg_replace('/[\n\t]/','','
  <style>
    #wpadminbar{ background:none; float:left; width:auto; height:auto; bottom:0; min-width:0 !important; }
    #wpadminbar > *{ float:left !important; clear:both !important; }
    #wpadminbar .ab-top-menu li{ float:none !important; }
    #wpadminbar .ab-top-secondary{ float: none !important; }
    #wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper{ top:0; left:100%; white-space:nowrap; }
    #wpadminbar .quicklinks>ul>li>a{ padding-right:17px; }
    #wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper{ left:100%; right:auto; }
    html{ margin-top:0!important; }

    #wpadminbar{ overflow:hidden; width:33px; height:30px; }
    #wpadminbar:hover{ overflow:visible; width:auto; height:auto; background:rgba(102,102,102,.7); }

    /* цвет главной иконки */
    #wp-admin-bar-'.( is_multisite() ? 'my-sites' : 'site-name').' .ab-item:before{ color:#797c7d; }

    /* прячем wp-logo */
    #wp-admin-bar-wp-logo{ display:none; }
    /* #wp-admin-bar-search{ display:none; } */

    /* правка для twentysixteen */
    body.admin-bar:before{ display:none; }

    /* Когда работает в админке. Для админки */
    @media screen and ( min-width: 782px ) {
      html.wp-toolbar{ padding-top:0 !important; }
      #wpadminbar:hover{ background:rgba(102,102,102,1); }
      #adminmenu{ margin-top:48px !important; }
    }
  </style>')."\n";
}