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

            // get layout
            $layout = get_row_layout();


            // layout_1
            if( $layout === 'first_section' ): ?>

                <div class="section-1" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-5 head-logo">
                                <?php

                                $image = get_sub_field('heading_logo');

                                if (!empty($image)): ?>

                                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-5">
                                <h2 class="text-center text-white text-uppercase"><?php the_sub_field('heading'); ?></h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-7">
                                <p class="text-white"><?php the_sub_field('main_text'); ?></p>
                            </div>
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



    <div class="section-1">
        <div class="container">привет</div>
    </div>





</div>


<?php get_footer(); ?>


