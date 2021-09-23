<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naitre
 */

?>

	<footer id="footer" class="footer">
        <div class="footer__container main-container">
            <div class="footer__brend">
                <?php the_custom_logo();?>
                <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста</p>
                <div class="footer__callback button-stroke js-callback">
                    <span>обратный звонок</span>
                </div>
            </div>
            <nav id="footer__nav" class="footer__nav">
                <ul class="left-column">
                    <li><a href="#">Тренировки</a></li>
                    <li><a href="#">Расписание</a></li>
                    <li><a href="#">Методика</a></li>
                    <li><a href="#">Подписки</a></li>
                    <li><a href="#">Стать инвестором</a></li>
                    <li><a href="#">Миссия</a></li>
                    <li><a href="#">Блог</a></li>
                </ul>
                <ul class="right-column">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Политика возврата</a></li>
                    <li><a href="#">Партнерская программа</a></li>
                </ul>
            </nav>
<!--            <div class="footer__contacts">-->
<!--                <a href="tel:+7 (495) 748-97-38">+7 (495) 748-97-38</a>-->
<!--                <a href="mailto:NAITRE@GMAIL.COM">NAITRE@GMAIL.COM</a>-->
<!--                <a href="#">Instagram</a>-->
<!--                <a href="#">Vkontakte</a>-->
<!--                <a href="#">Facebook</a>-->
<!--                <a href="#">Telegram</a>-->
<!--            </div>-->
            <div class="footer__subscribe">
                <?php get_sidebar('newsletter'); ?>
            </div>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

<div class="popup-fade" style="display: none">
    <div class="popup-zapisatsa" style="display: none;">
        <div class="close-zapisatsa">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15.3867" y="4.89569" width="0.989092" height="14.8364" transform="rotate(45 15.3867 4.89569)" fill="#191919"/>
                <rect x="16.0859" y="15.3867" width="0.989092" height="14.8364" transform="rotate(135 16.0859 15.3867)" fill="#191919"/>
            </svg>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="97" title="Запись на тренировку"]')?>
    </div>
    <div class="popup-callback" style="display: none;">
        <div class="close-callback">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15.3867" y="4.89569" width="0.989092" height="14.8364" transform="rotate(45 15.3867 4.89569)" fill="#191919"/>
                <rect x="16.0859" y="15.3867" width="0.989092" height="14.8364" transform="rotate(135 16.0859 15.3867)" fill="#191919"/>
            </svg>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="98" title="Заказ обратного звонкка"]')?>
    </div>
    <div class="popup-try" style="display: none;">
        <div class="close-try">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15.3867" y="4.89569" width="0.989092" height="14.8364" transform="rotate(45 15.3867 4.89569)" fill="#191919"/>
                <rect x="16.0859" y="15.3867" width="0.989092" height="14.8364" transform="rotate(135 16.0859 15.3867)" fill="#191919"/>
            </svg>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="100" title="Попробовать бесплатно"]')?>
    </div>
    <div class="quize" style="display: none">
<!--        <div class="close-quize">-->
<!--            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                <rect x="15.3867" y="4.89569" width="0.989092" height="14.8364" transform="rotate(45 15.3867 4.89569)" fill="#191919"/>-->
<!--                <rect x="16.0859" y="15.3867" width="0.989092" height="14.8364" transform="rotate(135 16.0859 15.3867)" fill="#191919"/>-->
<!--            </svg>-->
<!--        </div>-->
        <div class="quize__container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="quize__item swiper-slide">
                        <div class="quize__quest">
                            <div class="design">
                                <img src="<?php echo get_template_directory_uri();?>/img/quize-design.png" alt="Элемент дизайна">
                            </div>
                            <h3 class="quize__quest-title">Какой Ваш уровень физической подготовленности?</h3>
                        </div>
                        <div class="quize__ansver" id="start-level">
                            <div class="counter">01</div>
                            <label class="">
                                <input type="radio" name="start-level" value="Начинающий" checked>
                                <span>Начинающий</span>
                            </label>
                            <label class="">
                                <input type="radio" name="start-level" value="Промежуточный">
                                <span>Промежуточный</span>
                            </label>
                            <label class="">
                                <input type="radio" name="start-level" value="Продвинутый">
                                <span>Продвинутый</span>
                            </label>
                        </div>
                    </div>
                    <div class="quize__item swiper-slide">
                        <div class="quize__quest">
                            <div class="design">
                                <img src="<?php echo get_template_directory_uri();?>/img/quize-design.png" alt="Элемент дизайна">
                            </div>
                            <h3 class="quize__quest-title">Какая у вас основная цель в фитнесе?</h3>
                        </div>
                        <div class="quize__ansver" id="cel">
                            <div class="counter">02</div>
                            <label class="">
                                <input type="radio" name="ineed" value="Получить силу" checked>
                                <span>Получить силу</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Общее оздоровление">
                                <span>Общее оздоровление</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Получить Dfrgrkgm">
                                <span>Получить Dfrgrkgm</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Получить тонирванные и подтянутые">
                                <span>Получить тонирванные и подтянутые</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Худеть">
                                <span>Худеть</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Для поддержании формы">
                                <span>Для поддержании формы</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Подготовка к важному
событию или поездке">
                                <span>Подготовка к важному
событию или поездке</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Востановление после травмы/хирургии">
                                <span>Востановление после травмы/хирургии</span>
                            </label>
                            <label class="">
                                <input type="radio" name="ineed" value="Модифицировать для беременности">
                                <span>Модифицировать для беременности</span>
                            </label>
                        </div>
                    </div>
                    <div class="quize__item swiper-slide last-slide">
                        <div class="last-slide__title">
                            Поздравляем!
                        </div>
                        <div class="last-slide__untitle">
                            опрос успешно завершен
                        </div>
                        <p>Введите свой e-mail, мы отправим ваш результат на почту</p>
                        <div class="last-slide__input">
                            <div class="mail-row">
                                <input type="email" class="quize-main" placeholder="Введите ваш e-mail" required>
                                <span class="error" style="display: none">E-mail заполнен неверно</span>
                            </div>

                            <label class="checked-row">
                                <input class="agree" type="checkbox" required>
                                <span>Согласие с политикой конфеденциальности</span>
                                <span class="agree-error" style="display: none">Необходимо принять согласие</span>
                            </label>
                            <div class="get-result">Получить результаты</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quize__navigation">
                <div class="prev">
                    < Предидущий вопрос
                </div>
                <div class="next">
                    Следующий вопрос >
                </div>
            </div>
            <!--            <div class="main-banner__controls">-->
            <!--                <span class="start">01</span>-->
            <!--                <div class="pagination"></div>-->
            <!--                <span class="last">02</span>-->
            <!--            </div>-->
            <div class="hidden" style="display: none">
                <?php echo do_shortcode('[contact-form-7 id="106" title="Опрос"]')?>
            </div>
        </div>
</div>

</div>
</body>s
</html>
