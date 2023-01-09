<?php 

namespace Classes\Animals;

class Dolphin
{
    use AnimalTrait;

    public $age = 5;

    public function swim()
    {
        return 'splah';
    }
}
