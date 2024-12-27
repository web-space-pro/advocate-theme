<?php
if ( function_exists('get_field') ) {
    $show_block  = get_sub_field('show');
}
?>

<?php if($show_block): ?>

<section class="xs:pt-16 mt-4 bg-white-800 pt-8 pb-6">
    <div class="mx-4 md:mx-10">
        <div class="container relative">
            <div class="md:*:mb-10 text-gray-600 text-base md:text-xl *:mb-5">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
