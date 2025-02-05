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

    $email = get_field('op_email', 'options');
    $address = get_field('op_address', 'options');
    $phone = get_field('op_phone', 'options');
    $phone_two = get_field('op_phone_two', 'options');
    $contact_title = get_field('op_contact_title', 'options');
    $doc_title = get_field('op_documents_title', 'options');
    $con_label = get_field('cp_contact_label', 'options');
    $ceo_label = get_field('cp_contact_ceo', 'options');
    $documents = get_field('cp_documents_list', 'options');



}
?>
    <section id="contacts" class="mt-4">
        <div class="mx-4 md:py-10 md:mx-10 py-5">
        <div class="container">
            <div class="md:flex-row flex flex-col-reverse flex-wrap">
                <div class="md:w-4/12 w-full">
                    <h3 class="md:pt-0 md:mb-10 md:text-4xl xl:text-[2.5rem] pt-7 mb-5 text-2xl  font-semibold leading-tight  text-white-800">
                        <?php if(!empty($contact_title)) : ?>
                            <?=$contact_title?>
                        <?php endif; ?>
                    </h3>
                    <div class="mb-4">
                        <?php if(!empty($phone)) : ?>
                            <a class="md:text-2xl text-xl text-accent font-semibold" href="tel:<?=$phone?>" target="_blank">
                                <?=$phone?>
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($con_label)) : ?>
                            <span class="block text-xs text-gray-500"><?=$con_label?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4">
                        <?php if(!empty($phone_two)) : ?>
                            <a class="md:text-2xl text-xl text-accent font-semibold" href="tel:<?=$phone_two?>" target="_blank"><?=$phone_two?></a>
                        <?php endif; ?>
                        <?php if(!empty($ceo_label)) : ?>
                            <span class="block text-xs text-gray-500"><?=$ceo_label?></span>
                        <?php endif; ?>
                    </div>

                    <div class="mt-6 mb-1.5">
                        <?php if(!empty($email)) : ?>
                            <a class="text-base text-white-800" href="mailto:<?=$email?>">
                                <svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.7266 10.3073C18.8359 10.2292 19 10.3073 19 10.4375V15.75C19 16.4531 18.3984 17 17.6875 17H6.3125C5.57422 17 5 16.4531 5 15.75V10.4375C5 10.3073 5.13672 10.2292 5.24609 10.3073C5.875 10.776 6.66797 11.349 9.45703 13.276C10.0312 13.6667 11.0156 14.526 12 14.526C12.957 14.526 13.9688 13.6667 14.5156 13.276C17.3047 11.349 18.0977 10.776 18.7266 10.3073ZM12 13.6667C11.3438 13.6927 10.4414 12.9115 9.97656 12.599C6.33984 10.099 6.06641 9.86458 5.24609 9.23958C5.08203 9.13542 5 8.95312 5 8.74479V8.25C5 7.57292 5.57422 7 6.3125 7H17.6875C18.3984 7 19 7.57292 19 8.25V8.74479C19 8.95312 18.8906 9.13542 18.7266 9.23958C17.9062 9.86458 17.6328 10.099 13.9961 12.599C13.5312 12.9115 12.6289 13.6927 12 13.6667Z" fill="#808080" />
                                </svg>
                                <?=$email?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="mb-1.5 pr-20">
                        <div class="text-base text-white-800 flex">
                            <div class="md:w-12 w-7">
                                <svg class="w-6  inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.375 19.6722C6.8125 13.1161 6 12.4293 6 9.99415C6 6.68488 8.65625 4 12 4C15.3125 4 18 6.68488 18 9.99415C18 12.4293 17.1562 13.1161 12.5938 19.6722C12.3125 20.1093 11.6562 20.1093 11.375 19.6722ZM12 12.4917C13.375 12.4917 14.5 11.399 14.5 9.99415C14.5 8.62049 13.375 7.49659 12 7.49659C10.5938 7.49659 9.5 8.62049 9.5 9.99415C9.5 11.399 10.5938 12.4917 12 12.4917Z" fill="#808080" />
                                </svg>
                            </div>
                            <?php if(!empty($address)) : ?>
                                <p><?=$address?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="md:w-8/12 w-full">
                    <?php if(!empty($doc_title)) : ?>
                        <h3 class="md:mb-10 md:text-4xl xl:text-[2.5rem] mb-5 text-2xl  font-semibold leading-tight  text-white-800">
                            <?=$doc_title?>
                        </h3>
                    <?php endif; ?>


                    <?php if(!empty($documents)) : ?>
                    <div class="xs:grid-cols-3 md:grid-cols-4 *:text-xs *:underline *:text-gray-400 grid grid-cols-2 gap-x-6 gap-y-4">
                      <?php foreach( $documents as $d ): ?>
                        <a href="<?=$d['link']['url']?>" target="_blank"><?=$d['link']['title']?></a>
                      <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </section>

	<footer class="site-footer my-6">
        <div class="bg-black-400 rounded-2xl mx-4 md:mx-10 py-4 md:py-6">
            <div class="container">
                <div class="flex flex-wrap items-center">
                    <div class="xs:w-5/12 md:w-5/12 xs:order-none order-2 w-full">
                        <div class="md:text-sm md:pr-5 xs:py-0 py-3 pr-0 text-gray-500 text-xs font-normal leading-tight">
                            <?php if(!empty($copyright_head)) : ?>
                                <p class="text-white-900"><?=$copyright_head?></p>
                            <?php endif; ?>
                            <?php if(!empty($copyright)) : ?>
                                <?=$copyright?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="xs:w-7/12 md:w-5/12 xs:order-none order-1 w-full">
                        <nav class="xs:text-base flex justify-center text-sm font-semibold text-white-900 leading-tight" role="navigation">
                            <?php footer_nav(); ?>
                        </nav>
                    </div>
                    <div class="md:w-2/12 xs:order-none order-3 w-full">
                        <div class="text-white-900 text-sm font-normal leading-tight text-center md:text-right">
                            <?php if(!empty($develop)) : ?>
                                <h4> <?=$develop?></h4>
                            <?php endif; ?>
                            <?php if(!empty($developLink)) : ?>
                                <a class="text-accent underline hover:no-underline" href="<?=$developLink['url']?>" target="_blank"><?=$developLink['title']?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
