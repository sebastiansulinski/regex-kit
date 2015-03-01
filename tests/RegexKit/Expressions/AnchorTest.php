<?php

use SSD\RegexKit\Factory;

class AnchorTest extends BaseTest {


    public function testMakeWithNoAttributes()
    {

        $string = Factory::anchor(
            'Visit my website at http://ssdtutorials.com'
        );

        $expected  = 'Visit my website at ';
        $expected .= '<a href="http://ssdtutorials.com"';
        $expected .= '>ssdtutorials.com</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }


    public function testMakeWithAttributes()
    {

        $string = Factory::anchor(
            'Visit my website at http://ssdtutorials.com',
            ['target' => '_blank']
        );

        $expected  = 'Visit my website at ';
        $expected .= '<a href="http://ssdtutorials.com"';
        $expected .= ' target="_blank">ssdtutorials.com</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }


}