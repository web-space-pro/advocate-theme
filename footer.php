<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advocate-theme
 */

?>
    </main>

<?php
if (function_exists('get_field')) {
    $copyright_head = get_field('op_copyright_head', 'options');
    $copyright = get_field('op_copyright_footer', 'options');
    $develop = get_field('op_develop_footer', 'options');
    $developLink = get_field('op_developlink_footer', 'options');
}
?>
	<footer class="site-footer my-6">
        <div class="bg-black-400 rounded-2xl mx-4 md:mx-10 py-4 md:py-6">
            <div class="container">
                <div class="flex flex-wrap items-center">
                    <div class="xs:w-5/12 md:w-5/12 xs:order-none order-2 w-full">
                        <div class="md:text-sm md:pr-5 xs:py-0 py-3 pr-0 text-gray-500 text-xs font-normal leading-tight">
                            <p class="text-white-900"><?=$copyright_head?></p>
                            <?=$copyright?>
                        </div>
                    </div>
                    <div class="xs:w-7/12 md:w-5/12 xs:order-none order-1 w-full">
                        <nav class="xs:text-base flex justify-center text-sm font-semibold text-white-900 leading-tight" role="navigation">
                            <?php footer_nav(); ?>
                        </nav>
                    </div>
                    <div class="md:w-2/12 xs:order-none order-3 w-full">
                        <div class="text-white-900 text-sm font-normal leading-tight text-center md:text-right">
                            <h4> <?=$develop?></h4>
                            <a class="text-accent underline hover:no-underline" href="<?=$developLink['url']?>" target="_blank"><?=$developLink['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
