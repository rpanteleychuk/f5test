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

                <div class="section-1 py-5"
                     style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center my-5">
                            <div class="col head-logo text-center">
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
                                <h2 class="text-center text-white text-uppercase main-heading-font"><?php the_sub_field('heading'); ?></h2>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col col-md-7">
                                <p class="text-white description-font"><?php the_sub_field('main_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'second_section'): ?>

                <div class="section-2 py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <h4 class="text-center second-section-heading-font"><?php the_sub_field('heading'); ?></h4>
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
                                    <a class="button-blue px-3 py-1" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h6 class="col-12 col-md-6 text-center second-section-subheading-font mb-0"><?php the_sub_field('sub_heading'); ?></h6>
                            <p class="col-12 col-md-9 text-center second-section-text-font"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'third_section'): ?>

                <div class="section-3 py-5"
                     style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center mb-5">
                            <div class="col">
                                <h3 class="heading-font text-white text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="col col-md-7">
                                <p class="text-white text-center third-section-subheading-font"><?php the_sub_field('sub_heading'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="third-section-item">
                                    <div class="min-height">
                                        <?php

                                        $image = get_sub_field('first_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline text-uppercase"><?php the_sub_field('first_item_heading'); ?></h6>
                                    </div>
                                    <p class="text-box text-justify"><?php the_sub_field('first_item_text'); ?></p>
                                    <p class="sub-text-box text-justify"><?php the_sub_field('first_item_subtext'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="third-section-item">
                                    <div class="min-height">
                                        <?php

                                        $image = get_sub_field('second_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline text-uppercase"><?php the_sub_field('second_item_heading'); ?></h6>
                                    </div>
                                    <p class="text-box text-justify"><?php the_sub_field('second_item_text'); ?></p>
                                    <p class="sub-text-box text-justify"><?php the_sub_field('second_item_subtext'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 my-2">
                                <div class="third-section-item">
                                    <div class="min-height">
                                        <?php

                                        $image = get_sub_field('third_image');

                                        if (!empty($image)): ?>

                                            <img class="img-fluid d-inline" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                        <h6 class="d-inline text-uppercase"><?php the_sub_field('third_item_heading'); ?></h6>
                                    </div>
                                    <p class="text-box text-justify"><?php the_sub_field('third_item_text'); ?></p>
                                    <p class="sub-text-box text-justify"><?php the_sub_field('third_item_subtext'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            elseif ($layout === 'fourth_section'): ?>

                <div class="section-4 py-5">
                    <div class="container">
                        <div class="row my-4">
                            <div class="col">
                                <h3 class="heading-font text-center text-uppercase heading-line"><?php the_sub_field('heading'); ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5 pb-3">
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


            <?php // layout_2
            elseif ($layout === 'layout_2'): ?>

                <div class="section-2">
                    <p><?php the_sub_field('sub_field_2'); ?></p>
                </div>


            <?php endif;

        endwhile;

    endif;

    ?>


</div>


<?php get_footer(); ?>


