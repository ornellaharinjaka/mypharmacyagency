<?php

namespace Pharmacie\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitCategories
 *
 * @ORM\Table(name="produit_categories")
 * @ORM\Entity(repositoryClass="Pharmacie\ProduitBundle\Repository\ProduitCategoriesRepository")
 */
class ProduitCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, unique=true)
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ProduitCategories
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generates the magic method
     *
     */
    public function __toString()
    {
        return $this->type;
    }
}

