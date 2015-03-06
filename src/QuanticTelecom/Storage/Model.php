<?php namespace QuanticTelecom\Storage;

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait;
use Jenssegers\Mongodb\Model as Moloquent;

class Model extends Moloquent
{
    use SoftDeletingTrait;
}
