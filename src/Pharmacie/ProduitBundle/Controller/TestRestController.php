<?php
/**
 * Created by Jean Nica RALAVA.
 * User: jralava
 * Date: 4/7/2018
 * Time: 11:11 PM
 */

namespace Pharmacie\ProduitBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Pharmacie\ProduitBundle\Entity\TestRest;
class TestRestController extends Controller
{
    /**
     * @Route("/test-rest", name="test_rest")
     * @Method({"GET"})
     */
    public function getTestRestAction(Request $request)
    {
        return new JsonResponse([
            new TestRest("Tour Eiffel", "5 Avenue Anatole France, 75007 Paris"),
            new TestRest("Mont-Saint-Michel", "50170 Le Mont-Saint-Michel"),
            new TestRest("Château de Versailles", "Place d'Armes, 78000 Versailles"),
        ]);
    }
}