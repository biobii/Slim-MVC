<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

class Controller
{

    protected $c;

    public function __construct(ContainerInterface $controller)
    {
        $this->c = $controller;
    }

}
