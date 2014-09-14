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

namespace WellCommerce\Bundle\AttributeBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Class Attribute
 *
 * @package WellCommerce\Bundle\AttributeBundle\Entity
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 *
 * @ORM\Table(name="attribute")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="WellCommerce\Bundle\AttributeBundle\Repository\AttributeRepository")
 */
class Attribute
{
    use ORMBehaviors\Translatable\Translatable;
    use ORMBehaviors\Timestampable\Timestampable;
    use ORMBehaviors\Blameable\Blameable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="WellCommerce\Bundle\AttributeBundle\Entity\AttributeGroup", mappedBy="attributes")
     */
    private $groups;

    /**
     * @ORM\OneToMany(targetEntity="WellCommerce\Bundle\AttributeBundle\Entity\AttributeValue", mappedBy="attribute", cascade={"persist"}, orphanRemoval=true)
     */
    private $values;

    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->values = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups(ArrayCollection $collection)
    {
        $this->groups = $collection;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues(ArrayCollection $collection)
    {
        foreach ($this->values as $value) {
            if (!$collection->contains($value)) {
                $this->values->removeElement($value);
            }
        }

        $this->values = $collection;
    }
}

