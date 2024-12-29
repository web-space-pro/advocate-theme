<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package advocate-theme
 */

get_header();
?>

    <section class="error-404 not-found text-center min-h-[440px] py-3 flex items-center">
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <h1 class="text-8xl sm:text-9xl leading-none uppercase opacity-5 font-black">404</h1>
                    <h2 class="uppercase text-2xl sm:text-3xl font-extrabold text-white-900">Упс! Эта страница не найдена.</h2>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
