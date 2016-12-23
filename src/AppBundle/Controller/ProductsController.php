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
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{ 

    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Products:products.html.twig');
    }

    public function fetchProductDataAction(Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('AppBundle:Products');

        $productData = $repository->findAll();
        return new Response(json_encode($productData));
    }

    public function fetchSelectedProductDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('AppBundle:Products');

        $productId = $request->get("id");
        $productData = $repository->findOneBy(array('id' => $productId));
        return new Response(json_encode($productData));
    }
}
