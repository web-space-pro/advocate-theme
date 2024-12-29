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

<section class="welcome relative mt-4">
    <div class="md:mx-10 xl:py-6 mx-4 py-3 bg-black-400 rounded-2xl overflow-hidden relative">
        <div class="container xs:pb-0 pb-60">
            <div class="flex">
                <div class="xs:w-4/6 xl:py-20 md:py-10 w-full py-6  relative z-20">
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
                            <a class="btn btn-primary" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <?php if( isset($photo) && !empty($photo)): ?>
            <div class="md:top-2 md:right-10 md:-bottom-6 xl:right-16 z-10 absolute right-5 top-[59%] bottom-0">
                <figure class="w-full h-full">
                    <img class="w-full h-full object-cover" src="<?=$photo['url']?>" alt="<?= get_bloginfo(); ?>" width="<?=$photo['width']?>" height="<?=$photo['height']?>">
                </figure>
                <div class="rounded-full bg-accent w-72 h-[60%] absolute top-20 right-20 blur-[400px]"></div>
            </div>
            <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<canvas id="fogCanvas" class="hidden md:block opacity-1 absolute top-[30vh] right-0 left-0 z-[5] w-full"></canvas>
<canvas id="fogCanvasMobile" class="block md:hidden opacity-1 absolute top-[550px] right-0 left-0 z-[5] w-full !h-[300px]"></canvas>

