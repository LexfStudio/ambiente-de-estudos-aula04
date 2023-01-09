<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'reset.css' ?>">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'style.css' ?>">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'media.css' ?>">
    <title><?php echo $title ?></title>
</head> 
<body>

<!-- Cabeçalho do site: Begin -->
<header>
    <div id="logo">
        <a href="<?php echo PATH_INDEX ?>">
            <img src="<?php echo PATH_IMG.'logo.png' ?>" alt="Lexf Studio">
        </a>
    </div>
    <!-- Menu principal: Begin -->
    <nav id="nav-main-body">
        <div id="nav-main-grp-desktop">
            <button><a href="#">HTML5</a></button>
            <button><a href="#">CSS3</a></button>
            <button><a href="#">JavaScript</a></button>
            <button><a href="#">PHP</a></button>
            <button><a href="#">MySQL</a></button>
        </div>
        <button id="nav-main-btn-mobile"><a href="#"><span class="nav-main-span-dashes"></span></a></button>
    </nav>
    <!-- Menu principal: End -->
</header>
<!-- Cabeçalho do site: End -->