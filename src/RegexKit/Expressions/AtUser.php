<?php namespace SSD\RegexKit\Expressions;


use SSD\RegexKit\Traits\TagAttributable;


class AtUser extends Expression implements Contract {

    use TagAttributable;


    /**
     * Regular expression.
     *
     * @return string
     */
    protected function regex()
    {

        return '/@(\w+)/';

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
        $tag .= strtolower($this->href().$matches[1]);
        $tag .= '"';
        $tag .= $this->tagAttributes($this->arguments, 2);
        $tag .= '>';
        $tag .= $matches[0];
        $tag .= '</a>';

        return $tag;

    }


    /**
     * Get href before the user name.
     *
     * @return string
     */
    private function href()
    {

        if (empty($this->arguments[1])) {

            return '/';

        }

        return $this->arguments[1];

    }


}