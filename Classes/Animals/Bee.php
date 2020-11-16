<?php 

namespace Classes\Animals;

class Bee
{
    public $age = 1;

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
}