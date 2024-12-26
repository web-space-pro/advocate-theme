<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package advocate-theme
 */

get_header();
?>
    <section class="mt-10">
        <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
            <div class="container">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'advocate-theme' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'advocate-theme' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </section>

<?php
//get_sidebar();
get_footer();
