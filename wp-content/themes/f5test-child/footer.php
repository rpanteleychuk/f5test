<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package f5test
 */

?>

	</div>

	<footer id="colophon" class="site-footer">
            <?php

            if( have_rows('home_page') ):

                while( have_rows('home_page') ) : the_row();


                    $layout = get_row_layout();



                    if( $layout === 'footer' ): ?>

                        <div class="footer-content">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <p class="text-center"><?php the_sub_field('heading'); ?></p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-6 text-center">
                                        <?php
                                        $link = get_sub_field('link');
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
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <p class="text-center"><?php the_sub_field('copyright'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endif;

                endwhile;

            endif;

            ?>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
