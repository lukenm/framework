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

use PhpDeal\Annotation as Contract;

class StubGrandparent
{
    /**
     * @var int
     */
    protected $value = 10;

    /**
     * @Contract\Ensure("is_numeric($this->value)")
     */
    public function add($variable)
    {

    }
} 
