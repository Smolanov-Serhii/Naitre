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

<div class="popup-fade" style="display: none;">
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
</div>

</body>
</html>
