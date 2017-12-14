<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function index($request, $response)
    {
        $data = User::all();
        return $this->c->view->render($response, 'users.twig', [
            'users' => $data
        ]);
    }

}
