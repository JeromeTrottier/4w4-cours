<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4 Trottier Jérôme</title>
    <?php wp_head() ?>
</head>

<body <?php body_class("site") ?>>
    <header class="site__header">
        <h1 class="header__titre">
            <?php blogInfo('name') ?>
        </h1>
        <h2 class="header__desc">
            <!-- <?php blogInfo('description') ?> -->
            Conception d'interface Web
        </h2>
    </header>
    <section class="site__barre">
        <input type="checkbox" id="chk-burger">
        <label for="chk-burger" id="burger">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <?php wp_nav_menu(array("menu" => "principal", 'container' => "nav")); ?>
    </section>