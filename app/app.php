<<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    session_start();
    if (empty($_SESSION['inputs'])) {
        $_SESSION['inputs'] = array();
    }

    $appp  = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
 ?>
