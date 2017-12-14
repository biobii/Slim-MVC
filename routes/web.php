<?php

use App\Controllers\UserController;

$app->get('/', function($request, $response) {
    return $this->view->render($response, 'welcome.twig');
});

$app->get('/users', UserController::class.':index');
