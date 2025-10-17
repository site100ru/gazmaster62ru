		<!-- Contacts -->
		<div id="contacts-sp" class="scroll-point"></div>
		<section class="contacts-section">
		    <div class="container py-5">
		        <div class="row align-items-center justify-content-center">
		            <div class="col py-2">
		                <nav class="navbar navbar-expand-xl navbar-dark py-3">
		                    <a class="navbar-brand" href="#">
		                        <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png">
		                    </a>
		                    <div class="collapse navbar-collapse" id="navbarSupportedContent3">
		                        <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
		                    </div>
		                </nav>
		            </div>
		        </div>

		        <div class="row justify-content-center">
		            <div class="col-xxl-9">
		                <nav id="top-menu-4" class="navbar navbar-expand-xl navbar-light py-1 pb-3">
		                    <ul id="navbarSupportedContent4" class="navbar-nav m-xl-auto mb-2 mb-lg-0 align-items-xl-center" style="padding-left: 0;">

		                        <!-- Адрес -->
		                        <?php if (get_theme_mod('mytheme_address')) : ?>
		                            <li class="nav-item me-5">
		                                <span class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png" class="me-2"><?php echo get_theme_mod('mytheme_address'); ?></span>
		                            </li>
		                        <?php endif; ?>

		                        <!-- Время работы -->
		                        <?php if (get_theme_mod('mytheme_job_time')) : ?>
		                            <li class="nav-item me-5">
		                                <div class="row align-items-center">
		                                    <div class="col-2">
		                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png" style="position: relative; right: -8px;">
		                                    </div>
		                                    <div class="col-10">
		                                        <span class="nav-link" style="line-height: 20px;"><?php echo get_theme_mod('mytheme_job_time'); ?></span>
		                                    </div>
		                                </div>
		                            </li>
		                        <?php endif; ?>

		                        <!-- Email -->
		                        <?php if (get_theme_mod('mytheme_email')) : ?>
		                            <li class="nav-item me-5">
		                                <a href="mailto:<?php echo get_theme_mod('mytheme_email'); ?>" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png" class="me-2"><?php echo get_theme_mod('mytheme_email'); ?></a>
		                            </li>
		                        <?php endif; ?>

		                        <!-- Основной номер телефона -->
		                        <?php if (get_theme_mod('mytheme_main_phone_number')) : ?>
		                            <li class="nav-item me-5">
		                                <a href="tel:<?php echo get_theme_mod('mytheme_main_phone_country_code');
                                                        echo get_theme_mod('mytheme_main_phone_region_code');
                                                        echo str_replace(array('-'), '', get_theme_mod('mytheme_main_phone_number')); ?>" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico.png" class="me-2"><?php echo get_theme_mod('mytheme_main_phone_country_code'); ?> (<?php echo get_theme_mod('mytheme_main_phone_region_code'); ?>) <?php echo get_theme_mod('mytheme_main_phone_number'); ?></a>
		                            </li>
		                        <?php endif; ?>



		                        <!--li class="nav-item me-5">
									<span class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png" class="me-2">Рязань</span>
								</li>
								<li class="nav-item me-5">
									<div class="row align-items-center">
										<div class="col-2 col-md-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
										</div>
										<div class="col-10 col-md-10">
											<span class="nav-link" style="line-height: 20px;">Пн. - Пт.<br>с 8:00 до 20:00</span>
										</div>
									</div>
								</li>
								<li class="nav-item me-5">
									<a href="mailto:mail@mail.ru" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png" class="me-2">mail@mail.ru</a>
								</li>
								<li class="nav-item me-5">
									<a href="tel:88008808088" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico.png" class="me-2">8 (800) 880-80-88</a>
								</li-->

		                    </ul>
		                </nav>
		            </div>
		        </div>
		        <div class="row justify-content-center pt-3">
		            <div class="col-xl-8">
		                <ul class="nav justify-content-xl-center mb-2 mb-lg-0">

		                    <!-- Whatsapp -->
		                    <?php if (get_theme_mod('mytheme_whatsapp')) : ?>
		                        <li class="nav-item">
		                            <a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod('mytheme_whatsapp'); ?>" target="_blank">
		                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png">
		                            </a>
		                        </li>
		                    <?php endif; ?>

		                    <!-- Telegram -->
		                    <?php if (get_theme_mod('mytheme_telegram')) : ?>
		                        <li class="nav-item">
		                            <a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod('mytheme_telegram'); ?>" target="_blank">
		                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png">
		                            </a>
		                        </li>
		                    <?php endif; ?>

		                    <!-- Vkontakte -->
		                    <?php if (get_theme_mod('mytheme_vk')) : ?>
		                        <li class="nav-item">
		                            <a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod('mytheme_vk'); ?>" target="_blank">
		                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png">
		                            </a>
		                        </li>
		                    <?php endif; ?>


		                    <!--li class="nav-item">
								<a class="nav-link ico-button px-0" href="whatsapp://send?phone=+78008808088"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="tg://resolve?domain=elansky_dmitry"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
							</li-->

		                </ul>
		            </div>
		        </div>

		        <!-- Mobail -->
		        <div class="col-lg-8 pt-4 pt-lg-2">
		            <div class="row d-lg-none justify-content-center">
		                <div class="col-6 left-col-footer-menu">
		                    <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-left',
                                'container' => false,
                                'menu_class' => 'navbar-nav ms-auto mb-lg-0',
                                'fallback_cb' => '__return_false',
                                'depth' => 1,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
		                </div>
		                <div class="col-6 right-col-footer-menu">
		                    <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-right',
                                'container' => false,
                                'menu_class' => 'navbar-nav ms-auto mb-lg-0',
                                'fallback_cb' => '__return_false',
                                'depth' => 1,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
		                </div>
		            </div>
		        </div>
		        <!-- End Mobail -->
		    </div>

		    <footer>
		        <div class="container">
		            <div class="row">
		                <div class="col text-center py-2">
		                    <div id="company-in-footer">©<?php echo date('Y'); ?> ООО «Орион» | ИНН 6229039979</div>
		                    <div id="im-in-footer">Создание и продвижение сайтов: <a href="https://site100.ru" class="text-light">site100.ru</a></div>
		                </div>
		            </div>
		        </div>
		    </footer>
		</section>
		<!-- /Contacts -->


		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $_SESSION['display']; ?>;" onclick="modalClose();">
		    <div id="background-msg" style="display: <?php echo $_SESSION['display']; ?>;"></div>
		    <button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();" style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
		    <div id="message">
		        <?php echo $_SESSION['recaptcha'];
                unset($_SESSION['recaptcha']); ?>
		    </div>
		</div>


		<!-- Order Modal -->
		<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-dialog-centered">
		        <form id="order-form" class="protected-form modal-content" method="post" action="<?php echo get_template_directory_uri(); ?>/mails/order-mail.php">
		            <div class="modal-header">
		                <h2 class="modal-title fs-4" id="orderModalLabel">Расчет сметы или вызов инженера</h2>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col">
		                        <p>Оставьте Ваши контакты мы с Вами свяжемся в ближайшее время.</p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-6 mb-3 mb-md-0">
		                        <input type="text" name="user_name" class="form-control" placeholder="Ваше имя*" required />
		                    </div>
		                    <div class="col-md-6">
		                        <input type="tel" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required />
		                    </div>
		                </div>

		                <!-- Honeypot -->
		                <div style="position: absolute; left: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
		                    <input type="text" name="name" tabindex="-1" autocomplete="new-password" value="" />
		                </div>

		                <!-- Timestamp -->
		                <input type="hidden" name="form_timestamp" value="" />
		            </div>
		            <div class="modal-footer">
		                <div>
		                    <div class="form-check">
		                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
		                        <label class="form-check-label" for="gridCheck">
		                            <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
		                        </label>
		                    </div>
		                </div>
		                <button type="submit" class="btn btn-corporate-color-1 mx-auto">Записаться</button>
		            </div>
		        </form>
		    </div>
		</div>
		<!-- /Order Modal -->

		<!-- Сначала конфиг -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/form-config.js"></script>

		<!-- Общий файл защиты формы -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/form-protection.js"></script>

		<!-- Dounloads Bootstrap Bundle with Popper -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>


		<!-- jQuery -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>


		<!-- Main scripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


		<!-- API Yandex Map -->
		<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
		<script type="text/javascript">
		    // Функция ymaps.ready() будет вызвана, когда
		    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
		    ymaps.ready(init);
		    /* На разную ширину экрана разное приближение карты */
		    var screenWidth = document.documentElement.clientWidth;
		    if (screenWidth > 1000) {
		        var zoom = 14;
		    } else {
		        var zoom = 14;
		    }

		    function init() {
		        // Создание карты.
		        var myMap = new ymaps.Map("map", {
		            // Координаты центра карты.
		            // Порядок по умолчанию: «широта, долгота».
		            // Чтобы не определять координаты центра карты вручную,
		            // воспользуйтесь инструментом Определение координат.
		            center: [54.61639276736776, 39.74378499500765], // Map center
		            // Уровень масштабирования. Допустимые значения:
		            // от 0 (весь мир) до 19.
		            zoom: zoom
		        });
		        var myPlacemark = new ymaps.Placemark([54.61639276736776, 39.74378499500765], {}, {
		            iconLayout: 'default#image',
		            iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/placemark.png',
		            iconImageSize: [50, 62],
		            iconImageOffset: [-25, -31]
		        });
		        myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
		        //myMap.behaviors.disable('multiTouch'); // Disable zoom
		        //myMap.behaviors.disable('drag'); // Disable drag
		        myMap.geoObjects.add(myPlacemark);
		    }
		</script>





		<!-- Галерея -->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">

		    <div id="gallery-1" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;" data-interval="false" data-bs-interval="999999999">
		        <div class="carousel-indicators">
		            <button id="ind-1-1" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-1" data-bs-slide-to="0" aria-label="Slide 1"></button>
		            <button id="ind-1-2" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
		        </div>
		        <div class="carousel-inner h-100">
		            <div id="item-1-1" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		            <div id="item-1-2" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		        </div>
		        <button class="carousel-control-prev" type="button" data-bs-target="#gallery-1" data-bs-slide="prev">
		            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Previous</span>
		        </button>
		        <button class="carousel-control-next" type="button" data-bs-target="#gallery-1" data-bs-slide="next">
		            <span class="carousel-control-next-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Next</span>
		        </button>
		        <button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		    </div>

		    <div id="gallery-2" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;" data-interval="false" data-bs-interval="999999999">
		        <div class="carousel-indicators">
		            <button id="ind-2-1" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-2" data-bs-slide-to="0" aria-label="Slide 1"></button>
		            <button id="ind-2-2" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
		        </div>
		        <div class="carousel-inner h-100">
		            <div id="item-2-1" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		            <div id="item-2-2" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-3.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		        </div>
		        <button class="carousel-control-prev" type="button" data-bs-target="#gallery-2" data-bs-slide="prev">
		            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Previous</span>
		        </button>
		        <button class="carousel-control-next" type="button" data-bs-target="#gallery-2" data-bs-slide="next">
		            <span class="carousel-control-next-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Next</span>
		        </button>
		        <button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		    </div>

		    <div id="gallery-3" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;" data-interval="false" data-bs-interval="999999999">
		        <div class="carousel-indicators">
		            <button id="ind-3-1" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-3" data-bs-slide-to="0" aria-label="Slide 1"></button>
		            <button id="ind-3-2" class="carouselIndicator carouselIndicatorClass" type="button" data-bs-target="#gallery-3" data-bs-slide-to="1" aria-label="Slide 2"></button>
		        </div>
		        <div class="carousel-inner h-100">
		            <div id="item-3-1" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-3.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		            <div id="item-3-2" class="carousel-item carouselItemClass h-100">
		                <div class="row align-items-center h-100">
		                    <div class="col text-center">
		                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
		                    </div>
		                </div>
		            </div>
		        </div>
		        <button class="carousel-control-prev" type="button" data-bs-target="#gallery-3" data-bs-slide="prev">
		            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Previous</span>
		        </button>
		        <button class="carousel-control-next" type="button" data-bs-target="#gallery-3" data-bs-slide="next">
		            <span class="carousel-control-next-icon" aria-hidden="true"></span>
		            <span class="visually-hidden">Next</span>
		        </button>
		        <button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		    </div>
		</div>

		<script>
		    /* Функция открытия галереи */
		    function galleryOn(gal, img) {
		        let gallery = gal; // Получаем ID галереи
		        let image = img; // Получаем ID картинки

		        // Открываем обертку галереи
		        document.getElementById('galleryWrapper').style.display = 'block';

		        // Открываем галерею
		        switch (gallery) {
		            case 'gal-1':
		                document.getElementById("gallery-1").style.display = "block";
		                // Открываем изображения
		                switch (image) {
		                    case 'img-1-1':
		                        document.getElementById("item-1-1").classList.add("active");
		                        document.getElementById("ind-1-1").classList.add("active");
		                        break;
		                    case 'img-1-2':
		                        document.getElementById("item-1-2").classList.add("active");
		                        document.getElementById("ind-1-2").classList.add("active");
		                        break;
		                }
		                break;
		            case 'gal-2':
		                document.getElementById("gallery-2").style.display = "block";
		                switch (image) {
		                    case 'img-2-1':
		                        document.getElementById("item-2-1").classList.add("active");
		                        document.getElementById("ind-2-1").classList.add("active");
		                        break;
		                    case 'img-2-2':
		                        document.getElementById("item-2-2").classList.add("active");
		                        document.getElementById("ind-2-2").classList.add("active");
		                        break;
		                }
		                break;
		            case 'gal-3':
		                document.getElementById("gallery-3").style.display = "block";
		                switch (image) {
		                    case 'img-3-1':
		                        document.getElementById("item-3-1").classList.add("active");
		                        document.getElementById("ind-3-1").classList.add("active");
		                        break;
		                    case 'img-3-2':
		                        document.getElementById("item-3-2").classList.add("active");
		                        document.getElementById("ind-3-2").classList.add("active");
		                        break;
		                }
		                break;
		        }
		    }

		    // Кнопка закрытия галереи
		    function closeGallery() {
		        // Закрываем обертку галереи
		        document.getElementById('galleryWrapper').style.display = 'none';

		        /* Закрываем все галереи */
		        document.getElementById("gallery-1").style.display = "none";
		        document.getElementById("gallery-2").style.display = "none";
		        document.getElementById("gallery-3").style.display = "none";

		        /* Закрываем все изображения
		        document.getElementById("img-1-1").classList.remove("active");
		        document.getElementById("img-1-2").classList.remove("active");
		        document.getElementById("img-2-1").classList.remove("active");
		        document.getElementById("img-2-2").classList.remove("active");
		        document.getElementById("img-3-1").classList.remove("active");
		        document.getElementById("img-3-2").classList.remove("active"); */

		        /* Закрываем все индикаторы
		        document.getElementById("ind-1-1").classList.remove("active");	
		        document.getElementById("ind-1-2").classList.remove("active");
		        document.getElementById("ind-2-1").classList.remove("active");
		        document.getElementById("ind-2-2").classList.remove("active");
		        document.getElementById("ind-3-1").classList.remove("active");
		        document.getElementById("ind-3-1").classList.remove("active"); */


		        // All classes active delete
		        // Другой вариант закрыть все активные изображения и индикаторы
		        // Необходимо добавить классы к изображениям и индикаторам
		        var elements = document.getElementsByClassName("carouselItemClass");
		        for (var i = 0; i < elements.length; i++) {
		            elements[i].classList.remove("active");
		        }
		        var elements2 = document.getElementsByClassName("carouselIndicatorClass");
		        for (var i = 0; i < elements2.length; i++) {
		            elements2[i].classList.remove("active");
		        }
		    }
		</script>


		<!-- Загрузка изображений с приоритетом
		<script>
			if ('loading' in HTMLImageElement.prototype) {
				const images = document.querySelectorAll('img[loading="lazy"]');
				images.forEach(img => {
					img.src = img.dataset.src;
				});
			} else {
				// Dynamically import the LazySizes library
				const script = document.createElement('script');
				script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js';
				document.body.appendChild(script);
			}
		</script> -->

		<!-- Всплывающая форма Политики конфиденциальности -->
		<div class="popup-form" id="popupForm">
		    <div class="form-content container p-0">
		        <div class="row justify-content-center align-items-center">
		            <div class="col-md-9">
		                <p class="mb-md-0">
		                    На нашем сайте используются cookie-файлы, в том числе сервисов
		                    веб-аналитики. Используя сайт, вы соглашаетесь на
		                    <a
		                        href="<?php echo get_template_directory_uri(); ?>/docs/Consent-to-the-processing-of-personal-data.pdf"
		                        target="blank">обработку персональных данных</a>
		                    при помощи cookie-файлов. Подробнее об обработке персональных данных вы
		                    можете узнать в
		                    <a
		                        href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf"
		                        target="blank">Политике конфиденциальности.</a>
		                </p>
		            </div>
		            <div class="col-md-3 text-md-center">
		                <button id="closeBtn" class="btn btn-lg btn-corporate-color-1">Понятно</button>
		            </div>
		        </div>
		    </div>
		</div>

		<script>
		    document.addEventListener('DOMContentLoaded', function() {
		        // ========== НАСТРОЙКИ POPUP ==========
		        // Время через которое popup появится снова (в часах)
		        const POPUP_DELAY_HOURS = 1;

		        // Задержка показа popup при загрузке страницы (в секундах)
		        const POPUP_SHOW_DELAY = 3;

		        // ========== ВЫЧИСЛЯЕМЫЕ ЗНАЧЕНИЯ ==========
		        // Переводим часы в миллисекунды для внутренних вычислений
		        const POPUP_DELAY_MS = POPUP_DELAY_HOURS * 60 * 60 * 1000;
		        const POPUP_SHOW_DELAY_MS = POPUP_SHOW_DELAY * 1000;
		        // =====================================

		        const popupForm = document.getElementById('popupForm');
		        const closeBtn = document.getElementById('closeBtn');

		        // Проверяем нужно ли показывать форму
		        function shouldShowPopup() {
		            const lastClosed = localStorage.getItem('popupLastClosed');

		            // Если пользователь никогда не закрывал форму
		            if (!lastClosed) return true;

		            // Если прошло более установленного времени с последнего закрытия
		            const now = new Date().getTime();
		            return now - parseInt(lastClosed) > POPUP_DELAY_MS;
		        }

		        // Показываем форму если нужно
		        if (shouldShowPopup()) {
		            setTimeout(() => {
		                popupForm.classList.add('active');
		            }, POPUP_SHOW_DELAY_MS);
		        }

		        // Функция закрытия формы
		        function closePopup() {
		            popupForm.classList.remove('active');

		            // Сохраняем время закрытия
		            localStorage.setItem('popupLastClosed', new Date().getTime().toString());
		        }

		        // Закрытие по кнопке
		        closeBtn.addEventListener('click', closePopup);
		    });
		</script>
		<!-- /Всплывающая форма Политики конфиденциальности -->

		<!-- Callback button HTML -->
		<div class="callback-button-wrapper">
		    <div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		        <div id="btnIco" class="callback-button-ico"></div>
		    </div>

		    <div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		        <a data-bs-toggle="modal" data-bs-target="#callbackModal">
		            <div class="callback-form-button-ico"></div>
		        </a>
		    </div>
		    <div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		        <a href="tel:84993900100">
		            <div class="callback-phone-button-ico"></div>
		        </a>
		    </div>
		    <div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		        <!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
				<a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
		        <!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
		        <?php if (get_theme_mod('mytheme_whatsapp')) : ?>
		            <a href="<?php echo get_theme_mod('mytheme_whatsapp'); ?>" target="blank">
		                <div class="callback-whatsapp-button-ico"></div>
		            </a>
		        <?php endif; ?>
		        <!-- Еще варианты -->
		        <!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
		        <!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
		    </div>

		    <!-- Telegram -->
		    <?php if (get_theme_mod('mytheme_telegram')) : ?>
		        <div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
		            <a href="<?php echo get_theme_mod('mytheme_telegram'); ?>">
		                <div class="callback-telegram-button-ico"></div>
		            </a>
		        </div>
		    <?php endif; ?>

		</div>
		<!-- /Callback button HTML -->

		<!-- Callback button JS -->
		<script>
		    function callbackButtonClick() {

		        let formBtn = document.getElementById('formBtn').style.top;


		        if (formBtn == "0px" || formBtn == 0) {
		            document.getElementById('callbackBtn').style.animation = "none";
		            document.getElementById('btnIco').style.animation = "change2 linear .5s";
		            document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
		            document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";

		            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
		            document.getElementById('btnIco').style.transform = "rotate(180deg)";


		            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
		            document.getElementById('btnIco').style.backgroundPosition = "center";
		            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

		            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
		            document.getElementById('btnIco').style.backgroundSize = "cover";


		            document.getElementById('formBtn').style.top = "-60px";
		            document.getElementById('formBtn').style.opacity = "1";

		            document.getElementById('phoneBtn').style.top = "-120px";
		            document.getElementById('phoneBtn').style.opacity = "1";

		            document.getElementById('whatsappBtn').style.top = "-180px";
		            document.getElementById('whatsappBtn').style.opacity = "1";

		            document.getElementById('telegramBtn').style.top = "-240px";
		            document.getElementById('telegramBtn').style.opacity = "1";
		        } else {
		            document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
		            document.getElementById('btnIco').style.animation = "change linear 16s infinite";
		            document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";
		            document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
		            document.getElementById('btnIco').style.transform = "rotate(180deg)";
		            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
		            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
		            document.getElementById('btnIco').style.backgroundPosition = "center";
		            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

		            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
		            document.getElementById('btnIco').style.backgroundSize = "cover";


		            document.getElementById('formBtn').style.top = "0px";
		            document.getElementById('formBtn').style.opacity = "0";

		            document.getElementById('phoneBtn').style.top = "0px";
		            document.getElementById('phoneBtn').style.opacity = "0";

		            document.getElementById('whatsappBtn').style.top = "0px";
		            document.getElementById('whatsappBtn').style.opacity = "0";

		            document.getElementById('telegramBtn').style.top = "0px";
		            document.getElementById('telegramBtn').style.opacity = "0";
		        }
		    }
		</script>
		<!-- /Callback button JS -->

		<!-- Callback Modal -->
		<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-dialog-centered">
		        <form id="callback-modal-form" class="protected-form modal-content" method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php">
		            <div class="modal-header">
		                <h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col">
		                        <p><small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-6 mb-3 mb-md-0">
		                        <input type="text" name="user_name" class="form-control" placeholder="Ваше имя*" required>
		                    </div>
		                    <div class="col-md-6">
		                        <input type="tel" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required />
		                    </div>
		                </div>

		                <!-- Honeypot -->
		                <div style="position: absolute; left: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
		                    <input type="text" name="name" tabindex="-1" autocomplete="new-password" value="" />
		                </div>

		                <!-- Timestamp -->
		                <input type="hidden" name="form_timestamp" value="" />
		            </div>
		            <div class="modal-footer">
		                <div>
		                    <div class="form-check">
		                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
		                        <label class="form-check-label" for="gridCheck">
		                            <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
		                        </label>
		                    </div>
		                </div>
		                <input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
		                <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
		            </div>
		        </form>
		    </div>
		</div>
		<!-- /Callback Modal -->

        <!-- Telephone number mask -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
		    var im = new Inputmask("+7 (999) 999-99-99");
		    document.querySelectorAll(".telMask").forEach(function(el) {
		        im.mask(el);
		    });
		</script>

		</body>

		</html>