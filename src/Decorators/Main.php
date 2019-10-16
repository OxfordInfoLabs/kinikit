<?php

namespace NewApp\Decorators;
use Kinikit\MVC\Response\View;

/**
 * Main decorator
 */
class Main {

    public function handleRequest(){
        return new View("decorator/main");
    }

}