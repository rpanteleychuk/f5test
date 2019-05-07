<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>
<?php get_header(); ?>


<div class="main-wrapper">
    <?php

    if( have_rows('home_page') ):

        while( have_rows('home_page') ) : the_row();


            $layout = get_row_layout();



            if( $layout === 'first_section' ): ?>

                <div class="section-1 py-5" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center my-5">
                            <div class="col-11 col-md-5 head-logo">
                                <?php

                                $image = get_sub_field('heading_logo');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col-11 col-md-6 pt-4">
                                <h2 class="text-center text-white text-uppercase main-heading-font"><?php the_sub_field('heading'); ?></h2>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col-11 col-md-7">
                                <p class="text-white description-font"><?php the_sub_field('main_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            elseif( $layout === 'second_section' ): ?>

                <div class="section-2 py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-6">
                                <h4 class="text-center"><?php the_sub_field('heading'); ?></h4>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-7 my-3 text-center">
                                <?php
                                $link = get_sub_field('button_link');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button-blue p-2" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h6 class="col-11 col-md-6 text-center"><?php the_sub_field('sub_heading'); ?></h6>
                            <p class="col-11 col-md-7 text-center"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>


            <?php // layout_2
            elseif( $layout === 'layout_2' ): ?>

                <div class="section-2">
                    <p><?php the_sub_field('sub_field_2'); ?></p>
                </div>

            <?php endif;

        endwhile;

    endif;

    ?>



</div>


<?php get_footer(); ?>


