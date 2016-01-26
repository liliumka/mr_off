<?php

// Отключаем некоторые пункты меню в админке:
function remove_menus(){
    remove_menu_page( 'index.php' );                  //Консоль
//    remove_menu_page( 'edit.php' );                   //Записи
//    remove_menu_page( 'upload.php' );                 //Медиафайлы
//    remove_menu_page( 'edit.php?post_type=page' );    //Страницы
//    remove_menu_page( 'edit-comments.php' );          //Комментарии
//    remove_menu_page( 'themes.php' );                 //Внешний вид
//    remove_menu_page( 'plugins.php' );                //Плагины
//    remove_menu_page( 'users.php' );                  //Пользователи
//    remove_menu_page( 'tools.php' );                  //Инструменты
//    remove_menu_page( 'options-general.php' );        //Настройки

    //http://masteroff.tvivanovatv.ru/wp-admin/plugin-install.php?tab=upload
    add_menu_page( 'Загрузить плагин', 'Загрузить плагин', 'manage_options', 'plugin-install.php?tab=upload', '', 'dashicons-admin-plugins', '100' );

    function my_plugin_options() {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        /* здесь можно что-нибудь вывести.. */
    }
}
add_action( 'admin_menu', 'remove_menus' );
