<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package advocate-theme
 */

get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
    if ( have_rows('components' )  ) :
        while( have_rows('components') )
        {
            the_row();
            $layout = get_row_layout();
            $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "partails" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";
            if( file_exists( $inclusion ) )
            {
                include( $inclusion );
            }
        }
    else:
        ?>
        <section class="mt-10">
            <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
                <div class="container">
                    <?php
                    get_template_part( 'template-parts/content', get_post_type() );

                    //                      the_post_navigation(
                    //                                            array(
                    //                                                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'advocate-theme' ) . '</span> <span class="nav-title">%title</span>',
                    //                                                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'advocate-theme' ) . '</span> <span class="nav-title">%title</span>',
                    //                                            )
                    //                     );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                      //  comments_template();
                    endif;
                    ?>
                </div>
            </div>
        </section>
    <?php
    endif;
endwhile;
?>
<?php
//get_sidebar();
get_footer();
