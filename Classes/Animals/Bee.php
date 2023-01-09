<?php 

namespace Classes\Animals;

use AnimalTrait

class Bee
{
    public $age = 1;

    use AnimalTrait;

    /**
     * @return string
     */
    public function fly()
    {
        return 'whoohooo';
    }
}
