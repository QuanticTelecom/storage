<?php namespace QuanticTelecom\Storage\Tests;

use PHPUnit_Framework_TestCase;
use QuanticTelecom\Storage\Model;

class ModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function weCanGetTheBusinessLogicClassesAfterSetting()
    {
        $businessLogicClasses = [
            'FooBar',
            'Foo',
            'Bar'
        ];
        $model = new Model();

        $model->setAllBusinessLogicClasses($businessLogicClasses);

        $this->assertEquals($model->getAllBusinessLogicClasses(), $businessLogicClasses);
    }
}
