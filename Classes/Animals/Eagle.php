<?php 

namespace Classes\Animals;

class Eagle
{
    use SleepableTrait, EatableTrait, FlyableTrait;

    public $age = 3;
}
