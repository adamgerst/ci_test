<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../main/Math.php';

class MathTest extends PHPUnit_Framework_TestCase {

    public function testAddCommutatitve() {
        $math = new Math();
        $this->assertEquals(3,$math->add(1,2));
        $this->assertEquals(3,$math->add(2,1));
    }

    public function testAddCatchesInvalidInput() {
        $math = new Math();
        $this->setExpectedException('InvalidArgumentException');
        $math->add(3,'asdf');
    }

    public function testAddFail() {
    
        $math = new Math();
        $this->assertNotEquals(4, $math->add(1,2));
    }
}
