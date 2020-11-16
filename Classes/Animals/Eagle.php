<?php 

namespace Classes\Animals;

class Eagle
{
    public $age = 3;

    /**
     * @return string
     */
    public function sleep()
    {
        return 'zzzzzz';
    }

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