<?php

/**
 * Created by PhpStorm.
 * User: Kévin
 * Date: 26/01/2016
 * Time: 20:12
 */

namespace Kobold\controllers\Account;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountController
{
    public function createLogin(Request $request, Application $app)
    {
        return $app['twig']->render('Account\login.html', array());
    }
}