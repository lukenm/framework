<?php
/**
 * PHP Deal framework
 *
 * @copyright Copyright 2014, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpDeal\Functional\Verify\InterfacePropagation;

/**
 * @group propagation
 * @group inheritdoc
 */
class ContractWithInheritDocTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StubWithInheritDoc
     */
    private $stub;

    public function setUp()
    {
        parent::setUp();
        $this->stub = new StubWithInheritDoc();
    }

    public function tearDown()
    {
        unset($this->stub);
        parent::tearDown();
    }

    public function providerVerifyInvalid()
    {
        return [
            [
                // Stub can't accept this value
                'parameter' => 1
            ],
            [
                // StubInterfaceA can't accept this value
                'parameter' => 2
            ],
            [
                // StubInterfaceB can't accept this value
                'parameter' => 3
            ]
        ];
    }

    /**
     * @param int $parameter
     * @dataProvider providerVerifyInvalid
     * @expectedException \PhpDeal\Exception\ContractViolation
     */
    public function testVerifyInvalid($parameter)
    {
        $this->stub->add($parameter);
    }

    public function providerVerifyValid()
    {
        return [
            [
                'parameter' => 4
            ]
        ];
    }

    /**
     * @param int $parameter
     * @dataProvider providerVerifyValid
     */
    public function testVerifyValid($parameter)
    {
        $this->stub->add($parameter);
    }
}
