<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package advocate-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mt-6'); ?>>
    <div class="bg-black-400 relative rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
        <div class="container">
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <?php advocate_theme_post_thumbnail(); ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'advocate-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>
        </div>
    </div>
</article>

<section class="mt-4">
    <div class="bg-black-400 relative rounded-2xl overflow-hidden mx-4 md:mx-10">
        <div class="md:h-[30rem] h-[20rem] w-full" id="map"></div>
    </div>
</section>

<section class="mt-4">
    <div class="mx-4 md:py-10 md:mx-10 py-5">
        <div class="container">
            <div class="md:flex-row flex flex-col-reverse flex-wrap">
                <div class="md:w-4/12 w-full">
                    <h3 class="md:pt-0 md:mb-10 md:text-4xl xl:text-[2.5rem] pt-7 mb-5 text-2xl  font-semibold leading-tight  text-white-800">
                        Контакты
                    </h3>
                    <div class="mb-4">
                        <a class="md:text-2xl text-xl text-accent font-semibold" href="#">
                            +7 918 009 92 97
                        </a>
                        <span class="block text-xs text-gray-500">По всем вопросам</span>
                    </div>
                    <div class="mb-4">
                        <a class="md:text-2xl text-xl text-accent font-semibold" href="#">+7 989 851 54 25</a>
                        <span class="block text-xs text-gray-500">Руководитель Минченкова Инесса Евгеньевна</span>
                    </div>

                    <div class="mt-6 mb-1.5">
                        <a class="text-base text-white-800" href="mailto"kr.filial76@mail.ru>
                            <svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7266 10.3073C18.8359 10.2292 19 10.3073 19 10.4375V15.75C19 16.4531 18.3984 17 17.6875 17H6.3125C5.57422 17 5 16.4531 5 15.75V10.4375C5 10.3073 5.13672 10.2292 5.24609 10.3073C5.875 10.776 6.66797 11.349 9.45703 13.276C10.0312 13.6667 11.0156 14.526 12 14.526C12.957 14.526 13.9688 13.6667 14.5156 13.276C17.3047 11.349 18.0977 10.776 18.7266 10.3073ZM12 13.6667C11.3438 13.6927 10.4414 12.9115 9.97656 12.599C6.33984 10.099 6.06641 9.86458 5.24609 9.23958C5.08203 9.13542 5 8.95312 5 8.74479V8.25C5 7.57292 5.57422 7 6.3125 7H17.6875C18.3984 7 19 7.57292 19 8.25V8.74479C19 8.95312 18.8906 9.13542 18.7266 9.23958C17.9062 9.86458 17.6328 10.099 13.9961 12.599C13.5312 12.9115 12.6289 13.6927 12 13.6667Z" fill="#808080" />
                            </svg>
                            kr.filial76@mail.ru
                        </a>
                    </div>
                    <div class="mb-1.5 pr-20">
                        <div class="text-base text-white-800 flex">
                            <div class="md:w-12 w-7">
                                <svg class="w-6  inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.375 19.6722C6.8125 13.1161 6 12.4293 6 9.99415C6 6.68488 8.65625 4 12 4C15.3125 4 18 6.68488 18 9.99415C18 12.4293 17.1562 13.1161 12.5938 19.6722C12.3125 20.1093 11.6562 20.1093 11.375 19.6722ZM12 12.4917C13.375 12.4917 14.5 11.399 14.5 9.99415C14.5 8.62049 13.375 7.49659 12 7.49659C10.5938 7.49659 9.5 8.62049 9.5 9.99415C9.5 11.399 10.5938 12.4917 12 12.4917Z" fill="#808080" />
                                </svg>
                            </div>
                            <p class="">Краснодар, улица им. Володи Головатого 294, офис 106</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-8/12 w-full">
                    <h3 class="md:mb-10 md:text-4xl xl:text-[2.5rem] mb-5 text-2xl  font-semibold leading-tight  text-white-800">
                        Документы
                    </h3>
                    <div class="xs:grid-cols-3 md:grid-cols-4 *:text-xs *:underline *:text-gray-400 grid grid-cols-2 gap-x-6 gap-y-4">
                        <a href="#" target="_blank">Заявление об отказе от части иска</a>
                        <a href="#" target="_blank">Иск о взыскании алиментов</a>
                        <a href="#" target="_blank">Иск о разделе имущества супругов</a>
                        <a href="#" target="_blank">Иск о расторжении брака</a>

                        <a href="#" target="_blank">Иск об определении места жительства ребенка</a>
                        <a href="#" target="_blank">Исковое заявление о разделе квартиры в равных долях</a>
                        <a href="#" target="_blank">Иск о взыскании ущерба в результате падения снега на автомобиль</a>
                        <a href="#" target="_blank">Претензия по незаконной перепланировке квартиры</a>

                        <a href="#" target="_blank">Претензия по факту некачественных работ</a>
                        <a href="#" target="_blank">Заявление о выдаче исполнительного листа</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
