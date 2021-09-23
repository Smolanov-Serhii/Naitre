<?php

/**
 * Template Name: Главная
 *
 */
get_header();
$post_id = get_the_ID();
?>
    <section class="main-banner" data-aos="zoom-in">
        <div class="main-banner__play">
            <svg width="156" height="156" viewBox="0 0 156 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="78" cy="78" r="60.5" stroke="#F6E04F" stroke-width="3"/>
                <circle cx="78" cy="78" r="77.5" stroke="#F6E04F"/>
                <path d="M55.4951 78.1441C55.4951 69.4601 55.4668 60.7761 55.4951 52.0921C55.514 45.9878 58.8402 44.0318 64.0941 47.0556C79.2321 55.7585 94.3511 64.4803 109.47 73.221C114.648 76.2165 114.677 80.2892 109.536 83.2657C94.3322 92.0537 79.1187 100.832 63.8957 109.582C58.9725 112.417 55.5329 110.452 55.5046 104.801C55.4668 95.909 55.4951 87.0266 55.4951 78.1441Z" fill="#F6E04F"/>
            </svg>
        </div>
        <div class="main-banner__design">
            <img src="<?php echo get_template_directory_uri();?>/img/perf.png" alt="Элемент дизайна">
        </div>
        <div class="main-banner__container padding-left swiper-container">
            <div class="main-banner__swiper swiper-wrapper">
                <?php
                    $counter = 0;
                    if( have_rows('verhnij_slajder', $post_id) ):
                        while( have_rows('verhnij_slajder', $post_id) ) : the_row();
                            $untitle = get_sub_field('nadzagolovok_dlya_slajda');
                            $title = get_sub_field('zagolovok_dlya_slajda');
                            $desc = get_sub_field('opisanie_dlya_slajda');
                            $vertimg = get_sub_field('kartinka_vertikalnaya');
                            $leftimg = get_sub_field('pervaya_kartinka');
                            $leffimgtext = get_sub_field('nadpis_na_pervoj_katrinte');
                            $rightimg = get_sub_field('vtoraya_kartinka');
                            $button = get_sub_field('nadpis_na_knopke');
                            ?>
                                <div class="main-banner__slide swiper-slide">
                                    <div class="main-banner__left">
                                        <div class="vert-img">
                                            <img src="<?php echo $vertimg;?>">
                                        </div>
                                        <div class="untitle">
                                            <?php echo $untitle;?>
                                        </div>
                                        <div class="title">
                                            <?php echo $title;?>
                                        </div>
                                        <div class="undertitle">
                                            <?php echo $desc;?>
                                        </div>
                                    </div>
                                    <div class="main-banner__right">
                                        <div class="left-img">
                                            <img src="<?php echo $leftimg;?>">
                                            <span class="img-text"><?php echo $leffimgtext;?></span>
                                        </div>
                                        <div class="right-img">
                                            <img src="<?php echo $rightimg;?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $counter++;
                        endwhile;
                    endif;
                ?>
            </div>
            <div class="main-banner__controls">
                <span class="start">
                    01
                </span>
                <div class="pagination">

                </div>
                <span class="last">
                    <?php if($counter<10){
                        echo "0";
                    };
                    echo $counter;?>
                </span>
            </div>
        </div>
    </section>
    <section class="video" style="display: none" id="video">
        <div class="video__container main-container">
            <div class="video__list">
                <a href="https://drive.google.com/file/d/1yCyEzwfv5lPfZJM3K7vbvGRaotEdBm9q/view?usp=sharing" class="video__item">
                    <img src="<?php echo get_template_directory_uri();?>/img/1.jpg" alt="Элемент дизайна">
                </a>
                <a href="https://drive.google.com/file/d/1VzS1dVYW9T-eWERuCxqvHjX4JzzWKqUc/view?usp=sharing" class="video__item">
                    <img src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt="Элемент дизайна">
                </a>
                <a href="https://drive.google.com/file/d/1GkwzpyQ8Z5KxOuHVmnWIt087f4EgQMQk/view?usp=sharing" class="video__item">
                    <img src="<?php echo get_template_directory_uri();?>/img/3.jpg" alt="Элемент дизайна">
                </a>
            </div>
        </div>
    </section>
    <section class="text-block" id="text-block">
        <div class="text-block__design">
            <img src="<?php echo get_template_directory_uri();?>/img/perf.png" alt="Элемент дизайна">
        </div>
        <div class="text-block__header main-container">
            <h2 class="text-block__title" data-aos="fade-right">
                <?php echo the_field("zagolovok_dlya_bloka", $post_id)?>
            </h2>
            <div class="text-block__desc" data-aos="fade-left">
                <p><?php echo the_field("opisanie_dlya_bloka", $post_id)?></p>
                <div class="text-block__buttons">
