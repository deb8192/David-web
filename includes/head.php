<?php
    //session_start(); 
    include_once('global-constants.php');   //constants for PHP code
    include_once('functions.php');

    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $lang = ['es', 'en', 'cat'];

    $engLang = strpos($url, $lang[1]);
    $catLang = strpos($url, $lang[2]);

    echo '<!DOCTYPE html>';

    //If not default version
    if($engLang || $catLang)
    {
        require_once('../admin/database.php');  
        //If English version, html lang is "en"
        if($engLang)
        { ?>
            <html lang="<?php echo $lang[1]; ?>">
        <?php }

        //If Catalan version, html lang is "cat"
        else if($catLang)
        { ?>
            <html lang="<?php echo $lang[2]; ?>">
        <?php } ?>

        <head>
            <title><?php echo $title; ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width = device-width, initial-scale = 1.0">
            <meta name="description" content="<?php echo $description; ?>">
            <meta name="keywords" content="<?php echo $keywords; ?>">
            <link rel = "stylesheet" href="../css/bootstrap/bootstrap.css">
            <link rel = "stylesheet" href="../css/bootstrap/bootstrap-grid.css">
            <link rel = "stylesheet" href="../css/bootstrap/bootstrap-reboot.css">
            <link rel = "stylesheet" href="../css/style.css?v=2">
            <link rel = "stylesheet" href="../images/web-icons/flaticons/flaticon.css">
            <script src="../lib/js/jquery/jquery-3.5.1.slim.min.js"></script>
            <script src="../js/script.js"></script>
            <script src="../js/bootstrap-js/bootstrap.bundle.js"></script>
            <script src="../js/bootstrap-js/bootstrap.js"></script>  
        </head>
    <?php }

    //If default version, html lang is Spanish "es"
    else
    { 
        require_once('admin/database.php');  
        ?>
        <html lang="<?php echo $lang[0]; ?>">
            <head>
                <title><?php echo $title; ?></title>
                <meta charset="utf-8">
                <meta name="viewport" content="width = device-width, initial-scale = 1.0">
                <meta name="description" content="<?php echo $description; ?>">
                <meta name="keywords" content="<?php echo $keywords; ?>">
                <link rel = "stylesheet" href="css/bootstrap/bootstrap.css">
                <link rel = "stylesheet" href="css/bootstrap/bootstrap-grid.css">
                <link rel = "stylesheet" href="css/bootstrap/bootstrap-reboot.css">
                <link rel = "stylesheet" href="css/style.css?v=2">
            <link rel = "stylesheet" href="images/web-icons/flaticons/flaticon.css">
                <script src="lib/js/jquery/jquery-3.5.1.slim.min.js"></script>
                <script src="js/script.js"></script>
                <script src="js/bootstrap-js/bootstrap.bundle.js"></script>
                <script src="js/bootstrap-js/bootstrap.js"></script>  
            </head>
    <?php }
?>