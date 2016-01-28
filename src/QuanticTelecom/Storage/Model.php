<?php namespace QuanticTelecom\Storage;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Model extends Moloquent
{
    use SoftDeletes;

    /**
     * @return string[] All the business logic classes the model come from.
     */
    public function getAllBusinessLogicClasses()
    {
        return $this->getAttribute('businessLogicClasses');
    }

    /**
     * Set the business logic classes.
     *
     * @param string[] $businessLogicClasses
     * @return void
     */
    public function setAllBusinessLogicClasses(array $businessLogicClasses)
    {
        $this->setAttribute('businessLogicClasses', $businessLogicClasses);
    }
}
