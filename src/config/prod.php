<?php
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();

$app->register(new UrlGeneratorServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());

$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    return $twig;
}));

$app['debug'] = true;
$app['twig.path'] = array(__DIR__.'/../../templates');
//$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

return $app;
