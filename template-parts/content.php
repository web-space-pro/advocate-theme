<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package advocate-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="md:w-7/12 w-full px-4 ">
                <div class="sm:mb-8 mb-4 w-[95%]">
                    <h1 class="md:text-5xl xl:text-[2.5rem] text-3xl text-white-800 font-semibold leading-none">
                        <?= the_title() ?>
                    </h1>
                </div>
                <?php if(!empty($description)) : ?>
                    <div class="md:text-base text-sm font-normal text-gray-400 w-5/6 mb-8">
                        <?=$description;?>
                    </div>
                <?php endif; ?>
                <?php if( isset($link) && !empty($link['url'])): ?>
                    <div class="sm:text-left text-center">
                        <a class="btn btn-primary" href="<?=$link['url'];?> target="<?=$link['target'];?>><?=$link['title'];?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="md:w-5/12 w-full px-4">
                <figure class="w-full max-h-[25rem] bg-black-400 rounded-2xl overflow-hidden">
                    <?php advocate_theme_post_thumbnail(); ?>
                </figure>
            </div>
        </div>
    </div>
    <div class="container mt-10">
        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'advocate-theme' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

//            wp_link_pages(
//                array(
//                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'advocate-theme' ),
//                    'after'  => '</div>',
//                )
//            );
            ?>
        </div>

        <footer class="entry-footer">
            <?php advocate_theme_entry_footer(); ?>
        </footer>
    </div>
</article>