<!--                    <a href="#" class="button-bg"><span>Наша методика</span></a>-->
                    <div class="downloads">
                        <a href="#" class="isDisabled">
                            <img src="<?php echo get_template_directory_uri();?>/img/gp.jpg" alt="Google Play Market">
                        </a>
                        <a href="#" class="isDisabled" ">
                            <img src="<?php echo get_template_directory_uri();?>/img/as.jpg" alt="AppStore">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-block__img main-container" data-aos="fade-up">
            <img src='<?php echo the_field("kartinka_dlya_fona_nadpisi", $post_id)?>'/>
        </div>
    </section>
    <section class="trenings" id="trenings">
        <div class="trenings__container main-container">
            <div class="trenings__list">
                <?php
                $counter = 1;
                if( have_rows('perechen_vidov', $post_id) ):
                    while( have_rows('perechen_vidov', $post_id) ) : the_row();
                        $image = get_sub_field('ikonka_dlya_vida');
                        $title = get_sub_field('zagolovok_dlya_vida');
                        $desc = get_sub_field('opisanie_dlya_vida');
                        ?>
                            <div class="trenings__item" data-aos="fade-up">
                                    <img class="design" src="<?php echo get_template_directory_uri();?>/img/tren-item-img.png" alt="<?php echo $title;?>">
                                <div class="trenings__item-header">
                                    <div class="container">
                                        <img src="<?php echo $image;?>" alt="<?php echo $desc;?>">
                                    </div>
                                </div>
                                <div class="trenings__item-content">
                                    <h3 class="trenings__item-title">
                                        <?php echo $title;?>
                                    </h3>
                                    <div class="trenings__item-content">
                                        <p><?php echo $desc;?></p>
                                    </div>
                                    <span class="trenings__item-counter">
                                        0<?php echo $counter;?>
                                    </span>
                                </div>
                            </div>
                        <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="trenings__bottom main-container" style="background-image: url(<?php the_field("kartinka_dlya_fona_nizhnego_bloka", $post_id)?>)">
            <div class="trenings__title" data-aos="fade-up-right">
                <?php echo the_field("zagolovok_dlya_bloka_vid_trenirovki", $post_id)?>
            </div>
            <div class="trenings__desc" data-aos="fade-up-left">
                <?php echo the_field("opisanie_dlya_bloka_vid_trenirovki", $post_id)?>
            </div>
        </div>
    </section>
    <section class="organization" id="organization">
        <div class="organization__container main-container">
            <div class="organization__img" data-aos="fade-right">
                <img src="<?php echo the_field("kartinka_dlya_bloka_organizacziya", $post_id)?>" alt="<?php echo the_field("zagolovok_organizacziya", $post_id)?>">
            </div>
            <div class="organization__content" data-aos="fade-left">
                <h2 class="organization__title">
                    <?php echo the_field("zagolovok_organizacziya", $post_id)?>
                </h2>
                <div class="organization__desc">
                    <?php echo the_field("opisanie_organizacziya", $post_id)?>
                </div>
<!--                <div class="organization__button">-->
<!--                    <a href="#" class="button-bg"><span>Наша методика</span></a>-->
<!--                </div>-->
            </div>
        </div>
    </section>
    <section class="best" id="best">
        <div class="best__container  main-container" data-aos="fade-up">
            <h2 class="best__title">
                <?php echo the_field("zagolovok_luchshie_sistemy", $post_id)?>
            </h2>
            <div class="best__list">
                <div class="best__item best__item-image">
                    <img src="<?php echo the_field("kartinka_dlya_sistemy", $post_id)?>" alt="<?php echo the_field("zagolovok_luchshie_sistemy", $post_id)?>">
                </div>
                <?php
                if( have_rows('perechen_sistem', $post_id) ):
                    while( have_rows('perechen_sistem', $post_id) ) : the_row();
                        $title = get_sub_field('zagolovok_sistemy');
                        $about = get_sub_field('opisanie_sistemy');
                        $tip = get_sub_field('tip_trenirovki');
                        ?>
                        <div class="best__item">
                            <div class="best__item-title">
                                <?php echo $title;?>
                            </div>
                            <div class="best__item-about">
                                <?php echo $about;?>
                            </div>
                            <div class="best__item-tip">
                                <?php echo $tip;?>
                            </div>
                            <div class="best__item-button button-stroke js-zapisatsia"><span>записаться</span></div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="create" id="create">
        <div class="create__container padding-right">
            <div class="create__content">
                <h2 class="create__title padding-left" data-aos="fade-up-right">
                    <?php echo the_field("zagolovok_bloka_sozdali", $post_id)?>
                </h2>
                <div class="create__desc padding-left" data-aos="fade-up-right">
                    <?php echo the_field("opisanie_bloka_sozdali", $post_id)?>
                </div>
                <div class="create__look padding-left" data-aos="fade-up-right">
                    <?php echo the_field("yakor_bloka_sozdali", $post_id)?>
                </div>
                <div class="create__why padding-left" data-aos="fade-up-right">
                    <?php echo the_field("poyasnenie_bloka_sozdali", $post_id)?>
                </div>
            </div>
            <div class="create__img" data-aos="fade-up-left">
                <img src="<?php echo the_field("kartinka_dlya_bloka_sozdali", $post_id)?>" alt="<?php echo the_field("zagolovok_bloka_sozdali", $post_id)?>">
            </div>
        </div>
    </section>


<?php get_footer(); ?>

