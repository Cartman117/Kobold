<?php

/**
 * Created by PhpStorm.
 * User: Kévin
 * Date: 26/01/2016
 * Time: 20:12
 */

namespace src\controllers\Account;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountController
{
    public function __construct(Application $app)
    {

    }

    public function createLogin(Application $app)
    {
        return $app['twig']->render('index.html', array());
    }
}