<?php

namespace NewApp\Controllers;


use NewApp\Objects\Example;
use NewApp\Services\ExampleService;

class Api {

    /**
     * @var ExampleService
     */
    private $exampleService;

    /**
     * Api constructor.  Injects service
     *
     * @param ExampleService $exampleService
     */
    public function __construct($exampleService) {
        $this->exampleService = $exampleService;
    }


    /**
     * @http GET /examples
     *
     * @return Example[]
     */
    public function getAllExamples() {
        return $this->exampleService->getAllExamples();
    }

}