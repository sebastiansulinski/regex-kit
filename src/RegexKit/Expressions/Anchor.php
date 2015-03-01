<?php namespace SSD\RegexKit\Expressions;


use SSD\RegexKit\Traits\TagAttributable;


class Anchor extends Expression implements Contract {

    use TagAttributable;


    /**
     * Regular expression.
     *
     * @return string
     */
    protected function regex()
    {

        return '/(?:http:|https:|ftp:|file:)?\/\/([^\s]+)/i';

    }


    /**
     * Return formatted string with matched arguments.
     *
     * @param $matches
     *
     * @return string
     */
    protected function replace($matches)
    {

        $tag  = '<a href="';
        $tag .= $matches[0];
        $tag .= '"';
        $tag .= $this->tagAttributes($this->arguments);
        $tag .= '>';
        $tag .= $matches[1];
        $tag .= '</a>';

        return $tag;

    }


}