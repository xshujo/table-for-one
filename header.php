<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <section class="header__nav">
            <?php wp_nav_menu(array(
                "menu" => "header",
                "container" => "nav"
            )) ?>

            <?php the_custom_logo() ?>

            <?php get_search_form(); ?>
        </section>
    </header>