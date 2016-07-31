<?php

/**
 *
 *  * This file is part of the PEIP/Common package.
 *  * (c) 2016 Timo Michna <timomichna/yahoo.de>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 *
 */

namespace PEIP\Common\Contract\Property\Scalar;


interface HasNameInterface
{
    /**
     * @return string
     */
    public function getName() : string ;
}