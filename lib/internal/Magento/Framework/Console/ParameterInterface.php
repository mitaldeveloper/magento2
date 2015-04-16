<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Console;

/**
 * Interface to set custom parameters
 */
interface ParameterInterface
{
    /**
     * @return array
     */
    public function getCustomParameters();
}
