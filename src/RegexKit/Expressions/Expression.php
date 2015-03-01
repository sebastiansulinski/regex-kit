<?php namespace SSD\RegexKit\Expressions;


abstract class Expression {

    /**
     * Array of arguments passed through the constructor.
     *
     * @var array
     */
    protected $arguments = [];


    /**
     * Constructor.
     *
     * @param array $arguments
     */
    public function __construct(array $arguments)
    {

        $this->arguments = $arguments;

    }

    /**
     * Replace all urls with anchor tag.
     *
     * @return mixed
     */
    final public function make()
    {

        return preg_replace_callback(
            $this->regex(),
            [$this, 'replace'],
            $this->arguments[0]
        );

    }


    abstract protected function regex();

    abstract protected function replace($matches);


}