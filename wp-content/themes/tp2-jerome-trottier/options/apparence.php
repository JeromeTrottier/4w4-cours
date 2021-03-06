<?php
//   Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
//   La fonction de rappel : function(WP_Customizer_Manager, $manager)
//   La méthode add_section( id de la section,
//                            [
//                                "title" => "Le titre de la section"
//                            ]);
//   La méthode add_setting ( Le nom de la variable php qui sera utilisée dans notre thème,
//                             [   "default" => la valeur par défaut de la variable,
//                                 "sanitize_callback"=> "sanitize_hex_color" // permet de valider/filtrer la donnée
//                             ]);   

//   La méthode add_control ( le nom de la variable php qui sera utilisé dans notre thème,
//                             ["section"=> le ID de la section,
//                              "setting"=> le nom de la variable,
//                              "label"=> l'étiquette de la variable dans le formulaire 
//                              ])                          

//   Pour utiliser une interface de couleur plus complexe on peut utiliser 
//   La méthode add_control (new WP_Customize_Color_Control($manager, le nom de la variable php,
//                         ["section"=>"le ID de la section",
//                         "label"=>l'étiquette de la variable dans le formulaire  ]));
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('section_modifier_background', [
        'title' => 'Modification de la couleur des backgrounds',
    ]);
    $manager->add_setting('couleur_background_header', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_header', [
        'section' => 'section_modifier_background',
        'label' => 'Couleur background du header',
    ]));
    $manager->add_setting('couleur_background_main', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_main', [
        'section' => 'section_modifier_background',
        'label' => 'Couleur background du main',
    ]));
    $manager->add_setting('couleur_background_footer', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_footer', [
        'section' => 'section_modifier_background',
        //'setting' => 'couleur_background_body',
        'label' => 'Couleur background du pied de page',
    ]));
});
