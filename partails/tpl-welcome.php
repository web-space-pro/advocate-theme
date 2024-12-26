<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $subtitle  = get_sub_field('subtitle');
    $label  = get_sub_field('label');
    $description = get_sub_field('text');
    $link  = get_sub_field('link');
    $photo  = get_sub_field('image');
}
?>

<section class="relative mt-4">
    <div class="md:mx-10 xl:py-6 mx-4 py-3 bg-black-400 rounded-2xl">
        <div class="container">
            <div class="flex">
                <div class="md:w-4/6 xl:py-20 md:py-10 w-full py-6  relative z-10">
                    <?php if(!empty($label)) : ?>
                    <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500"><?=$label;?></span>
                    <?php endif; ?>
                    <div class="sm:mb-8 mb-4">
                        <h1 class="md:text-5xl xl:text-[3.5rem] text-3xl text-accent font-semibold leading-none"><?= $title;?></h1>
                        <p class="md:text-4xl xl:text-[3.5rem] text-2xl mt-1 text-white-800 font-semibold leading-none"><?=$subtitle;?></p>
                    </div>
                    <div class="md:text-base text-sm font-normal text-gray-400 w-80 mb-8">
                        <?=$description;?>
                    </div>
                    <?php if( isset($link) && !empty($link['url'])): ?>
                        <div class="sm:text-left text-center">
                            <a class="btn btn-primary" href="<?=$link['url'];?> target="<?=$link['target'];?>><?=$link['title'];?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <?php if( isset($photo) && !empty($photo)): ?>
            <div class="sm:right-5 md:right-10 xl:right-16 absolute -right-16 -top-2 -bottom-6">
                <figure class="w-full h-full">
                    <img class="w-full h-full object-cover" src="<?=$photo['url']?>" alt="<?= get_bloginfo(); ?>" width="<?=$photo['width']?>" height="<?=$photo['height']?>">
                </figure>
            </div>
            <?php endif; ?>
            <div id="canvass"></div>
        </div>
    </div>
</section>