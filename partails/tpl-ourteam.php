<?php
if ( function_exists('get_field') ) {
    $title   = get_sub_field('title');
    $label   = get_sub_field('label');
    $persons = get_sub_field('persons');
}
?>
<section class="mt-4 bg-white-800 pt-10 pb-16">
    <div class="mx-4 md:mx-10">
        <div class="container relative">
            <div>
                <?php if(!empty($label)) : ?>
                    <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500">
                       <?=$label?>
                    </span>
                <?php endif; ?>
                <h2 class="md:text-4xl xl:text-[2.5rem] text-2xl  font-semibold leading-tight  text-accent *:text-black-700 *:block">
                    <?=$title?>
                </h2>
            </div>
            <?php if(!empty($persons)) : ?>
            <div class="xs:grid-cols-2 sm:grid-cols-4 md:mt-10 mt-10 mb-4 grid grid-cols-1 gap-6">
                <?php foreach( $persons as $person ): ?>
                <figure class="card group lg:p-6 p-3 rounded-lg border border-gray-800 relative z-0 cursor-pointer overflow-hidden">
                    <a href="http://dev-advocate.test/services/pomoshh-v-prohozhdenii-voenno-vrachebnoj-ekspertizy/" target="_self">
                        <div class="sm:w-auto sm:h-56 xl:h-64 h-64  m-auto rounded-lg overflow-hidden bg-gray-800">
                            <?php if(!empty($person['image'])) : ?>
                            <img class="w-full h-full object-cover object-top" src="<?=$person['image']['url']?>" alt="<?= get_bloginfo(); ?>" width="<?=$person['image']['width']?>" height="<?=$person['image']['height']?>">
                            <?php endif; ?>
                        </div>
                        <div class="pt-4">
                            <figcaption>
                                <div class="sm:text-base text-sm font-semibold  text-black-700 leading-tight">
                                   <?=$person['name']?>
                                </div>
                                <div class="sm:text-sm sm:mt-2  mt-1 text-xs font-normal text-gray-500 group-hover:text-white-800">
                                    <?=$person['experience']?>
                                </div>
                                <div class="flex bg-accent flex items-center justify-center absolute w-8 h-8 overflow-hidden top-0 right-0 rounded-br rounded-bl-3xl">
                                    <div class="text-white-800 -mt-1 -mr-1">
                                        →
                                    </div>
                                </div>
                            </figcaption>
                        </div>
                    </a>
                </figure>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
