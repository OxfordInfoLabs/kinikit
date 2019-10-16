<?php

namespace NewApp\Controllers;

use Kinikit\MVC\Response\View;
use NewApp\Services\ExampleService;


/**
 * Home controller
 */
class Home {

    /**
     * @var ExampleService
     */
    private $exampleService;


    /**
     * Home constructor.  Injects service
     *
     * @param ExampleService $exampleService
     */
    public function __construct($exampleService) {
        $this->exampleService = $exampleService;
    }

    /**
     * Handle request method, marked up with return value for default decoration.
     *
     * @return View
     */
    public function handleRequest() {

        // Grab all examples
        $allExamples = $this->exampleService->getAllExamples();

        return new View("page/home", ["examples" => $allExamples]);
    }


}