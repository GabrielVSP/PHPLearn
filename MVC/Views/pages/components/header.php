<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::docTitle ?></title>

    <link rel="stylesheet" href="<?php echo VIEW_PATH ?>/styles/general.css">
    <link rel="stylesheet" href="<?php echo VIEW_PATH ?>/styles/contact.css">
    <link rel="stylesheet" href="<?php echo VIEW_PATH ?>/styles/about.css">

</head>
<body>
    
<header>

    <h2>Omega Industries</h2>

    <nav>

        <?php 

            foreach(array_reverse($this->paths) as $path) {

        ?>

            <a href="<?php echo MAIN_PATH . "/$path" ?>"><?php echo strtoupper($path)?></a>

        <?php } ?>

    </nav>

</header>