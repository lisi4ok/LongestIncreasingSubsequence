<?php

namespace Classes;

class Caller
{
    const NAMESPACE = '\Classes\Animals';

    protected $json;

    function __construct(string $json)
    {
        $this->json = $json;
    }

    public function output()
    {
        $classes = json_decode($this->json, true);
        foreach ($classes as $class) {
            $classInstance = self::NAMESPACE . DIRECTORY_SEPARATOR . $class;
            if (class_exists($classInstance)) {
                echo 'The:<b>' . $class . '</b><br />';
                $instance = new $classInstance();
                $properties = get_object_vars($instance);
                if (count($properties)) {
                    foreach ($properties as $property => $value) {
                        echo 'Has property:<b>' . $property . '</b> with value <b>' . $value . '</b><br />';
                    }
                }
                $methods = get_class_methods($classInstance);
                if (count($methods)) {
                    foreach ($methods as $method) {
                        echo $method . ': ' .$instance->$method();
                        echo '<br />';
                    }
                }
            }
        }
    }
}