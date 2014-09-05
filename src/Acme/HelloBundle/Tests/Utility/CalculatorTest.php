<?php
/**
 * Created by IntelliJ IDEA.
 * User: guoshunw
 * Date: 2014/8/26
 * Time: 13:51
 */

namespace Acme\HelloBundle\Tests\Utility;


use Acme\HelloBundle\Utility\Calculator;
use PhpUnit_Framework_TestCase;

class CalculatorTest extends PhpUnit_Framework_TestCase{
    public function testAdd(){
        $calc = new Calculator();
        $result = $calc->add(30, 12);

        $this->assertEquals(42, $result);
    }

} 