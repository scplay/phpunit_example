<?php
use PHPUnit\Framework\TestCase;

class FirstTestCase extends TestCase
{
    protected function setUp() {
        require __DIR__ . '/../vendor/autoload.php'; 
    }

    public function test_a_simple_add_func()
    {
        $a = 1;
        $b = 2;

        $this->assertEquals(3, $a + $b);
    }

    public function test_my_src_add_class_calc()
    {
        $this->assertEquals(5, \Zeon\Add::calc(2, 3));
    }

    /** @test */
    public function my_src_multi_class_calc()
    {
        $this->assertEquals(50, \Zeon\Multi::calc(5, 10));
    }
}
