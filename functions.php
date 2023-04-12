<?php
/*
 * This is the child theme for Astra theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'diplommsk_enqueue_styles' );
function diplommsk_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array('parent-style'));
    wp_enqueue_style( 'font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', array('parent-style'));
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme-style.css', array('parent-style'));
    //wp_enqueue_style( 'theme-style-color', get_stylesheet_directory_uri() . '/assets/css/cyan.css', array('parent-style'));
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    //wp_enqueue_script('bootstrap-theme', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    //wp_enqueue_script('flickity-js', get_stylesheet_directory_uri() . '/assets/js/flickity.pkgd.min.js', array('jquery'), false, true); // Если отключить отваливается калькулятор
    //wp_enqueue_script('easing-js', get_stylesheet_directory_uri() . '/assets/js/easing.min.js', array('jquery'), false, true);  // Если отключить отваливается калькулятор
    //wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), false, true);  // Если отключить отваливается калькулятор
    wp_enqueue_script('modernizr-js', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), false, true);    // Если отключить отваливается калькулятор
    wp_enqueue_script('calc_script-js', get_stylesheet_directory_uri() . '/assets/js/calc_script.js', array('jquery'), false, true);
    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true);
}
/*
 * Your code goes below
*/

//  Actions
add_action( 'widgets_init', 'cust_widgets' );


// Some weare
function cust_widgets(){
    register_sidebar([
        'name' => 'Виджет для размещения копирайта',
        'id' => 'cust_footer_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Кастом футер 1',
        'id' => 'cust_footer_2',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Кастом футер 2',
        'id' => 'cust_footer_3',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Кастом футер 3',
        'id' => 'cust_footer_4',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Кастом футер 4',
        'id' => 'cust_footer_5',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 1',
        'id' => 'cust_sidebar_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 2',
        'id' => 'cust_sidebar_2',
		'before_widget' => '<aside id="%1$s" class="footer-widget widget widget__custom-block %2$s clr">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
    ]);
}

//Shortcods
add_shortcode( 'si-section-action', 'si_section_action' );
function si_section_action( $attr ){
    $params = shortcode_atts([
        'text' => '',
    ], $attr);

    return '<section class="section actions-posts mt-40 mb-0" style="background: url(https://diploms-197.com/wp-content/themes/diploms197/assets/img/content-action-bg.jpg); background-repeat: no-repeat;">
    <div class="content-action">
      <div class="content-action-title">Наша компания предлагает следующие акции со скидками:</div>
      <div class="content-action-container">
        <div class="content-action-item">Для именинников - скидка на 1000 рублей на любой заказ непосредственно в день рождения, а также за три дня до и три дня после.</div>
        <div class="content-action-item">Оптовый заказ - при покупке 2 и более документов вы получаете скидку на 2000 рублей с каждого документа в заказе.</div>
        <div class="content-action-item">Для постоянных клиентов - повторное обращение с покупкой предоставляет скидку на 2000 рублей.</div>
      </div>
    </div>
  </section>';
}

