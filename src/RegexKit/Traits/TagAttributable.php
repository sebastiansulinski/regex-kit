<?php namespace SSD\RegexKit\Traits;


trait TagAttributable {


    /**
     * Get tag attributes
     *
     * @param array $arguments
     * @param int $index
     * index of the arguments array that contains the tag attributes
     *
     * @return null|string
     */
    protected function tagAttributes(array $arguments, $index = 1)
    {

        if (empty($arguments[$index]) || !is_array($arguments[$index])) {

            return null;

        }

        array_walk($arguments[$index], [$this, 'process']);

        return " ".implode(" ", $arguments[$index]);

    }

    /**
     * Change value to the tag attribute format.
     *
     * @param $value
     * @param $key
     *
     * @return string
     */
    private function process(&$value, $key)
    {

        $value = ($key.'="'.$value.'"');

    }

}