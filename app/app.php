<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Palindrome.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provdier\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('palindrome.html.twig');
    });

    $app->get('id', function() use ($app)
    {
        $my_Letters = new Palindrome;
        $letters = $my_Letters->identify($_GET['word']);
        return $app['twig']->render('id.html.twig', array('letters' => $letters));
    });

    return $app;
 ?>
