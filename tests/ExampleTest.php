<?php

use Dersam\ExampleClass;

class ExampleTest extends \Codeception\Test\Unit
{
    private $instance;

    protected function _before()
    {
        $this->instance = new ExampleClass();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(true);
    }
}