<?php 

namespace Classes\Animals;

class Dolphin
{
    use SleepableTrait;

    public $age = 5;

    public function swim()
    {
        return 'splah';
    }
}
