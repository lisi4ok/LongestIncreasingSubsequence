<?php 

namespace Classes\Animals;

class Dolphin
{
    public $age = 5;

    use AnimalTrait;

    public function swim()
    {
        return 'splah';
    }
}
