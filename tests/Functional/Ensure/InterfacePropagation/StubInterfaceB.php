<?php

/**
 * PHP Deal framework
 *
 * @copyright Copyright 2014, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpDeal\Functional\Ensure\InterfacePropagation;

use PhpDeal\Annotation as Contract;

interface StubInterfaceB
{
    /**
     * @Contract\Ensure("$this->value !== -2")
     * @param int $variable
     */
    public function add($variable);
}
