<?php
/**
 * PHP Deal framework
 *
 * @copyright Copyright 2014, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpDeal\Functional\Ensure\Propagation;

/**
 * @group propagation
 */
class ContractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Stub
     */
    private $stub;

    public function setUp()
    {
        parent::setUp();
        $this->stub = new Stub();
    }

    public function tearDown()
    {
        unset($this->stub);
        parent::tearDown();
    }

//    public function providerFooValid()
//    {
//        return [
//            [
//                'variable' => -10
//            ]
//        ];
//    }
//
//    /**
//     * @dataProvider providerFooValid
//     */
//    public function testFooValid($variable)
//    {
//        $this->stub->add($variable);
//    }

    public function providerAddInvalid()
    {
        return [
            [
                'variable' => 0
            ],
            [
                'variable' => ""
            ]
        ];
    }

    /**
     * @dataProvider providerAddInvalid
     * @expectedException \PhpDeal\Exception\ContractViolation
     */
    public function testAddInvalid($variable)
    {
        $this->stub->add($variable);
    }
} 
