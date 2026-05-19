<?php
$titulo_documento = $titulo_documento ?? 'Portal de Informações';
?>

<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= htmlspecialchars($titulo_documento)?> - GABnet</title>
        <link
        rel="shortcut icon"
        href="/gabnet-system/assets/images/favicon.ico"
        type="image/x-icon"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
        rel="stylesheet"
        />
        <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Sora:wght@100..800&display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="/gabnet-system/assets/css/dashboard.css">
        <link rel="stylesheet" href="/gabnet-system/assets/css/styles.css" />
        <?php if (!empty($css_extra)): ?>
            <?php foreach ($css_extra as $css):?>
                <link rel="stylesheet" href="/gabnet-system/assets/css/<?= htmlspecialchars($css) ?>"/>
            <?php endforeach;?>
        <?php endif; ?>
    </head>
    <body class="<?= htmlspecialchars($class_body)?>">
        <div class="sidebar-overlay" id="overlay" onclick="toggleSidebar()"></div>