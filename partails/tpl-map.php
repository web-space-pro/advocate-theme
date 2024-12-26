<?php
if ( function_exists('get_field') ) {
    $show_map  = get_sub_field('show_map');
}
?>
<?php if($show_map): ?>
    <section class="mt-4">
    <div class="bg-black-400 relative rounded-2xl overflow-hidden mx-4 md:mx-10">
        <div class="md:h-[30rem] h-[20rem] w-full" id="map"></div>
    </div>
</section>
<?php endif; ?>
