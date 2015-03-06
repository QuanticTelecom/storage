<?php namespace QuanticTelecom\Storage\Tests;

use PHPUnit_Framework_TestCase;
use QuanticTelecom\Storage\Model;

class ModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return Model
     */
    public function getNewModel()
    {
        return new Model();
    }

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
        $model = $this->getNewModel();

        $model->setAllBusinessLogicClasses($businessLogicClasses);

        $this->assertEquals($model->getAllBusinessLogicClasses(), $businessLogicClasses);
    }
}
