<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 21.10.2016 г.
 * Time: 10:51
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BrandsController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Brands:brands.html.twig');
    }
}
