<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package advocate-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mt-6'); ?>>
    <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
        <div class="container">
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <?php advocate_theme_post_thumbnail(); ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'advocate-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>
        </div>
    </div>
</article>
