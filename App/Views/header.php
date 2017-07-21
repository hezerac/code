<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $template['metas']; ?>
        
        <title><?= $template['title']; ?></title>
        
        <link href="/public/css/pretty.css" rel="stylesheet">
        <?= $template['links']; ?>
        
        <script></script>
        <?= $template['headScripts']; ?>
    </head>
    <body>
        <header>
            <a href="/">
                <img src="images/logo.png" alt="Logo">
            </a>
            <nav><?= $template['navigation']; ?></nav>
        </header>
