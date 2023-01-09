<?php 

namespace Classes\Animals;

class Eagle
{
    use AnimalTrait;

    public $age = 3;

    /**
     * @return string
     */
    public function fly()
    {
        return 'whoohooo';
    }

    /**
     * @return string
     */
    public function eat()
    {
        return 'yummy';
    }
}
