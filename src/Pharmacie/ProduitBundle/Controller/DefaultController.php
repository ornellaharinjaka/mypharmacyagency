<?php

namespace Pharmacie\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieProduitBundle:Default:index.html.twig');
    }
}
