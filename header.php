<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moreau</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="<?php echo get_template_directory_uri(); ?>/functions.js"></script>

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="container">
            <a href="<?php echo home_url(); ?>">
                <img class="logo-menu" src="<?php echo get_template_directory_uri(); ?>/img/logomenu.png" alt="Logo do site">
            </a>
            <nav class="menu">
                <ul>
                    <li><a href="http://moreau-local.local/advogados/">ADVOGADOS</a></li>
                    <li><a href="http://moreau-local.local/atuacao/">ATUAÇÃO</a></li>
                    <li class="submenu-item">
                        <a href="" onclick="return false;">PROF. PIERRE MOREAU <span class="arrow-down"></span></a>
                        <ul class="submenu">
                            <li><a href="http://moreau-local.local/cronologia/">CRONOLOGIA</a></li>
                            <li><a href="http://moreau-local.local/publicacoes/">PUBLICAÇÕES</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moreau-local.local/videos/">VÍDEOS</a></li>
                    <li class="submenu-item">
                        <a href="" onclick="return false;">NOTÍCIAS <span class="arrow-down"></a>
                        <ul class="submenu">
                            <li><a href="http://moreau-local.local/noticias/">NOTÍCIAS</a></li>
                            <li><a href="http://moreau-local.local/artigos/">ARTIGOS</a></li>
                        </ul>
                    </li>
                    <li class="submenu-item">
                        <a href="" onclick="return false;">CONTATO <span class="arrow-down"></a>
                        <ul class="submenu">
                            <li><a href="http://moreau-local.local/fale-conosco/">FALE CONOSCO</a></li>
                            <li><a href="http://moreau-local.local/trabalhe-conosco/">TRABALHE CONOSCO</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <?php echo do_shortcode('[gtranslate]'); ?>
            <img class="ilustracaoheader" src="<?php echo get_template_directory_uri(); ?>/img/ativo2.png" alt="Ilustração">
        </div>
    </header>