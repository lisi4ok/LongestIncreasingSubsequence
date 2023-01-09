<?php 

namespace Classes\Animals;

use AnimalTrait

class Bee
{
    use SleepableTrait, FlyableTrait;

    public $age = 1;
}
