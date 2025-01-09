<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advocate-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>

    <?php
    if (function_exists('get_field')) {
        $phone = get_field('op_phone', 'options');
        $small_title = get_field('op_label_head', 'options');
        $tg = get_field('op_telegram', 'options');
        $wts = get_field('op_watsapp', 'options');
    }
    ?>
</head>

<body <?php body_class('antialiased font-sans leading-normal bg-black-800'); ?>>
<?php wp_body_open(); ?>

    <header class="mt-4 sticky w-full top-2 font-normal z-50">
       <div class="bg-black-400 rounded-2xl mx-4 md:mx-10 py-3 xl:py-6">
           <div class="relative">
               <div class="container">
                   <div class="flex flex-wrap items-center justify-between">
                       <div class="w-52">
                           <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                               <div class="flex items-center">
                                   <img class="w-10 md:w-12" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
                                   <div class="ml-3 *:block w-60 text-white-800 text-[12px] md:text-xs leading-none *:mb-0.5">
                                       <span class="text-gray-500">Краснодарская Краевая</span>
                                       <span>Коллегия Адвокатов</span>
                                       <span>Филиал №76</span>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="hidden lg:block flex items-center justify-center">
                           <nav class=" text-sm xl:text-base  font-semibold" role="navigation">
                               <?php header_nav(); ?>
                           </nav>
                       </div>
                       <div class="flex items-center">
                           <div class="hidden md:flex items-center">
                               <div class="text-white-800 text-right">

                                   <?php if(!empty($phone)) : ?>
                                    <a href="tel:<?=$phone?>" class="text-xl xl:text-2xl font-semibold" target="_self"><?=$phone?></a>
                                   <?php endif; ?>

                                   <?php if(!empty($small_title)) : ?>
                                       <span class="block text-gray-500 text-xs"><?=$small_title?></span>
                                   <?php endif; ?>
                               </div>
                               <div class="ml-4">
                                   <ul class="nav-icon *:inline-block *:border *:border-gray-800 *:rounded-lg *:w-12 *:h-12 *:ml-1">
                                       <?php if(!empty($wts)) : ?>
                                            <li class="relative hover:shadow-icon">
                                               <a href="<?=$wts?>" target="_blank" class="flex w-full h-full items-center justify-center">
                                                   <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M6.75 29.25L8.36563 23.2529C7.06266 20.9167 6.6487 18.1906 7.1997 15.5748C7.75069 12.9589 9.22969 10.6289 11.3653 9.01217C13.5009 7.39545 16.1499 6.60051 18.8261 6.77323C21.5023 6.94594 24.0263 8.07472 25.9348 9.95244C27.8434 11.8302 29.0085 14.3309 29.2164 16.9957C29.4244 19.6605 28.6611 22.3106 27.0667 24.4598C25.4723 26.609 23.1538 28.1131 20.5365 28.696C17.9192 29.279 15.1788 28.9017 12.8181 27.6334L6.75 29.25ZM13.1107 25.3893L13.486 25.6112C15.1959 26.6213 17.1931 27.0393 19.1662 26.8C21.1393 26.5608 22.9777 25.6777 24.3947 24.2885C25.8117 22.8992 26.7278 21.0818 27.0003 19.1195C27.2727 17.1571 26.8862 15.1601 25.9009 13.4396C24.9157 11.719 23.387 10.3716 21.5532 9.60735C19.7194 8.84308 17.6834 8.70487 15.7626 9.21425C13.8417 9.72363 12.1439 10.852 10.9336 12.4235C9.72337 13.995 9.06872 15.9214 9.07167 17.9024C9.07006 19.545 9.52587 21.1558 10.3883 22.5556L10.6237 22.9423L9.72046 26.2895L13.1107 25.3893Z" fill="#F3F3F3" />
                                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2067 19.4423C21.9868 19.2655 21.7294 19.141 21.4541 19.0784C21.1788 19.0157 20.8927 19.0166 20.6178 19.081C20.2046 19.2521 19.9377 19.8987 19.6708 20.2221C19.6145 20.2996 19.5318 20.3539 19.4382 20.3749C19.3446 20.3959 19.2465 20.3822 19.1623 20.3362C17.6499 19.7453 16.3822 18.6618 15.5651 17.2615C15.4954 17.1742 15.4624 17.0632 15.473 16.9521C15.4837 16.8409 15.5372 16.7382 15.6223 16.6656C15.92 16.3717 16.1386 16.0075 16.2578 15.6069C16.2843 15.1651 16.1828 14.725 15.9655 14.3391C15.7974 13.798 15.4776 13.3163 15.0439 12.9507C14.8202 12.8504 14.5721 12.8167 14.3297 12.8538C14.0872 12.891 13.8607 12.9973 13.6774 13.1599C13.3593 13.4337 13.1068 13.7751 12.9385 14.1591C12.7702 14.5431 12.6904 14.9599 12.705 15.3787C12.706 15.6139 12.7359 15.8481 12.794 16.0761C12.9416 16.6237 13.1685 17.147 13.4677 17.6292C13.6835 17.9986 13.919 18.3563 14.1732 18.7006C14.9991 19.8315 16.0373 20.7918 17.2302 21.528C17.8288 21.9021 18.4686 22.2063 19.1369 22.4345C19.8311 22.7484 20.5976 22.8689 21.355 22.7832C21.7865 22.718 22.1954 22.5481 22.5456 22.2883C22.8958 22.0285 23.1766 21.6869 23.3634 21.2934C23.4731 21.0557 23.5064 20.79 23.4587 20.5327C23.3443 20.0065 22.6388 19.6959 22.2067 19.4423Z" fill="#F3F3F3" />
                                                   </svg>
                                               </a>
                                            </li>
                                       <?php endif; ?>
                                       <?php if(!empty($tg)) : ?>
                                             <li class="hover:shadow-icon">
                                               <a href="<?=$tg?>" target="_blank" class="flex w-full h-full items-center justify-center">
                                                   <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M6.86649 16.839C6.86649 16.839 15.8226 12.8877 18.9287 11.4963C20.1194 10.9398 24.1574 9.15889 24.1574 9.15889C24.1574 9.15889 26.0211 8.37979 25.8658 10.272C25.814 11.0511 25.3999 13.7781 24.9857 16.7277C24.3645 20.9018 23.6915 25.4653 23.6915 25.4653C23.6915 25.4653 23.5879 26.7453 22.7079 26.9679C21.8278 27.1905 20.3782 26.1888 20.1194 25.9662C19.9123 25.7993 16.2367 23.2948 14.8907 22.0704C14.5283 21.7365 14.1142 21.0687 14.9425 20.2896C16.8062 18.453 19.0322 16.1712 20.3782 14.7243C20.9995 14.0564 21.6207 12.4981 19.0322 14.3903C15.3567 17.1173 11.7328 19.6774 11.7328 19.6774C11.7328 19.6774 10.9045 20.2339 9.35141 19.733C7.79829 19.2322 5.98636 18.5643 5.98636 18.5643C5.98636 18.5643 4.74397 17.7295 6.86649 16.839Z" fill="#F3F3F3" />
                                                   </svg>
                                               </a>
                                            </li>
                                       <?php endif; ?>
                                   </ul>
                               </div>
                           </div>
                           <div class="lg:hidden">
                               <svg class="btn-menu-toggle ham hamRotate ham1 w-12 md:w-20" viewBox="0 0 100 100">
                                   <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                                   <path class="line middle" d="m 30,50 h 40" />
                                   <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                               </svg>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </header>
    <div class="menu-mobile bg-black-400 fixed top-0 left-0 bottom-0 h-full">
        <div class="h-full relative pl-6 pr-5 pt-24 pb-10 flex  justify-center flex-col">
            <nav class="text-2xl font-semibold">
                <?php header_nav(); ?>
            </nav>
            <div class="mt-10">
                <div class="text-white-800">
                    <?php if(!empty($phone)) : ?>
                        <a href="tel:<?=$phone?>" class="text-xl font-semibold" target="_self"><?=$phone?></a>
                    <?php endif; ?>

                    <?php if(!empty($small_title)) : ?>
                        <span class="block text-gray-500 text-xs"><?=$small_title?></span>
                    <?php endif; ?>
                </div>
                <div class="mt-5">
                    <ul class="nav-icon *:inline-block *:border *:border-gray-800 *:rounded-lg *:w-10 *:h-10 *:ml-1">
                        <?php if(!empty($wts)) : ?>
                            <li class="relative hover:shadow-icon">
                                <a href="<?=$wts?>" target="_blank" class="flex w-full h-full items-center justify-center">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 29.25L8.36563 23.2529C7.06266 20.9167 6.6487 18.1906 7.1997 15.5748C7.75069 12.9589 9.22969 10.6289 11.3653 9.01217C13.5009 7.39545 16.1499 6.60051 18.8261 6.77323C21.5023 6.94594 24.0263 8.07472 25.9348 9.95244C27.8434 11.8302 29.0085 14.3309 29.2164 16.9957C29.4244 19.6605 28.6611 22.3106 27.0667 24.4598C25.4723 26.609 23.1538 28.1131 20.5365 28.696C17.9192 29.279 15.1788 28.9017 12.8181 27.6334L6.75 29.25ZM13.1107 25.3893L13.486 25.6112C15.1959 26.6213 17.1931 27.0393 19.1662 26.8C21.1393 26.5608 22.9777 25.6777 24.3947 24.2885C25.8117 22.8992 26.7278 21.0818 27.0003 19.1195C27.2727 17.1571 26.8862 15.1601 25.9009 13.4396C24.9157 11.719 23.387 10.3716 21.5532 9.60735C19.7194 8.84308 17.6834 8.70487 15.7626 9.21425C13.8417 9.72363 12.1439 10.852 10.9336 12.4235C9.72337 13.995 9.06872 15.9214 9.07167 17.9024C9.07006 19.545 9.52587 21.1558 10.3883 22.5556L10.6237 22.9423L9.72046 26.2895L13.1107 25.3893Z" fill="#F3F3F3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2067 19.4423C21.9868 19.2655 21.7294 19.141 21.4541 19.0784C21.1788 19.0157 20.8927 19.0166 20.6178 19.081C20.2046 19.2521 19.9377 19.8987 19.6708 20.2221C19.6145 20.2996 19.5318 20.3539 19.4382 20.3749C19.3446 20.3959 19.2465 20.3822 19.1623 20.3362C17.6499 19.7453 16.3822 18.6618 15.5651 17.2615C15.4954 17.1742 15.4624 17.0632 15.473 16.9521C15.4837 16.8409 15.5372 16.7382 15.6223 16.6656C15.92 16.3717 16.1386 16.0075 16.2578 15.6069C16.2843 15.1651 16.1828 14.725 15.9655 14.3391C15.7974 13.798 15.4776 13.3163 15.0439 12.9507C14.8202 12.8504 14.5721 12.8167 14.3297 12.8538C14.0872 12.891 13.8607 12.9973 13.6774 13.1599C13.3593 13.4337 13.1068 13.7751 12.9385 14.1591C12.7702 14.5431 12.6904 14.9599 12.705 15.3787C12.706 15.6139 12.7359 15.8481 12.794 16.0761C12.9416 16.6237 13.1685 17.147 13.4677 17.6292C13.6835 17.9986 13.919 18.3563 14.1732 18.7006C14.9991 19.8315 16.0373 20.7918 17.2302 21.528C17.8288 21.9021 18.4686 22.2063 19.1369 22.4345C19.8311 22.7484 20.5976 22.8689 21.355 22.7832C21.7865 22.718 22.1954 22.5481 22.5456 22.2883C22.8958 22.0285 23.1766 21.6869 23.3634 21.2934C23.4731 21.0557 23.5064 20.79 23.4587 20.5327C23.3443 20.0065 22.6388 19.6959 22.2067 19.4423Z" fill="#F3F3F3" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(!empty($tg)) : ?>
                            <li class="hover:shadow-icon">
                                <a href="<?=$tg?>" target="_blank" class="flex w-full h-full items-center justify-center">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.86649 16.839C6.86649 16.839 15.8226 12.8877 18.9287 11.4963C20.1194 10.9398 24.1574 9.15889 24.1574 9.15889C24.1574 9.15889 26.0211 8.37979 25.8658 10.272C25.814 11.0511 25.3999 13.7781 24.9857 16.7277C24.3645 20.9018 23.6915 25.4653 23.6915 25.4653C23.6915 25.4653 23.5879 26.7453 22.7079 26.9679C21.8278 27.1905 20.3782 26.1888 20.1194 25.9662C19.9123 25.7993 16.2367 23.2948 14.8907 22.0704C14.5283 21.7365 14.1142 21.0687 14.9425 20.2896C16.8062 18.453 19.0322 16.1712 20.3782 14.7243C20.9995 14.0564 21.6207 12.4981 19.0322 14.3903C15.3567 17.1173 11.7328 19.6774 11.7328 19.6774C11.7328 19.6774 10.9045 20.2339 9.35141 19.733C7.79829 19.2322 5.98636 18.5643 5.98636 18.5643C5.98636 18.5643 4.74397 17.7295 6.86649 16.839Z" fill="#F3F3F3" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <main id="page" class="site flex flex-col overflow-x-hidden text-white-800">


