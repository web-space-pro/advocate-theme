<?php
if ( function_exists('get_field') ) {
    $title   = get_sub_field('title');
    $label   = get_sub_field('label');
    $text = get_sub_field('text');
    $experience = get_sub_field('experience');
    $ceo_name = get_sub_field('ceo_name');
    $ceo_title = get_sub_field('ceo_title');
    $ceo_photo = get_sub_field('ceo_photo');
}
?>

<section class="mt-10" id="abautus">
    <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="lg:w-3/6 w-full">
                    <?php if(!empty($label)) : ?>
                        <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500">
                       <?=$label?>
                    </span>
                    <?php endif; ?>
                    <h2 class="md:text-4xl xl:text-[2.5rem] text-2xl  font-semibold leading-tight  text-accent *:text-white-800 *:block">
                        <?=$title?>
                    </h2>
                    <div class="sm:mt-8 mt-6 text-base text-gray-400 *:mb-4">
                        <?=$text?>
                    </div>
                    <?php if(!empty($experience)) : ?>
                    <div class="sm:mt-8 sm:grid-cols-3 lg:gap-6 mb-6 mt-6 grid grid-cols-1 gap-3">
                        <?php foreach( $experience as $e ): ?>
                        <div class="px-5 relative py-4 rounded-2xl bg-black-500 flex flex-col self-stretch justify-between z-[1] transition-all ease-in-out duration-300 hover:scale-105">
                            <h4 class="md:text-2xl text-xl text-accent font-semibold"><?=$e['title']?></h4>
                            <p class="text-xs text-white-800"><?=$e['text']?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if(!empty($ceo_photo)) : ?>
                <div class="lg:w-3/6 w-full">
                    <div class="lg:absolute lg:right-0 lg:bottom-0 lg:h-auto  h-96 ">
                        <figure class="w-full h-full">
                            <img class="lg:object-cover w-full h-full object-contain" src="<?=$ceo_photo['url']?>" alt="<?= get_bloginfo(); ?>" width="<?=$ceo_photo['width']?>" height="<?=$ceo_photo['height']?>">
                        </figure>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(!empty($ceo_name)) : ?>
                <div class="w-full relative">
                    <div class="lg:-mt-36 lg:mb-0 flex lg:justify-end justify-center">
                        <div>
                            <div class="w-72 px-5 py-4 rounded-2xl bg-white-800 flex flex-col self-stretch justify-between">
                                <h4 class="md:text-2xl text-xl text-black-600 font-semibold"><?=$ceo_name?></h4>
                                <p class="text-base text-gray-500 mt-2"><?=$ceo_title?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
