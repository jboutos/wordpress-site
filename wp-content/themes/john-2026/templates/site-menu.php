<?php
wp_nav_menu(
    array(
        'theme_location' => 'header-menu', 
        'container_class' => 'my_extra_menu_class',
        'fallback_cb' => false 
    )
);
?>