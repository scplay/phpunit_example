<?php
use PHPUnit\Framework\TestCase;

class FirstTestCase extends TestCase
{
    protected function setUp() {
        require __DIR__ . '/../vendor/autoload.php'; 
    }

    /**
     * @dataProvider addCalcTestDataSet
     */
    public function test_my_src_add_class_calc($result, $a, $b)
    {
        $this->assertEquals($result, \Zeon\Add::calc($a, $b));
    }

    public function addCalcTestDataSet()
    {
        return [
            // here is datasets for other test func usage
            [5, 2, 3],
            [4, 2, 22],
            [3, 0, 3],
        ];
    }
}
