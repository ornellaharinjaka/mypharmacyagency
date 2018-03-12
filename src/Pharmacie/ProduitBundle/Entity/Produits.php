<?php

namespace Pharmacie\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="Pharmacie\ProduitBundle\Repository\ProduitsRepository")
 */
class Produits
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
     * @ORM\Column(name="designation_prod_mere", type="string", length=255, unique=true)
     */
    private $designationProdMere;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_achat_prod_mere", type="float", nullable=true)
     */
    private $prixAchatProdMere;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_de_vente_prod_mere", type="float", nullable=true)
     */
    private $prixDeVenteProdMere;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_prod_mere", type="integer")
     */
    private $stockProdMere;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_de_plaquette", type="integer")
     */
    private $nombreDePlaquette;

    /**
     * @var string
     *
     * @ORM\Column(name="code_prod_fils", type="string", length=255, nullable=true)
     */
    private $codeProdFils;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_prod_fils", type="string", length=255, nullable=true)
     */
    private $designationProdFils;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_achat_prod_fils", type="float", nullable=true)
     */
    private $prixAchatProdFils;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_de_vente_prod_fils", type="float", nullable=true)
     */
    private $prixDeVenteProdFils;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_prod_fils", type="integer", nullable=true)
     */
    private $stockProdFils;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_peremption", type="date", nullable=true)
     */
    private $dateDePeremption;

    /**
     * @ORM\OneToOne(targetEntity=ProduitCategories::class, cascade={"persist"})
     *
     * @ORM\JoinColumn(name="produit_categories_id", referencedColumnName="id")
     */
    private $produitCategories;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set designationProdMere
     *
     * @param string $designationProdMere
     *
     * @return Produits
     */
    public function setDesignationProdMere($designationProdMere)
    {
        $this->designationProdMere = $designationProdMere;

        return $this;
    }

    /**
     * Get designationProdMere
     *
     * @return string
     */
    public function getDesignationProdMere()
    {
        return $this->designationProdMere;
    }

    /**
     * Set prixAchatProdMere
     *
     * @param float $prixAchatProdMere
     *
     * @return Produits
     */
    public function setPrixAchatProdMere($prixAchatProdMere)
    {
        $this->prixAchatProdMere = $prixAchatProdMere;

        return $this;
    }

    /**
     * Get prixAchatProdMere
     *
     * @return float
     */
    public function getPrixAchatProdMere()
    {
        return $this->prixAchatProdMere;
    }

    /**
     * Set prixDeVenteProdMere
     *
     * @param float $prixDeVenteProdMere
     *
     * @return Produits
     */
    public function setPrixDeVenteProdMere($prixDeVenteProdMere)
    {
        $this->prixDeVenteProdMere = $prixDeVenteProdMere;

        return $this;
    }

    /**
     * Get prixDeVenteProdMere
     *
     * @return float
     */
    public function getPrixDeVenteProdMere()
    {
        return $this->prixDeVenteProdMere;
    }

    /**
     * Set stockProdMere
     *
     * @param integer $stockProdMere
     *
     * @return Produits
     */
    public function setStockProdMere($stockProdMere)
    {
        $this->stockProdMere = $stockProdMere;

        return $this;
    }

    /**
     * Get stockProdMere
     *
     * @return integer
     */
    public function getStockProdMere()
    {
        return $this->stockProdMere;
    }

    /**
     * Set nombreDePlaquette
     *
     * @param integer $nombreDePlaquette
     *
     * @return Produits
     */
    public function setNombreDePlaquette($nombreDePlaquette)
    {
        $this->nombreDePlaquette = $nombreDePlaquette;

        return $this;
    }

    /**
     * Get nombreDePlaquette
     *
     * @return integer
     */
    public function getNombreDePlaquette()
    {
        return $this->nombreDePlaquette;
    }

    /**
     * Set codeProdFils
     *
     * @param string $codeProdFils
     *
     * @return Produits
     */
    public function setCodeProdFils($codeProdFils)
    {
        $this->codeProdFils = $codeProdFils;

        return $this;
    }

    /**
     * Get codeProdFils
     *
     * @return string
     */
    public function getCodeProdFils()
    {
        return $this->codeProdFils;
    }

    /**
     * Set designationProdFils
     *
     * @param string $designationProdFils
     *
     * @return Produits
     */
    public function setDesignationProdFils($designationProdFils)
    {
        $this->designationProdFils = $designationProdFils;

        return $this;
    }

    /**
     * Get designationProdFils
     *
     * @return string
     */
    public function getDesignationProdFils()
    {
        return $this->designationProdFils;
    }

    /**
     * Set prixAchatProdFils
     *
     * @param float $prixAchatProdFils
     *
     * @return Produits
     */
    public function setPrixAchatProdFils($prixAchatProdFils)
    {
        $this->prixAchatProdFils = $prixAchatProdFils;

        return $this;
    }

    /**
     * Get prixAchatProdFils
     *
     * @return float
     */
    public function getPrixAchatProdFils()
    {
        return $this->prixAchatProdFils;
    }

    /**
     * Set prixDeVenteProdFils
     *
     * @param float $prixDeVenteProdFils
     *
     * @return Produits
     */
    public function setPrixDeVenteProdFils($prixDeVenteProdFils)
    {
        $this->prixDeVenteProdFils = $prixDeVenteProdFils;

        return $this;
    }

    /**
     * Get prixDeVenteProdFils
     *
     * @return float
     */
    public function getPrixDeVenteProdFils()
    {
        return $this->prixDeVenteProdFils;
    }

    /**
     * Set stockProdFils
     *
     * @param integer $stockProdFils
     *
     * @return Produits
     */
    public function setStockProdFils($stockProdFils)
    {
        $this->stockProdFils = $stockProdFils;

        return $this;
    }

    /**
     * Get stockProdFils
     *
     * @return integer
     */
    public function getStockProdFils()
    {
        return $this->stockProdFils;
    }

    /**
     * Set dateDePeremption
     *
     * @param \DateTime $dateDePeremption
     *
     * @return Produits
     */
    public function setDateDePeremption($dateDePeremption)
    {
        $this->dateDePeremption = $dateDePeremption;

        return $this;
    }

    /**
     * Get dateDePeremption
     *
     * @return \DateTime
     */
    public function getDateDePeremption()
    {
        return $this->dateDePeremption;
    }

    /**
     * Set produitCategories
     *
     * @param \Pharmacie\ProduitBundle\Entity\ProduitCategories $produitCategories
     *
     * @return Produits
     */
    public function setProduitCategories(ProduitCategories $produitCategories = null)
    {
        $this->produitCategories = $produitCategories;

        return $this;
    }

    /**
     * Get produitCategories
     *
     * @return \Pharmacie\ProduitBundle\Entity\ProduitCategories
     */
    public function getProduitCategories()
    {
        return $this->produitCategories;
    }
}
