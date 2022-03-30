<?php

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../src/index.php");

final class indexTest extends TestCase
{
    public function test_index_ok()
    {
        $helloWorldString = HelloWorld();

        $this->assertTrue($helloWorldString === 'Hello World');
    }
}
