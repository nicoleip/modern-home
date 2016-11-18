<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 17.11.2016 г.
 * Time: 14:35
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Products:products.html.twig');
    }
}
