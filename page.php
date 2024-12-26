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

<?php if (function_exists(have_posts()) ): ?>
        <?php while ( have_posts() ) : the_post() ; ?>
            <?php if ( have_rows('components' )  ) :
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
            else: ?>
                <section class="componentInfo">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="componentInfo__box">
                                    <p>Вы не создали не одного блока! Перейдите в редактор страницы для добавление нового блока!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif;
        endwhile; ?>
<?php  else: ?>
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

<?php endif; ?>
<?php
//get_sidebar();
get_footer();
