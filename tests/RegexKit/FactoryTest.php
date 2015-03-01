<?php

use SSD\RegexKit\Factory;

class FactoryTest extends BaseTest {


    /**
     * @expectedException \Exception
     *
     * @expectedExceptionMessage
     * Class SSD\RegularExpression\Expressions\Argument does not exist
     */
    public function testCallStaticNonExistentMethod()
    {

        $return = Factory::someClass('argument');

    }


}