<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $label  = get_sub_field('label');
    $services  = get_sub_field('services_advocat');
}

?>


<?php
// Получаем все термины из таксономии "typeservices"
$terms = get_terms([
    'taxonomy' => 'typeservices',
    'hide_empty' => false,
    'orderby' => 'date',
    'order' => 'DESC',
]);
?>


<section id="user_services" class="mt-4">
    <div class="bg-bg-gradient relative overflow-hidden rounded-2xl mx-4 md:mx-10 py-8 xl:py-16">
        <div class="container relative">
            <div class="sm:right-6 xl:-top-9 absolute -top-4 right-1">
                <svg class="sm:w-48 sm:h-48 lg:w-[12.5rem] lg:h-[12.5rem] w-32 h-32"  viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3">
                        <path class="animate-text" d="M28.3734 150.541L29.1976 151.779L18.9626 158.583L18.1384 157.345L22.5761 154.394L22.2172 153.854L15.0545 152.707L14.0702 151.229L21.3194 152.375L24.2116 144.285L25.196 145.763L22.838 152.403L23.675 153.662L28.3723 150.539L28.3734 150.541ZM23.4705 142.876L12.4955 148.41L10.625 144.703C10.1913 143.842 9.99019 143.06 10.0218 142.356C10.0545 141.653 10.2661 141.036 10.6577 140.506C11.0493 139.977 11.5684 139.549 12.2149 139.224C12.8614 138.898 13.5149 138.733 14.1765 138.729C14.8382 138.724 15.4625 138.917 16.0505 139.306C16.6386 139.695 17.1483 140.316 17.5785 141.17L18.7896 143.569L22.7983 141.549L23.4681 142.878L23.4705 142.876ZM13.0052 146.486L17.6135 144.163L16.4246 141.806C16.1277 141.217 15.7863 140.795 15.4029 140.54C15.0194 140.285 14.6126 140.165 14.1812 140.178C13.751 140.191 13.3161 140.309 12.8766 140.53C12.437 140.751 12.0851 141.031 11.8209 141.368C11.5567 141.705 11.4164 142.104 11.4001 142.564C11.3837 143.025 11.5263 143.553 11.8268 144.15L13.0052 146.486ZM19.7131 135.541L6.61983 135.603L6.08323 134.163L16.026 125.645L16.5707 127.107L13.7405 129.48L15.4754 134.136L19.1684 134.079L19.7131 135.541ZM8.18985 134.249L14.0737 134.158L12.6661 130.38L8.15712 134.159L8.19102 134.249H8.18985ZM9.90251 126.558C11.1639 126.261 12.2009 125.777 13.0133 125.105C13.8258 124.433 14.387 123.642 14.6991 122.731C15.0112 121.819 15.0463 120.854 14.8067 119.834C14.6652 119.231 14.4431 118.684 14.1426 118.193C13.8422 117.703 13.4728 117.284 13.0356 116.934C12.5983 116.585 12.1038 116.323 11.5532 116.149C11.0026 115.975 10.4087 115.904 9.77157 115.94L10.1129 117.388C10.5455 117.376 10.9465 117.439 11.3135 117.577C11.6806 117.715 12.008 117.909 12.2955 118.16C12.5831 118.411 12.824 118.707 13.0192 119.047C13.2144 119.387 13.3582 119.756 13.4517 120.154C13.6224 120.878 13.5932 121.576 13.3652 122.248C13.1373 122.92 12.7071 123.513 12.0758 124.024C11.4445 124.536 10.611 124.915 9.57401 125.158C8.53823 125.401 7.62287 125.435 6.82908 125.259C6.0353 125.082 5.38648 124.743 4.88262 124.243C4.37876 123.743 4.04091 123.132 3.8714 122.407C3.77787 122.01 3.7428 121.616 3.76501 121.224C3.78839 120.833 3.87257 120.46 4.01753 120.108C4.16249 119.755 4.36824 119.436 4.63362 119.15C4.89899 118.864 5.22983 118.629 5.6273 118.445L5.28594 116.997C4.69674 117.251 4.19522 117.578 3.78138 117.98C3.36871 118.381 3.04371 118.836 2.80756 119.344C2.57142 119.851 2.42879 120.391 2.37852 120.964C2.32826 121.536 2.37385 122.124 2.51647 122.728C2.75613 123.749 3.21907 124.597 3.9053 125.274C4.59036 125.95 5.44727 126.409 6.47253 126.648C7.49895 126.888 8.64345 126.858 9.90485 126.562L9.90251 126.558ZM13.0987 111.746L7.62637 112.272L6.99977 105.751L12.4721 105.225L12.3294 103.744L0.0953765 104.919L0.238 106.4L5.68576 105.876L6.31237 112.397L0.86344 112.921L1.00606 114.402L13.2413 113.226L13.0987 111.745V111.746ZM0.658857 98.6794C0.180717 97.8438 -0.0378948 96.9018 0.00535988 95.8547C0.0486146 94.8076 0.342045 93.8867 0.886821 93.092C1.4316 92.2973 2.18563 91.686 3.14776 91.2571C4.10988 90.8282 5.23918 90.6401 6.53449 90.6927C7.82979 90.7453 8.93921 91.0246 9.86393 91.5306C10.7886 92.0367 11.4901 92.7075 11.9682 93.5442C12.4464 94.3798 12.665 95.3218 12.6217 96.3689C12.5785 97.4161 12.285 98.337 11.7402 99.1317C11.1955 99.9264 10.4414 100.538 9.47931 100.966C8.51719 101.395 7.38789 101.584 6.09259 101.531C4.79728 101.478 3.68786 101.199 2.76314 100.693C1.83842 100.187 1.137 99.5162 0.658857 98.6794ZM1.87817 97.9513C2.22889 98.5684 2.76314 99.0686 3.48094 99.4519C4.19756 99.8352 5.08837 100.049 6.15221 100.092C7.21604 100.136 8.12088 99.9953 8.86673 99.6716C9.61258 99.3479 10.1854 98.8933 10.5864 98.3066C10.9874 97.7199 11.2025 97.0549 11.2329 96.3128C11.2633 95.5695 11.1031 94.8894 10.7512 94.2723C10.4005 93.6553 9.86627 93.1551 9.14847 92.7717C8.43185 92.3884 7.54103 92.1745 6.4772 92.1313C5.41337 92.0881 4.5097 92.2283 3.76268 92.552C3.01682 92.8758 2.44399 93.3315 2.04301 93.917C1.64319 94.5037 1.42692 95.1687 1.39653 95.9108C1.36613 96.6541 1.52629 97.3343 1.87817 97.9513ZM6.13701 86.7215L1.07738 85.5575L2.3493 78.3737L13.1525 80.2856L13.3991 78.8914L17.6065 79.6358L17.3599 81.0301L14.4524 80.5159L12.942 89.0472L15.8728 89.5661L15.6262 90.9603L11.3954 90.2112L11.5333 89.4317C11.3369 89.1208 11.0353 88.8064 10.6308 88.4885C10.2263 88.1707 9.66285 87.8621 8.94155 87.5618C8.22025 87.2614 7.28618 86.981 6.13701 86.7215ZM2.61116 84.4648L6.38368 85.3273C7.25812 85.5306 8.04256 85.755 8.7358 85.9993C9.42904 86.2435 10.0358 86.5077 10.5525 86.7893C11.0692 87.0721 11.4994 87.369 11.842 87.6822L12.9046 81.6798L3.40144 79.9981L2.61116 84.4648ZM15.0136 77.9436L4.71545 69.8599L5.19008 68.399L18.2741 67.9L17.7924 69.3842L14.1006 69.4847L12.5668 74.2109L15.4964 76.4594L15.0147 77.9436H15.0136ZM6.787 69.7746L11.4538 73.3577L12.6989 69.5221L6.81623 69.6834L6.787 69.7746ZM18.9346 66.4579L7.79822 61.2573L9.5553 57.4953C9.9633 56.6223 10.4543 55.9807 11.0271 55.5705C11.6011 55.1603 12.2161 54.9464 12.8742 54.9265C13.5324 54.9067 14.1894 55.0504 14.8452 55.3566C15.5011 55.6628 16.0353 56.0742 16.448 56.5919C16.8595 57.1085 17.0957 57.7185 17.1529 58.4209C17.2114 59.1233 17.0372 59.9074 16.6327 60.7734L15.4952 63.2089L19.5623 65.108L18.9322 66.4567L18.9346 66.4579ZM9.62428 60.4684L14.3005 62.6515L15.4181 60.2592C15.6975 59.6609 15.8191 59.1326 15.7816 58.6745C15.7442 58.2164 15.5876 57.8214 15.3105 57.4918C15.0346 57.1622 14.6734 56.8934 14.2268 56.6842C13.7814 56.4762 13.3442 56.3722 12.9151 56.3734C12.4861 56.3734 12.0863 56.5101 11.7134 56.7824C11.3416 57.0547 11.0131 57.493 10.7314 58.0983L9.62428 60.4684ZM17.9514 54.2861C19.0468 54.9791 20.1188 55.3788 21.1674 55.4875C22.2161 55.5962 23.1747 55.4431 24.0433 55.0271C24.9119 54.611 25.6274 53.9601 26.1873 53.0742C26.5182 52.5506 26.7543 52.0095 26.8934 51.4521C27.0325 50.8946 27.0746 50.3372 27.0173 49.7809C26.9601 49.2246 26.8011 48.6882 26.5392 48.1728C26.2785 47.6574 25.9114 47.1852 25.4403 46.7552L24.6454 48.0127C24.9563 48.3142 25.1925 48.6437 25.3515 49.0014C25.5104 49.3601 25.6016 49.7295 25.6227 50.1104C25.6437 50.4914 25.6028 50.8701 25.4964 51.2476C25.39 51.625 25.2275 51.9862 25.0101 52.3309C24.6126 52.9597 24.0936 53.4283 23.4541 53.7357C22.8146 54.043 22.091 54.1517 21.282 54.0594C20.473 53.9671 19.6196 53.6375 18.7206 53.0684C17.8216 52.5004 17.1564 51.8705 16.7262 51.1798C16.296 50.4891 16.0833 49.7891 16.0879 49.0797C16.0914 48.3703 16.2925 47.7006 16.69 47.0719C16.9086 46.7271 17.1646 46.4256 17.4604 46.1673C17.7562 45.909 18.0812 45.7092 18.4342 45.5655C18.7873 45.4217 19.159 45.3446 19.5495 45.3341C19.9399 45.3235 20.3398 45.3948 20.7489 45.5491L21.5439 44.2916C20.95 44.0485 20.3643 43.92 19.7891 43.9071C19.2128 43.8931 18.661 43.9796 18.1338 44.1666C17.6065 44.3535 17.1202 44.6294 16.676 44.9951C16.2317 45.3609 15.8448 45.805 15.5128 46.3298C14.9528 47.2156 14.671 48.1401 14.6675 49.103C14.664 50.066 14.9364 50.9975 15.4847 51.8973C16.033 52.7972 16.8548 53.5931 17.9502 54.2861H17.9514ZM27.409 41.4307L34.4501 41.7603L35.5806 40.3906L26.9963 39.971L25.9909 32.703L24.8605 34.0727L25.8413 41.2577L25.4286 41.7579L21.3171 38.3688L20.3702 39.5164L29.8535 47.3337L30.8004 46.186L26.448 42.5982L27.4101 41.4319L27.409 41.4307ZM36.3206 39.5783L31.2201 27.5223L32.3424 26.4728L44.0352 32.3641L42.8953 33.4299L39.615 31.7319L35.9851 35.1257L37.4604 38.5113L36.3206 39.5772V39.5783ZM33.0742 28.4502L35.4251 33.8437L38.3711 31.0891L33.1455 28.3848L33.0753 28.4502H33.0742ZM39.7541 22.5028C39.6629 21.8694 39.7716 21.2395 40.0803 20.6154C40.3901 19.9914 40.9337 19.3977 41.7134 18.8367L45.0838 16.4105L52.2664 26.3817L51.0588 27.2512L48.2531 23.356L46.0716 24.9267C45.9851 24.9886 45.8998 25.047 45.8144 25.1043L46.5206 30.5188L45.1177 31.5285L44.4093 25.7938C44.2327 25.8476 44.0597 25.8861 43.889 25.9119C43.2063 26.0112 42.5809 25.92 42.0139 25.6396C41.4457 25.3579 40.9512 24.9243 40.528 24.3365C40.1048 23.7486 39.8476 23.1386 39.7553 22.504L39.7541 22.5028ZM41.185 22.2714C41.2505 22.6781 41.427 23.0802 41.7146 23.4798C42.0022 23.8795 42.3237 24.1694 42.6779 24.3505C43.0321 24.5317 43.4296 24.5819 43.868 24.5036C44.3064 24.4241 44.7915 24.1927 45.3246 23.8094L47.4675 22.2668L44.6477 18.3529L42.5248 19.8815C41.9858 20.2695 41.6117 20.6633 41.4013 21.063C41.1909 21.4627 41.1196 21.8659 41.185 22.2726V22.2714ZM61.8035 7.51224L60.1972 8.27071L58.0228 15.1893L57.4371 15.4662L55.161 10.649L53.8154 11.2847L59.0644 22.3953L60.41 21.7596L58.0006 16.6606L59.3684 16.0144L65.5982 19.31L67.2045 18.5515L59.6162 14.5173L61.8023 7.51341L61.8035 7.51224ZM68.7009 13.2972L70.1166 17.5558L68.7044 18.0256L64.8278 6.36577L68.7687 5.05569C69.684 4.75183 70.4872 4.66652 71.1793 4.80208C71.8713 4.93648 72.45 5.23683 72.9165 5.7008C73.3829 6.16593 73.7301 6.74092 73.9592 7.4281C74.1872 8.11528 74.2562 8.7861 74.1638 9.44056C74.0715 10.095 73.7897 10.6852 73.3198 11.2099C72.8498 11.7347 72.1601 12.1484 71.2529 12.4499L68.7009 13.2984V13.2972ZM66.6562 7.14878L68.2847 12.0455L70.7911 11.2123C71.4177 11.0042 71.8842 10.7284 72.1928 10.386C72.5003 10.0436 72.6791 9.6591 72.7294 9.23136C72.7785 8.80363 72.7259 8.35719 72.5716 7.88972C72.4173 7.42225 72.1916 7.03425 71.8959 6.72339C71.6001 6.41252 71.226 6.21618 70.7724 6.13204C70.3188 6.04906 69.7752 6.11217 69.1404 6.3237L66.6574 7.14878H66.6562ZM78.0392 15.0525L76.5136 15.3774L78.363 2.41916L79.8653 2.09894L86.8433 13.1745L85.3177 13.4994L83.3829 10.3533L78.522 11.3899L78.0392 15.0514V15.0525ZM79.4725 4.171L78.7044 10.0039L82.6488 9.16241L79.5672 4.15113L79.4736 4.171H79.4725ZM89.7963 11.5886L89.4164 7.43043L94.9389 6.92674L94.8185 5.61198L89.296 6.11568L88.9184 1.9809L94.8232 1.44214L94.7028 0.127386L87.3156 0.801711L88.4332 13.0377L95.9163 12.3552L95.7959 11.0405L89.7951 11.5886H89.7963ZM102.272 12.3739L97.8323 12.2851L98.0778 0L102.374 0.0853133C103.23 0.102843 103.934 0.262952 104.483 0.567976C105.034 0.873 105.439 1.27502 105.701 1.77405C105.963 2.27307 106.088 2.82235 106.076 3.42305C106.066 3.95129 105.964 4.38487 105.771 4.72495C105.578 5.06504 105.329 5.33266 105.023 5.52666C104.717 5.72066 104.387 5.86207 104.033 5.95089L104.031 6.07127C104.406 6.10282 104.781 6.24189 105.156 6.48965C105.532 6.73741 105.843 7.08801 106.09 7.54029C106.337 7.99374 106.455 8.54418 106.441 9.19163C106.43 9.80752 106.278 10.3591 105.988 10.8453C105.698 11.3315 105.248 11.7125 104.639 11.9883C104.028 12.2641 103.24 12.3926 102.271 12.3728L102.272 12.3739ZM99.4573 5.42849L102.217 5.48342C102.665 5.49277 103.072 5.41213 103.438 5.24384C103.804 5.07556 104.096 4.83247 104.317 4.51693C104.537 4.20139 104.651 3.82741 104.661 3.39617C104.671 2.85624 104.492 2.39345 104.124 2.00778C103.756 1.62212 103.163 1.42111 102.347 1.40475L99.5392 1.34865L99.4573 5.42733V5.42849ZM99.3463 10.9949L102.298 11.0533C103.271 11.0732 103.965 10.8979 104.383 10.5274C104.8 10.1581 105.014 9.70234 105.025 9.16358C105.034 8.74753 104.935 8.3607 104.731 8.00309C104.526 7.64547 104.229 7.35447 103.841 7.13359C103.453 6.91154 102.991 6.79584 102.456 6.78533L99.4316 6.72456L99.3463 10.9949ZM110.536 9.42887L108.823 12.7L107.278 12.4803L113.477 0.950133L114.997 1.16634L117.735 13.9668L116.191 13.7471L115.458 10.1277L110.536 9.42887ZM111.186 8.18774L115.18 8.75571L114.011 2.99064L113.916 2.97661L111.186 8.18774ZM119.062 14.2847L123.093 10.1418C122.941 10.0377 122.802 9.92672 122.676 9.80986C122.171 9.34005 121.85 8.79545 121.715 8.17722C121.579 7.55899 121.608 6.90102 121.801 6.20333C121.994 5.50563 122.31 4.92246 122.747 4.45382C123.184 3.98518 123.743 3.67665 124.423 3.52706C125.104 3.37747 125.907 3.43123 126.833 3.68717L130.836 4.79624L127.553 16.6373L126.119 16.2399L127.401 11.6143L124.81 10.8967C124.708 10.8687 124.608 10.8383 124.511 10.8067L120.729 14.7463L119.063 14.2847H119.062ZM123.136 7.88972C123.217 8.27889 123.426 8.62014 123.762 8.91231C124.097 9.20448 124.582 9.43822 125.215 9.61352L127.76 10.3182L129.048 5.66924L126.527 4.97037C125.886 4.79274 125.345 4.74833 124.902 4.83481C124.459 4.92129 124.098 5.11763 123.823 5.42265C123.547 5.72768 123.343 6.11801 123.212 6.59249C123.081 7.06698 123.056 7.49822 123.136 7.88856V7.88972ZM138.727 15.0327L140.085 15.6965L141.406 22.6174L143.002 23.3969L141.41 14.9544L148.245 12.2828L146.649 11.5033L139.889 14.1316L139.307 13.8476L141.646 9.06074L140.308 8.40745L134.915 19.4479L136.252 20.1012L138.728 15.0338L138.727 15.0327ZM150.307 27.375C149.344 27.361 148.422 27.07 147.543 26.5009C146.663 25.9317 146.019 25.2107 145.612 24.3377C145.206 23.4647 145.062 22.504 145.182 21.458C145.303 20.4109 145.714 19.3439 146.419 18.2559C147.124 17.1678 147.928 16.3544 148.834 15.8168C149.74 15.2793 150.676 15.0163 151.639 15.0303C152.602 15.0444 153.525 15.3354 154.404 15.9045C155.284 16.4736 155.927 17.1947 156.334 18.0689C156.741 18.9419 156.884 19.9025 156.764 20.9485C156.644 21.9956 156.232 23.0626 155.527 24.1507C154.823 25.2387 154.018 26.0521 153.112 26.5897C152.206 27.1284 151.271 27.3902 150.307 27.3762V27.375ZM150.3 25.9551C151.01 25.9668 151.713 25.7611 152.408 25.3392C153.104 24.9173 153.74 24.2594 154.318 23.3665C154.897 22.4736 155.236 21.6228 155.337 20.8164C155.437 20.0101 155.337 19.2843 155.036 18.6415C154.735 17.9988 154.272 17.4752 153.647 17.0708C153.023 16.6665 152.356 16.4584 151.646 16.4479C150.936 16.4374 150.234 16.6419 149.538 17.0638C148.843 17.4857 148.207 18.1437 147.628 19.0365C147.049 19.9294 146.71 20.7802 146.61 21.5866C146.509 22.393 146.61 23.1187 146.91 23.7603C147.212 24.4031 147.675 24.9267 148.299 25.331C148.923 25.7354 149.591 25.9434 150.3 25.9539V25.9551ZM155.051 29.2391C154.622 29.3045 154.213 29.1713 153.823 28.8382L153.549 28.6045L152.662 29.6458L153.009 29.9414C153.696 30.5281 154.376 30.7934 155.043 30.7373C155.711 30.6812 156.41 30.3704 157.14 29.8047C157.87 29.2391 158.672 28.4818 159.544 27.5328L162.868 23.9321L166.356 26.9064L159.238 35.2519L160.37 36.2172L168.346 26.8678L162.647 22.0097L158.634 26.3793C157.817 27.2699 157.123 27.9524 156.551 28.428C155.98 28.9037 155.48 29.1736 155.051 29.2391ZM165.551 36.5597C164.922 36.9558 164.391 37.1568 163.957 37.165C163.523 37.1732 163.135 36.9874 162.793 36.6064L162.552 36.3388L161.535 37.2538L161.84 37.5928C162.444 38.2647 163.081 38.6177 163.751 38.6504C164.421 38.6831 165.155 38.4669 165.953 38.003C166.75 37.539 167.645 36.8927 168.636 36.0676L172.406 32.9368L175.471 36.3458L167.313 43.6792L168.308 44.786L177.448 36.5702L172.44 31.0026L167.886 34.8055C166.958 35.5803 166.179 36.1658 165.552 36.5608L165.551 36.5597ZM174.164 52.969L175.245 52.2117L171.786 47.2799L175.207 44.883L178.39 49.4221L179.472 48.6648L176.288 44.1257L179.689 41.7427L183.093 46.5962L184.175 45.8389L179.916 39.7665L169.851 46.8206L174.165 52.9714L174.164 52.969ZM175.885 55.9258L185.48 50.6095L188.354 55.7949L189.509 55.1556L185.913 48.6695L175.162 54.625L175.884 55.9269L175.885 55.9258ZM180.099 64.0071L191.556 66.6028L191.6 66.7138L182.653 70.3273L183.21 71.7064L194.607 67.1053L194.068 65.7707L182.58 63.1622L182.536 63.0512L191.506 59.4295L190.957 58.0715L179.56 62.6737L180.099 64.0083V64.0071ZM194.128 71.7216C194.752 71.8653 195.299 72.1949 195.769 72.7091C196.239 73.2233 196.596 73.9456 196.837 74.8747L197.879 78.8937L185.982 81.9779L185.608 80.5381L190.256 79.3332L189.581 76.7317C189.555 76.6288 189.531 76.5272 189.509 76.4278L184.204 75.1259L183.77 73.4536L189.375 74.8688C189.389 74.6853 189.414 74.51 189.453 74.3417C189.607 73.6698 189.918 73.1205 190.386 72.6927C190.853 72.2662 191.438 71.9612 192.139 71.78C192.841 71.5989 193.502 71.579 194.127 71.7239L194.128 71.7216ZM193.826 73.138C193.424 73.0527 192.985 73.0714 192.508 73.1941C192.031 73.3168 191.645 73.512 191.348 73.7773C191.051 74.0426 190.86 74.3932 190.775 74.8302C190.69 75.2673 190.729 75.8038 190.894 76.4383L191.557 78.9942L196.227 77.7835L195.57 75.251C195.403 74.6082 195.172 74.1162 194.875 73.7761C194.578 73.436 194.228 73.2222 193.826 73.1368V73.138ZM187.171 88.6931L199.74 92.3604L199.845 93.8925L187.887 99.2275L187.781 97.6708L191.17 96.2018L190.834 91.2443L187.277 90.2474L187.171 88.6907V88.6931ZM197.849 93.2112L192.183 91.6241L192.456 95.6467L197.855 93.307L197.848 93.2112H197.849ZM199.998 103.94L199.488 111.217L188.543 110.451L188.444 111.864L184.182 111.566L184.281 110.153L187.227 110.359L187.833 101.717L184.863 101.509L184.963 100.096L189.249 100.396L189.195 101.186C189.422 101.475 189.756 101.755 190.192 102.029C190.628 102.302 191.22 102.55 191.969 102.773C192.717 102.996 193.677 103.176 194.846 103.314L200 103.94H199.998ZM198.587 105.188L194.744 104.726C193.853 104.616 193.05 104.475 192.333 104.305C191.617 104.136 190.988 103.936 190.444 103.711C189.901 103.484 189.442 103.234 189.068 102.959L188.643 109.04L198.27 109.713L198.587 105.188ZM186.799 113.458L198.848 115.883L198.001 120.095C197.831 120.934 197.549 121.597 197.15 122.084C196.752 122.572 196.284 122.899 195.746 123.068C195.208 123.238 194.645 123.264 194.057 123.144C193.539 123.04 193.13 122.863 192.829 122.613C192.529 122.363 192.31 122.069 192.173 121.734C192.036 121.398 191.956 121.049 191.931 120.684L191.813 120.661C191.715 121.024 191.512 121.369 191.201 121.694C190.89 122.019 190.49 122.263 190 122.426C189.51 122.588 188.948 122.606 188.312 122.477C187.707 122.356 187.192 122.109 186.765 121.737C186.339 121.366 186.043 120.855 185.879 120.206C185.715 119.558 185.729 118.758 185.921 117.809L186.798 113.457L186.799 113.458ZM192.734 120.225C192.836 120.614 193.022 120.946 193.293 121.218C193.564 121.491 193.913 121.671 194.336 121.756C194.866 121.862 195.353 121.769 195.797 121.474C196.242 121.18 196.545 120.633 196.707 119.834L197.261 117.081L193.26 116.276L192.716 118.982C192.627 119.421 192.634 119.835 192.734 120.225ZM187.364 120.216C187.654 120.693 188.063 120.984 188.592 121.09C189 121.172 189.399 121.144 189.787 121.006C190.176 120.868 190.514 120.628 190.802 120.286C191.09 119.943 191.286 119.51 191.391 118.985L191.989 116.02L187.8 115.178L187.216 118.071C187.025 119.024 187.074 119.739 187.364 120.216ZM194.998 129.529C195.217 130.466 195.159 131.432 194.819 132.423C194.48 133.414 193.935 134.213 193.187 134.819C192.437 135.426 191.541 135.798 190.496 135.934C189.451 136.071 188.315 135.93 187.088 135.51C185.862 135.091 184.877 134.506 184.135 133.758C183.393 133.01 182.912 132.167 182.692 131.229C182.472 130.291 182.531 129.327 182.871 128.336C183.21 127.345 183.755 126.545 184.503 125.939C185.252 125.332 186.149 124.961 187.194 124.824C188.239 124.687 189.375 124.828 190.602 125.247C191.828 125.666 192.813 126.251 193.555 126.999C194.296 127.747 194.778 128.59 194.998 129.528V129.529ZM193.622 129.88C193.46 129.188 193.091 128.557 192.513 127.985C191.935 127.414 191.143 126.955 190.136 126.611C189.129 126.266 188.222 126.143 187.414 126.24C186.606 126.338 185.927 126.611 185.376 127.058C184.826 127.506 184.429 128.082 184.189 128.786C183.948 129.489 183.908 130.187 184.068 130.879C184.228 131.571 184.599 132.202 185.176 132.773C185.754 133.345 186.547 133.803 187.554 134.148C188.561 134.492 189.468 134.615 190.276 134.517C191.084 134.419 191.762 134.146 192.314 133.699C192.864 133.251 193.26 132.675 193.501 131.971C193.742 131.268 193.782 130.57 193.622 129.878V129.88ZM179.75 136.673L184.804 139.18L184.131 140.534L177.2 141.812L176.411 143.402L184.867 141.863L187.497 148.713L188.286 147.122L185.699 140.347L185.987 139.766L190.761 142.134L191.423 140.801L180.411 135.34L179.75 136.673ZM175.874 144.356L183.57 154.945L182.714 156.221L169.992 153.127L170.86 151.831L174.44 152.742L177.208 148.615L175.005 145.651L175.873 144.355L175.874 144.356ZM181.555 154.461L178.045 149.74L175.8 153.089L181.502 154.542L181.556 154.463L181.555 154.461ZM176.393 162.466L167.96 155.45L167.008 156.594L175.442 163.609L172.969 166.578L173.984 167.422L179.881 160.338L178.866 159.494L176.393 162.465V162.466ZM170.053 167.555C170.359 168.564 170.389 169.534 170.145 170.465C169.901 171.397 169.397 172.222 168.633 172.939C167.87 173.657 167.015 174.109 166.07 174.295C165.124 174.481 164.157 174.39 163.169 174.023C162.181 173.656 161.244 173 160.355 172.056C159.467 171.112 158.871 170.136 158.564 169.127C158.258 168.119 158.228 167.149 158.472 166.217C158.716 165.286 159.22 164.461 159.984 163.743C160.747 163.025 161.602 162.573 162.547 162.387C163.493 162.202 164.46 162.292 165.448 162.66C166.436 163.027 167.373 163.682 168.262 164.627C169.15 165.571 169.746 166.547 170.053 167.555ZM168.672 167.94C168.429 167.164 167.942 166.389 167.213 165.613C166.483 164.838 165.74 164.305 164.98 164.014C164.22 163.723 163.493 163.647 162.796 163.785C162.1 163.923 161.481 164.248 160.939 164.757C160.396 165.267 160.035 165.865 159.854 166.551C159.673 167.237 159.704 167.969 159.947 168.745C160.19 169.521 160.677 170.296 161.406 171.072C162.136 171.847 162.879 172.38 163.639 172.671C164.399 172.962 165.126 173.037 165.823 172.9C166.52 172.762 167.138 172.437 167.681 171.927C168.223 171.418 168.584 170.819 168.765 170.133C168.947 169.447 168.915 168.716 168.672 167.941V167.94ZM154.535 168.792L161.724 178.758L158.239 181.271C157.545 181.771 156.886 182.066 156.262 182.152C155.639 182.238 155.074 182.161 154.563 181.919C154.052 181.678 153.623 181.314 153.272 180.827C152.963 180.399 152.783 179.99 152.733 179.603C152.683 179.215 152.721 178.852 152.85 178.513C152.979 178.174 153.156 177.863 153.387 177.579L153.316 177.482C152.997 177.682 152.614 177.796 152.165 177.824C151.716 177.852 151.257 177.759 150.787 177.545C150.317 177.331 149.892 176.962 149.514 176.436C149.153 175.936 148.943 175.405 148.882 174.842C148.821 174.279 148.952 173.705 149.274 173.117C149.595 172.53 150.148 171.954 150.934 171.387L154.536 168.791L154.535 168.792ZM157.358 175.249L155.119 176.863C154.756 177.124 154.479 177.433 154.288 177.787C154.097 178.141 154.009 178.512 154.023 178.896C154.037 179.281 154.17 179.649 154.422 179.999C154.738 180.438 155.159 180.699 155.685 180.786C156.211 180.872 156.805 180.677 157.468 180.2L159.746 178.558L157.359 175.249H157.358ZM156.599 174.198L154.1 170.733L151.704 172.459C150.915 173.027 150.466 173.584 150.354 174.131C150.242 174.678 150.345 175.17 150.66 175.607C150.904 175.945 151.215 176.195 151.594 176.358C151.973 176.521 152.385 176.575 152.828 176.519C153.271 176.463 153.71 176.278 154.145 175.965L156.599 174.197V174.198ZM144.224 182.743C144.625 183.616 144.793 184.468 144.731 185.303C144.669 186.136 144.402 186.889 143.93 187.558C143.458 188.228 142.808 188.753 141.979 189.134L141.76 189.234L142.462 190.762L141.109 191.382L140.408 189.856L140.211 189.946C139.383 190.326 138.561 190.479 137.747 190.403C136.933 190.327 136.191 190.043 135.52 189.55C134.849 189.057 134.314 188.374 133.913 187.501C133.513 186.628 133.343 185.775 133.405 184.942C133.467 184.108 133.734 183.356 134.206 182.686C134.678 182.016 135.328 181.492 136.157 181.111L136.354 181.021L135.683 179.56L137.035 178.939L137.706 180.4L137.925 180.3C138.754 179.92 139.575 179.767 140.389 179.843C141.203 179.919 141.945 180.203 142.616 180.696C143.287 181.189 143.823 181.872 144.224 182.745V182.743ZM139.858 188.653L136.905 182.219L136.709 182.309C136.077 182.598 135.603 182.976 135.291 183.441C134.978 183.905 134.821 184.431 134.819 185.018C134.817 185.603 134.966 186.224 135.266 186.878C135.563 187.526 135.934 188.037 136.378 188.415C136.822 188.792 137.323 189.013 137.878 189.08C138.435 189.145 139.028 189.034 139.662 188.743L139.858 188.653ZM143.32 185.224C143.321 184.638 143.173 184.018 142.872 183.364C142.575 182.716 142.205 182.205 141.76 181.827C141.316 181.45 140.816 181.229 140.261 181.162C139.704 181.096 139.11 181.208 138.477 181.499L138.258 181.599L141.211 188.034L141.43 187.933C142.062 187.644 142.536 187.266 142.848 186.801C143.16 186.336 143.318 185.811 143.32 185.224ZM128.339 183.057L124.664 194.21L124.55 194.244L121.804 184.995L120.376 185.418L123.874 197.198L125.255 196.787L128.945 185.603L129.06 185.569L131.813 194.841L133.217 194.424L129.719 182.645L128.339 183.055V183.057ZM118.425 185.873C117.531 186.009 116.887 186.348 116.491 186.89C116.096 187.431 115.874 188.162 115.824 189.085C115.774 190.007 115.822 191.108 115.969 192.388L116.515 197.257L111.981 197.947L110.332 187.104L108.86 187.327L110.708 199.474L118.113 198.349L117.435 192.456C117.297 191.255 117.235 190.284 117.249 189.542C117.263 188.799 117.387 188.244 117.618 187.877C117.85 187.51 118.219 187.288 118.726 187.211L119.081 187.157L118.875 185.805L118.424 185.874L118.425 185.873ZM104.904 187.579L98.3631 197.334L98.2427 197.337L98.086 187.69L96.5978 187.715L96.7966 200L98.2368 199.977L104.801 190.197L104.921 190.195L105.078 199.866L106.543 199.842L106.343 187.557L104.903 187.58L104.904 187.579ZM93.4987 187.483L95.0488 187.663L89.144 199.347L87.6184 199.169L84.5578 186.442L86.108 186.622L86.9322 190.222L91.869 190.797L93.4987 187.483ZM91.2506 192.054L87.2443 191.588L88.5583 197.323L88.6542 197.334L91.2506 192.055V192.054ZM80.8707 186.328C80.2943 186.67 79.8021 187.256 79.3941 188.084C78.9861 188.913 78.598 189.944 78.2286 191.179L76.8187 195.871L72.3787 194.726L75.1213 184.106L73.6798 183.734L70.6076 195.631L77.8604 197.504L79.552 191.818C79.8968 190.66 80.2218 189.741 80.5269 189.065C80.8321 188.388 81.1629 187.925 81.5206 187.679C81.8784 187.432 82.3039 187.372 82.7996 187.501L83.1479 187.591L83.4905 186.267L83.0486 186.152C82.173 185.927 81.447 185.985 80.8707 186.328ZM53.1455 185.291C52.8825 185.795 52.5493 186.18 52.1472 186.448C51.745 186.716 51.2996 186.856 50.811 186.866C50.3223 186.877 49.8196 186.747 49.3017 186.476C48.7768 186.201 48.3805 185.861 48.1128 185.455C47.8451 185.048 47.7071 184.604 47.7001 184.121C47.6931 183.639 47.8205 183.147 48.0847 182.643L48.4635 181.919C48.7265 181.416 49.0574 181.029 49.456 180.759C49.8547 180.489 50.2966 180.348 50.7817 180.335C51.2669 180.322 51.7684 180.452 52.2863 180.722C52.8112 180.996 53.2098 181.337 53.4811 181.745C53.7523 182.153 53.8937 182.6 53.9043 183.085C53.9148 183.57 53.7885 184.063 53.5255 184.565L53.1467 185.289L53.1455 185.291ZM52.4862 182.688C52.4172 182.316 52.1647 182.015 51.7287 181.787C51.3136 181.57 50.936 181.541 50.5935 181.699C50.251 181.856 49.9669 182.152 49.7378 182.589L49.359 183.312C49.1369 183.738 49.0597 184.135 49.1275 184.506C49.1965 184.875 49.4432 185.172 49.8687 185.394C50.2942 185.616 50.6789 185.65 51.0214 185.496C51.3639 185.341 51.6468 185.05 51.8701 184.626L52.2489 183.903C52.4768 183.467 52.5563 183.062 52.4874 182.69L52.4862 182.688ZM60.6391 188.886L60.5327 188.83L60.002 177.989L58.7254 177.322L53.0275 188.209L54.3251 188.888L58.6985 180.531L58.8049 180.587L59.3239 191.503L60.6006 192.17L66.2985 181.283L64.9798 180.593L60.6403 188.886H60.6391ZM50.4556 178.577L55.0932 181.002L55.6602 179.917L51.0226 177.492L50.4556 178.577ZM39.8313 178.024L50.7034 172.523L49.4467 171.599L38.5792 177.133L37.7539 178.253L44.096 182.917L44.878 181.854L39.7728 178.099L39.8301 178.022L39.8313 178.024ZM38.1911 173.801C37.4733 174.287 36.7766 174.612 36.1008 174.779C35.4251 174.945 34.7822 174.954 34.1731 174.807C33.564 174.658 33.004 174.352 32.492 173.886C31.9835 173.423 31.6211 172.909 31.4083 172.344C31.1944 171.78 31.1265 171.203 31.2025 170.613C31.2797 170.022 31.4948 169.459 31.849 168.921L32.9327 169.907C32.6615 170.407 32.5493 170.923 32.5937 171.456C32.6393 171.989 32.9012 172.474 33.3805 172.91C34.0854 173.551 34.9178 173.748 35.8787 173.503C36.8397 173.257 37.8252 172.583 38.8352 171.479L38.7639 171.414C38.37 171.515 37.976 171.551 37.5832 171.522C37.1916 171.493 36.8116 171.4 36.4445 171.245C36.0775 171.089 35.7384 170.871 35.4275 170.588C34.9061 170.115 34.5483 169.551 34.3508 168.899C34.1544 168.247 34.1322 167.576 34.2853 166.884C34.4385 166.194 34.781 165.554 35.3141 164.969C35.8261 164.407 36.4188 164.007 37.0945 163.77C37.7702 163.533 38.46 163.484 39.1626 163.623C39.8663 163.762 40.521 164.113 41.1289 164.676C41.496 165.02 41.8046 165.431 42.0536 165.906C42.3026 166.382 42.4336 166.921 42.4464 167.525C42.4593 168.129 42.3073 168.793 41.9882 169.517C41.6702 170.242 41.1289 171.024 40.3644 171.864C39.6325 172.669 38.9077 173.314 38.1899 173.799L38.1911 173.801ZM39.4747 170.143C39.8032 169.99 40.0908 169.777 40.3386 169.505C40.6671 169.143 40.8893 168.729 41.0038 168.261C41.1196 167.792 41.1149 167.327 40.9933 166.865C40.8706 166.402 40.6204 165.999 40.2416 165.654C39.8687 165.315 39.449 165.103 38.9814 165.019C38.5138 164.935 38.052 164.971 37.5925 165.128C37.1343 165.285 36.7298 165.554 36.3802 165.939C36.0389 166.314 35.8109 166.734 35.6964 167.194C35.5818 167.656 35.5876 168.11 35.7127 168.559C35.8378 169.008 36.0856 169.402 36.4586 169.741C36.7403 169.997 37.0524 170.179 37.3961 170.289C37.7398 170.399 38.0906 170.44 38.4471 170.413C38.8037 170.386 39.1474 170.296 39.4747 170.143Z" fill="#BFBFBF"/>
                        <path d="M93.6008 108.75C93.6008 113.672 87.3478 117.5 79.8011 117.5C72.1465 117.5 66.0013 113.672 66.0013 108.75C66.0013 107.109 65.6779 107.984 75.1652 88.9531C76.0277 86.9844 77.8605 86 79.6932 86C81.6338 86 83.4666 86.9844 84.3291 88.9531C93.7086 107.875 93.493 107 93.493 108.75H93.6008ZM74.9496 101.094C73.6559 103.719 72.6856 105.688 71.9309 107H87.5634C86.9165 105.797 85.9462 103.938 84.7603 101.422C83.5744 98.9062 81.8495 95.625 79.8011 91.25H79.6932V91.3594C77.7527 95.4062 76.1355 98.5781 74.9496 101.094ZM122.925 122.75C123.788 122.75 124.65 123.625 124.65 124.5V126.25C124.65 127.234 123.788 128 122.925 128H78.0761C77.1058 128 76.3511 127.234 76.3511 126.25V124.5C76.3511 123.625 77.1058 122.75 78.0761 122.75H97.9132V89.0625C94.8945 88.1875 92.6305 85.6719 91.9836 82.5H78.0761C77.1058 82.5 76.3511 81.7344 76.3511 80.75V79C76.3511 78.125 77.1058 77.25 78.0761 77.25H92.5227C93.9242 74.1875 96.9429 72 100.501 72C103.951 72 106.969 74.1875 108.371 77.25H122.925C123.788 77.25 124.65 78.125 124.65 79V80.75C124.65 81.7344 123.788 82.5 122.925 82.5H108.91C108.263 85.6719 105.999 88.1875 103.088 89.0625V122.75H122.925ZM100.501 84.25C102.333 84.25 103.951 82.7188 103.951 80.75C103.951 78.8906 102.333 77.25 100.501 77.25C98.5601 77.25 97.0507 78.8906 97.0507 80.75C97.0507 82.7188 98.5601 84.25 100.501 84.25ZM134.892 108.75H135C135 113.672 128.747 117.5 121.2 117.5C113.546 117.5 107.401 113.672 107.401 108.75C107.401 107.109 107.077 107.984 116.564 88.9531C117.427 86.9844 119.26 86 121.092 86C123.033 86 124.866 86.9844 125.728 88.9531C135.108 107.875 134.892 107 134.892 108.75ZM113.33 107H128.963C128.316 105.797 127.345 103.938 126.16 101.422C124.974 98.9062 123.249 95.625 121.2 91.25H121.092V91.3594C119.152 95.4062 117.535 98.5781 116.349 101.094C115.055 103.719 114.085 105.688 113.33 107Z" fill="#808080"/>
                    </g>
                </svg>
            </div>

            <div>
                <?php if(!empty($label)) : ?>
                    <span class="sm:text-sm sm:px-5 sm:py-3 inline-block uppercase border border-gray-500 rounded-md px-2.5 py-1.5 mb-4 font-normal text-[10px] text-gray-500">
                       <?=$label?>
                    </span>
                <?php endif; ?>
                <h2 class="md:text-4xl xl:text-[2.5rem] text-2xl  font-semibold leading-tight  text-accent *:text-white-800 *:block">
                    <?=$title?>
                </h2>
            </div>
            <!-- услуги на странице участника-->
            <?php if(!empty($services)) : ?>
                <div class="relative mt-10">
                    <div class="text-center">
                        <div role="tablist" aria-label="tabs" class="sm:flex-wrap sm:items-start md:gap-x-4 gap-x-2 tabList relative flex  justify-start overflow-hidden">
                            <?php
                            if (!empty($terms) && !is_wp_error($terms)):
                                //перебор услуг фирмы
                                $counter = 0;
                                foreach ($terms as $key=>$term):
                                  //перебор услуг участника
                                  foreach ($services as $key_serv=>$service):
                                    if($service == $term->term_id):
                            ?>          <button role="tab" aria-selected="true" aria-controls="panel-<?=$counter?>" tabindex="<?=$counter?>" title="tab item" class="md:mb-4 mb-2 tab relative block rounded-full <?=($counter==0)? ' active' :''?>">
                                          <span class="sm:inline-block sm:h-auto lg:text-sm xl:px-10 xl:py-4 px-5 py-2.5 text-xs h-full flex items-center uppercase border border-gray-300 bg-black-600 rounded-md font-semibold text-gray-400 hover:bg-gray-600 hover:text-white-800 transition-all duration-500">
                                            <?=esc_html($term->name);?>
                                          </span>
                                        </button>
                            <?php   $counter++;
                                    endif;
                                    endforeach;
                                endforeach;
                            endif;  ?>
                        </div>
                    </div>
                    <div class="mt-4 relative w-full box-panel">
                        <?php
                        if (!empty($services) && !is_wp_error($services)):
                            $counter = 0;
                            foreach ($terms as $key=>$term):
                                foreach ($services as $service):
                                    if($service == $term->term_id):
                                ?>
                                  <div class="panel xs:gap-x-4 xs:grid-cols-3 md:gap-x-6 grid grid-cols-1  absolute top-0  w-full justify-center transition duration-500 <?=($counter==0)? 'visible opacity-100 scale-100' :'invisible opacity-0 scale-90'?>" id="panel-<?=$counter?>">
                        <?php
                                // Получаем посты из текущего термина
                                $query = new WP_Query([
                                    'post_type' => 'services',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'typeservices',
                                            'field' => 'term_id',
                                            'terms' => $term->term_id,
                                        ],
                                    ],
                                    'posts_per_page' => -1, // Получить все посты
                                    'orderby' => 'date', // Сортировка по дате
                                    'order' => 'DESC', // По убыванию (от новых к старым)
                                ]);

                                if ($query->have_posts()) {
                                    $keyPost = 0;
                                    $countPosts = $query->post_count;
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $keyPost++;
                                        $setClass = '';
                                        if($keyPost == 3){
                                            $setClass= 'row-span-2';
                                        }elseif ($keyPost == 4 && $countPosts == 4) {
                                            $setClass= 'col-span-2';
                                        }elseif ($keyPost == 6 && $countPosts == 6){
                                            $setClass= 'col-span-3';
                                        }elseif ($keyPost == 7 && $countPosts == 7){
                                            $setClass= 'col-span-2';
                                        }
                                        // Выводим заголовок поста с ссылкой
                                        ?>
                                        <div class="<?=$setClass;?> sm:px-5 md:mb-6 md:text-xl xl:text-2xl py-3 px-2.5 mb-4 text-sm group overflow-hidden border border-gray-300 bg-black-600 rounded-md font-semibold  text-white-800 transition-all duration-500 relative">
                                            <a href="<?=get_permalink()?>" class="sm:pr-0 pr-6" target="_self"><?=get_the_title()?></a>
                                            <div class="absolute opacity-0 bottom-3 right-6 group-hover:right-3 group-hover:opacity-100 transition-all duration-500">
                                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                                    <path d="M12.8333 5.5L19.5 12M19.5 12L12.8333 18.5M19.5 12L3.5 12" stroke="#CCA670" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="absolute w-24 h-24 -bottom-20 -left-20 bg-accent blur-[5rem] opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                                            <div class="absolute w-10 h-10 -top-8 -right-8 bg-accent blur-[7.5rem] opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                                        </div>
                                  <?php  }
                                } else {
                                    echo '<p>Нет услуг в этой категории.</p>';
                                }

                                // Сбрасываем глобальную переменную $post
                                wp_reset_postdata();
                                ?>
                            </div>
                            <?php $counter++; endif;
                                endforeach;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
