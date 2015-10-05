<?php

namespace AppBundle\Tests\Controller;

use AppBundle\Service\StringFormat;

class StringFormatTest extends \PHPUnit_Framework_TestCase
{
    public function stringFormattingTestProvider()
    {
        return [
          [null, ""],
          ["a", "A"],
          ["B", "B"],
          ["chance", "Chance"],
          ["Massive", "Massive"],
          ["FORGET", "Forget"],
          ["sCIENCE", "Science"],
          ["MotIOn", "Motion"],
          ["blow up", "Blow Up"],
          ["rUn OVer", "Run Over"]
        ];
    }

    /**
     * @dataProvider stringFormattingTestProvider
     * @param string $stringInput
     * @param string $expectedStringOutput
     */
    public function testStringFormatting($stringInput, $expectedStringOutput)
    {
        $stringFormatService = new StringFormat();

        $formattedString = $stringFormatService($stringInput);

        $this->assertEquals($formattedString, $expectedStringOutput);
    }
}
