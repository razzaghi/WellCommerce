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

namespace WellCommerce\Bundle\AppBundle\Repository;

use WellCommerce\Bundle\AppBundle\Entity\Product;
use WellCommerce\Bundle\CoreBundle\Repository\RepositoryInterface;

/**
 * Interface ProductAttributeRepositoryInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface ProductAttributeRepositoryInterface extends RepositoryInterface
{
    /**
     * Returns attribute by id
     *
     * @param string  $id
     * @param Product $product
     *
     * @return null|\WellCommerce\Bundle\AppBundle\Entity\ProductAttribute
     */
    public function findProductAttribute($id, Product $product);
}