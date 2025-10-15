<?php

// Bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {

        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';


        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';


        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item header-link ' : 'nav-link header-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        // Показываем точки в меню, первый вариант
        $item_title = $item->title;
        $dropdown = in_array('dropdown', $classes);
        if ($item_title == 'Контакты') {
            $output .= '
					<li class="nav-item d-none">
						<span class="nav-link">
                            <img src="' . get_template_directory_uri() . '/img/ico/menu-point.png">		
                        </span>
					</li>
				';
        } else if ($dropdown == false and $depth == 0) {
            $output .= '
					<li class="nav-item d-none d-xl-inline">
						<span class="nav-link">
                            <img src="' . get_template_directory_uri() . '/img/ico/menu-point.png">
						</span>
					</li>
				';
        }
    }
}
/* End Bootstrap 5 wp_nav_menu walker */



// Register a new menu
register_nav_menu('main-menu', 'Main menu');


/* BREADCRUMBS */
function true_breadcrumbs()
{

    // получаем номер текущей страницы
    $page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $separator = ' / '; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if (is_front_page()) {

        if ($page_num > 1) {
            echo '<a href="' . site_url() . '"><img src="' . get_template_directory_uri() . '/img/ico/home-breadcrumbs.png"></a>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }
    } else { // не главная

        echo '<a href="' . site_url() . '"><img src="' . get_template_directory_uri() . '/img/ico/home-breadcrumbs.png"></a>' . $separator;


        if (is_single()) { // записи

            the_category(', ');
            echo $separator;
            the_title();
        } elseif (is_page()) { // страницы WordPress 

            the_title();
        } elseif (is_category()) {

            single_cat_title();
        } elseif (is_tag()) {

            single_tag_title();
        } elseif (is_day()) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');
        } elseif (is_month()) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');
        } elseif (is_year()) { // архивы (по годам)

            echo get_the_time('Y');
        } elseif (is_author()) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;
        } elseif (is_404()) { // если страницы не существует

            echo 'Ошибка 404';
        }

        if ($page_num > 1) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }
    }
}
/* END BREADCRUMBS */


/*** ADDING WOOCOMMERCE SUPPORT support ***/
function wp_template_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'wp_template_add_woocommerce_support');


/*** OFF HOOKS WOOCOMMERCE SINGLE PRODUCT SUMMARY ***/
/* Off single product title */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
/* Off single product add to cart button */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
/* Off single product meta data */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


/* Off add to cart */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
/* Off breadcrumb */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
/* Off product tabs */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);


/* SIDEBAR WIDGET */
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name'          => 'Виджет в сайдбаре', //название виджета в админ-панели
            'id'            => 'wsidebar-1', //идентификатор виджета
            'description'   => 'виден во всех разделах сайта', //описание виджета в админ-панели
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
            'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
            'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
            'after_title'   => '</span>', //закрывающий тег заголовка виджета
        )
    );
}


