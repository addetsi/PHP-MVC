<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function contact()
    {
        return Application::$app->router->renderView('contact');

    }

    public function home()
    {
        $params = [
            'name' => 'godw',
            'see' => 'sds'
        ];
        
        return $this->render('home', $params);
    }

    public function handleContact(Request $request)
        {
            $body = $request->getBody();
            var_dump($body);
         

        }
}