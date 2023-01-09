<?php 

namespace Classes\Animals;

use AnimalTrait

class Bee
{
    use SleepableTrait;

    public $age = 1;

    /**
     * @return string
     */
    public function fly()
    {
        return 'whoohooo';
    }
}
