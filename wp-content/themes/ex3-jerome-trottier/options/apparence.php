<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('mon_theme_apparence', [
        'title' => 'Personnalisation de l\'apparence',
    ]);
    $manager->add_setting('header_background', [
        'default' => '#000',
        'transport' => 'refresh',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'header_background', [
        'label' => 'Couleur de fond de l\'entête',
        'section' => 'mon_theme_apparence',
        'settings' => 'header_background',
    ]));
});
