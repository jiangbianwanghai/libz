<?php
require_once './src/Demo.php';
//require_once 'PHPUnit/Framework.php';
class DemoTest extends PHPUnit_Framework_TestCase {

    protected $demo = '';

    protected function setUp() {
        parent::setUp ();
        $this->demo = new Demo();
    }

    protected function tearDown() {
 
        parent::tearDown ();
    }

    public function __construct() {

    }

    public function testSum() {
        $this->assertEquals(4,$this->demo->sum(2,2));
    }

    public function testSubstract() {
        $this->assertNotEquals(3,$this->demo->subtract(1,1));
    }
}