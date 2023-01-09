<?php 

namespace Classes\Animals;

class Lion
{
    use AnimalTrait;

    public $age = 10;

    /**
     * @return string
     */
    public function roar()
    {
        return 'wrrrrr';
    }

    /**
     * @return string
     */
    public function eat()
    {
        return 'yummy';
    }
}
