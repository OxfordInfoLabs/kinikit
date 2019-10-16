<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 16/10/2019
 * Time: 20:45
 */

namespace NewApp\Services;

use NewApp\Objects\Example;

class ExampleService {

    /**
     * Get all examples
     *
     * @return Example[]
     */
    public function getAllExamples() {
        return Example::filter("ORDER BY submitted DESC");
    }
}