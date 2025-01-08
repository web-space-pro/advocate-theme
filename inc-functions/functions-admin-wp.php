<?php

add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');
add_action('admin_footer', 'custom_footer_content');
add_action('admin_notices', 'custom_about_page_message');


function custom_footer_content() {
    echo '<div class="custom-footer" style="font-size: 22px;color: rebeccapurple; margin-top: 100px; padding: 0 20px; text-align: center; position: absolute; bottom: 10px; left: 0; right: 0;">Тут будет текст поддержки</div>';
}

function custom_dashboard_widget() {
    echo '<div style="padding: 10px; background: #f9f9f9; border: 1px solid #ddd;">
        <h3>Добро пожаловать!</h3>
        <p>Тестовое сообщение</p>
        <a href="№" class="button-primary" target="_blank">Подробнее</a>
    </div>';
}

function add_custom_dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_welcome_widget',
        'Приветствие',
        'custom_dashboard_widget'
    );
}


function custom_about_page_message() {
    $current_screen = get_current_screen();
    if ($current_screen && $current_screen->base === 'about') {
        echo '<div style="padding: 20px; background: #c5d9ed; border: 1px solid #006064; margin: 20px 0; border-radius: 5px;">
            <h2>Спасибо за использование Нашей темы!</h2>
            <p>Надеемся, что вам понравится наш сайт. Если у вас есть вопросы, <a href="https://example.com" target="_blank">свяжитесь с нами</a>.</p>
            <a href="#" class="button-primary" style="margin-top: 10px;">Подробнее</a>
        </div>';
    }
}




function custom_admin_color_scheme() {
    // Путь к CSS-файлу вашей цветовой схемы
    $theme_dir = get_template_directory_uri() . '/admin/custom-admin-color-scheme.css';

    // Регистрируем цветовую схему
    wp_admin_css_color(
        'custom_scheme', // Уникальное имя схемы
        'Моя Цветовая Схема', // Название
        $theme_dir, // Путь к CSS-файлу
        array('#25282b', '#363b3f', '#a3b745', '#e14d43')  // Основные цвета для превью
    );
}
add_action('admin_init', 'custom_admin_color_scheme');

function set_default_admin_color_scheme($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'custom_scheme'
    );
    wp_update_user($args);
}
add_action('user_register', 'set_default_admin_color_scheme');

// Устанавливаем цветовую схему для существующих пользователей
function apply_custom_scheme_to_existing_users() {
    $users = get_users();
    foreach ($users as $user) {
        $user->admin_color = 'custom_scheme';
        wp_update_user($user);
    }
}
add_action('init', 'apply_custom_scheme_to_existing_users');

?>