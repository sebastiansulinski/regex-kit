<?php

use SSD\RegexKit\Factory;

class AtUserTest extends BaseTest {

    public function testMakeWithNoHref()
    {

        $string = Factory::atUser('Thanks very much @JohnDoe');

        $expected  = 'Thanks very much ';
        $expected .= '<a href="/johndoe"';
        $expected .= '>@JohnDoe</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }


    public function testMakeWithNoHrefWithAttributes()
    {

        $string = Factory::atUser(
            'Thanks very much @JohnDoe',
            null,
            ['target' => '_blank']
        );

        $expected  = 'Thanks very much ';
        $expected .= '<a href="/johndoe"';
        $expected .= ' target="_blank">@JohnDoe</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }


    public function testMakeWithHref()
    {

        $string = Factory::atUser('Thanks very much @JohnDoe', '/user/');

        $expected  = 'Thanks very much ';
        $expected .= '<a href="/user/johndoe"';
        $expected .= '>@JohnDoe</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }


    public function testMakeWithHrefAndAttributes()
    {

        $string = Factory::atUser(
            'Thanks very much @JohnDoe',
            '/user/',
            ['target' => '_blank']
        );

        $expected  = 'Thanks very much ';
        $expected .= '<a href="/user/johndoe"';
        $expected .= ' target="_blank">@JohnDoe</a>';

        $this->assertEquals(
            $expected,
            $string
        );

    }

}