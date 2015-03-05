<?php namespace QuanticTelecom\Storage;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Model as Moloquent;

class Model extends Moloquent
{
    use SoftDeletes;
}