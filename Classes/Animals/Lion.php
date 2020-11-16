<?php 

namespace CLasses\Animals

Class Lion
{
    public $age;

    /**
     * @return string
     */
    public function sleep(): string
    {
        return 'zzzzzz';
    }

    /**
     * @return string
     */
    public function roar(): string
    {
        return 'wrrrrr';
    }

    /**
     * @return string
     */
    public function eat(): string
    {
        return 'yummy';
    }
}