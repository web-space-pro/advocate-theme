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
        <div class="container">
            <div class="flex">
                <div class="xs:w-4/6 xl:py-20 md:py-10 w-full py-6  relative z-20">
                    <?php if(!empty($label)) : ?>
                    <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500"><?=$label;?></span>
                    <?php endif; ?>
                    <div class="sm:mb-8 mb-4">
                        <h1 class="md:text-5xl xl:text-[3.5rem] text-3xl text-accent font-semibold leading-none"><?= $title;?></h1>
                        <p class="md:text-4xl xl:text-[3.5rem] text-2xl mt-1 text-white-800 font-semibold leading-none"><?=$subtitle;?></p>
                    </div>
                    <div class="md:text-base md:mb-8 text-sm font-normal text-gray-400 w-80 mb-1">
                        <?=$description;?>
                    </div>
                    <?php if( isset($link) && !empty($link['url'])): ?>
                        <div class="xs:block sm:text-left text-center hidden">
                            <a class="btn btn-primary" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( isset($photo) && !empty($photo)): ?>
            <div class="xs:absolute xs:top-2 xs:right-10 xs:-bottom-6 xl:right-16 z-10 relative right-auto top-auto bottom-auto">
                <figure class="xs:w-[95%] xs:ml-auto w-3/6 m-auto h-full">
                    <img class="w-full xl:h-auto h-full object-cover" src="<?=$photo['url']?>" alt="<?= get_bloginfo(); ?>" width="<?=$photo['width']?>" height="<?=$photo['height']?>">
                </figure>
                <div class="rounded-full bg-accent w-72 h-[60%] absolute top-20 right-20 blur-[400px] -z-10"></div>
                <?php if( isset($link) && !empty($link['url'])): ?>
                    <div class="xs:hidden text-center mb-4">
                        <a class="btn btn-primary" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            </div>

        </div>
    </div>
    <canvas id="fogCanvasMobile" class="block xs:h-0 xs:hidden opacity-1 absolute -bottom-24 right-0 left-0 z-[5] w-full h-[370px] pointer-events-none"></canvas>
    <canvas id="fogCanvas" class="hidden xs:block xs:h-[340px] xl:h-[600px] lg:h-[400px] h-0 opacity-1 absolute -bottom-[17%] right-0 left-0 z-[5] w-full"></canvas>
</section>

