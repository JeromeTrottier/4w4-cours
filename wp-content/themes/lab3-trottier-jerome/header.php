<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3 Trottier Jérôme</title>
    <?php wp_head() ?>
</head>

<body <?php body_class("site") ?>>
    <header class="site__header">
        <h1 class="header__titre">
            <?php blogInfo('name') ?>
        </h1>
        <h2 class="header__desc">
            <?php blogInfo('description') ?>
        </h2>
    </header>
    <section class="site__barre">
        <nav class="navigation">
            <a href="#" class="navigation__lien">mon lien 001</a>
            <a href="#" class="navigation__lien">mon lien 002</a>
            <a href="#" class="navigation__lien">mon lien 003</a>
            <a href="#" class="navigation__lien">mon lien 004</a>
            <a href="#" class="navigation__lien">mon lien 005</a>
            <a href="#" class="navigation__lien">mon lien 006</a>
            <a href="#" class="navigation__lien">mon lien 007</a>
            <a href="#" class="navigation__lien">mon lien 008</a>
            <a href="#" class="navigation__lien">mon lien 009</a>
            <a href="#" class="navigation__lien">mon lien 010</a>
        </nav>
    </section>