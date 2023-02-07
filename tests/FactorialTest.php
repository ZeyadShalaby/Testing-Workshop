<?php
require './src/Factorial.php';
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase{

    public function testFactorial(){
        $fact = new Factorial();

        $this->assertEquals(1, $fact->factorial(0));
        $this->assertEquals(1, $fact->factorial(1));
        $this->assertEquals(120, $fact->factorial(5));
        $this->assertEquals(24, $fact->factorial(4));
        $this->assertEquals(null, $fact->factorial(-3));
        $this->assertEquals(null, $fact->factorial(1.5));
        $this->assertEquals(null, $fact->factorial('abc'));
        $this->assertEquals(null, $fact->factorial(false));


}
}

?>