/*** ADD NEW POST TYPE ***/
add_action('init', 'register_post_types');
function register_post_types()
{

    /* Услуги */
    register_post_type('service', [
        'label'  => null,
        'labels' => [
            'name'               => 'Услуги', // основное название для типа записи
            'singular_name'      => 'Услуга', // название для одной записи этого типа
            'add_new'            => 'Добавить услугу', // для добавления новой записи
            'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
            'new_item'           => 'Новая услуга', // текст новой записи
            'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
            'search_items'       => 'Искать услугу', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Услуги', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);

    /* Портфолио */
    register_post_type('portfolio', [
        'label'  => null,
        'labels' => [
            'name'               => 'Наши работы', // основное название для типа записи
            'singular_name'      => 'Наша работа', // название для одной записи этого типа
            'add_new'            => 'Добавить нашу работу', // для добавления новой записи
            'add_new_item'       => 'Добавление нашей работы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование нашей работы', // для редактирования типа записи
            'new_item'           => 'Новая наша работа', // текст новой записи
            'view_item'          => 'Смотреть нашей работы', // для просмотра записи этого типа.
            'search_items'       => 'Искать нашу работы', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Наши работы', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}


/*** ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОНТАКТЫ И КОД СЧЕТЧИКА ***/
function mytheme_customize_register($wp_customize)
{
    // Добавляем секцию
    $wp_customize->add_section('mytheme_analytics', array(
        'title'    => 'Аналитика и счетчики',
        'priority' => 200,
    ));

    // Поле для кода счетчика (head)
    $wp_customize->add_setting('mytheme_counter_head', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_counter_head', array(
        'label'       => 'Код счетчика (в <head>)',
        'description' => 'Вставьте код, который должен быть в <head> (например, Google Analytics, Meta Pixel)',
        'section'     => 'mytheme_analytics',
        'type'        => 'textarea',
    ));

    // Поле для кода счетчика (body)
    $wp_customize->add_setting('mytheme_counter_body', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_counter_body', array(
        'label'       => 'Код счетчика (перед </body>)',
        'description' => 'Вставьте код, который должен быть перед закрывающим тегом </body> (например, Яндекс.Метрика)',
        'section'     => 'mytheme_analytics',
        'type'        => 'textarea',
    ));


    /** ИСПОЛЬЗУЕМ ВЛОЖЕННЫЕ КОНТЕЙНЕРЫ **/
    /* КОНТАКТЫ */
    // Создаем панель (родительский контейнер)
    $wp_customize->add_panel('contact_panel', array(
        'title'       => 'Контакты',
        'description' => 'Описание контактов',
        'priority'    => 205, // Чем меньше, тем выше в списке
    ));

    // Добавляем первую вложенную секцию (Основной номер телефона)
    $wp_customize->add_section('mytheme_contacts', array(
        'title'    => 'Основной номер телефона',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода КОДА СТРАНЫ основного номера телефона
    $wp_customize->add_setting('mytheme_main_phone_country_code', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_country_code', array(
        'label'       => 'Код страны',
        'description' => 'Например: 8 или +7',
        'section'     => 'mytheme_contacts',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода КОДА РЕГИОНА основного номера телефона
    $wp_customize->add_setting('mytheme_main_phone_region_code', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_region_code', array(
        'label'       => 'Код региона',
        'description' => 'Например: 800, без скобок',
        'section'     => 'mytheme_contacts',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода основного НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_setting('mytheme_main_phone_number', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_number', array(
        'label'       => 'Номер телефона',
        'description' => 'Например: 880-80-88',
        'section'     => 'mytheme_contacts',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 100px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вложенную секцию ДОПОЛНИТЕЛЬНОГО НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_section('additional_phone_number', array(
        'title'    => 'Дополнительный номер телефона',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    /* Добавляем поле для ввода КОДА СТРАНЫ дополнительного номера телефона */
    $wp_customize->add_setting('additional_phone_country_code', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_country_code', array(
        'label'       => 'Код страны',
        'description' => 'Например: 8 или +7',
        'section'     => 'additional_phone_number',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    /* Добавляем поле для ввода КОДА РЕГИОНА дополнительного номера телефона */
    $wp_customize->add_setting('additional_phone_region_code', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_region_code', array(
        'label'       => 'Код региона',
        'description' => 'Например: 800, без скобок',
        'section'     => 'additional_phone_number',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода дополнительного НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_setting('additional_phone_number', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_number', array(
        'label'       => 'Номер телефона',
        'description' => 'Например: 880-80-88',
        'section'     => 'additional_phone_number',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style'      => 'width: 100px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вторую вложенную секцию (Email)
    $wp_customize->add_section('mytheme_contacts_email', array(
        'title'    => 'Email',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода email
    $wp_customize->add_setting('mytheme_email', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_email', array(
        'label'       => 'Email',
        //'description' => 'Например: 8 или +7',
        'section'     => 'mytheme_contacts_email',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вложенную секцию для Telegram
    $wp_customize->add_section('mytheme_contacts_telegram', array(
        'title'    => 'Telegram',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Telegram
    $wp_customize->add_setting('mytheme_telegram', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_telegram', array(
        'label'       => 'Telegram',
        'description' => 'Укажите ссылку на Telegram',
        'section'     => 'mytheme_contacts_telegram',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем третью вложенную секцию (Whatsapp)
    $wp_customize->add_section('mytheme_contacts_whatsapp', array(
        'title'    => 'Whatsapp',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода whatsapp
    $wp_customize->add_setting('mytheme_whatsapp', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_whatsapp', array(
        'label'       => 'Whatsapp',
        'description' => 'Укажите ссылку на Whatsapp',
        'section'     => 'mytheme_contacts_whatsapp',
        'type'        => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем секцию Вконтакте
    $wp_customize->add_section('mytheme_contacts_vk', array(
        'title'    => 'Вконтакте',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Вконтакте
    $wp_customize->add_setting('mytheme_vk', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_vk', array(
        'label'       => 'Вконтакте',
        'description' => 'Укажите ссылку на Вконтакте',
        'section'     => 'mytheme_contacts_vk',
        'type'        => 'input'
    ));


    // Добавляем секцию Адрес
    $wp_customize->add_section('mytheme_contacts_address', array(
        'title'    => 'Адрес',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Вконтакте
    $wp_customize->add_setting('mytheme_address', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_address', array(
        'label'       => 'Адрес',
        'description' => 'Укажите адрес организации',
        'section'     => 'mytheme_contacts_address',
        'type'        => 'input'
    ));


    // Добавляем секцию «Время работы»
    $wp_customize->add_section('mytheme_contacts_job_time', array(
        'title'    => 'Время работы',
        'panel'    => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Вконтакте
    $wp_customize->add_setting('mytheme_job_time', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_job_time', array(
        'label'       => 'Время работы',
        'description' => 'Укажите время работы',
        'section'     => 'mytheme_contacts_job_time',
        'type'        => 'input'
    ));
    /** ИСПОЛЬЗУЕМ ВЛОЖЕННЫЕ КОНТЕЙНЕРЫ **/
}
add_action('customize_register', 'mytheme_customize_register');
/*** END ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОНТАКТЫ И КОД СЧЕТЧИКА ***/
