<?php
/**
 * Created by Jean Nica RALAVA.
 * User: jralava
 * Date: 4/7/2018
 * Time: 11:13 PM
 */

namespace Pharmacie\ProduitBundle\Entity;


class TestRest
{
    public $name;

    public $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}