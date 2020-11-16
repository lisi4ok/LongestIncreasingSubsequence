<?php 

namespace Classes\Animals;

class Lion
{
    public $age = 10;

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