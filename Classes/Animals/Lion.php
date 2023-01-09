<?php 

namespace Classes\Animals;

class Lion
{
    use SleepableTrait, EatableTrait;

    public $age = 10;

    /**
     * @return string
     */
    public function roar()
    {
        return 'wrrrrr';
    }
}
