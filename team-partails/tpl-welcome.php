<?php
if ( function_exists('get_field') ) {
    $description = get_sub_field('text');
    $link  = get_sub_field('link');
    $title  = get_sub_field('title');
    $experience  = get_sub_field('experience');
}
?>

<section class="relative mt-4">
    <div class="md:mx-10 md:py-10 xl:py-16 mx-4 py-8 bg-black-400 rounded-2xl">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="xs:w-8/12 md:w-7/12 w-full px-4 ">
                    <?php if(!empty($experience)) : ?>
                        <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500">
                       <?=$experience?>
                    </span>
                    <?php endif; ?>
                    <div class="sm:mb-8 mb-4 w-[95%]">
                        <h1 class="md:text-5xl xl:text-[3.5rem] text-3xl text-white-800 font-semibold leading-none *:text-accent *:block">
                            <?php if( !empty($title)): ?>
                                <?=$title?>
                            <?php else:?>
                                <?= the_title() ?>
                            <?php endif;?>
                        </h1>
                    </div>
                    <?php if(!empty($description)) : ?>
                        <div class="xs:w-5/6 md:text-base text-sm font-normal text-gray-400 mb-8">
                            <?=$description;?>
                        </div>
                    <?php endif; ?>
                    <?php if( isset($link) && !empty($link['url'])): ?>
                        <div class="xs:inline-block xs:text-left text-center hidden">
                            <a class="btn btn-primary" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="xs:w-4/12 md:w-5/12 w-full px-4">
                    <figure class="w-full max-h-[25rem] bg-black-400 rounded-2xl overflow-hidden">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
