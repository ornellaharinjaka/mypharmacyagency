<?php

namespace Pharmacie\PersonnageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmaciePersonnageBundle:Default:index.html.twig');
    }
}
