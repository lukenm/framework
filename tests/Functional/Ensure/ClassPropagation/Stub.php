<?php
/**
 * PHP Deal framework
 *
 * @copyright Copyright 2014, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpDeal\Functional\Ensure\ClassPropagation;

use PhpDeal\Annotation as Contract;

class Stub extends StubParent
{
    /**
     * @Contract\Ensure("$this->value !== 1")
     */
    public function add($variable)
    {
        $this->value += $variable;
    }
}
