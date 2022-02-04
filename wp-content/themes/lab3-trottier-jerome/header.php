<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3 Trottier Jérôme</title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header class="entete">
        <h1 class="entete__titre">
            <?php blogInfo('name') ?>
        </h1>
        <h2 class="entete__desc">
            <?php blogInfo('description') ?>
        </h2>
    </header>