<?php

namespace Adder;

use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    public function testAdd(){
        $this->assertEquals(5, Adder::add(2, 3));
    }
}