function mw_faqhook_page_1666389871203() { 
    if(is_page ("936")){ 
    ?> 
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"1.Что такое единый реестр дипломов и существует ли он?","acceptedAnswer":[{"@type":"Answer","text":"На самом деле вся информация об обучаемых в институтах и университетах хранится в архивах учебных учреждений на бумажных носителях. А единый реестр дипломов по всем учебным заведениям России просто не существует."}]},{"@type":"Question","name":"2. Проверяют ли диплом при устройстве на работу работодатели?","acceptedAnswer":[{"@type":"Answer","text":"Для того, чтобы точно установить, обучались ли вы в институте, руководителю следует сделать письменный запрос в учреждение. Чаще всего такие вопросы отпадают сами собой и игнорируются, поскольку в Ваших знаниях не возникает сомнений. Поэтому, если Вы ценный сотрудник, то не стоит беспокоиться относительно того проверяют ли диплом при устройстве на работу."}]},{"@type":"Question","name":"3. Смогу ли я выбрать специальность, учебное заведение и предпочитаемые оценки? Можно ли исправить оценки в дипломе?","acceptedAnswer":[{"@type":"Answer","text":"Для ответа на вопрос можно ли исправить оценки в дипломе важно понимать следующее. При оформлении заявки в предлагаемой форме для заполнения Вы можете указать желаемые оценки, специальность и название института или университета."}]},{"@type":"Question","name":"4. Возможно ли изготовление дипломов государственного образца?","acceptedAnswer":[{"@type":"Answer","text":"Для наших специалистов изготовление дипломов государственного образца не является проблемой. Для изготовления понадобится просто предоставление скан копии желаемого документа."}]},{"@type":"Question","name":"5. Можно ли купить диплом о высшем образовании на будущее?","acceptedAnswer":[{"@type":"Answer","text":"Вы сможете купить диплом о высшем образовании с опережением примерно на год."}]},{"@type":"Question","name":"6. Если в Вашей компании купить диплом, гарантии каких видов Вы предоставляете по вопросам оплаты и доставки?","acceptedAnswer":[{"@type":"Answer","text":"Если Вы решили у нас купить диплом, гарантии следующего вида будут предоставлены. Мы наработали достаточную информационно – техническую базу и с удовольствием используем её для наших заказчиков, к тому же работаем без предоплаты, то есть Вы оплачиваете только по факту получения документа. По поводу доставки мы индивидуально подходим к пожеланиям клиентов и стараемся найти решение даже в нестандартных вопросах."}]},{"@type":"Question","name":"7. Какое время придется потратить на ожидание получения документа, если купить диплом с доставкой?","acceptedAnswer":[{"@type":"Answer","text":"Печать документа занимает примерно 2 дня, а в остальном все зависит от доставки. Естественно, что чем дальше Вы находитесь, тем дольше будет доставка. Если купить диплом с доставкой, то мы гарантируем доставку документа в максимально короткие сроки."}]},{"@type":"Question","name":"8. Как поступить, если я обнаружил опечатки в дипломе?","acceptedAnswer":[{"@type":"Answer","text":"В случае, если Вы обнаружите опечатки в дипломе, мы гарантируем исправление помарок, ошибок и опечаток в короткие сроки, при том Вы не потерпите никаких денежных затрат."}]},{"@type":"Question","name":"9. Прикладывается ли вкладыш с оценками к диплому?","acceptedAnswer":[{"@type":"Answer","text":"Вкладыш с оценками к диплому прикладывается вместе с основным документом, так как это неотъемлемая часть подлинного документа."}]},{"@type":"Question","name":"10. Можно ли самостоятельно выбрать темы дипломных работ по специальности?","acceptedAnswer":[{"@type":"Answer","text":"Наши специалисты способны выполнить любые пожелания клиента. Вы можете самостоятельно выбрать темы дипломных работ по специальности при отправке заявки на нашем сайте."}]},{"@type":"Question","name":"11. Сколько стоит заказать диплом на Вашем сайте?","acceptedAnswer":[{"@type":"Answer","text":"Вы можете узнать ответ на вопрос сколько стоит заказать диплом, оставив заявку на нашем сайте. Наши менеджеры оперативно свяжутся с Вами."}]},{"@type":"Question","name":"12. У Вас можно купить диплом любого города?","acceptedAnswer":[{"@type":"Answer","text":"Да, за многие года работы мы собрали большую базу по всем учебным заведениям России, поэтому у нас можно купить диплом любого города."}]},{"@type":"Question","name":"13. Как рассчитывается стоимость диплома о высшем образовании?","acceptedAnswer":[{"@type":"Answer","text":"Стоимость диплома о высшем образовании рассчитывается индивидуально и зависит от ряда параметров. Более подробную информацию Вы можете получить у наших менеджеров."}]},{"@type":"Question","name":"14. Какими способами можно оплатить диплом?","acceptedAnswer":[{"@type":"Answer","text":"Оплатить диплом можно как безналичным, так и наличным расчетом."}]},{"@type":"Question","name":"15. Ваша компания специализируется на изготовлении справок, документов, дипломов или у Вас есть и другие услуги?","acceptedAnswer":[{"@type":"Answer","text":"Да, основное направление нашей деятельности – это изготовление справок, документов, дипломов."}]}]}</script><!-- Generated by https://www.matthewwoodward.co.uk/ --> 
    <?php 
    } 
} 
add_action("wp_head", "mw_faqhook_page_1666389871203");


