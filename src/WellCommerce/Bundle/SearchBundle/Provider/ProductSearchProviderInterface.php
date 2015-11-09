<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\SearchBundle\Provider;

use WellCommerce\Bundle\SearchBundle\Query\SimpleQuery;

/**
 * Interface ProductSearchProviderInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface ProductSearchProviderInterface
{
    /**
     * @param SimpleQuery $query
     */
    public function searchProducts(SimpleQuery $query);
}