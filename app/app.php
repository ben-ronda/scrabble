<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    session_start();
    if (empty($_SESSION['inputs'])) {
        $_SESSION['inputs'] = array();
    }

    $app  = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('scrabble_form.html.twig');
    });

    $app->post("/points", function() use ($app) {
        $ScrabbleScore = new Scrabble;
        $result = $ScrabbleScore->scrabble_score($_POST['word']);

        return $app['twig']->render('score.html.twig', array('results' => $result));
    });

    return $app;
 ?>