// Отключаем любые CSS стили плагинов
function custom_dequeue() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('astra-google-fonts');
    wp_dequeue_style('astra-theme-css');
    wp_dequeue_style('astra-contact-form-7');
    wp_dequeue_style('crp-style-rounded-thumbs');
    wp_dequeue_style('astra-addon-css');
    if ( is_page(58) ) {
		wp_dequeue_style( 'wpcdt-public-css' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );

//Отключаем любые js скрипты
// function project_dequeue_unnecessary_scripts() {
//     wp_dequeue_script('astra-theme-js');
//     wp_deregister_script('astra-theme-js');
//     wp_dequeue_script('astra-addon-js');
//     wp_deregister_script('astra-addon-js');
//     wp_dequeue_script('astra-addon-js-js-extra');
//     wp_deregister_script('astra-addon-js-js-extra');
//     wp_dequeue_script('hoverintent-js');
//     wp_deregister_script('hoverintent-js');
//     if ( is_page(58) ) {
// 		wp_dequeue_script( 'wpcdt-public-js' );
//         wp_dequeue_script( 'image_zoooom' );
//         wp_dequeue_script( 'image_zoooom-init' );
//         wp_dequeue_script( 'jquery-fancybox' );
// 	}
// }
// add_action( 'wp_print_scripts', 'project_dequeue_unnecessary_scripts', 9999 );


/**
 * Изменяет хлебные крошки Yoast.
 *
 * Вывести в шаблоне: do_action('pretty_breadcrumb');
 * https://wp-kama.ru/plugin/yoast/kak-izmenit-vyorstku-hlebnyh-kroshek-yoast-na-svoyu
 */
class Pretty_Breadcrumb
{

    /**
     * Какую позицию занимает элемент в цепочке хлебных крошек.
     *
     * @var int
     */
    private $el_position = 0;

    public function __construct()
    {
        add_action('pretty_breadcrumb', [$this, 'render']);
    }

    /**
     * Выводит на экран сгенерированные крошки.
     *
     * @return void
     */
    public function render()
    {
        if (!function_exists('yoast_breadcrumb')) {
            return;
        }

        // Регистрируем фильтры для изменения дефолтной вёрстки крошек
        add_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items'], 10, 2);
        add_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        add_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        add_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Выводим крошки на экран
        yoast_breadcrumb();

        // Отключаем фильтры
        remove_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items']);
        remove_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        remove_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        remove_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Обнуляем счётчик
        $this->el_position = 0;
    }

    /**
     * Изменяет html код li элементов.
     *
     * @param string $link_html Дефолтная вёрстка элемента хлебных крошек.
     * @param array $link_data Массив данных об элементе хлебных крошек.
     *
     * @return string
     */
    function modify_yoast_items($link_html, $link_data)
    {
        // Шаблон контейнера li
        $li = '<span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem" %s>%s</span>';

        // Содержимое li в зависимости от позиции элемента
        if (strpos($link_html, 'breadcrumb_last') === false) {
            $li_inner = sprintf('
                <a itemprop="item" href="%s" class="pathway">
                    <span itemprop="name">%s</span>
                </a>
            ', $link_data['url'], $link_data['text']);
            $li_inner .= '<span class="divider"> / </span>';
            $li_class = '';
        } else {
            $li_inner = sprintf('<span itemprop="name">%s</span>', $link_data['text']);
            $li_class = 'class="active"';
        }

        $li_inner .= sprintf('<meta itemprop="position" content="%d"/>', ++$this->el_position);

        // Вкладываем сформированное содержание в li и возвращаем полученный элемент хлебных крошек.
        return sprintf($li, $li_class, $li_inner);
    }

    /**
     * Возвращает псевдо wrapper, который в будущем будет вырезан из вёрстки.
     * Если этого не сделать, то будущие li будут обёртнуты в единый span Yoast'ом.
     *
     * @return string
     */
    function modify_yoast_wrapper()
    {
        return 'wrapper'; // Будущий "уникальный" тег для вырезки из html
    }

    /**
     * Изменяет дефолтный html код крошек Yoast.
     *
     * @param string $html
     *
     * @return string
     */
    function modify_yoast_output($html)
    {
        // Убираем псевдо wrapper
        $html = str_replace(['<wrapper>', '</wrapper>'], '', $html);

        // Формируем контейнер для li элементов
        $ul = '<nav itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList" class="breadcrumb site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix">%s</nav>';

        // Вставляем в контейнер li элменты
        $html = sprintf($ul, $html);

        return $html;
    }
}

new Pretty_Breadcrumb();
