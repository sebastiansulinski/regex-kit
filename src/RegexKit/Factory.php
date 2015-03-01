<?php namespace SSD\RegexKit;

use Exception;

class Factory {


    /**
     * Return class name with namespace.
     *
     * @param $name
     *
     * @return string
     */
    private static function className($name)
    {

        $name = ucfirst($name);

        return __NAMESPACE__."\\Expressions\\{$name}";

    }


    /**
     * Call method on the object dynamically.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     * @throws Exception
     */
    public static function __callStatic($name, $arguments)
    {

        $class = static::className($name);

        if ( ! class_exists($class)) {

            throw new Exception("Class {$class} does not exist");

        }

        return (new $class($arguments))->make();

    }


}