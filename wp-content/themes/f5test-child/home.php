<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>
<?php get_header(); ?>


<div class="main-wrapper">
    <?php

    if (have_rows('home_page')):

        while (have_rows('home_page')) : the_row();


            $layout = get_row_layout();


            if ($layout === 'first_section'): ?>

                <div id="welcome" class="section-one py-5"
                     style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center my-5">
                            <div class="col text-center">
                                <?php

                                $image = get_sub_field('heading_logo');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col pt-4">
                                <h2 class="text-center text-white text-uppercase section-one__heading"><?php the_sub_field('heading'); ?></h2>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col col-md-7">
                                <p class="text-white section-one__description"><?php the_sub_field('main_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'second_section'): ?>

                <div class="section-two py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <h4 class="text-center section-two__heading"><?php the_sub_field('heading'); ?></h4>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col my-4 text-center">
                                <?php
                                $link = get_sub_field('button_link');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="section-two__button px-3 py-1" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h6 class="col-12 col-md-6 text-center section-two__subheading mb-0"><?php the_sub_field('sub_heading'); ?></h6>
                            <p class="col-12 col-md-9 text-center section-two__description"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'third_section'): ?>

                <div id="who-choose-us" class="section-three py-5"
                     style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center mb-3 mb-md-5">
                            <div class="col">
                                <h3 class="section-three__heading text-white text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col col-md-7">
                                <p class="text-white text-center third-section-subheading-font"><?php the_sub_field('sub_heading'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="section-three__item">
                                    <div>
                                        <?php

                                        $image = get_sub_field('first_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline section-three__item-heading text-uppercase"><?php the_sub_field('first_item_heading'); ?></h6>
                                    </div>
                                    <p class="section-three__item-text text-justify"><?php the_sub_field('first_item_text'); ?></p>
                                    <p class="section-three__item-sub-text text-justify"><?php the_sub_field('first_item_subtext'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="section-three__item">
                                    <div>
                                        <?php

                                        $image = get_sub_field('second_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline section-three__item-heading text-uppercase"><?php the_sub_field('second_item_heading'); ?></h6>
                                    </div>
                                    <p class="section-three__item-text text-justify"><?php the_sub_field('second_item_text'); ?></p>
                                    <p class="section-three__item-sub-text text-justify"><?php the_sub_field('second_item_subtext'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="section-three__item">
                                    <div>
                                        <?php

                                        $image = get_sub_field('third_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline section-three__item-heading text-uppercase"><?php the_sub_field('third_item_heading'); ?></h6>
                                    </div>
                                    <p class="section-three__item-text text-justify"><?php the_sub_field('third_item_text'); ?></p>
                                    <p class="section-three__item-sub-text text-justify"><?php the_sub_field('third_item_subtext'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'fourth_section'): ?>

                <div id="the-l-d-difference" class="section-4 py-5">
                    <div class="container">
                        <div class="row justify-content-center mb-3 mb-md-5">
                            <div class="col">
                                <h3 class="heading-font text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-3 pb-3">
                                <h4><span><?php the_sub_field('first_article_header'); ?></span></h4>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p><?php the_sub_field('first_article_paragraph_one'); ?></p>
                                <p><?php the_sub_field('first_article_paragraph_two'); ?></p>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php

                                $image = get_sub_field('first_article_image');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5 pb-3">
                                <h4><span><?php the_sub_field('second_article_header'); ?></span></h4>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php

                                $image = get_sub_field('second_article_image');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p><?php the_sub_field('second_article_paragraph_one'); ?></p>
                                <p><?php the_sub_field('second_second_article_paragraph_two'); ?></p>
                                <p class="text-bold"><?php the_sub_field('second_article_sub_header'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5 pb-3">
                                <h4><span><?php the_sub_field('third_article_header'); ?></span></h4>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p><?php the_sub_field('third_article_paragraph_one'); ?></p>
                                <p class="text-bold"><?php the_sub_field('third_article_sub_header'); ?></p>
                                <p><?php the_sub_field('third_article_paragraph_two'); ?></p>
                                <p><?php the_sub_field('third_article_paragraph_three'); ?></p>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php

                                $image = get_sub_field('third_article_image');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5 pb-3">
                                <h4><span><?php the_sub_field('fourth_article_header'); ?></span></h4>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php

                                $image = get_sub_field('fourth_article_image');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p class="text-bold"><?php the_sub_field('fourth_article_sub_header'); ?></p>
                                <p><?php the_sub_field('fourth_article_paragraph_one'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5 pb-3">
                                <h4><span><?php the_sub_field('fifth_article_header'); ?></span></h4>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p><?php the_sub_field('fifth_article_paragraph_one'); ?></p>
                                <p><?php the_sub_field('fifth_article_paragraph_two'); ?></p>
                                <ul>
                                    <?php if (have_rows('fifth_article_list')): ?>

                                        <?php while (have_rows('fifth_article_list')): the_row();

                                            // vars

                                            $list = get_sub_field('list_item');

                                            ?>
                                            <li class="answer-font text-grey"><?php echo $list; ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </ul>
                                <p><?php the_sub_field('fifth_article_paragraph_three'); ?></p>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php

                                $image = get_sub_field('fifth_article_image');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            elseif ($layout === 'fifth_section'): ?>

                <div id="client-reviews" class="section-5 py-5" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container-fluid">
                        <div class="row justify-content-center mb-3 mb-md-5">
                            <div class="col">
                                <h3 class="heading-font text-white text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <?php $posts = get_posts ("orderby=rand&category=4&numberposts=2"); ?>
                                        <?php if ($posts) : ?>
                                            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                                <div class="col-12 col-md-4 mt-3 mt-md-0">
                                                    <div class="custom-post">
                                                        <div class="row">
                                                            <h6 class="col text-center"><span><?php the_title(); ?></span></h6>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x"></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-center"><?php the_content(); ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x fa-pull-right"></div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <?php $posts = get_posts ("orderby=rand&category=4&numberposts=2"); ?>
                                        <?php if ($posts) : ?>
                                            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                                <div class="col-12 col-md-4 mt-3 mt-md-0">
                                                    <div class="custom-post">
                                                        <div class="row">
                                                            <h6 class="col text-center"><span><?php the_title(); ?></span></h6>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x"></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-center"><?php the_content(); ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x fa-pull-right"></div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <?php $posts = get_posts ("orderby=rand&category=4&numberposts=2"); ?>
                                        <?php if ($posts) : ?>
                                            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                                <div class="col-12 col-md-4 mt-3 mt-md-0">
                                                    <div class="custom-post">
                                                        <div class="row">
                                                            <h6 class="col text-center"><span><?php the_title(); ?></span></h6>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x"></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-center"><?php the_content(); ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="fas fa-quote-right fa-2x fa-pull-right"></div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            <?php
            elseif ($layout === 'sixth_section'): ?>

                <div id="lean-supply-chain" class="section-6 py-5">
                    <div class="container">
                        <div class="row justify-content-center mb-1 mb-md-3">
                            <div class="col">
                                <h3 class="heading-font text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <?php $posts = get_posts ("category=5&numberposts=4"); ?>
                            <?php if ($posts) : ?>
                                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-3">
                                        <div class="custom-post text-center text-lg-left">
                                            <a href="<?php echo get_permalink(); ?>"><?php the_content(); ?></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>



            <?php
            elseif ($layout === 'seventh_section'): ?>

                <div id="get-quote" class="section-7 py-5">
                    <div class="container">
                        <div class="row justify-content-center mb-1 mb-md-3">
                            <div class="col">
                                <h3 class="heading-font text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col col-md-8">
                                <h6 class="text-center"><?php the_sub_field('subheading'); ?></h6>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col col-md-8 col-lg-5">
                                <div class="form">
                                    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endif;

        endwhile;

    endif;

    ?>


</div>


<?php get_footer(); ?>


